<div class="modal fade" id="destory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tip</h4>
      </div>
      <div class="modal-body">Are you sure to destory this {{ $name }}?</div>
      <div class="modal-footer">
      {{ Form::open(['url' => '/admin/' . $name . '/' . $id, 'method' => 'delete']) }}
        {{ Form::submit('Sure', ['class' => 'btn btn-primary']) }}
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      {{ Form::close() }}
      </div>
    </div>
  </div>
</div>