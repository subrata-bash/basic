@extends('home.home_master')
@section('home')
    @include('home.home_layout.slider')
    <!-- end hero -->
    <div class="lonyo-content-shape1">
        <img src="assets/images/shape/shape1.svg" alt="">
    </div>
    @include('home.home_layout.features')
    <!-- end content -->

    @include('home.home_layout.clarifies')
    <!-- end content -->

    @include('home.home_layout.get_all')
    <div class="lonyo-content-shape3">
        <img src="assets/images/shape/shape2.svg" alt="">
    </div>
    <!-- end content -->

    @include('home.home_layout.usability')
    <div class="lonyo-content-shape1">
        <img src="assets/images/shape/shape3.svg" alt="">
    </div>
    <!-- end video -->

    @include('home.home_layout.review')
    <!-- end testimonial -->

    @include('home.home_layout.answer')
    <div class="lonyo-content-shape3">
        <img src="assets/images/shape/shape2.svg" alt="">
    </div>
    <!-- end faq -->

    @include('home.home_layout.apps')
    <!-- end cta -->
@endsection
