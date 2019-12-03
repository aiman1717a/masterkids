@extends('layouts.layout')

@section('custom_css')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
    <div class="main-content">
        <div class="section-display container-fluid p-0">
            <div class="row banner">
            </div>
        </div>
        <div class="section-showcase container">
            <div class="row">
                <div class="col">
                    <div class="title-area">
                        <h3 class="title">Our Products</h3> 
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>

            <product-component v-bind:products="products"></product-component>

            <div class="row contents">
                <div class="col">
                    <div class="title-area">
                        <h3 class="title">Our Categories</h3> 
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>
            <div class="row contents">
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="card hover">
                        <div class="card-img embed-responsive embed-responsive-1by1">
                            <img src="images/balloons.jpg" class="embed-responsive-item" alt="Not Found">
                            <div class="overlay">
                                <div class="overlay-content">
                                    <a class="hover" href="#">Balloons</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-store container">
            <div class="row">
                <div class="col">
                    <div class="title-area">
                        <h3 class="title">Our Stores</h3> 
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>
            <store-component v-bind:stores="stores"></store-component>
            {{-- <hr> --}}

        </div>
    </div>
@endsection