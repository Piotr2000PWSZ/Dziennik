@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edycja klasy
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.school-classes.update", [$schoolClass->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">Podaj nową nazwę klasy</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $schoolClass->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Zapisz
                </button>
            </div>
        </form>
    </div>
</div>



@endsection