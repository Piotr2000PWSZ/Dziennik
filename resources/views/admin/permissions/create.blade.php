@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Tworzenie nowego uprawnienia
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.permissions.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">Nazwa uprawnienia</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
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