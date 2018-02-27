<?php
/**
 * Created by IntelliJ IDEA.
 * User: tingfeng
 * Date: 2018/2/27
 * Time: 20:41
 */

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;

class BaseController extends Controller
{
    protected $agent;
    public function __construct()
    {
        $this->agent = new Agent();
    }
}