<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ogloszenia;
use App\Http\Requests\MassDestroyOgloszeniaRequest;
use App\Http\Requests\StoreOgloszeniaRequest;
use App\Http\Requests\UpdateOgloszeniaRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;


class OgloszeniaController extends Controller
{
    public function index()
    {
        $ogloszenia = Ogloszenia::all();
        return view('admin.ogloszenia.index', compact('ogloszenia'));
    }

    function save(Request $req)
    {
        print_r($req->input());

    }



    public function create()
    {
        return view('admin.ogloszenia.create');
    }

    public function store(StoreOgloszeniaRequest $request)
    {
        $ogloszenia = Ogloszenia::create($request->all());

        return redirect()->route('admin.ogloszenia.index');
    }

    // public function edit(Ogloszenia $ogloszenia)
    // {

    //     return view('admin.ogloszenia.edit', compact('ogloszenia'));
    // }

    // public function update(UpdateOgloszeniaRequest $request, Ogloszenia $ogloszenia)
    // {
    //     $ogloszenia->update($request->all());

    //     return redirect()->route('admin.ogloszenia.index');
    // }

    // public function show(Ogloszenia $ogloszenia)
    // {

    //     $ogloszenia->load('classLessons', 'classUsers');

    //     return view('admin.schoolClasses.show', compact('schoolClass'));
    // }

    // public function destroy(Ogloszenia $ogloszenia)
    // {

    //     $ogloszenia->delete();

    //     return back();
    // }

    // public function massDestroy(MassDestroyOgloszeniaRequest $request)
    // {
    //     Ogloszenia::whereIn('id', request('ids'))->delete();

    //     return response(null, Response::HTTP_NO_CONTENT);
    // }



}
