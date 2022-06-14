<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Attendance;
use Illuminate\Support\Facades\DB;


class AttendanceController extends Controller
{
    public function index()
    {
        $users=User::all();

        $users = DB::connection('mysql')->select('SELECT * FROM users');
        return view('admin.attendance.index', compact('users'));
    }

    public function show(SchoolClass $schoolClass)
    {

        $schoolClass->load('classLessons', 'classUsers');

        return view('admin.schoolClasses.show', compact('schoolClass'));
    }

    public function insert()
    {
        $Attendance = new Attendance();
        $Attendance->insert();
        echo "Rekord został dodany";

    }

    public function edit()
    {
        $Attendance = new Attendance();
        $Attendance->edit();
        echo "Edycja rekordu";

    }

    public function read()
    {
        $Attendance = new Attendance();
        $date = $Attendance->read();
        var_dump($data);

    }

    public function delete()
    {
        $Attendance = new Attendance();
        $Attendance->delete();
        echo "Rekord został usunięty";

    }


}
