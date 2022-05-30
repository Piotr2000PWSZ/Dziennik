@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Informacje o uprawnieniu
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
                            {{ $permission->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nazwa
                        </th>
                        <td>
                            {{ $permission->title }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-success" href="{{ route('admin.permissions.index') }}">
                    Powrót do listy
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Role do których uprawnienie jest przypisane
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#permissions_roles" role="tab" data-toggle="tab">
                Zobacz
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="permissions_roles">
            @includeIf('admin.permissions.relationships.permissionsRoles', ['roles' => $permission->permissionsRoles])
        </div>
    </div>
</div>

@endsection