@extends('layouts.app')
@section('title')
{{config('app.name')}} - Dashboard
@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>{{config('app.name')}}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<section class="content">
    @include('components.messages')
    @if (admin())
        @include('admin')
    @else
        @include('student')
    @endif
</section>
@endsection

@section('script')
@if (admin())
<script>
var routes = {
    'task': '{{url("/tasks")}}'
}
</script>
<script src="{{asset('js/admin.js')}}"></script>
@else
<script>
    $('#certificate_list').DataTable();
    var groupColumn = 2;
    $('#receipt_list').DataTable({
        "columnDefs": [
            { "visible": false, "targets": groupColumn }
        ],
        "order": [[ groupColumn, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;

            api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="9"><strong>'+group+'</strong></td></tr>'
                    );

                    last = group;
                }
            } );
        }
    });
</script>
@endif
@endsection
