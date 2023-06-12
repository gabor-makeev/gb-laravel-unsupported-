@extends('layouts.main')
@section('title')| {{ $article['title'] }} @stop
@section('content')
<h1>{{ $article['title'] }}</h1>
<p>{{ $article['content'] }}</p>
@endsection
