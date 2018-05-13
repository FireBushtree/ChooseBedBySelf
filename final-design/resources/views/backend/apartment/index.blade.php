@extends('backend.app')

@section('title')
  Apartment-index
@endsection

@section('content')
  <h1 class="text-center">Apartments</h1>

  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th></th>
        <th>name</th>
        <th>description</th>
        <th>total floor</th>
        <th>location</th>
      </tr>
    </thead>

    <tbody>
      @foreach($apartments as $key => $apartment)
        <tr>
          <th>{{ $key + 1 }}</th>
          <th><a href="{{ url('/admin/apartment/' . $apartment->id) }}">{{ $apartment->name }}</a></th>
          <th>{{ $apartment->description }}</th>
          <th>{{ $apartment->floor_num }}</th>
          <th>{{ $apartment->campus->name }}</th>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection