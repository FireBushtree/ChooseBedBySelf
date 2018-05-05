@extends('backend.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
@endsection

@section('title')
  Detail
@endsection

@section('content')
<div id="detail">

  <div v-if="status == 'detail'">
    <h1 class="text-center">Detail</h1>


    <div class="row add-padding-10">
      <label class="col-lg-offset-4 col-lg-2">Username</label>
      <div class="col-lg-4">{!! $user->name !!}</div>
    </div>

    <div class="row add-padding-10">
      <label class="col-lg-offset-4 col-lg-2">Telephone Number</label>
      <div class="col-lg-4">{!! $user->telephone_num !!}</div>
    </div>

    <div class="row add-padding-10">
      <label class="col-lg-offset-4 col-lg-2">E-mail</label>
      <div class="col-lg-4">{!! $user->email !!}</div>
    </div>

    <div class="row add-padding-10">
      <label class="col-lg-offset-4 col-lg-2">Created time</label>
      <div class="col-lg-4">{!! $user->created_at !!}</div>
    </div>

    <div class="row">
      <div class="col-lg-offset-4 col-lg-3">
        <button type="button" class="btn btn-primary" @click="toEdit">Edit</button>
        <button type="button" class="btn btn-warning pull-right" @click="cancel">Cancel</button>
      </div>
    </div>

  </div>

  <div v-if="status == 'edit'">
    <h1 class="text-center">Edit</h1>

    {!! Form::open(['url' => 'saveDetail', 'method' => 'post', 'class' => 'form-horizontal']) !!}

      <div class="row add-padding-10">
        {!! Form::label('name', 'Username', ['class' => 'col-lg-offset-4 col-lg-2']) !!}
        <div class="col-lg-3">
          {!! Form::text('name', $user->name, ['class' => 'form-control', 'disabled']) !!}
        </div>
      </div>

      <div class="row add-padding-10">
        {!! Form::label('telephone_num', 'Telephone Number', ['class' => 'col-lg-offset-4 col-lg-2']) !!}
        <div class="col-lg-3">
          {!! Form::text('telephone_num', $user->telephone_num, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="row add-padding-10">
        {!! Form::label('email', 'E-mail', ['class' => 'col-lg-offset-4 col-lg-2']) !!}
        <div class="col-lg-3">
          {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="row">
        <div class="col-lg-offset-4 col-lg-3">
          <button type="button" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-warning pull-right" @click="back">Back</button>
        </div>
      </div>
    {!! Form::close() !!}

  </div>
</div>
@endsection

@section('js')
  <script src="{{ asset('js/backend/admin/detail.vue.js') }}"></script>
@endsection