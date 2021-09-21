@extends('layouts.admin')


@section('content')

    <h1>Users</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th>Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Active</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            </tr>
        </thead>
        <tbody>

        @if($users) 
    
            @foreach($users as $user)

                <tr>
                    <td>{{$user->id}}</td>
                    <td> <img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role ? $user->role['name'] : "User has no role"}}</td> 
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td> 
                </tr>

            @endforeach

        @endif 
        </tbody>
    </table>

@stop