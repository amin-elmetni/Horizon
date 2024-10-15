<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\SessionController;
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
Route::post('/addTeacherToClass', [TeacherContoller::class, "addNewTeacherToClass"]);
Route::delete("/deleteTeacherFromClass/{teacherClass}", [TeacherContoller::class, "deleteTeacherFromClass"]);
Route::get("/teachers", [TeacherContoller::class, "showTeachersPage"]);
Route::post("/createTeacher", [TeacherContoller::class, "createNewTeacher"]);
Route::delete("/deleteTeacher/{teacher}", [TeacherContoller::class, "deleteTeacher"]);
