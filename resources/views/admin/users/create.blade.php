@extends('layouts.admin')


@section('content')

    <h1>Create User</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUserController@store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('status', 'Stauts:') !!}
            {!! Form::select('status', array(0 => 'Not Active', 1 => 'Active'), 0, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::text('role_id', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>  
    {!! Form::close() !!}



@stop