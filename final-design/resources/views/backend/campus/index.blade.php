@extends('backend.app')

@section('title')
  Campus-index
@endsection

@section('content')
  <h1 class="text-center">Campuses</h1>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($campuses as $campus)
        <tr>
          <td><a href="{{ url('/admin/campus/' . $campus->id) }}">{{ $campus->name }}</a></td>
          <td>{{ $campus->description }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection