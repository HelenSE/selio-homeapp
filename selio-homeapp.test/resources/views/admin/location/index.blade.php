@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Locations</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Main</a></li>
                            <li class="breadcrumb-item active">Locations</li>
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
                    <div class="col-1 mb-3">
                        <a href="{{ route('admin.location.create') }}" class="btn btn-block btn-primary">Add new</a>
                    </div>
                    <!-- ./col -->
                </div>
                @if($locations->count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Photo</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($locations as $location)
                                            <tr>
                                                <td>{{ $location->id }}</td>
                                                <td>{{ $location->name }}</td>
                                                <td>
                                                    @if (Storage::disk('public')->exists($location->photo))
                                                        <img src="{{ asset('/storage/'.$location->photo) }}" width="150" height="150">
                                                    @else
                                                        <img src="{{ asset($location->photo)}}" width="150" height="150">
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start">
                                                        <a href="{{ route('admin.location.show', $location) }}" class="px-2" title="Show"><i class="far fa-eye"></i></a>
                                                        <a href="{{ route('admin.location.edit', $location->id) }}" class="px-2" title="Edit"><i class="far fa-edit"></i></a>
                                                        <form action="{{ route('admin.location.destroy', $location->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="border-0 bg-transparent" title="Delete">
                                                                <i class="far fa-trash-alt text-danger" role="button"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
            @endif
            <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
