@extends('layouts.admin')


@section('content')

    <h1>Edit User</h1>

    <div class="row">

        <div class="col-sm-3">
            <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
        </div>
    
        <div class="col-sm-9">
    
            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUserController@update', $user->id], 'files'=>true]) !!}
           
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('is_active', 'Stauts:') !!}
                    {!! Form::select('is_active', array(0 => 'Not Active', 1 => 'Active'), null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('role_id', 'Role:') !!}
                    {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('photo_id', 'File:') !!}
                    {!! Form::file('photo_id', null,  ['class'=>'form-control']) !!}
                </div>  
                <div class="form-group">
                    {!! Form::submit('Edit User', ['class'=>'btn btn-primary']) !!}
                </div>  
            {!! Form::close() !!}
        </div>
        
    </div>
    
    <div class="row">
        @if(count($errors) > 0)

        <div class="alert alert-danger">

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{$error}}</li>
                    
                @endforeach

            </ul>
            
        </div>

    @endif
    </div>
    

@stop