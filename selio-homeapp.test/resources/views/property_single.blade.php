@extends('layouts.layout')
@section('content')
    <section class="property-single-pg">
        <div class="container">
            <div class="property-hd-sec">
                <div class="card">
                    <div class="card-body">
                        <a href="#">
                            <h3>{{$apartment->name}}</h3>
                            <p><i class="la la-map-marker"></i>{{$apartment->address}}</p>
                        </a>
                        <ul>
                            <li>3 Bathrooms</li>
                            <li>2 Beds</li>
                            <li>Area 555 Sq Ft</li>
                        </ul>
                    </div><!--card-body end-->
                    <div class="rate-info">
                        <h5>${!! $apartment->price_per_hour !!}</h5>
                        <span>For Rent</span>
                    </div><!--rate-info end-->
                </div><!--card end-->
            </div><!---property-hd-sec end-->
            <div class="property-single-page-content">
                <div class="row">
                    <div class="col-lg-8 pl-0 pr-0">
                        <div class="property-pg-left">
                            <div class="property-imgs">
                                <div class="property-main-img">
                                    <div class="property-img">
                                        @if (Storage::disk('public')->exists($apartment->main_photo))
                                            <img src="{{ asset('/storage/'.$apartment->main_photo) }}" width="770" height="515">
                                        @else
                                            <img src="{{ asset($apartment->main_photo) }}" width="770" height="515">
                                        @endif
                                    </div><!--property-img end-->
                                </div><!--property-main-img end-->
                                <div class="property-thumb-imgs">
                                    <div class="row thumb-carous">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="property-img">
                                                <img src="https://via.placeholder.com/226x150" alt="">
                                            </div><!--property-img end-->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="property-img">
                                                <img src="https://via.placeholder.com/226x150" alt="">
                                            </div><!--property-img end-->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div class="property-img">
                                                <img src="https://via.placeholder.com/226x150" alt="">
                                            </div><!--property-img end-->
                                        </div>
                                    </div>
                                </div><!--property-thumb-imgs end-->
                            </div><!--property-imgs end-->
                            <div class="descp-text">
                                <h3>Description</h3>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequa ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat cons equat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himen aeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.</p>
                            </div><!--descp-text end-->
                            <div class="features-dv">
                                <h3>Features</h3>
                                <form class="form_field">
                                    <ul>
                                        <li class="input-field">
                                            <input type="checkbox" name="cc" id="c1">
                                            <label for="c1">
                                                <span></span>
                                                <small>Parking</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="cc" id="c2" checked>
                                            <label for="c2">
                                                <span></span>
                                                <small>Gym</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="cc" id="c3">
                                            <label for="c3">
                                                <span></span>
                                                <small>Heating</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="cc" id="c4" checked>
                                            <label for="c4">
                                                <span></span>
                                                <small>Air Conditioner</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="cc" id="c5" checked>
                                            <label for="c5">
                                                <span></span>
                                                <small>Wireless Internet</small>
                                            </label>
                                        </li>
                                        <li class="input-field">
                                            <input type="checkbox" name="cc" id="c6">
                                            <label for="c6">
                                                <span></span>
                                                <small>Swimming Pool</small>
                                            </label>
                                        </li>
                                    </ul>
                                </form>
                            </div><!--features-dv end-->
                            <div class="map-dv">
                                <h3>Location</h3>
                                <div id="map-container" class="fullwidth-home-map">
                                    <div id="map" data-map-zoom="9"></div>
                                </div>
                            </div><!--map-dv end-->
                            <div class="nearby-locts">
                                <h3>What's Nearby?</h3>
                                <span>Powered by <img src="assets/images/ylog.png" alt=""></span>
                                <div class="widget-posts">
                                    <ul>
                                        <li>
                                            <div class="wd-posts">
                                                <div class="ps-img">
                                                    <img src="https://via.placeholder.com/112x89" alt="">
                                                </div><!--ps-img end-->
                                                <div class="ps-info">
                                                    <h3><a href="#" title="">The Museum of Modern Art</a></h3>
                                                    <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                </div><!--ps-info end-->
                                            </div><!--wd-posts end-->
                                            <ul class="star-rating">
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                            </ul><!--star-rating end-->
                                        </li>
                                        <li>
                                            <div class="wd-posts">
                                                <div class="ps-img">
                                                    <img src="https://via.placeholder.com/112x89" alt="">
                                                </div><!--ps-img end-->
                                                <div class="ps-info">
                                                    <h3><a href="#" title="">Joe's Shanghai</a></h3>
                                                    <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                </div><!--ps-info end-->
                                            </div><!--wd-posts end-->
                                            <ul class="star-rating">
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                            </ul><!--star-rating end-->
                                        </li>
                                        <li>
                                            <div class="wd-posts">
                                                <div class="ps-img">
                                                    <img src="https://via.placeholder.com/112x89" alt="">
                                                </div><!--ps-img end-->
                                                <div class="ps-info">
                                                    <h3><a href="#" title="">Apple Fifth Avenue</a></h3>
                                                    <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                </div><!--ps-info end-->
                                            </div><!--wd-posts end-->
                                            <ul class="star-rating">
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                                <li><span class="la la-star"></span></li>
                                            </ul><!--star-rating end-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!--nearby-locts end-->
                            <div class="similar-listings-posts">
                                <h3>Similar Listings</h3>
                                <div class="list-products">
                                    @foreach($apartments as $apartment)
                                    <div class="card">
                                        <a href="{{route('show-apartment', ['id'=>$apartment->id])}}" title="">
                                            <div class="img-block">
                                                <div class="overlay"></div>
                                                <img src="https://via.placeholder.com/370x295" alt="" class="img-fluid">
                                                <div class="rate-info">
                                                    <h5>$550.000</h5>
                                                    <span>For Rent</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="card_bod_full">
                                            <div class="card-body">
                                                <a href="24_Property_Single.html" title="">
                                                    <h3>Traditional Apartments</h3>
                                                    <p><i class="la la-map-marker"></i>212 5th Ave, New York</p>
                                                </a>
                                                <ul>
                                                    <li>3 Bathrooms</li>
                                                    <li>2 Beds</li>
                                                    <li>Area 555 Sq Ft</li>
                                                </ul>
                                            </div>
                                            <div class="card-footer">
                                                <div class="crd-links">
                                                    <a href="#" class="pull-left">
                                                        <i class="la la-heart-o"></i>
                                                    </a>
                                                    <a href="#" class="plf">
                                                        <i class="la la-calendar-check-o"></i> 25 Days Ago
                                                    </a>
                                                </div><!--crd-links end-->
                                                <a href="24_Property_Single.html" title="" class="btn-default">View Details</a>
                                            </div>
                                        </div><!--card_bod_full end-->
                                        <a href="24_Property_Single.html" title="" class="ext-link"></a>
                                    </div>
                                @endforeach
                                </div><!-- list-products end-->
                            </div><!--similar-listings-posts end-->
                        </div><!--property-pg-left end-->
                    </div>
                    <div class="col-lg-4 pr-0">
                        <div class="sidebar layout2">
                            <div class="widget widget-form">
                                <h3 class="widget-title">Contact Listing Agent</h3>
                                <div class="contct-info">
                                    <img src="https://via.placeholder.com/81x74" alt="">
                                    <div class="contct-nf">
                                        <h3>Tomas Wilkinson</h3>
                                        <h4>Douglas and Eleman Agency</h4>
                                        <span><i class="la la-phone"></i>+1 212-925-3797</span>
                                    </div>
                                </div><!--contct-info end-->
                            </div><!--widget-form end-->
                            <div class="widget widget-catgs">
                                <h3 class="widget-title">Categories</h3>
                                <ul>
                                    @foreach($categoryTypes as $categoryType)
                                    <li>
                                        <a href="#" title=""><i class="la la-angle-right"></i><span>{{$categoryType->name}}</span></a>
                                    </li>
                                    @endforeach
                                </ul>

                            </div><!--widget-catgs end-->
                            <div class="widget widget-posts">
                                <h3 class="widget-title">Popular Listings</h3>
                                <ul>
                                    @foreach($apartments as $apartment)
                                        @break ($apartment->id == 4)
                                    <li>
                                        <div class="wd-posts">
                                            <div class="ps-img">
                                                <a href="14_Blog_Open.html" title="">
                                                    <img src="{{$apartment->main_photo}}" alt="">
                                                </a>
                                            </div><!--ps-img end-->
                                            <div class="ps-info">
                                                <h3><a href="14_Blog_Open.html" title="">{{$apartment->name}}</a></h3>
                                                <strong>${!! $apartment->price_per_hour !!}</strong>
                                                <span><i class="la la-map-marker"></i>{{$apartment->address}}</span>
                                            </div><!--ps-info end-->
                                        </div><!--wd-posts end-->

                                    </li>

                                        @endforeach
                                </ul>
                            </div><!--widget-posts end-->
                        </div><!--sidebar end-->
                    </div>
                </div>
            </div><!--property-single-page-content end-->
        </div>
    </section>
@endsection
