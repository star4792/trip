@extends('layouts.layouts')

@section('title', 'Home')

@section('content')
    <!-- ****** Welcome Post Area Start ****** -->
    <section class="welcome-post-sliders owl-carousel">

        <!-- Single Slide -->
        @foreach($posts as $post)
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
            <img src="{{ asset('public/storage') }}/{{ $post->id }}/{{ $post->image }}" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">
                    <a href="#">{{ $post->created_at }}</a>
                    <!-- <a href="#">5 Comment</a> -->
                </div>
                <a href="/trip/posts/{{ $post->id }}">
                    <h5>{{ $post->title }}</h5>
                </a>
            </div>
        </div>
        @endforeach
    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** Categories Area Start ****** -->
    <section class="categories_area clearfix" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('img/catagory-img/1.jpg') }}" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h5>Flight</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".6s">
                        <img src="{{ asset('img/catagory-img/2.jpg') }}" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h5>Accommodation</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                        <img src="{{ asset('img/catagory-img/3.jpg') }}" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h5>Itinerary</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Categories Area End ****** -->
@endsection