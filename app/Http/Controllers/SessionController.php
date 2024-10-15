<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Session;
use App\Models\Teacher;
use App\Models\TeacherClass;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function deleteSession(Session $session)
    {
        $session->delete();
        return back()->with('success', 'Session deleted successfully.');
    }
    public function addNewSession(Request $request)
    {
        $incomingFields = $request->validate([
            'classID' => 'required',
            'teacherID' => 'required',
            'classroom' => 'required',
            'day' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
        ]);

        $incomingFields['classroom'] = strip_tags($incomingFields['classroom']);


        $day = $incomingFields['day'];
        $startTime = Carbon::parse($incomingFields['startTime']);
        $endTime = Carbon::parse($incomingFields['endTime']);
        $classID = $incomingFields['classID'];
        $teacherID = $incomingFields['teacherID'];
        $classroom = $incomingFields['classroom'];
        $teacherClass = TeacherClass::where('classId', $classID)->where('teacherId', $teacherID)->first();
        $teacherClassID = $teacherClass->id;

        $teacher = Teacher::find($teacherID)->name;

        $sessionsOnSameDay = Session::where('teacherClassID', $teacherClassID)->where('day', $day)->get();

        $sessionsOnSameClassroom = Session::where('classroom', $classroom)->where('day', $day)->get();

        if ($startTime >= $endTime) {
            return back()->with('failure', 'Start time must be greater than end time.');
        }

        foreach ($sessionsOnSameDay as $session) {
            if (($startTime->between($session->startTime, $session->endTime) || $endTime->between($session->startTime, $session->endTime)) ||
                ($$session->startTime->between($startTime, $endTime) ||
                    $$session->endTime->between($startTime, $endTime))
            )
                return back()->with('failure', "The teacher $teacher has already a session during this time.");
        }

        foreach ($sessionsOnSameClassroom as $session) {
            if (($startTime->between($session->startTime, $session->endTime) || $endTime->between($session->startTime, $session->endTime)) ||
                ($$session->startTime->between($startTime, $endTime) ||
                    $$session->endTime->between($startTime, $endTime))
            )
                return back()->with('failure', "The classroom $classroom is already reserved during this time.");
        }

        $sessionData = [
            'teacherClassID' => $teacherClassID,
            'classroom' => $classroom,
            'day' => $day,
            'startTime' => $startTime,
            'endTime' => $endTime,
        ];

        Session::create($sessionData);

        return back()->with('success', 'New session successfully created');
    }
}
