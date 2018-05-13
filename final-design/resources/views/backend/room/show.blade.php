@extends('backend.app')

@section('title')
  Room-show
@endsection

@section('content')
  <h1 class="text-center">{{ $room->name }}</h1>

  
@endsection