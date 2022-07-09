@extends('layouts.layout')
@section('content')
    <section class="categories-sec section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading">
                        <span>Categories</span>
                        <h3>What you looking for?</h3>
                    </div>
                </div>
            </div>
            <div class="categories-details">
                <div class="row">
                    @foreach($categoryTypes as $categoryType)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6 full">
                            <div class="categories-info">
                                <a href="#" title="">
                                    <div class="catg-icon">
                                        <i class="la la-home"></i>
                                    </div>
                                </a>
                                <h3><a href="#" title="">{{$categoryType->name}}</a></h3>
                                <a href="{{route('category-apartment', ['id'=>$categoryType->id])}}" title=""
                                   class="ext-link"></a>
                            </div><!--categories-info end-->
                        </div>
                    @endforeach
                </div>
            </div><!--categories-details end-->
        </div>
    </section>

    <section class="popular-listing hp2 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading">
                        <span>Discover</span>
                        <h3>Popular Listing</h3>
                    </div>
                </div>
            </div>

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
                                <a href="{{ route('show-apartment', ['id'=>$apartment->id])}}" title="">
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
                            <a href="{{route('show-apartment', ['id'=>$apartment->id])}}" title=""
                               class="ext-link"></a>
                        </div>
                    </div>
                @endforeach
                <div class="load-more-posts">
{{--                    {!! $apartments->links() !!}--}}
                </div><!--load-more end-->
            </div>
        </div>
        </div>
    </section>

    <div class="alert alert-success" role="alert">
        <strong>Added to Favourites</strong> You can check your favourite items here <a href="#" class="alert-link">Favourite
            Items</a>.
        <a href="#" title="" class="close-alert"><i class="la la-close"></i></a>
    </div>


    <section class="popular-cities section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading">
                        <span>Popular Cities</span>
                        <h3>Find Perfect Place</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($locations as $location)
                    <div class="col-xl-4 col-md-6">
                        <a href="{{route('location-apartment', ['id'=>$location->id])}}">
                            <div class="card">
                                <div class="overlay"></div>
                                <img src="{{$location->photo}}" alt="" class="img-fluid">
                                <div class="card-body">
                                    <h4>{{$location->name}}</h4>
                                    <p>5 Listings</p>
                                    <i class="fa fa-angle-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>

    </section>

    <div class="row mt-5">
        <div class="col-12">
            <div style="width: 100%; height: 400px" id="address-map"></div>

            <script>
                var map;
                var default_center_latitude = {{ $apartment->latitude }};
                var default_center_longitude = {{ $apartment->longitude }};
                var default_zoom = 10;
                function initMap() {
                    var center = new google.maps.LatLng(
                        default_center_latitude,
                        default_center_longitude);
                    var mapOptions = {
                        zoom: default_zoom,
                        center: center
                    };
                    map = new google.maps.Map(document.getElementById('address-map'), mapOptions);
                    var marker = {"latitude": {{ $apartment->latitude }}, "longitude": {{ $apartment->longitude }} };
                    var markerLatLng = new google.maps.LatLng(
                        parseFloat(marker.latitude),
                        parseFloat(marker.longitude));
                    var icon = 'http://maps.google.com/mapfiles/ms/icons/green-dot.png';
                    mark = new google.maps.Marker({
                        map: map,
                        position: markerLatLng,
                        icon: icon
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_KEY')}}&libraries=places&callback=initMap" async defer></script>

        </div>
    </div>
    </div>


    <a href="#" title="">
        <section class="cta section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-text">
                            <h2>Discover a home you'll love to stay</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </a>


@endsection


