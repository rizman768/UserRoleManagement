@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Log Activities</h2>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
    <tr>
    <th>No</th>
    <th>User</th>
    <th>Action</th>
    <th>Resource</th>
    <th>Timestamps</th>
    </tr>
    @foreach ($data as $key => $log)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $log->user }}</td>
        <td>{{ $log->action }}</td>
        <td>{{ $log->resource }}</td>
        @if($log->action == "Create")
            <td>{{ $log->created_at }}</td>
        @else
            <td>{{ $log->updated_at }}</td>
        @endif
    </tr>
    @endforeach
    </table>
    {!! $data->render() !!}
@endsection