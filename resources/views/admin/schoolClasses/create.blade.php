@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Dodaj nową klasę
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.school-classes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Wprowadź nazwę</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
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