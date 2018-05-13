@extends('backend.app')

@section('title')
  Room-create
@endsection

@section('content')
  <h1 class="text-center">Create</h1>

  {{ Form::open(['url' => '/admin/room', 'method' => 'post']) }}
    @include('backend.room._detail')
  {{ Form::close() }}
@endsection