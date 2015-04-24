@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h5 class="text-center">Add a medical practice.</h5>
    </div>

    {!! Form::model(new App\MedicalPractice, ['route' => ['medical-practices.store']]) !!}

    <div class="container">
        <div class="col-sm-8 col-centered">

            @include('partials.form')

            <div class="force-center">
                {!! Form::submit('Add Medical Practice', array('class' => 'btn btn-primary')) !!}
            </div>

        </div>
    </div>
    {!! Form::close() !!}

@stop
