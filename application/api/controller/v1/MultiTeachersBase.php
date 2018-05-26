<?php
namespace app\api\controller\v1;

use app\api\validate\IDCollection;
use app\api\model\teacherbase as TeacherBaseModel;
use app\lib\exception\TeacherBaseMissException;

class MultiTeachersBase
{

    /*
     * @url: /multiteachersbase?ids=id1,id2,id3......
     * @return一组multiteachersbase模型
     */
    public function getMultiTeachersBase($ids = '')
    {
        (new IDCollection())->goCheck();
        // $ids = explode(',', $ids);
        $result = TeacherBaseModel::getMultiTeachersBase($ids);
        if (! $result) {
            throw new TeacherBaseMissException();
        }
        return $result;
    }
}

