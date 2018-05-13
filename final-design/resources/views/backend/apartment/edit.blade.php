@extends('backend.app')

@section('title')
  Apartment-edit
@endsection

@section('content')
  {{ Form::model($apartment, ['url' => '/admin/apartment/' . $apartment->id, 'method' => 'put']) }}
    @include('backend.apartment._detail')
  {{ Form::close() }}
@endsection