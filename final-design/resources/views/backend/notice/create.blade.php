@extends('backend.app')

@section('title')
  Notice-create
@endsection

@section('content')
  <h1>Create</h1>

  {{ Form::open(['url' => '/admin/notice/create', 'method' => 'post']) }}
    @include('backend.notice._detail')
  {{ Form::close() }}

@endsection