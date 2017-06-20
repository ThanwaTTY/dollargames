@extends('frompage')

@section('content')
    
    <form action="/register" method="POST">
        {{ csrf_field() }}
        <input type="text" name="username" class="form-control" placeholder="username" value="{{ old('first_name') }}">
        <p>{{ $errors->first('username') }}</p>
        <input type="text" name="password" class="form-control" placeholder="password" value="{{ old('last_name') }}">
        <p>{{ $errors->first('password') }}</p>
        <input type="text" name="name" class="form-control" placeholder="name" value="{{ old('last_name') }}">
        <p>{{ $errors->first('name') }}</p>

        <input type="radio" name="status" value="User"> User
        <input type="radio" name="status" value="Operater"> Operater <br>

        <input type="submit" class="btn btn-primary" value="Save">
        <input type="reset" class="btn btn-danger" value="Cancel">
    </form>
@endsection