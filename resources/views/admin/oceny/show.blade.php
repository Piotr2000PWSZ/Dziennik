@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
    Dane osobowe użytkownika
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">

            </div>
            <table class="table table-bordered table-striped">
            <thead>
                    <tr>
                        <th width="200">
                        Przedmiot

                        </th>
                        

                        
                        <th>
                        Oceny
                        
                    
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach($przedmioty as $key => $przedmiot)
                        
                        
                       <tr>
                           
                        <td>
                          {{ $przedmiot->nazwa ?? '' }}
                        </td>
                        <td>
                            

                        </td>
                        
                    </tr>
                </tbody>
                @endforeach
            </table>
            <div class="form-group">
                <a class="btn btn-danger" href="{{ route('admin.users.index') }}">
                    Powrót
                </a>
            </div>
        </div>
    </div>
</div>


@endsection