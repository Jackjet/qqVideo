<?php
/**
 * Created by IntelliJ IDEA.
 * User: tingfeng
 * Date: 2018/2/27
 * Time: 20:59
 */

namespace App\Http\Repository;


use App\Models\User;

class UserRepository extends BaseRepository
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * 根据账号获取用户信息
     * @param $name
     * @return mixed
     * author tingfeng <wuzunlin@foxmail.com>
     * created time: 2017/9/5 10:29
     */
    public function getByName($name)
    {
        $result = $this->getModel()->where('name', $name)->first();
        return $result;
    }

    /**
     * 根据邮箱获取用户信息
     * @param $email
     * @return mixed
     */
    public function getUserByEmail($email)
    {
        $result = $this->getModel()->where('email', $email)->first();
        return $result;
    }
}