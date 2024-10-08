<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function showClassesPage(Request $request)
    {
        $totalClasses = DB::table('class')->count();
        $totalGrades = DB::table('class')->distinct()->count('grade');

        return view('classes', [
            'totalClasses' => $totalClasses,
            'totalGrades' => $totalGrades
        ]);
    }
}
