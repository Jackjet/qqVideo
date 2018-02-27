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
    const Type_Movie = 1;
    const Type_Tv = 2;
    const Type_Dm = 3;

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

    public function getVideoParentType()
    {
        
    }
}