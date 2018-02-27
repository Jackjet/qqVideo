<?php
/**
 * Created by IntelliJ IDEA.
 * User: tingfeng
 * Date: 2017/12/12
 * Time: 17:10
 */

namespace App\Traits;


class SystemEncrypt
{
    /**
     * js解密方式
     * @param $enPassword
     * @return mixed
     */
    public static function jsDecrypt($enPassword){
        $pi_key = file_get_contents(storage_path('pem/rsa_system_encrypt_private_key.pem'));
        openssl_private_decrypt(base64_decode($enPassword), $decrypted,$pi_key);
        return $decrypted;
    }

    /**
     * js加密方式
     * @param $enPassword
     * @return string
     */
    public static function jsEncrypt($enPassword){
        $pub_key = file_get_contents(storage_path('pem/rsa_system_encrypt_public_key.pem'));
        openssl_public_encrypt($enPassword, $encrypt_data,$pub_key);
        $encrypt_data = base64_encode($encrypt_data);
        return $encrypt_data;
    }
}