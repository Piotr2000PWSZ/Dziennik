@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Obecność
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            Nazwa
                        </th>
                        <th>
                            Status obecności
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
                                {{ $user->id ?? '' }}
                            </td>
                            <td>
                                {{ $user->name ?? '' }}
                            </td>
                            <td>
                            <form>
                            <input type="checkbox" id="present" name="present" value="Present">
                            <label for="present"> Obecny</label><br>

                            <input type="checkbox" id="late" name="late" value="Late">
                            <label for="present"> Spóźniony</label><br>

                            <input type="checkbox" id="absent" name="absent" value="Absent">
                            <label for="present"> Nieobecny</label><br>
                            </form>


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
