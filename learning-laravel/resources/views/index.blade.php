@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Winthrop Medical Practices</h1>
    </div>

    @if ($medicalpractices->isEmpty())
        <p>You haven't added any yet</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Specialty</th>
                    <th>Location</th>
                    <th>Website</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
            @foreach($medicalpractices as medicalpractice)
            <tr>
                <td>{{ $medicalpractice->title }}</td>
                <td>{{ $medicalpractice->specialty }}</td>
                <td>{{ $medicalpractice->location }}</td>
                <td>{{ $medicalpractice->website }}</td>
                <td>{{ $medicalpractice->phone }}</td>
                <td><a href="{{ action ('MedicalPracticesController@edit', $medicalpractice->id) }}" class="btn btn-success">Edit</a> </td>
                <td><a href="{{ action ('MedicalPracticesController@delete', $medicalpractice->id) }}" class="btn btn-warning">Delete</a> </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@stop