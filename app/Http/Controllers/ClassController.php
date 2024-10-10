<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function showClassesPage(Request $request)
    {
        $classes = ClassModel::orderBy('updated_at', 'desc')->paginate(5);
        $totalClasses = $classes->count();
        $totalGrades = ClassModel::distinct()->count('grade');

        return view('classes', [
            'classes' => $classes,
            'totalClasses' => $totalClasses,
            'totalGrades' => $totalGrades,
        ]);
    }
}
