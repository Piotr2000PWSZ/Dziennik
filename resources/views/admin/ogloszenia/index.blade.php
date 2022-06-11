@extends('layouts.admin')
@section('content')
@can('announcement_create')
<div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.ogloszenia.create") }}">
                Dodaj ogłoszenie
            </a>
        </div>
</div>
@endcan
<div class="card">
    <div class="card-header">
        Ogłoszenia
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="20">

                        </th>
                        <th>
                            Id
                        </th>
                        <th>
                            Temat
                        </th>
                        <th>
                            Opis
                        </th>
                        <th>
                            Data utworzenia
                        </th>
                        <th>
                            &nbsp;
                        </th>


                    </tr>
                </thead>
                <tbody>
                @foreach($ogloszenia as $key => $ogloszenie)
                <tr data-entry-id="{{ $ogloszenie->id }}">
                <td>

                </td>
                <td>
                    {{ $ogloszenie->id ?? '' }}
                </td>
                <td>
                    {{ $ogloszenie->temat ?? '' }}

                </td>
                <td>
                    {{ $ogloszenie->wiadomosc ?? '' }}

                </td>
                <td>
                    {{ $ogloszenie->created_at ?? '' }}

                </td>
                <td>


                </td>

                            

                </tr>
                @endforeach     
                    
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
@endsection
