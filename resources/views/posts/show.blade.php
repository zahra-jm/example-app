@extends('lyouts.app')

@section('title' , $post['title'])

@section('content')
@if($post['is_new'])
<div>A new blog post! using if</div>
@else
<div>blog post is old! using elseif/else</div>
@endif

@unless($post['is_new'])
<div>this is an old post ... using unless</div>
@endunless

@isset($post['has_comments'])
<div>the post has comments ... using isset</div>
@endisset

<h1>{{ $post['title'] }}</h1>
<p>{{ $post['content'] }}</p>
@endsection