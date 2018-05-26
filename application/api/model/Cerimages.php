<?php
namespace app\api\model;

use think\Model;

class Cerimages extends BaseModel
{

    protected $hidden = [
        'cerid'
    ];

    public function getUrlAttr($value)
    {
        return $this->perfiximgurl($value);
    }
}

