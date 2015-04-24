<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', Input::old('slug'), array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('specialty', 'Specialty') !!}
    {!! Form::text('specialty', Input::old('specialty'), array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('website', 'Website') !!}
    {!! Form::text('website', Input::old('website'), array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('phone', 'Phone Number') !!}
    {!! Form::text('phone', Input::old('phone'), array('class' => 'form-control')) !!}
</div>