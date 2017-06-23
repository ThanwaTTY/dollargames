@extends('frompage')

@section('content')
<a href="/deposit/create" class="btn btn-primary">New Deposit</a>
<table class="table .table-bordered">
    <tr>
        <th>#</th>
        <th>USERNAME</th>
        <th>BALANCE</th>
        <th>Bank Deposit</th>
        <th>accountnumberdeposit</th>
        <th>accontnamedeposit</th>
        <th>datetime</th>
    </tr>
    <tr>
        <td>datetime</td>
        <td>USERNAME</td>
        <td>BALANCE</td>
        <td>Bank Deposit</td>
        <td>accountnumberdeposit</td>
        <td>accontnamedeposit</td>
        <td>#</td>
    </tr>
</table>    
@endsection