@extends('layouts.admin_layouts')

@section('title', 'Simple Board')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <h1>Posts</h1>

    @foreach($guides as $guide)

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $guide->title }}</h5>
                <p class="card-text">{{ $guide->content }}</p>
                <p class="card-text"><img class="imgsize" src="{{ asset('public/storage') }}/{{ $guide->id }}/{{ $guide->image }}"></p>
                <div class="d-flex" style="height: 36.4px;">
                    <a href="/trip/guides/{{ $guide->id }}" class="btn btn-outline-primary">Show</a>
                    <a href="/trip/guides/{{ $guide->id }}/edit" class="btn btn-outline-primary">Edit</a>
                    <form action="/trip/guides/{{ $guide->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <a href="/trip/posts/create">New Post</a>
@endsection