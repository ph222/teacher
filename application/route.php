<?php
use think\Route;

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// Route::rule('nihao/:id', 'appraise/Test2/nihao');
Route::get('api/:version/teacherbase/:id', 'api/:version.Teacherbase/getTeacherbase');
Route::get('api/:version/multiteachersbase', 'api/:version.MultiTeachersBase/getMultiTeachersBase');
Route::get('api/:version/teacherinfo/:id', 'api/:version.TeacherInfo/getTeacherInfo');
Route::get('api/:version/teachersinfo', 'api/:version.TeacherInfo/getMoreTeacherInfo');
