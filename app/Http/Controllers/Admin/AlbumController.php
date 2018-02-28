<?php
/**
 * Created by IntelliJ IDEA.
 * User: feizhugame
 * Date: 2017/9/5
 * Time: 12:59
 */

namespace App\Http\Controllers\Admin;

use App\Http\Repository\AlbumRepository;
use App\Http\Repository\TypeRepository;
use Illuminate\Http\Request;

class AlbumController extends BaseController
{
    /**
     * 查询视图
     */
    public function index(TypeRepository $typeRepository)
    {
        $typeRepository->parentId = 0;
        $typeRepository->typeCode = $typeRepository::Code_Video;
        $videoTypes = $typeRepository->getType();
        $typeRepository->parentId = 0;
        $typeRepository->typeCode = $typeRepository::Code_Parse;
        $parseTypes = $typeRepository->getType();
        return view('admin.album.index', compact('videoTypes', 'parseTypes'));
    }

    /**
     * 提交查询
     * @param Request $request
     * @param AlbumRepository $albumRepository
     * @return $this
     */
    public function submitQuery(Request $request, AlbumRepository $albumRepository)
    {
        if($request->filled("title")){
            $albumRepository->title = $request->input("title");
        }
        if($request->filled("typeId")){
            $albumRepository->typeId = $request->input("typeId");
        }
        if($request->filled("parseTypeId")){
            $albumRepository->parseTypeId = $request->input("parseTypeId");
        }
        if($request->filled("updateStatus")){
            $albumRepository->updateStatus = $request->input("updateStatus");
        }
        if($request->filled("status")){
            $albumRepository->status = $request->input("status");
        }
        $limit = $request->filled("limit")?(int)$request->input("limit"):10;
        $albums = $albumRepository->getList()->paginate($limit);
        $respone = [];
        foreach ($albums as $album){
            $respone[] = [
                'title' => $album->title,
                'thumb' => '',
                'typeName' => $album->type_name,
                'parseTypeName' => $album->parse_type_name,
                'hit' => $album->hit,
                'sort' => $album->sort,
                'updateStatus' => $album->update_status_name,
                'status' => $album->status_name,
                'createdAt' => $album->created_at->toDateTimeString(),
                'updatedAt' => $album->updated_at->toDateTimeString(),
                'editUrl' => route('admin.album.edit', $album->id),
                'delUrl' => route('admin.album.destroy', $album->id),
            ];
        }
        return $this->paginateLayui($albums->total(), $respone);
    }

    /**
     * 创建
     */
    public function create(TypeRepository $typeRepository)
    {
        $typeRepository->parentId = 0;
        $typeRepository->typeCode = $typeRepository::Code_Video;
        $videoTypes = $typeRepository->getType();
        $typeRepository->parentId = 0;
        $typeRepository->typeCode = $typeRepository::Code_Parse;
        $parseTypes = $typeRepository->getType();
        return view('admin.album.create', compact('videoTypes', 'parseTypes'));
    }

    /**
     * 保存
     * @param Request $request
     * @param AlbumRepository $albumRepository
     * @return $this
     */
    public function store(Request $request, AlbumRepository $albumRepository)
    {
        $albumRepository->title = $request->input("title");
        $albumRepository->subTitle = $request->input("subTitle");
        $albumRepository->typeId = $request->input("typeId");
        $albumRepository->parseTypeId = $request->input("parseTypeId");
        $albumRepository->totalNum = $request->input("totalNum");
        $albumRepository->year = $request->input("year");
        $albumRepository->aera = $request->input("aera");
        $albumRepository->language = $request->input("language");
        $albumRepository->descript = $request->input("descript");
        $albumRepository->remark = $request->input("remark");
        $albumRepository->updateTimeStr = $request->input("updateTimeStr");
        $albumRepository->grade = $request->input("grade");
        $albumRepository->sort = $request->input("sort");
        $albumRepository->updateStatus = $request->input("updateStatus");
        $albumRepository->status = $request->input("status");
        if(!$albumRepository->create()){
            return $this->errorRender("新增失败");
        }
        return $this->successRender("新增成功");
    }

    /**
     * 编辑
     * @param $id
     * @param TypeRepository $typeRepository
     * @param AlbumRepository $albumRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id, TypeRepository $typeRepository, AlbumRepository $albumRepository)
    {
        $albumRepository->id = $id;
        $info = $albumRepository->find();
        $typeRepository->parentId = 0;
        $typeRepository->typeCode = $typeRepository::Code_Video;
        $videoTypes = $typeRepository->getType();
        $typeRepository->parentId = 0;
        $typeRepository->typeCode = $typeRepository::Code_Parse;
        $parseTypes = $typeRepository->getType();
        return view('admin.album.edit', compact('videoTypes', 'parseTypes', 'info'));
    }

    /**
     * 更新
     * @param $id
     * @param Request $request
     * @param AlbumRepository $albumRepository
     * @return $this
     */
    public function update($id, Request $request, AlbumRepository $albumRepository)
    {
        $albumRepository->id = $id;
        $albumRepository->title = $request->input("title");
        $albumRepository->subTitle = $request->input("subTitle");
        $albumRepository->typeId = $request->input("typeId");
        $albumRepository->parseTypeId = $request->input("parseTypeId");
        $albumRepository->totalNum = $request->input("totalNum");
        $albumRepository->year = $request->input("year");
        $albumRepository->aera = $request->input("aera");
        $albumRepository->language = $request->input("language");
        $albumRepository->descript = $request->input("descript");
        $albumRepository->remark = $request->input("remark");
        $albumRepository->updateTimeStr = $request->input("updateTimeStr");
        $albumRepository->grade = $request->input("grade");
        $albumRepository->sort = $request->input("sort");
        $albumRepository->updateStatus = $request->input("updateStatus");
        $albumRepository->status = $request->input("status");
        if(!$albumRepository->save()){
            return $this->errorRender("更新失败");
        }
        return $this->successRender("更新成功");
    }

    /**
     * 删除
     * @param $id
     * @param AlbumRepository $albumRepository
     * @return $this
     */
    public function destroy($id, AlbumRepository $albumRepository)
    {
        $albumRepository->id = $id;
        $info = $albumRepository->find();
        if($info->delete()){
            return $this->successRender("删除成功");
        }
        return $this->errorRender("删除失败");
    }

    /**
     * 查看
     * @param $id
     */
    public function show($id)
    {}
}