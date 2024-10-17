<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentContoller extends Controller
{

    public function deleteStudentFromClass(StudentClass $studentClass)
    {
        $studentClass->delete();
        return back()->with('success', 'Student deleted successfully from the class.');
    }

    public function updateStudentClass(StudentClass $studentClass, Request $request)
    {
        $incomingFields = $request->validate([
            'discount' => 'required',
        ]);

        $studentClass->update($incomingFields);

        return back()->with('success', 'Student class discount updated successfully');
    }
    public function showActiveClassesPage(Student $student)
    {
        $studentClasses = $student->studentClasses()->orderBy('updated_at', 'desc')->paginate(4);
        return view('studentViews.studentActiveClasses', [
            'student' => $student,
            'studentClasses' => $studentClasses,
        ]);
    }
    public function updateStudent(Student $student, Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', Rule::unique('student')->ignore($student->studentID, 'studentID')],
            'email' => 'required',
            'phoneNumber' => 'required',
            'gender' => 'required'
        ]);

        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['phoneNumber'] = strip_tags($incomingFields['phoneNumber']);

        $student->update($incomingFields);

        return redirect("/studentProfile/$student->name/personalInfos")->with('success', 'Student updated successfully');
    }

    public function showPersonalInfosPage(Student $student)
    {
        return view('studentViews.studentPersonalInfos', [
            'student' => $student,
        ]);
    }
    public function deleteStudent(Student $student)
    {
        $student->delete();
        return back()->with('success', 'Student deleted successfully.');
    }
    public function createNewStudent(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required|unique:student,name',
            'email' => 'email',
            'phoneNumber' => 'required',
            'gender' => 'required',
        ]);

        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['phoneNumber'] = strip_tags($incomingFields['phoneNumber']);

        Student::create($incomingFields);

        return back()->with('success', 'New student successfully created');
    }
    public function showStudentsPage()
    {
        $students = Student::orderBy('updated_at', 'desc')->paginate(5);
        $totalStudents = Student::all()->count();

        return view('studentViews.students', [
            'students' => $students,
            'totalStudents' => $totalStudents,
        ]);
    }
}
