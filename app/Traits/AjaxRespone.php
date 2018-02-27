<?php
/**
 * Created by IntelliJ IDEA.
 * User: feizhugame
 * Date: 2017/11/23
 * Time: 17:02
 */

namespace App\Traits;


trait AjaxRespone
{
    /**
     * 错误提示
     * @param $message
     * @return $this
     */
    public function errorRender($message){
        return response()->json([
            'message' => 'error',
            'errors' => [
                'error' => [$message]
            ]
        ])->setStatusCode(403);
    }

    /**
     * 返回成功的数据
     * @param $message
     * @param array $data
     * @param int $code
     * @return $this
     */
    public function successRender($message, $data = [], $code = 0){
        return response()->json([
            'message' => $message,
            'data' => $data,
            'code' => $code
        ])->setStatusCode(200);
    }

    /**
     * 后台分页
     * @param $total
     * @param $item
     * @return $this
     */
    public function paginateLayui($total, $item){
        return response()->json([
            'count' => $total,
            'data' => $item,
            'code' => 0
        ])->setStatusCode(200);
    }

    /**
     * 上传附件信息 for layui
     * @param $msg
     * @param $data
     * @return $this
     */
    public function uploadLayui($msg, $data)
    {
        return response()->json([
            'code' => '0',
            'msg' => $msg,
            'data' => $data
        ])->setStatusCode(200);
    }
}