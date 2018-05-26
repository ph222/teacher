<?php
/*
 * @Explain： 获取制定teacher信息
 * @url；/getteacherinfo/:id 获取指定id教师基本信息
 * @url；/getteachersinfo/:id 获取指定类别教师的基本信息
 * @http: get
 * @id: teacherinfo id号
 */
namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\api\model\teacherbase as TeacherInfoModel;
use app\api\validate\IDCollection;
use app\lib\exception\TeacherInfoMissException;

class TeacherInfo
{

    public function getTeacherInfo($id)
    {
        /*
         * @Explain： 获取制定id教师信息
         * @url: /getteacherinfo/:id
         * @http: get
         * @id: teacherinfo id号
         */
        print_r('获取制定id教师信息');
        $validate = new IDMustBePositiveInt();
        $validate->goCheck();
        $teacherinfo = TeacherInfoModel::getTeacherbase($id);
        if (! $teacherinfo) {
            throw new TeacherInfoMissException();
        }
        $teacherinfo->hidden([
            'tel',
            'phone',
            'workstart',
            'Qid'
        ]);
        return $teacherinfo;
    }

    public function getMoreTeacherInfo($ids = '')
    { /*
       * @Explain： 获取某一类教师信息
       * @url: /getteacherinfo/:id
       * @http: get
       * @id: teacherinfo id号
       */
        print_r('获取某一类教师信息');
        $validate = new IDCollection();
        $validate->goCheck();
        $ids = explode(',', $ids);
        $teachersinfo = TeacherInfoModel::getMultiTeachersBase($ids);
        if (! $teachersinfo) {
            throw new TeacherInfoMissException();
        }

        return $teachersinfo;
    }
}

