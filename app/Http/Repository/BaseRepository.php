<?php
/**
 * Created by IntelliJ IDEA.
 * User: tingfeng
 * Date: 2018/2/27
 * Time: 20:48
 */

namespace App\Http\Repository;

class BaseRepository
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param Model $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }
}