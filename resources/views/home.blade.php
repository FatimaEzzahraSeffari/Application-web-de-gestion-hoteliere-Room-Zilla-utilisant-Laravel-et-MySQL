@extends('layouts.app')

@section('content')

<h1>you are login as : {{ Auth::user()->name }}</h1>
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="get" style="display: none;">
    @csrf
</form>
<a href="/" class="nav-item nav-link active">go to Home</a>
<br>
<br><br><br><br><br><br><br><br><br>
@endsection