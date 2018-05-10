@extends('backend.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
@endsection

@section('title')
  Notice-show
@endsection

@section('content')
  <h1 class="text-center">{{ $notice->title }}</h1>

  <div id="show">
    <div class="row add-padding-10">
      <div class="col-lg-2 col-lg-offset-4">
        <label>Title</label>
      </div>
      <div class="col-lg-5">
        {{ $notice->title }}
      </div>
    </div>

    <div class="row add-padding-10">
      <div class="col-lg-2 col-lg-offset-4">
        <label>Content</label>
      </div>
      <div class="col-lg-5">
        {{ $notice->content }}
      </div>
    </div>

    <div class="row add-padding-10">
      <div class="col-lg-2 col-lg-offset-4">
        <label>Begin time</label>
      </div>
      <div class="col-lg-5">
        {{ $notice->begin_at }}
      </div>
    </div>

    <div class="row add-padding-10">
      <div class="col-lg-2 col-lg-offset-4">
        <label>End time</label>
      </div>
      <div class="col-lg-5">
        {{ $notice->end_at }}
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-lg-offset-4">
        <button type="button" class="btn btn-primary" @click="toEdit({{ $notice->id }})">Edit</button>
        <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#destory">Destory</button>
      </div>
    </div>

    <div class="modal fade" id="destory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Tip</h4>
                </div>
                <div class="modal-body">Are you sure to destory this notice?</div>
                <div class="modal-footer">
                  {{ Form::open(['url' => '/admin/notice/' . $notice->id, 'method' => 'delete']) }}
                    {{ Form::submit('Sure', ['class' => 'btn btn-primary']) }}
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection

@section('js')
  <script src="{{ asset('js/backend/notice/show.vue.js') }}"></script>
@endsection