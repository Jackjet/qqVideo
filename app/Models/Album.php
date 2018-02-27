<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Album extends Base
{
    use SoftDeletes;
    /**
     * 视频来源
     * @return string
     * author tingfeng <wuzunlin@foxmail.com>
     * created time: 2017/9/5 13:39
     */
    public function getParseTypeNameAttribute()
    {
        switch ($this->parse_type){
            case 'qq':
                $val = '腾讯视频';
                break;
            case 'youku':
                $val = '优酷';
                break;
            default:
                $val = '未知';
                break;
        }
        return $val;
    }
}
