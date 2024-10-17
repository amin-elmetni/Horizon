<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\ClassModel;
use App\Models\TeacherClass;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TeacherContoller extends Controller
{
    public function updateTeacherClass(TeacherClass $teacherClass, Request $request)
    {
        $incomingFields = $request->validate([
            'amount' => 'required',
        ]);

        $teacherClass->update($incomingFields);

        return back()->with('success', 'Teacher class amount updated successfully');
    }
    public function showActiveClassesPage(Teacher $teacher)
    {
        $teacherClasses = $teacher->teacherClasses()->orderBy('updated_at', 'desc')->paginate(4);
        return view('teacherViews.teacherActiveClasses', [
            'teacher' => $teacher,
            'teacherClasses' => $teacherClasses,
        ]);
    }
    public function updateTeacher(Teacher $teacher, Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', Rule::unique('teacher')->ignore($teacher->teacherID, 'teacherID')],
            'email' => 'required',
            'phoneNumber' => 'required',
            'gender' => 'required'
        ]);

        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['phoneNumber'] = strip_tags($incomingFields['phoneNumber']);

        $teacher->update($incomingFields);

        return redirect("/teacherProfile/$teacher->name/personalInfos")->with('success', 'Teacher updated successfully');
    }
    public function showPersonalInfosPage(Teacher $teacher)
    {
        return view('teacherViews.teacherPersonalInfos', [
            'teacher' => $teacher,
        ]);
    }

    public function deleteTeacher(Teacher $teacher)
    {
        $teacher->delete();
        return back()->with('success', 'Teacher deleted successfully.');
    }
    public function createNewTeacher(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required|unique:teacher,name',
            'email' => 'email',
            'phoneNumber' => 'required',
            'gender' => 'required',
        ]);

        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['phoneNumber'] = strip_tags($incomingFields['phoneNumber']);

        Teacher::create($incomingFields);

        return back()->with('success', 'New teacher successfully created');
    }
    public function showTeachersPage()
    {
        $teachers = Teacher::orderBy('updated_at', 'desc')->paginate(5);
        $totalTeachers = Teacher::all()->count();

        return view('teacherViews.teachers', [
            'teachers' => $teachers,
            'totalTeachers' => $totalTeachers,
        ]);
    }

    public function deleteTeacherFromClass(TeacherClass $teacherClass)
    {
        $teacherClass->delete();
        return back()->with('success', 'Teacher deleted successfully from the class.');
    }

    public function addTeacherToClass(Request $request)
    {
        $incomingFields = $request->validate([
            'classID' => 'required',
            'teacherID' => 'required',
            'amount' => 'required',
        ]);

        $classID = $incomingFields['classID'];
        $teacherID = $incomingFields['teacherID'];
        $amount = $incomingFields['amount'];

        $teacher = Teacher::where('teacherID', $teacherID)->first();
        $class = ClassModel::where('classID', $classID)->first();
        $isTeacherEnrolled = TeacherClass::where('classID', $classID)->where('teacherID', $teacherID)->get()->isNotEmpty();

        if ($amount < 0) {
            return back()->with('failure', "The amount $amount is invalid.");
        }

        if ($isTeacherEnrolled) {
            return back()->with('failure', "The teacher $teacher->name already enroled in $class->className class.");
        }

        TeacherClass::create($incomingFields);

        return back()->with('success', "$teacher->name successfully enroled in $class->className class");
    }
}
