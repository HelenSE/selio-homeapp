@extends('layout')
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
                            <a href="{{route('show-apartment', ['id'=>$categoryType->id])}}" title="" class="ext-link"></a>
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
                @foreach($popularApartments as $popularApartment)
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <a href="{{route('show-apartment', ['id'=>$popularApartment->id])}}" title="">
                            <div class="img-block">
                                <div class="overlay"></div>
                                <img src="{{ $popularApartment->main_photo }}" alt="" class="img-fluid">
                                <div class="rate-info">
                                    <h5>${!! $popularApartment->price_per_hour!!}</h5>
                                    <span>For Rent</span>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="{{ route('show-apartment', ['id'=>$popularApartment->id])}}" title="">
                                <h3>{{$popularApartment->name}}</h3>
                                <p><i class="la la-map-marker"></i>{{$popularApartment->address}}</p>
                            </a>
                            <ul>
                                <li>Number of people : {{ $popularApartment->people_minimum }} - {{ $popularApartment->people_maximum }}</li>
                             <li>Category : {{ $popularApartment->category_type}}</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="pull-left">
                                <i class="la la-heart-o"></i>
                            </a>
                            <a href="#" class="pull-right">
                                <i class="la la-calendar-check-o"></i> 25 Days Ago</a>
                        </div>
                        <a href="{{route('show-apartment', ['id'=>$popularApartment->id])}}" title="" class="ext-link"></a>
                    </div>
                </div>
                @endforeach
                    <div class="load-more-posts">
                        <a href="#" title="" class="btn2">Load More</a>
                    </div><!--load-more end-->
                </div>
            </div>
        </div>
    </section>

    <div class="alert alert-success" role="alert">
        <strong>Added to Favourites</strong> You can check your favourite items here <a href="#" class="alert-link">Favourite Items</a>.
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
                    <a href="#">
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

    <section id="map-container" class="fullwidth-home-map">
        <h3 class="vis-hid">Visible Heading</h3>
        <div id="map" data-map-zoom="9"></div>
    </section>

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
