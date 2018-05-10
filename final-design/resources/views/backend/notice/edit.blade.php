@extends('backend.app')

@section('title')
  Notice-edit
@endsection

@section('content')
  {{ Form::model($notice, ['url' => '/admin/notice/' . $notice->id, 'method' => 'put']) }}
    @include('backend.notice._detail')
  {{ Form::close() }}
@endsection
