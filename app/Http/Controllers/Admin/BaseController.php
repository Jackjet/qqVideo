<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 2017/8/26
 * Time: 17:08
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Traits\AjaxRespone;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    use AjaxRespone;
}