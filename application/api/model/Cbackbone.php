<?php
namespace app\api\model;

use think\Model;

class Cbackbone extends Model
{

    protected $hidden = [
        'id',
        'imgid'

    ];

    public function images()
    {
        return $this->belongsTo('Cerimages', 'imgid', 'cerid');
    }
}

