<hr>

    <a href="/">Home</a> /
    {{-- <a href="/employees/create">Create</a> /
    <a href="/about">About</a> /
    <a href="/contact">Contact</a> /  --}}
    @if(auth()->check())
        <a href="/profile">Profile</a> /
        <a href="/deposit">Deposit</a> /
        <a href="/withdraw">Withdraw</a>
       ( {{ auth()->user()->name }} )
    @else
        <a href="/login">Login</a> /
        <a href="/register">Register</a>
    @endif
{{-- 
    @if(auth()->user()->status == '')
        
    @else
        AAAA
    @endif --}}

    {{-- @if(auth()->user()->status == 'Operater')
        Operater
    @elseif(auth()->user()->status == 'User')
        User
    @else
     
    @endif --}}


<hr>