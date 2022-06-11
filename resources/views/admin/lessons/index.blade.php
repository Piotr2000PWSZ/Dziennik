@extends('layouts.admin')
@section('content')
@can('lesson_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.lessons.create") }}">
                Utwórz lekcję
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        Informacje o lekcjach
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Lesson">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            Klasa
                        </th>
                        <th>
                            Nauczyciel
                        </th>
                        <th>
                            Dzień tygodnia
                        </th>
                        <th>
                            Tydzień
                        </th>
                        <th>
                            Godzina rozpoczęcia
                        </th>
                        <th>
                            Godzina zakończenia
                        </th>
                        <th>
                            Obecność
                        </th>
                        <th>
                            Przedmiot
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lessons as $key => $lesson)
                        <tr data-entry-id="{{ $lesson->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $lesson->id ?? '' }}
                            </td>
                            <td>
                                {{ $lesson->class->name ?? '' }}
                            </td>
                            <td>
                                {{ $lesson->teacher->name ?? '' }}
                            </td>
                            <td>
                                {{ $lesson->weekday ?? '' }}
                            </td>
                            <td>
                                {{ $lesson->week_number ?? '' }}
                            </td>
                            
                            <td>
                                {{ $lesson->start_time ?? '' }}
                            </td>
                            <td>
                                {{ $lesson->end_time ?? '' }}
                            </td>
                            <td>
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.attendance.index', $lesson->id) }}">
                                Lista obecności
                            </a>

                            

                        


                            </td>
                            <td>
                                {{ $lesson->przedmiot->nazwa ?? ''}}
                            </td>
                            <td>
                                @can('lesson_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.lessons.show', $lesson->id) }}">
                                        Zobacz
                                    </a>
                                @endcan

                                @can('lesson_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.lessons.edit', $lesson->id) }}">
                                        Edytuj
                                    </a>
                                @endcan

                                @can('lesson_delete')
                                    <form action="{{ route('admin.lessons.destroy', $lesson->id) }}" method="POST" onsubmit="return confirm('Jesteś pewny?');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="Usuń">
                                    </form>
                                @endcan

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
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('lesson_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.lessons.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('Jesteś pewny?')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Lesson:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection