@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Informacje o roli
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Id
                        </th>
                        <td>
                            {{ $role->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tytuł
                        </th>
                        <td>
                            {{ $role->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Uprawnienia
                        </th>
                        <td>
                            @foreach($role->permissions as $key => $permissions)
                                <span class="label label-info">{{ $permissions->title }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-success" href="{{ route('admin.roles.index') }}">
                    Powrót do listy
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Informacje o użytkownikach
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#roles_users" role="tab" data-toggle="tab">
                Kliknij aby zobaczyć
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="roles_users">
            @includeIf('admin.roles.relationships.rolesUsers', ['users' => $role->rolesUsers])
        </div>
    </div>
</div>

@endsection