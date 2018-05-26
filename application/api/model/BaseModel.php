<?php
namespace app\api\model;

use think\Model;

class BaseModel extends Model
{

    protected function perfiximgurl($value)
    {
        return config('setting.img_perfix') . $value;
    }
}

