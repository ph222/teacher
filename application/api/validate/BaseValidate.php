<?php
/*
 * @Author：任逍遥
 * @Email：9094274@qq.com
 * @Date：2018年2月16日
 *
 */
namespace app\api\validate;

use think\Validate;
use think\Request;
use app\lib\exception\ParameterException;

class BaseValidate extends Validate
{

    public function goCheck()
    {
        /*
         * 获取http传递过来的所有参数
         * 对参数进行校验
         */
        $request = Request::instance();
        $params = $request->param();
        $result = $this->batch()->check($params);
        if (! $result) {
            $error = new ParameterException([
                'msg' => $this->error
            ]);

            throw $error;
        }
    }

    protected function ispositiveinteger($value, $rule = '', $data = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            // if ($value) {
            return true;
        } else {
            return false;
            // return $field . '必须是正整数';
        }
    }
}

