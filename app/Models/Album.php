<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Album extends Base
{
    use SoftDeletes;

    /**
     * 获取解析类型名称
     * @return mixed
     */
    public function getParseTypeNameAttribute()
    {
        $name = Type::where('id', $this->parse_type_id)->value("name");
        return $name;
    }

    /**
     * 获取分类名称
     * @return mixed
     */
    public function getTypeNameAttribute()
    {
        $name = Type::where('id', $this->type_id)->value("name");
        return $name;
    }

    /**
     * 获取状态名称
     * @return string
     */
    public function getStatusNameAttribute()
    {
        switch ($this->status){
            case 1:
                $val = "正常";
                break;
            case 2:
                $val = "禁止";
                break;
            default:
                $val = "未知";
                break;
        }
        return $val;
    }

    /**
     * 获取更新状态名称
     * @return string
     */
    public function getUpdateStatusNameAttribute()
    {
        switch ($this->update_status){
            case 1:
                $val = "连载中";
                break;
            case 2:
                $val = "完结";
                break;
            case 3:
                $val = "预告";
                break;
            default:
                $val = "未知";
                break;
        }
        return $val;
    }
}
