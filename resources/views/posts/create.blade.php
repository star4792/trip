@extends('layouts.admin_layouts')

@section('title', 'Trip')

@section('content')

    <form enctype="multipart/form-data" method="POST" action="/trip/posts">
        {{ csrf_field() }}
        {{Form::select('category', ['カテゴリを選択してください', 1 => '観光', 2 => 'グルメ', 3 => 'ショッピング'], 'カテゴリを選択してください')}}
        <!-- <select name="category">
            <option value="0">観光</option>
            <option value="1">グルメ</option>
            <option value="2">ショッピング</option>
        </select> -->
        <input type="text" name="title">
        <input type="text" name="content">
        <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
        <input type="submit">
    </form>
@endsection