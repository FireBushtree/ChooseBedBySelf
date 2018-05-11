<div id="detail">
  <div class="form-group">
    {{ Form::label('Name') }}
    {{ Form::text('name', null, ['class' => 'form-control', '@blur' => 'checkName', 'id' => 'name']) }}
  </div>
  <div class="text-danger" v-html="nameTip"></div>

  <div class="form-group">
    {{ Form::label('Description') }}
    {{ Form::textarea('description', null, ['class' => 'form-control', '@blur' => 'checkDescription', 'id' => 'description']) }}
  </div>
  <div class="text-danger" v-html="descriptionTip"></div>

  <div class="form-group">
    {{ Form::submit('Submit', ['class' => 'btn btn-primary', '@click' => 'save']) }}
    <button type="button" class="btn btn-warning pull-right" >Cancel</button>
  </div>
</div>

@section('js')
  <script src="{{ asset('js/backend/campus/detail.vue.js') }}"></script>
@endsection