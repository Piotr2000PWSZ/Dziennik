<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySchoolClassRequest;
use App\Http\Requests\StoreSchoolClassRequest;
use App\Http\Requests\UpdateSchoolClassRequest;
use App\SchoolClass;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class SchoolClassesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('school_class_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $schoolClasses = SchoolClass::all();

        return view('admin.schoolClasses.index', compact('schoolClasses'));
    }

    public function create()
    {
        abort_if(Gate::denies('school_class_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.schoolClasses.create');
    }

    public function store(StoreSchoolClassRequest $request)
    {
        $schoolClass = SchoolClass::create($request->all());

        

        return redirect()->route('admin.school-classes.index');
    }

    public function edit(SchoolClass $schoolClass)
    {
        abort_if(Gate::denies('school_class_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.schoolClasses.edit', compact('schoolClass'));
    }

    public function update(UpdateSchoolClassRequest $request, SchoolClass $schoolClass)
    {
        $schoolClass->update($request->all());

        return redirect()->route('admin.school-classes.index');
    }

    public function show(SchoolClass $schoolClass)
    {
        abort_if(Gate::denies('school_class_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $schoolClass->load('classLessons', 'classUsers');

        return view('admin.schoolClasses.show', compact('schoolClass'));
    }

    public function destroy(SchoolClass $schoolClass)
    {
        abort_if(Gate::denies('school_class_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$schoolClass->delete();

        DB::connection('mysql')->delete(DB::raw("UPDATE school_classes SET deleted_at=NOW() WHERE id= '" . $schoolClass->id . "' ; "));

        return back();
    }

    public function massDestroy(MassDestroySchoolClassRequest $request)
    {
        SchoolClass::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function get_1klasa_Attribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }

    public function get_2klasa_Attribute()
    {
        return $this->roles()->where('id', 2)->exists();
    }

    public function get_3klasa_Attribute()
    {
        return $this->roles()->where('id', 3)->exists();
    }

    public function get4_klasaAttribute()
    {
        return $this->roles()->where('id', 4)->exists();
    }
    public function get_5klasa_Attribute()
    {
        return $this->roles()->where('id', 5)->exists();
    }

    public function get_6klasa_Attribute()
    {
        return $this->roles()->where('id', 6)->exists();
    }

    public function get_7klasa_Attribute()
    {
        return $this->roles()->where('id', 7)->exists();
    }

    public function get8_klasaAttribute()
    {
        return $this->roles()->where('id', 8)->exists();
    }

}
