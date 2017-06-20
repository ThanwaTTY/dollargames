@extends('frompage')

@section('content')
<table class="table">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>sername</th>
        <th>Gender</th>
        <th>Action</th>
        <th>Delete</th>
    </tr>
{{-- @foreach($employees as $e)
    <tr>
        <td><a href="/employees/{{$e->id}}">{{ $e->id }}</a></td>
        <td>{{ $e->first_name }}</td>
        <td>{{ $e->last_name }}</td>
        <td>{{ $e->gender }}</td>
        <td><a href="/employees/{{ $e->id }}/edit" class="btn btn-success">Edit</a></td>
        <td>
            <form action="/employees/{{ $e->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field ('DELETE') }}
            <input class="btn btn-danger" type="submit" value="Delete"> 
            </form>
        </td>
    </tr>
 @endforeach --}}
</table>

{{-- {{ $employees->appends(['gender'=>request('gender')])->links() }} --}}

@endsection