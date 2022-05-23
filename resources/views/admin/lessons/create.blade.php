@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Utwórz nową lekcję
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.lessons.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="class_id">Klasa</label>
                <select class="form-control select2 {{ $errors->has('class') ? 'is-invalid' : '' }}" name="class_id" id="class_id" required>
                    @foreach($classes as $id => $class)
                        <option value="{{ $id }}" {{ old('class_id') == $id ? 'selected' : '' }}>{{ $class }}</option>
                    @endforeach
                </select>
                @if($errors->has('class'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="teacher_id">Nauczyciel</label>
                <select class="form-control select2 {{ $errors->has('teacher') ? 'is-invalid' : '' }}" name="teacher_id" id="teacher_id" required>
                    @foreach($teachers as $id => $teacher)
                        <option value="{{ $id }}" {{ old('teacher_id') == $id ? 'selected' : '' }}>{{ $teacher }}</option>
                    @endforeach
                </select>
                @if($errors->has('teacher'))
                    <div class="invalid-feedback">
                        {{ $errors->first('teacher') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="weekday">Dzień tygodnia</label>
                <input class="form-control {{ $errors->has('weekday') ? 'is-invalid' : '' }}" type="number" name="weekday" id="weekday" value="{{ old('weekday') }}" step="1" required>
                @if($errors->has('weekday'))
                    <div class="invalid-feedback">
                        {{ $errors->first('weekday') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="start_time">Czas rozpoczęcia</label>
                <input class="form-control lesson-timepicker {{ $errors->has('start_time') ? 'is-invalid' : '' }}" type="text" name="start_time" id="start_time" value="{{ old('start_time') }}" required>
                @if($errors->has('start_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_time') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="end_time">Czas zakończenia</label>
                <input class="form-control lesson-timepicker {{ $errors->has('end_time') ? 'is-invalid' : '' }}" type="text" name="end_time" id="end_time" value="{{ old('end_time') }}" required>
                @if($errors->has('end_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_time') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Utwórz
                </button>
            </div>
        </form>
    </div>
</div>



@endsection