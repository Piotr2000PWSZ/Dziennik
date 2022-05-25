@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Informacje o klasie
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
                            {{ $schoolClass->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Klasa
                        </th>
                        <td>
                            {{ $schoolClass->name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-success" href="{{ route('admin.school-classes.index') }}">
                    Wróć do listy klas
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#class_users" role="tab" data-toggle="tab">
                Pokaż członków klasy
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="class_users">
            @includeIf('admin.schoolClasses.relationships.classUsers', ['users' => $schoolClass->classUsers])
        </div>
    </div>
</div>

@endsection