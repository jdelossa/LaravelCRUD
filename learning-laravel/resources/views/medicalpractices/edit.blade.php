@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h5 class="text-center">Edit {{ $medicalpractice->name }}.</h5>
    </div>
    <!-- if there are creation errors, they will show here -->
    {!! HTML::ul($errors->all()) !!}
    {!! Form::model($medicalpractice, ['method' => 'PATCH', 'route' => ['medical-practice.update', $medicalpractice->slug]]) !!}
    <div class="container">
        <div class="col-sm-8 col-centered">

            @include('partials.form')

            <div class="force-center">
                {!! Form::submit('Edit Medical Practice', array('class' => 'btn btn-primary')) !!}
            </div>
        </div>
    </div>

    {!! Form::close() !!}
@endsection