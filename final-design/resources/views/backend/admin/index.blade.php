@extends('backend.app')

@section('title')
  Index
@endsection

@section('content')
  <h1 class="text-center">Welcome {{ session()->get('user')->school->name }}'s friend</h1>
@endsection
