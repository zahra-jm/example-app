@extends('lyouts.app')

@section('title' , 'Blog posts')

@section('content')
@foreach($posts as $ps)
<div>{{ $ps['title'] }}</div>
@endforeach
@endsection