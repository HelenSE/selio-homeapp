@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Editing location "{{ $location->name }}"</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Main</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.location.index') }}">Categories</a>
                            </li>
                            <li class="breadcrumb-item active">{{ $location->name }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.location.update', ['location' => $location]) }}" method="POST" enctype="multipart/form-data" class="w-25">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Location name"
                                       value="{{ $location->name }}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="photo">
                                    @if (Storage::disk('public')->exists($location->photo))
                                        <img src="{{ asset('/storage/'.$location->photo) }}" width="150" height="150">
                                    @else
                                        <img src="{{ asset($location->photo)}}" width="150" height="150">
                                    @endif
                                </div>
                                @csrf
                            </div>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
