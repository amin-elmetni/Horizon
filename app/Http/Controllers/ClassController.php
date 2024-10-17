<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function modifyClass(ClassModel $class, Request $request)
    {
        $incomingFields = $request->validate([
            'className' => 'required',
            'description' => 'required',
            'grade' => 'required',
            'price' => ['required', 'min:0']
        ]);

        $incomingFields['className'] = strip_tags($incomingFields['className']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);

        $class->update($incomingFields);
        return back()->with('success', 'Class updated successfully');
    }
    public function deleteClass(ClassModel $class)
    {
        $class->delete();
        return back()->with('success', 'Class deleted successfully.');
    }

    public function createNewClass(Request $request)
    {
        $incomingFields = $request->validate([
            'className' => ['required', 'unique:class,className'],
            'description' => 'required',
            'grade' => 'required',
            'price' => ['required', 'min:0']
        ]);

        $incomingFields['className'] = strip_tags($incomingFields['className']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);

        ClassModel::create($incomingFields);

        return back()->with('success', 'New class successfully created');
    }
    public function showClassesPage()
    {
        $classes = ClassModel::orderBy('updated_at', 'desc')->paginate(5);
        $teachers = Teacher::all();
        $totalClasses = ClassModel::all()->count();
        $totalGrades = ClassModel::distinct()->count('grade');

        return view('classViews.classes', [
            'classes' => $classes,
            'teachers' => $teachers,
            'totalClasses' => $totalClasses,
            'totalGrades' => $totalGrades,
        ]);
    }
}
