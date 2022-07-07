@extends('layouts.admin')
@section('content')
    <form action="{{ route('admin.apartment.show', ['apartment' => $apartment]) }}"  enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" value="{{$apartment->name}}">
        <br>
        <input type="number" name="price" value="{{$apartment->price_per_hour}}">
        <br>
        <input type="file" name="img">
        @if (Storage::disk('public')->exists($apartment->main_photo))
            <img src="{{ asset('/storage/'.$apartment->main_photo) }}" width="295" height="370">
        @else
            <img src="{{ asset($apartment->main_photo) }}" width="295" height="370">
        @endif
    </form>
@endsection
