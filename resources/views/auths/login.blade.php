@extends('frompage')

@section('content')
 <div class="col-md-4 col-md-offset-4">
    <h1>This is Login</h1>
    <br> 
    <form action="/login" method="POST">
        {{ csrf_field() }}
        <input type="text" name="username" class="form-control" placeholder="username">
        <input type="password" name="password" class="form-control" placeholder="Password">
        
        <center><br>    
        <input type="submit" class="btn btn-primary" value="Login">
        <input type="reset" class="btn btn-danger" value="Cancel">
        </center>
    </form>
</div>
@endsection