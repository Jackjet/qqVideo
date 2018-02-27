<?php
/**
 * Created by IntelliJ IDEA.
 * User: tingfeng
 * Date: 2018/2/27
 * Time: 21:13
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Repository\UserRepository;
use App\Http\Requests\UserLoginRequest;
use App\Traits\AjaxRespone;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AjaxRespone;

    /**
     * 登录
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * 登录提交信息验证
     * @param UserLoginRequest $request
     * @return $this
     * author tingfeng <wuzunlin@foxmail.com>
     * created time: 2017/11/23 17:40
     */
    public function loginVerify(UserLoginRequest $request, UserRepository $userRepository)
    {
        $authResult = Auth::guard('user')->attempt($request->only(['email', 'password']));
        if(!$authResult){
            return $this->errorRender("邮箱或密码错误");
        }
        $user = $userRepository->getUserByEmail($request->input('email'));
        Auth::guard('user')->login($user);
        return $this->successRender("登录成功");
    }
}