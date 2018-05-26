<?php
namespace app\api\model;

use app\api\model\BaseModel;

class teacherbase extends BaseModel
{

    public function qtype()
    {
        return $this->hasMany('qtype', 'Qid', 'Qid');
    }

    public function cbackbone()
    {
        return $this->belongsTo('Cbackbone', 'idcard', 'id');
    }

    public static function getTeacherBase($id)
    {
        $teacherbase = self::with([
            'qtype',
            'cbackbone',
            'cbackbone.images'
        ])->find($id);
        return $teacherbase;
    }

    public static function getMultiTeachersBase($id)
    {
        $teacherbase = self::with([
            'qtype',
            'cbackbone',
            'cbackbone.images'
        ])->select($id);
        return $teacherbase;
    }
}

