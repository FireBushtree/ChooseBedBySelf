@extends('backend.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
@endsection

@section('title')
  Notice-show
@endsection

@section('content')
  <h1 class="text-center">{{ $notice->title }}</h1>

  <div id="show">
    <div class="row add-padding-10">
      <div class="col-lg-2 col-lg-offset-4">
        <label>Title</label>
      </div>
      <div class="col-lg-5">
        {{ $notice->title }}
      </div>
    </div>

    <div class="row add-padding-10">
      <div class="col-lg-2 col-lg-offset-4">
        <label>Content</label>
      </div>
      <div class="col-lg-5">
        {{ $notice->content }}
      </div>
    </div>

    <div class="row add-padding-10">
      <div class="col-lg-2 col-lg-offset-4">
        <label>Begin time</label>
      </div>
      <div class="col-lg-5">
        {{ $notice->begin_at }}
      </div>
    </div>

    <div class="row add-padding-10">
      <div class="col-lg-2 col-lg-offset-4">
        <label>End time</label>
      </div>
      <div class="col-lg-5">
        {{ $notice->end_at }}
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-lg-offset-4">
        <button type="button" class="btn btn-primary" onclick="Show.jump('{{ url('/admin/notice/' . $notice->id . '/edit') }}')">Edit</button>
        <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#destory">Destory</button>
      </div>
    </div>

    @include('util.delete-modal', ['name' => 'notice', 'id' => $notice->id])
  </div>
@endsection