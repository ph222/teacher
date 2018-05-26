<?php
namespace app\lib\exception;

use app\lib\exception\BaseException;

class TeacherInfoMissException extends BaseException
{

    public $code = 500;

    public $msg = '指定教师信息未找到！';

    public $errorcode = 40000;
}

