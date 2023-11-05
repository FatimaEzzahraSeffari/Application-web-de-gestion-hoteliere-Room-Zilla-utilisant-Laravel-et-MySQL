@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<br><br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

<div class="card">
    <div class="card-header"style="font-size: 24px; font-weight: bold;">
    Manage Users
    </div>
    <div class="card-body">
    <table class="table  table-striped">
        
    <thead>
    <tr>
    <th scope="col" style="color:rgb(15, 15, 15);font-size: 18px; font-weight: bold;">ID</th>
    <th scope="col" style="color:rgb(15, 15, 15);font-size: 18px; font-weight: bold;">Name</th>
    <th scope="col" style="color:rgb(15, 15, 15);font-size: 18px; font-weight: bold;">email</th>
    <th scope="col" style="color:rgb(15, 15, 15);font-size: 18px; font-weight: bold;">Password</th>
    
    <th   style="color:rgb(14, 13, 13);font-size: 18px; font-weight: bold;"> &nbsp; &emsp; Actions</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($viewData["users"] as $user)
    <tr>
    <td style="color:black;">{{ $user->id }}</td>
    <td style="color:black;">{{ $user->name }}</td>
    <td style="color:black;">{{ $user->email }}</td>
    <td style="color:black;">{{ $user->password }}</td>
    <td>
        
                          
        <a class="btn btn-primary" href="{{ route('admin.user.edit', ['id' => $user->getId()]) }}" style="height: 40px; width: 50px;">
            <i class="bi-pencil"></i>
        </a>
        
        &nbsp; &nbsp; 
       
    <form action="{{ route('admin.user.delete', $user->getId())}}"
        method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" style="height: 40px; width: 50px;"onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
        <i class="bi-trash"></i>
        </button>
        </form>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
    @endsection