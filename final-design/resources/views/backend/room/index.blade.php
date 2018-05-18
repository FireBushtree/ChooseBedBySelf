@extends('backend.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
@endsection

@section('title')
  Room-create
@endsection

@section('content')
  <h1 class="text-center">Rooms</h1>

  <div id="index">

    <div class="row">
      <div class="col-lg-4">
        <label>Apartments</label>
        <select class="form-control" @change="setApartment">
          <option v-for="(apartment, index) in apartments" :value="apartment.id">@{{ apartment.name }}</option>
        </select>
      </div>

      <div class="col-lg-2">
        <label>Floor</label>
        <select class="form-control" @change="setFloor">
          <option v-for="(floor, index) in floorOptions" :value="floor.id">@{{ floor.id }}</option>
        </select>
      </div>
    </div>

    <div class="form-control unverisable"></div>

    <div class="row">
      <div class="col-lg-4">Rooms</div>
    </div>

    <div class="col-lg-2" v-for="(room, index) in rooms">
      <div class="panel">
        <div class="panel-title text-center">
          <a :href="('/admin/room/' + room.id)">@{{ room.name }}</a>
        </div>

        <div class="panel-body text-center">
          <div v-for="(bed, index) in room.beds" class="btn" v-bind:class="[ bed.user_id ? 'btn-primary' : 'btn-default' ]">@{{'bed' + bed.num }}</div>
        </div>
      </div>
    </div>



  </div>
@endsection

@section('js')
  <script src="{{ asset('js/backend/room/index.vue.js') }}"></script>
@endsection