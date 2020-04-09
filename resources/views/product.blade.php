@extends('layouts.layout')

@section('custom_css')
    <link rel="stylesheet" href="{{asset('jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('jquery-ui/jquery-ui.structure.min.css')}}">
    <link rel="stylesheet" href="{{asset('jquery-ui/jquery-ui.theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection

@section('content')
    <div class="container listings">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 left-side">
                <div class="filter">
                    <h5>Filter</h5>
                        <h6 class="filter-title">Browse By</h6>
                        <ul class="filter-list">
                            <li>
                                <input type="checkbox" class="my-checkbox" id="checkboxC1"/>
                                <label for="checkboxC1">Party Items</label>
                            </li>
                            <li>
                                <input type="checkbox" class="my-checkbox" id="checkboxC2"/>
                                <label for="checkboxC2">Helium</label>
                            </li>
                            <li>
                                <input type="checkbox" class="my-checkbox" id="checkboxC3"/>
                                <label for="checkboxC3">Balloon</label>
                            </li>
                        </ul>
                        <!-- <hr> -->
                        <h6 class="filter-title">Price</h6>
                        <div class="something">
                            <div id="slider-range"></div>
                        </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 right-side">
                <div class="row searchbar">
                    <div class="my-search-bar">
                        <input type="text" class="search-bar" aria-label="Search Products" placeholder="Search..">
                        <div class="hl"></div>
                        <i class="material-icons">search</i>
                    </div>
                </div>
                <div class="grid-outer">
                    <div class="grid-inner">
                        <div class="row toolbar">
                            <div class="col-12 align-self-center">
                                <div class="right">
                                    <select id="select1" class="my-dropdown">
                                        <option selected="selected">10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>40</option>
                                        <option>50</option>
                                    </select>

                                    <select id="select1" class="my-dropdown">
                                        <option selected="selected">Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <catalog-component></catalog-component>
                        <catalog-component></catalog-component>
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    <script>
        $(function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 500,
                values: [ 75, 300 ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
            });

            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
                " - $" + $( "#slider-range" ).slider( "values", 1 ) );
        });
    </script>
@endsection
