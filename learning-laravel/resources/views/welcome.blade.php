@extends('layouts.home')

@section('content')
    <div class="page-header">
        <h1 class="text-center">Welcome</h1>
    </div>
    <div class="text-center">
        <a href="{{ URL::to('/medical-practices/') }}" class="btn btn-lg btn-info">Winthrop Medical Practices</a>
    </div>
    @stop