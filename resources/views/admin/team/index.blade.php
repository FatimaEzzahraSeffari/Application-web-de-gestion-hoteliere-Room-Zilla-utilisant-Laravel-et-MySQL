@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')


    {{-- Ajouter ici le formulaire d'ajout d'équipe --}}
    <div class="card mb-4">
        <div class="card-header" style="font-size: 24px; font-weight: bold;">
            Create Teams
        </div>
        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.team.store') }}">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="color:black;font-size: 18px; font-weight: bold;">Name:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="color:black;font-size: 18px; font-weight: bold;">Work:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="profession" value="{{ old('profession') }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label" style="color:black;font-size: 18px; font-weight: bold;">Image:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <button type="submit" class="btn btn-warning"style="background-color:black;color:rgb(255, 255, 255);width: 90px;"onclick="showToast()">Submit</button>
            </form>
         <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="{{ asset('img/not2.jpg') }}" class="rounded mr-2" alt="..." style="width: 15px;height:15px;">
                <strong class="mr-auto">Notification </strong>
              <small class="text-muted">1 min ago</small>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="toast-body">
    Your Team Added succeffuly              </div>
          </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function showToast() {
          $('.toast').toast('show');
        }
        </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

    <div class="card">
        <div class="card-header" style="font-size: 24px; font-weight: bold;">
            Manage Teams
        </div>
        
        <div class="card-body">
            <table class="table table-striped">
               
                <thead>
                <tr>
                    <th scope="col" style="color:black;font-size: 18px; font-weight: bold;">ID</th>
                    <th scope="col" style="color:black;font-size: 18px; font-weight: bold;">Name</th>
                    <th scope="col" style="color:black;font-size: 18px; font-weight: bold;">Profession</th>
                    <th scope="col" style="color:black;font-size: 18px; font-weight: bold;">Image</th>
                    
                    <th   style="color:rgb(14, 13, 13);font-size: 18px; font-weight: bold;"> &nbsp; &emsp; Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($viewData["teams"] as $team)
                    <tr>
                        <td style="color:black;">{{ $team->id }}</td>
                        <td style="color:black;">{{ $team->name }}</td>
                        <td style="color:black;">{{ $team->profession }}</td>
                        <td style="color:black;">{{ $team->image }}</td>
                        <td>
                          
                            <a class="btn btn-primary" href="{{ route('admin.team.edit', ['id' => $team->getId()]) }}" style="height: 40px; width: 50px;">
                                <i class="bi-pencil"></i>
                            </a>
                            
                            &nbsp; &nbsp; 
                           
                        <form action="{{ route('admin.team.delete', $team->getId())}}"
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
