<?php
namespace app\lib\exception;

class TeacherBaseMissException extends BaseException
{

    public $code = 500;

    public $msg = '教师信息未找到！';

    public $errorcode = 40000;
}

