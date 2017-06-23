@extends('frompage')

@section('content')
<div class="container">
  This is Profile
    <p>ID : {{ $users->id }}</p>
    <p>username : {{ $users->username }}</p>
    <p>password : {{ $users->password }}</p>
    <p>name : {{ $users->name }}</p>
    <p>status : {{ $users->status }}</p>
    <p>balance : {{ $users->balance }}</p>
    </div>
    
@endsection