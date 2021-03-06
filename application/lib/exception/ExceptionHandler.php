<?php
namespace app\lib\exception;

use think\exception\Handle;
use think\Exception;
use think\Request;
use think\Log;

class ExceptionHandler extends Handle
{

    private $code;

    private $msg;

    private $errorcode;

    public function render(\Exception $e)
    {
        if ($e instanceof BaseException) {
            // 如果是自定义的异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorcode = $e->errorcode;
        } else {

            if (config('app_debug')) {
                return parent::render($e);
            } else {
                $this->code = 500;
                $this->msg = '服务器内部错误，不能反馈给客户端';
                $this->errorcode = 999;
                $this->recordErrorLog($e);
            }
        }
        $request = Request::instance();
        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorcode,
            'url' => $request->url()
        ];
        return json($result, $this->code);
    }

    private function recordErrorLog(\Exception $e)
    {
        Log::init([
            'type' => 'File',
            'path' => LOG_PATH,
            'level' => [
                'error'
            ]
        ]);
        Log::record($e->getMessage(), 'error');
    }
}

