<?php
namespace app\lib\exception;

class ParameterException extends BaseException
{

    public $code = '400';

    public $msg = '您输入的参数有误';

    public $errorcode = 10000;
}

