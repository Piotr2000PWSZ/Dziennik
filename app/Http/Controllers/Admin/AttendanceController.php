<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class AttendanceController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('admin.attendance.index', compact('users'));
    }


}
