@extends('layouts.layout')
@section('content')
    <div class="row">
        @foreach($apartments as $apartment)
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <a href="{{route('show-apartment', ['id'=>$apartment->id])}}" title="">
                        <div class="img-block">
                            <div class="overlay"></div>
                            @if (Storage::disk('public')->exists($apartment->main_photo))
                                <img src="{{ asset('/storage/'.$apartment->main_photo) }}" width="295" height="370">
                            @else
                                <img src="{{ asset($apartment->main_photo) }}" width="295" height="370">
                            @endif
                            <div class="rate-info">
                                <h5>${!! $apartment->price_per_hour!!}</h5>
                                <span>For Rent</span>
                            </div>
                        </div>
                    </a>
                    <div class="card-body">
                        <a href="{{ route('show-apartment',['id'=>$apartment->id])}}" title="">
                            <h3>{{$apartment->name}}</h3>
                            <p><i class="la la-map-marker"></i>{{$apartment->address}}</p>
                        </a>
                        <ul>
                            <li>Number of people : {{ $apartment->people_minimum }}
                                - {{ $apartment->people_maximum }}</li>
                            <li>Category : {{ $apartment->category_type}}</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="pull-left">
                            <i class="la la-heart-o"></i>
                        </a>
                        <a href="#" class="pull-right">
                            <i class="la la-calendar-check-o"></i> 25 Days Ago</a>
                    </div>
                    <a href="{{route('show-apartment',['id'=>$apartment->id])}}" title=""
                       class="ext-link"></a>
                </div>
            </div>
        @endforeach
        <div class="load-more-posts">

        </div><!--load-more end-->

    </div>
@endsection
