<?php
/**
 * Created by IntelliJ IDEA.
 * User: tingfeng
 * Date: 2017/12/13
 * Time: 15:14
 */

namespace App\Traits;


use Illuminate\Support\Facades\Log;

class OtherValidator
{
    /**
     * 加密验证实现required
     * @param $attribute
     * @param $value
     * @return bool
     */
    public function encryptRequired($attribute, $value)
    {
        $attributedec = SystemEncrypt::jsDecrypt($value);
        if(!filled($attributedec)) return false;
        return true;
    }

    /**
     * 加密验证实现length验证
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return bool
     */
    public function encryptLength($attribute, $value, $parameters)
    {
        $attributedec = SystemEncrypt::jsDecrypt($value);
        if(mb_strlen($attributedec) < $parameters[0]) return false;
        return true;
    }

    /**
     * 加密验证实现between验证
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return bool
     */
    public function encryptBetween($attribute, $value, $parameters)
    {
        $attributedec = SystemEncrypt::jsDecrypt($value);
        if(mb_strlen($attributedec) < $parameters[0]) return false;
        if(mb_strlen($attributedec) > $parameters[1]) return false;
        return true;
    }

    /**
     * 加密验证实现confirmed验证
     * @param $attribute
     * @param $value
     * @return bool
     */
    public function encryptConfirmed($attribute, $value)
    {
        $comfirmed = $attribute.'_confirmation';
        $requestParams = request()->all();
        if(!isset($requestParams[$comfirmed])) return false;
        $attributedec = SystemEncrypt::jsDecrypt($value);
        $confirmedec = SystemEncrypt::jsDecrypt($requestParams[$comfirmed]);
        return $attributedec === $confirmedec;
    }
}