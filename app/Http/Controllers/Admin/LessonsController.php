<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLessonRequest;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Requests\UpdateLessonRequest;
use App\Lesson;
use App\SchoolClass;
use App\User;
use App\Przedmioty;
use App\Sala;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class LessonsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('lesson_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lessons = Lesson::all();
        $przedmiot = Przedmioty::all();
        $schoolClass = SchoolClass::all();   //- Query builder

        // $lessons = DB::connection('mysql')->select('SELECT * FROM lessons');
        // $przedmiot = DB::connection('mysql')->select('SELECT * FROM przedmioty');
        // $schoolClass = DB::connection('mysql')->select('SELECT * FROM school_classes');
        // RAW

        return view('admin.lessons.index', compact('lessons', 'przedmiot','schoolClass'));
    }

    public function create()
    {
        abort_if(Gate::denies('lesson_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $classes = SchoolClass::all()->pluck('name', 'id')->prepend('Wybierz', '');

        //$classes = DB::connection('mysql')->select('SELECT * FROM school_classes');

        //$schoolClass = DB::connection('mysql')->select('SELECT * FROM school_classes');

        $lessons = Lesson::all();
        //$lessons = DB::connection('mysql')->select('SELECT * FROM lessons');
        $teachers = User::all()->pluck('name', 'id')->prepend('Wybierz', '');
        $przedmioty = Przedmioty::all();
        $sala_lekcyjna = Sala::all();

        //$teachers = DB::connection('mysql')->select('SELECT name,id FROM users u JOIN role_user r ON u.id=r.user_id WHERE r.role_id=3');


        return view('admin.lessons.create', compact('classes', 'teachers', 'przedmioty', 'lessons', 'sala_lekcyjna'));
    }

    public function store(StoreLessonRequest $request)
    {
        $lesson = Lesson::create($request->all());

        return redirect()->route('admin.lessons.index');
    }

    public function edit(Lesson $lesson)
    {
        abort_if(Gate::denies('lesson_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $classes = SchoolClass::all()->pluck('name', 'id')->prepend('Wybierz', '');

        $teachers = User::all()->pluck('name', 'id')->prepend('Wybierz', '');

        $lesson->load('class', 'teacher');

        $przedmiot = Przedmioty::all()->pluck('nazwa','id')->prepend('Wybierz', '');

        return view('admin.lessons.edit', compact('classes', 'teachers', 'lesson', 'przedmiot'));
    }

    public function update(UpdateLessonRequest $request, Lesson $lesson)
    {
        $lesson->update($request->all());

        return redirect()->route('admin.lessons.index');
    }

    public function show(Lesson $lesson)
    {
        abort_if(Gate::denies('lesson_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lesson->load('class', 'teacher');

        return view('admin.lessons.show', compact('lesson'));
    }

    public function destroy(Lesson $lesson)
    {
        abort_if(Gate::denies('lesson_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$lesson->delete();  //--> ORM

        

        

        DB::connection('mysql')->delete(DB::raw("UPDATE lessons SET deleted_at=NOW() WHERE id= '" . $lesson->id . "' ; "));

        //----------> WERSJA RAW

        


        
        return back();
    }

    public function massDestroy(MassDestroyLessonRequest $request)
    {
        Lesson::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
