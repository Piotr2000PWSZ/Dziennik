<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\SchoolClass;
use App\Ocena;
use App\Przedmioty;

class OcenyController extends Controller
{
    

    public function index(Request $request)
    {

        $users = User::when($request->role, function ($query) use ($request) {
                $query->whereHas('roles', function ($query) use ($request) {
                    $query->whereId($request->role);
                });
            })
            ->get();

        return view('admin.oceny.index', compact('users'));
    }
    
   
        public function show(Ocena $users)
    {
        

        //$users->load('roles', 'class', 'teacherLessons');
        $users = User::All();
        $przedmioty = Przedmioty::All();

        return view('admin.oceny.show', compact('users', 'przedmioty'));
    }
    
}
