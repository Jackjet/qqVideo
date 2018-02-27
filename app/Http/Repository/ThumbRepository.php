<?php
/**
 * Created by IntelliJ IDEA.
 * User: tingfeng
 * Date: 2018/2/27
 * Time: 20:58
 */

namespace App\Http\Repository;


use App\Models\Thumb;

class ThumbRepository extends BaseRepository
{
    public function __construct(Thumb $model)
    {
        parent::__construct($model);
    }
}