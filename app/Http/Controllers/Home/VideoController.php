<?php

namespace App\Http\Controllers\Home;

use App\Http\Repository\AlbumRepository;
use App\Http\Repository\TypeRepository;
use App\Models\Album;
use App\Models\Thumb;
use App\Models\Video;
use App\Models\Type;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends BaseController
{

    public function __construct(AlbumRepository $albumRepository, TypeRepository $typeRepository)
    {
        parent::__construct();
        $videoTypes = $typeRepository->getVideoParentType();
        $title = $albumRepository->getRandTitle();
        view()->share('data', [
            'videoTypes' => $videoTypes,
            'title' => substr($title, 2),
            'isMobile' => $this->agent->isMobile(),
            'weLoveEdTime' => round((strtotime(date('Y-m-d'))-strtotime('2017-08-28'))/86400),
            'weMetEdTime' => round((strtotime(date('Y-m-d'))-strtotime('2017-08-21'))/86400),
        ]);
    }

    /**
     * 首页
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request){
        $info = Album::getCategoryDatas(4);
        $infoPc = Album::getCategoryDatas(8);
        return $this->view($request,'index', compact('info',  'infoPc'));
    }

    /**
     * 分类
     * @param Request $request
     * @param $id
     * @param int $page
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function category(Request $request, $id, $page = 1){
        $request->merge(['page' => $page]);
        $list = Album::where('type_id', $id)->orderBy('id', 'desc')->paginate(16);
        if(is_null($list)) return response('404');
        $cateName = Type::getNameById($id);
        return $this->view($request, 'category', compact('list', 'id', 'cateName', 'page'));
    }

    /**
     * 内容页
     * @param Request $request
     * @param $id
     * @param int $page
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function info(Request $request, $id, $infoId = null)
    {
        $info = Album::find($id);
        if(is_null($info)) return response('404');
        $info['typeName'] = Type::where('id', $info->type_id)->value('name');
        if(!is_null($infoId)){
            $data = Video::where('id', $infoId)->first();
            if(is_null($data)){
                return $this->view($request, 'loading');
            }
            $sourceUrl = $data->source_url;
        }else{
            $data = Video::where('albums_id', $id)->orderBy(DB::Raw('title', 'asc'))->first();
            if(is_null($data)){
                return $this->view($request, 'loading');
            }
            $sourceUrl = $data->source_url;
            $infoId = $data->id;
        }
        if(is_null($sourceUrl)){
            return $this->view($request, 'loading');
        }
        $videos = Video::where('albums_id', $id)->orderBy(DB::Raw('title', 'asc'))->get();
        $description = $info->descript;//"【".$info->title."】".(($info->type_id != 1)?("第".$data->title."集，"):'');

        $rand = Album::getRand(4);
        return $this->view(
            $request, 'info',
            compact('info', 'videos', 'sourceUrl', 'infoId','description', 'rand')
        );
    }

    /**
     * 搜索
     * @param Request $request
     * @param string $title
     * @param int $page
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function search(Request $request, $title = '', $page = 1){
        $title = $request->has('title')?$request->input('title'):$title;
        $request->merge(['page' => $page]);
        $list = Album::where('title', 'like', '%'.$title.'%')
            ->orderBy('id', 'asc')->paginate(16);
        if(is_null($list)) return response('404');
        return $this->view($request, 'search', compact('list', 'title'));
    }

    /**
     * 获取缩略图
     * @param $id 数据ID
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function getThumb($id){
        $info = Thumb::where('albums_id', $id)->first();
        if(is_null($info)) return response('404');
        $client = new Client();
        $file = $client->get($info->thumb, [
            'verify' => false
        ]);
        return response($file->getBody()->getContents())
            ->header('Content-Type', "image/png")
            ->header('Cache-Control', "private, max-age=10800, pre-check=10800")
            ->header('Pragma', "private")
            ->header('Expires', date(DATE_RFC822,strtotime(" 2 day")));
    }

    /**
     * 手机自适应模板
     * @param string $template
     * @param array $data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    private function view(Request $request, $template = '', $data = []){
        if(!$request->ajax()){
            if($this->agent->isMobile()) {
                $template = 'http_m_video.' . $template;
            }else{
                $template = 'http_video.' . $template;
            }
        }else{
            if($this->agent->isMobile()){
                $template = 'm_video.'.$template;
            }else{
                $template = 'video.'.$template;
            }
        }
        return view($template, $data);
    }
}
