@extends('backend.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
@endsection

@section('title')
  school-index
@endsection

@section('content')
  <div id="detail">

    <div v-if="status == 'detail'">
      <h1 class="text-center">Introduce</h1>

      <div class="row add-padding-10">
        <label class="col-lg-offset-4 col-lg-2">Name</label>
        <div class="col-lg-4">{{ $school->name }}</div>
      </div>

      <div class="row add-padding-10">
        <label class="col-lg-offset-4 col-lg-2">Description</label>
        <div class="col-lg-4">{{ $school->description }}</div>
      </div>

      <div class="row">
        <div class="col-lg-offset-4 col-lg-5">
          <button type="button" class="btn btn-primary" @click="toEdit">Edit</button>
          <button type="button" class="btn btn-warning pull-right" @click="cancel">Cancel</button>
        </div>
      </div>

    </div>

    <div v-if="status == 'edit'">
      <h1 class="text-center">Edit</h1>

      {!! Form::open(['url' => '/admin/school', 'method' => 'put', 'class' => 'form-horizontal', '@submit' => 'saveDetail']) !!}

        <div class="row add-padding-10">
          {!! Form::label('name', 'Name', ['class' => 'col-lg-offset-4 col-lg-2']) !!}
          <div class="col-lg-4">
            {!! Form::text('name', $school->name, ['class' => 'form-control', 'id' => 'name', '@blur' => 'checkName']) !!}
          </div>
        </div>
        <div class="col-lg-offset-6 col-lg-4 text-danger" v-html="nameTip"></div>

        <div class="row add-padding-10">
          {!! Form::label('descrition', 'Description', ['class' => 'col-lg-offset-4 col-lg-2']) !!}
          <div class="col-lg-4">
            {!! Form::textarea('description', $school->description, ['class' => 'form-control', 'id' => 'description', '@blur' => 'checkDescription']) !!}
          </div>
        </div>
        <div class="col-lg-offset-6 col-lg-4 text-danger" v-html="descriptionTip"></div>

        <div class="row">
          <div class="col-lg-offset-4 col-lg-5">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            <button type="button" class="btn btn-warning pull-right" @click="back">Back</button>
          </div>
        </div>

      {!! Form::close() !!}
    </div>

  </div>
@endsection

@section('js')
  <script src="{{ asset('js/backend/school/index.vue.js') }}"></script>
@endsection