@extends('backend.app')

@section('title')
  Campus-create
@endsection

@section('content')
  <h1 class="text-center">Create</h1>

  {{ Form::open(['url' => '/admin/campus', 'method' => 'post']) }}
    @include('backend.campus._detail')
  {{ Form::close() }}
@endsection