<?php
/**
 * Created by IntelliJ IDEA.
 * User: feizhugame
 * Date: 2017/9/5
 * Time: 12:59
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AlbumController extends BaseController
{
    /**
     * 查询视图
     */
    public function index()
    {}

    /**
     * 提交查询
     * @param Request $request
     */
    public function submitQuery(Request $request)
    {}

    /**
     * 创建
     */
    public function create()
    {}

    /**
     * 保存
     * @param Request $request
     */
    public function store(Request $request)
    {}

    /**
     * 编辑
     * @param $id
     */
    public function edit($id)
    {}

    /**
     * 更新
     * @param $id
     * @param Request $request
     */
    public function update($id, Request $request)
    {}

    /**
     * 删除
     * @param $id
     */
    public function destroy($id)
    {}

    /**
     * 查看
     * @param $id
     */
    public function show($id)
    {}
}