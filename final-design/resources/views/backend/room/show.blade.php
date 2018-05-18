@extends('backend.app')

@section('title')
  Room-show
@endsection

@section('content')
  <h1 class="text-center">{{ $room->name }}</h1>

  <div class="row">
    <label class="col-lg-2 col-lg-offset-4">Name:</label>
    <div class="col-lg-4">{{ $room->name }}</div>
  </div>

  <div class="row">
    <label class="col-lg-2 col-lg-offset-4">Max beds</label>
    <div class="col-lg-4">{{ $room->max_beds }}</div>
  </div>

  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#destory">Destory</button>
      <button type="button" class="btn btn-warning pull-right" onclick="Show.jump('{{ url('/admin/room') }}')">Cancel</button>
    </div>
  </div>

  <h1 class="text-center">Beds in room {{ $room->name }}</h1>

  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Bed number</th>
        <th>User</th>
      </tr>
    </thead>

    <tbody>
      @foreach($room->beds as $bed)
        <tr>
          <td>{{ $bed->num }}</td>
          <td>{{ $bed->user }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  @include('util.delete-modal', ['name' => 'room', 'id' => $room->id])
@endsection