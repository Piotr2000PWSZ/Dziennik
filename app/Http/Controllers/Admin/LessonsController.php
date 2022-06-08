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

        return view('admin.lessons.index', compact('lessons', 'przedmiot'));
    }

    public function create()
    {
        abort_if(Gate::denies('lesson_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $classes = SchoolClass::all()->pluck('name', 'id')->prepend('Wybierz', '');
        $lessons = Lesson::all();
        $teachers = User::all()->pluck('name', 'id')->prepend('Wybierz', '');
        $przedmioty = Przedmioty::all();

        //$teachers = DB::select('SELECT * FROM users u JOIN role_user r ON u.id=r.user_id WHERE r.role_id=3');
        

        return view('admin.lessons.create', compact('classes', 'teachers', 'przedmioty', 'lessons'));
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

        return view('admin.lessons.edit', compact('classes', 'teachers', 'lesson'));
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

        $lesson->delete();

        return back();
    }

    public function massDestroy(MassDestroyLessonRequest $request)
    {
        Lesson::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
