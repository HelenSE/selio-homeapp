@extends('layouts.admin')
@section('content')
    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title">Apartment Tables</div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <a href="{{ route('admin.apartment.create') }}" class="btn btn-sm btn-success"> Create </a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Apartment Name</th>
                        <th></th>
                        <th>

                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($apartments as $apartment)
                        <tr>
                            <td>{{ $loop->iteration + (($apartments->currentPage() -1) * $apartments->perPage())}}</td>
                            <td>{{$apartment->name}}</td>
                            <td>
                                @if (Storage::disk('public')->exists($apartment->main_photo))
                                    <img src="{{ asset('/storage/'.$apartment->main_photo) }}" width="295" height="370">
                                @else
                                    <img src="{{ asset($apartment->main_photo) }}" width="295" height="370">
                                @endif
                            </td>

                            <td></td>
                            <td>

                                <a href="{{ route('admin.apartment.show', ['apartment' => $apartment->id]) }}">Показать</a>
                                <a href="{{ route('admin.apartment.edit', ['apartment' => $apartment]) }}">Редактировать</a>
                                <form action="{{ route('admin.apartment.destroy', compact('apartment')) }}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-success">Удалить</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                                {!! $apartments->links() !!}
            </div>
        </div>
    </div>
@endsection
