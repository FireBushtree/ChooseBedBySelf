@extends('backend.app')

@section('title')
  Campus-edit
@endsection

@section('content')
  {{ Form::model($campus, ['url' => '/admin/campus/' . $campus->id, 'method' => 'put']) }}
    @include('backend.campus._detail')
  {{ Form::close() }}
@endsection