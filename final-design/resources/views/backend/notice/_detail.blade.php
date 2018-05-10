<div class="form-group">
  {{ Form::label('Title:') }}
  {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::label('Content:') }}
  {{ Form::textarea('content', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::label('Set begin time:') }}
  {{ Form::date('begin_at', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::label('Set end time:') }}
  {{ Form::date('end_at', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
</div>