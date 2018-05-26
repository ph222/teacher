<?php
namespace app\api\controller\v2;

class Teacherbase
{

    /*
     * @Explain： 获取制定id的teacherbase信息
     * @url: /teacherbase/:id
     * @http: get
     * @id: teacherbasede id号
     */
    public function getTeacherbase($id)
    {
        // (new IDMustBePositiveInt())->goCheck();

        // $teacherbase = TeacherBaseModel::getTeacherBase($id);
        // $teacherbase->hidden([
        // 'tel',
        // 'phone',
        // 'workstart',
        // 'Qid'
        // ]);
        // $c = config('setting.img_perfix');

        // if (! $teacherbase) {
        // throw new TeacherBaseMissException();
        // }
        return '这是v2的版本';
    }
}

