@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Lista użytkowników
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        
                        <th>
                            Nazwa
                        </th>

                        <th>
                            Klasa
                        </th>
                        
                        
                        
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                        <tr data-entry-id="{{ $user->id }}">
                            <td>

                            </td>
                           
                            <td>
                                {{ $user->name ?? '' }}
                            </td>
                            <td>
                                {{ $user->class->name ?? '' }}
                            </td>


                            <td>
                                
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.oceny.show', $user->id) }}">
                                        Oceny
                                    </a>
                               




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
