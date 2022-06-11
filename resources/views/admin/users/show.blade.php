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
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $user->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nazwa
                        </th>
                        <td>
                            {{ $user->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            E-mail
                        </th>
                        <td>
                            {{ $user->email }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            Rola
                        </th>
                        <td>
                            @foreach($user->roles as $key => $roles)
                                <span class="label label-info">{{ $roles->title }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Klasa
                        </th>
                        <td>
                            {{ $user->class->name ?? '' }}
                        </td>

                        <tr>
                        <th>
                            ID Rodzica
                        </th>
                        <td>
                            {{ $user->parent_id ?? ''}}
                        </td>
                    </tr>

                    </tr>
                </tbody>
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