<?php
/**
 * Created by IntelliJ IDEA.
 * User: tingfeng
 * Date: 2018/2/27
 * Time: 20:51
 */

namespace App\Http\Repository;


use App\Models\Type;

class TypeRepository extends BaseRepository
{
    public $parentId = null;
    public $typeCode = null;
    const Code_Video = "video";
    const Code_Parse = "parse";
    const Code_Article = "article";

    public function __construct(Type $model)
    {
        parent::__construct($model);
    }

    /**
     * 根据ID获取名称
     * @param $id
     * @return mixed
     */
    public function getNameById($id)
    {
        $result = $this->getModel()->find($id);
        return $result->name;
    }

    /**
     * 获取视频父级数据
     * @return mixed
     */
    public function getType()
    {
        $result = $this->getModel()->where(function ($query){
            if(!is_null($this->parentId)){
                $query->where('parent_id', $this->parentId);
            }
            if(!is_null($this->typeCode)){
                $query->where('type_code', $this->typeCode);
            }
        })->get();
        return $result;
    }
}