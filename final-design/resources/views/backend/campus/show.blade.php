@extends('backend.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
@endsection

@section('title')
  Campus-show
@endsection

@section('content')
  <h1 class="text-center">{{ $campus->name }}</h1>

  <div class="row add-padding-10">
    <label class="col-lg-offset-4 col-lg-2">Name:</label>
    <div class="col-lg-4">
      {{ $campus->name }}
    </div>
  </div>

  <div class="row add-padding-10">
    <label class="col-lg-offset-4 col-lg-2">Description:</label>
    <div class="col-lg-4">
      {{ $campus->description }}
    </div>
  </div>

  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
      <button type="button" class="btn btn-primary" onclick="Show.jump('{{ url('/admin/campus/' . $campus->id . '/edit') }}')">Edit</button>
      <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#destory">Destory</button>
    </div>
  </div>

  @include('util.delete-modal', ['name' => 'campus', 'id' => $campus->id])
@endsection