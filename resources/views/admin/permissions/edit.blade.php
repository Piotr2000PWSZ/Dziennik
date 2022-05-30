@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Edycja uprawnienia
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.permissions.update", [$permission->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">Nazwa</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $permission->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">Zmodyfikuj nazwę</span>
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