<?php
/**
 * Created by IntelliJ IDEA.
 * User: tingfeng
 * Date: 2017/12/15
 * Time: 22:50
 */

namespace App\Traits;


trait Tools
{
    /**
     * 金额格式化
     * @param $value
     * @return string
     */
    public static function amountForm($value)
    {
        return number_format($value, 2, '.', '');
    }
}