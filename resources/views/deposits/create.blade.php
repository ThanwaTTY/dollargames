@extends('frompage')

@section('content')
<table class="table .table-bordered">
    <form action="/deposit" method="POST">
        {{ csrf_field() }}
        <input type="text" name="username" class="form-control" placeholder="username" value="{{ old('username') }}">
        <p>{{ $errors->first('first_name') }}</p>

        
            <div class="input-group">
                <div class="input-group-addon">฿</div>
                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
           </div>
        
        <p>{{ $errors->first('last_name') }}</p>

        <input type="text" name="bankdeposit" class="form-control" placeholder="bankdeposit" value="{{ old('bankdeposit') }}">
        <p>{{ $errors->first('bankdeposit') }}</p>

        <input type="text" name="accountnumberdeposit" class="form-control" placeholder="accountnumberdeposit" value="{{ old('accountnumberdeposit') }}">
        <p>{{ $errors->first('accountnumberdeposit') }}</p>

        <input type="text" name="accontnamedeposit" class="form-control" placeholder="accontnamedeposit" value="{{ old('accontnamedeposit') }}">
        <p>{{ $errors->first('accontnamedeposit') }}</p>

        <input type="text" name="datetime" class="form-control" placeholder="datetime" value="{{ old('datetime') }}">
        <p>{{ $errors->first('datetime') }}</p>

        <input type="text" name="channeldeposit" class="form-control" placeholder="channeldeposit" value="{{ old('channeldeposit') }}">
        <p>{{ $errors->first('channeldeposit') }}</p>
        
        <input type="text" name="tel" class="form-control" placeholder="tel" value="{{ old('tel') }}">
        <p>{{ $errors->first('tel') }}</p>
        
        <textarea class="form-control" rows="3" name="opinion" placeholder="opinion"></textarea>
        <br>


        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save">
        <input type="reset" class="btn btn-default btn-lg btn-block" value="Cancel">



    </form>   
@endsection