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
    Manage Comments
    </div>
    
    <div class="card-body">
   
            <table class="table table-striped" style="width: 100%">
                
     <thead> 
    <tr>
    <th scope="col" style="color:rgb(15, 15, 15);font-size: 18px; font-weight: bold;">ID</th>
    <th scope="col" style="color:rgb(15, 15, 15);font-size: 18px; font-weight: bold;">Name</th>
    <th scope="col" style="color:rgb(15, 15, 15);font-size: 18px; font-weight: bold;">Profession</th>
    <th scope="col" style="color:rgb(15, 15, 15);font-size: 18px; font-weight: bold;">Remarque</th>
    <th scope="col" style="color:rgb(15, 15, 15);font-size: 18px; font-weight: bold;">Image</th>
    <th  style="color:rgb(14, 13, 13);font-size: 18px; font-weight: bold;">Actions</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($viewData["comments"] as $comment)
    <tr>
    <td style="color:black;">{{ $comment->id }}</td>
    <td style="color:black;">{{ $comment->name }}</td>
    <td style="color:black;">{{ $comment->profession }}</td>
    <td style="color:black;">{{ $comment->remarque }}</td>
    <td style="color:black;">{{ $comment->image }}</td>
    <td>
        <div style="display: flex;">
          <a class="btn btn-primary" href="{{ route('admin.comment.edit', ['id' => $comment->getId()]) }}" style="height: 40px; width: 50px;">
            <i class="bi-pencil"></i>
          </a>
          &nbsp; &emsp;
          <form action="{{ route('admin.comment.delete', $comment->getId()) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" style="height: 40px; width: 50px;"onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
              <i class="bi-trash"></i>
            </button>
          </form>
        </div>
      </td>
      
        
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
    @endsection