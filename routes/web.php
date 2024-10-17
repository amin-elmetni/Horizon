<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentContoller;
use App\Http\Controllers\TeacherContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("login");
});

// * Class related routes
Route::get("/classes", [ClassController::class, "showClassesPage"]);
Route::post("/createClass", [ClassController::class, "createNewClass"]);
Route::delete("/deleteClass/{class}", [ClassController::class, "deleteClass"]);
Route::put("/modifyClass/{class}", [ClassController::class, "modifyClass"]);

// * Session related routes
Route::post('/addSession', [SessionController::class, "addNewSession"]);
Route::delete("/deleteSession/{session}", [SessionController::class, "deleteSession"]);

// * Teacher related routes
Route::post('/addTeacherToClass', [TeacherContoller::class, "addTeacherToClass"]);
Route::delete("/deleteTeacherFromClass/{teacherClass}", [TeacherContoller::class, "deleteTeacherFromClass"]);

Route::get("/teachers", [TeacherContoller::class, "showTeachersPage"]);
Route::post("/createTeacher", [TeacherContoller::class, "createNewTeacher"]);
Route::delete("/deleteTeacher/{teacher}", [TeacherContoller::class, "deleteTeacher"]);
Route::get("/teacherProfile/{teacher:name}/personalInfos", [TeacherContoller::class, "showPersonalInfosPage"]);
Route::get("/teacherProfile/{teacher:name}/activeClasses", [TeacherContoller::class, "showActiveClassesPage"]);
Route::put("/updateTeacher/{teacher}", [TeacherContoller::class, "updateTeacher"]);
Route::put("/updateTeacherClass/{teacherClass}", [TeacherContoller::class, "updateTeacherClass"]);

// * Student related routes
Route::get("/students", [StudentContoller::class, "showStudentsPage"]);
Route::post("/createStudent", [StudentContoller::class, "createNewStudent"]);
Route::delete("/deleteStudent/{student}", [StudentContoller::class, "deleteStudent"]);
Route::get("/studentProfile/{student:name}/personalInfos", [StudentContoller::class, "showPersonalInfosPage"]);
Route::get("/studentProfile/{student:name}/activeClasses", [StudentContoller::class, "showActiveClassesPage"]);
Route::put("/updateStudent/{student}", [StudentContoller::class, "updateStudent"]);
Route::put("/updateStudentClass/{studentClass}", [StudentContoller::class, "updateStudentClass"]);
Route::delete("/deleteStudentFromClass/{studentClass}", [StudentContoller::class, "deleteStudentFromClass"]);
