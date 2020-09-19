@extends('layouts.admin_layouts')

@section('title', 'Trip')

@section('content')
    @if (session('message'))
        {{  session('message')  }}
    @endif

    <div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $posts->title }}</h5>
        <p class="card-text">{{ $posts->content }}</p>
        <!-- <p class="card-text">{{ $posts->image }}</p> -->
        <p class="card-text"><img class="imgsize" src="{{ asset('public/storage') }}/{{ $posts->id }}/{{ $posts->image }}"></p>
    </div>
    </div>

    <a href="/trip/posts/{{  $posts->id   }}/edit">Edit</a>
@endsection