@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Informacje o lekcji
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $lesson->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Klasa
                        </th>
                        <td>
                            {{ $lesson->class->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nauczyciel
                        </th>
                        <td>
                            {{ $lesson->teacher->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Dzień tygodnia
                        </th>
                        <td>
                            {{ $lesson->weekday }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Czas rozpoczęcia
                        </th>
                        <td>
                            {{ $lesson->start_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Czas zakończenia
                        </th>
                        <td>
                            {{ $lesson->end_time }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-success" href="{{ route('admin.lessons.index') }}">
                    Wróć do widoku lekcji
                </a>
            </div>
        </div>
    </div>
</div>



@endsection