@extends('layouts.main')
@section('title')| {{ $newsItem->title }} @stop
@section('content')
<article class="blog-post">
    <h2 class="display-5 link-body-emphasis mb-1">{{ $newsItem->title }}</h2>
    <p>{{ $newsItem->preview_content }}</p>
    <hr>
    <p>{{ $newsItem->content }}</p>
</article>
@endsection
