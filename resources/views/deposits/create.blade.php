@extends('frompage')

@section('content')
  <script type="text/javascript">

  $(function(){
  	$("#datetime").datetimepicker({
  		dateFormat: 'yy-mm-dd',
  		timeFormat: "HH:mm:ss"
  	});
  });

  </script>


<table class="table .table-bordered">
    <form action="/deposit" method="POST">
        {{ csrf_field() }}

        <input type="text" name="user_id" class="form-control" placeholder="user_id" value="{{ old('user_id') }}">
        <p style="color:red">{{ $errors->first('user_id') }}</p>

        <input type="text" name="username" class="form-control" placeholder="username" value="{{ old('username') }}">
        <p style="color:red">{{ $errors->first('username') }}</p>
        

        
            <div class="input-group">
                <div class="input-group-addon">฿</div>
                <input type="text" name="balance" class="form-control" id="exampleInputAmount" placeholder="Amount" value="{{ old('balance') }}">
                </div><p style="color:red">{{ $errors->first('balance') }}</p>
        
        
        <input type="text" name="bankdeposit" class="form-control" placeholder="bankdeposit" value="{{ old('bankdeposit') }}">
        <p style="color:red">{{ $errors->first('bankdeposit') }}</p>

        <input type="text" name="accountnumberdeposit" class="form-control" placeholder="accountnumberdeposit" value="{{ old('accountnumberdeposit') }}">
        <p style="color:red">{{ $errors->first('accountnumberdeposit') }}</p>

        <input type="text" name="accontnamedeposit" class="form-control" placeholder="accontnamedeposit" value="{{ old('accontnamedeposit') }}">
        <p style="color:red">{{ $errors->first('accontnamedeposit') }}</p>

        <input type="text" name="datetime" id="datetime" class="form-control" placeholder="datetime" value="{{ old('datetime') }}">
        <p style="color:red">{{ $errors->first('datetime') }}</p>

        <input type="text" name="channeldeposit" class="form-control" placeholder="channeldeposit" value="{{ old('channeldeposit') }}">
        <p style="color:red">{{ $errors->first('channeldeposit') }}</p>
        
        <input type="text" name="tel" class="form-control" placeholder="tel" value="{{ old('tel') }}">
        <p style="color:red">{{ $errors->first('tel') }}</p>
        
        <textarea class="form-control" rows="3" name="opinion" placeholder="opinion">{{ old('opinion') }}</textarea>
        <p style="color:red">{{ $errors->first('opinion') }}</p>
        <br>


        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save">
        <input type="reset" class="btn btn-default btn-lg btn-block" value="Cancel">



    </form>   
@endsection