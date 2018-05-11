<div class="form-group">
  {{ Form::label('Name') }}
  {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::label('Belong to campus') }}
  {{ Form::select('campus_id', $campusesArray, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::label('Description') }}
  {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::label('Total floor') }}
  {{ Form::select('floor_num', [1, 2, 3, 4, 5, 6, 7, 8], null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
  <button type="button" class="btn btn-warning pull-right">Cancel</button>
</div>