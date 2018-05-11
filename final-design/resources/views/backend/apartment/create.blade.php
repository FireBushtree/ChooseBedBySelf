@extends('backend.app')

@section('title')
  Apartment-title
@endsection

@section('content')
  <h1 class="text-center">Create</h1>

  {{ Form::open(['url' => '/admin/apartment', 'method' => 'post']) }}
    @include('backend.apartment._detail')
  {{ Form::close() }}

@endsection