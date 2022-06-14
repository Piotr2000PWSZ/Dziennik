<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\StudInsert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StudInsertController extends Controller
{
    /**
     * 
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
        return view('ogloszenia.add');
     }
}
