@extends('backend.app')

@section('title')
  Room-auto-add
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-4">
      <div class="panel">

        <div class="panel-title">
          <p class="text-danger">Tip:</p>
        </div>

        <div class="panel-body">
          <p class="text-primary">You can use this function to auto add rooms.</p>
          <p class="text-primary">So you just need to edit a little.</p>
        </div>

      </div>
    </div>
  </div>

  <h1 class="text-center">Auto add</h1>

  {{ Form::open(['url' => '/admin/room/auto-add', 'method' => 'post']) }}
    <div class="form-group">
      {{ Form::label('Apartment') }}
      {{ Form::select('apartment_id', $apartmentsArray, null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
      {{ Form::label('Rooms per floor') }}
      {{ Form::select('roomsNum', $rooms, null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
      {{ Form::label('Beds per room') }}
      {{ Form::select('bedsNum', $beds, null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tip">Submit</button>
      <button type="button" class="btn btn-warning pull-right" onclick="Show.jump('{{ url('/admin/room') }}')">Cancel</button>
    </div>

    <div class="modal fade" id="tip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Tip</h4>
          </div>
          <div class="modal-body">
            <span class='text-danger'>If you do this action, all rooms had been created will be deleted!</span>
          </div>
          <div class="modal-footer">
            {{ Form::submit('Sure', ['class' => 'btn btn-primary']) }}
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  {{ Form::close() }}


@endsection