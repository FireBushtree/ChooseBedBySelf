@extends('backend.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
@endsection

@section('title')
  Apartment-show
@endsection

@section('content')
  <h1 class="text-center">{{ $apartment->name }}</h1>

  <div class="row add-padding-10">
    <label class="col-lg-2 col-lg-offset-4">Name</label>
    <div class="col-lg-4">{{ $apartment->name }}</div>
  </div>

  <div class="row add-padding-10">
    <label class="col-lg-2 col-lg-offset-4">Description</label>
    <div class="col-lg-4">{{ $apartment->description }}</div>
  </div>

  <div class="row add-padding-10">
    <label class="col-lg-2 col-lg-offset-4">Total floor</label>
    <div class="col-lg-4">{{ $apartment->floor_num }}</div>
  </div>

  <div class="row add-padding-10">
    <label class="col-lg-2 col-lg-offset-4">Location</label>
    <div class="col-lg-4">{{ $apartment->campus->name }}</div>
  </div>

  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
      <button type="button" class="btn btn-primary" onclick="Show.jump('{{ url('/admin/apartment/' . $apartment->id . '/edit') }}')">Edit</button>
      <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#destory">Destory</button>
    </div>
  </div>

  @include('util.delete-modal', ['name' => 'apartment', 'id' => $apartment->id])
@endsection