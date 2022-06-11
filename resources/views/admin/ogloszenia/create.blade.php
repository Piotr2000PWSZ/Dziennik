@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Utwórz nowe ogłoszenie
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.ogloszenia.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="temat">Wprowadź nazwę</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="temat" id="temat" value="{{ old('temat', '') }}" required>
                @if($errors->has('temat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('temat') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="wiadomosc">Wprowadź treść ogłoszenia</label>
                <input class="form-control {{ $errors->has('wiadomosc') ? 'is-invalid' : '' }}" type="text" name="wiadomosc" id="wiadomosc" value="{{ old('wiadomosc', '') }}" required>
                @if($errors->has('wiadomosc'))
                    <div class="invalid-feedback">
                        {{ $errors->first('wiadomosc') }}
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