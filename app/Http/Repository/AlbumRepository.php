<?php
/**
 * Created by IntelliJ IDEA.
 * User: tingfeng
 * Date: 2018/2/27
 * Time: 20:47
 */

namespace App\Http\Repository;


use App\Models\Album;
use Illuminate\Support\Facades\DB;

class AlbumRepository extends BaseRepository
{
    const StatusIng = 1;
    const StatusEnd = 2;

    const Qq_Type_Open = 2;
    const Qq_Type_Vip = 7;
    public function __construct(Album $model)
    {
        parent::__construct($model);
    }

    /**
     * 根据类型ID获取数据
     * @param $id
     * @param int $limit
     * @return mixed
     */
    public function getByTypeId($id, $limit = 10){
        $result = $this->getModel()->where('type_id', $id)
            ->limit($limit)->orderBy('id', 'desc')->get();
        return $result;
    }

    /**
     * 随机标题
     * @return mixed
     */
    public function getRandTitle()
    {
        $randTitle = $this->getModel()->orderBy(DB::Raw('rand()'))
            ->limit(1)->value('title');
        return $randTitle;
    }

    /**
     * 获取随机数据
     * @param $limit 返回条数
     * @return mixed
     */
    public function getRandData($limit)
    {
        $randLimit = $this->getModel()->orderBy(DB::Raw('rand()'))
            ->limit($limit)->get();
        return $randLimit;
    }

    /**
     * 删除空格
     * @param $str 字符串
     * @return mixed
     */
    public function trimall($str){
        $qian = array(" ","　","\t","\n","\r");
        $hou = array("","","","","");
        return str_replace($qian,$hou,$str);
    }
}