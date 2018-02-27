<?php
/**
 * Created by IntelliJ IDEA.
 * User: tingfeng
 * Date: 2018/2/27
 * Time: 20:52
 */

namespace App\Http\Repository;


use App\Models\Video;

class VideoRepository extends BaseRepository
{
    public function __construct(Video $model)
    {
        parent::__construct($model);
    }
}