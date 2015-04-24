@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h5 class="text-center">Add, edit or remove any affiliated Winthrop University medical practices.</h5>
    </div>

    @if ( !$medicalpractices->count() )
    <div class="text-center">
        <p>You haven't added any yet.</p>
        <a href="{{ URL::to('/medical-practices/create') }}" class="btn btn-sm btn-success"><span class="icon glyphicon glyphicon-plus"></span> Medical Practice</a>
    </div>

    @else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Specialty</th>
                <th>Website</th>
                <th>Phone Number</th>
                <th colspan="3">Options</th>
            </tr>
            </thead>
            <tbody>
            @foreach($medicalpractices as $key => $value)
            <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->specialty }}</td>
            <td>{{ $value->website }}</td>
            <td>{{ $value->phone }}</td>

            <td><a href="{{ URL::to('/medical-practices/' . $value->slug) }}" class="btn btn-sm btn-info">View</a></td>
            <td><a href="{{ URL::to('/medical-practices/' . $value->slug . '/edit') }}" class="btn btn-sm btn-success">Edit</a></td>
            <td><a href="{{ URL::to('/medical-practices/' . $value->slug . '/delete') }}" class="btn btn-sm btn-danger">Delete</a></td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @endif

@stop