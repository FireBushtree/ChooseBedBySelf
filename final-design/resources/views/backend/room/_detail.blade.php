<div id="detail">
  <div class="form-group">
    {{ Form::label('Apartment') }}
    <select name="apartment_id" class="form-control"  @change="setCurretnApartment">
      <option v-for="(apartment, index) in apartments" :value="apartment.id">@{{ apartment.name }}</option>
    </select>
  </div>

  <div class="form-group">
    {{ Form::label('Name') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
  </div>

  <div class="form-group">
    {{ Form::label('description') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
  </div>

  <div class="form-group">
    {{ Form::label('Max beds') }}
    {{ Form::select('max_beds', $beds, null, ['class' => 'form-control']) }}
  </div>

  <div class="form-group">
    {{ Form::label('Floor') }}
    <select name="floor_id" class="form-control">
      <option v-for="(floor, index) in floorOptions" :value="floor.id">@{{ floor.id }}</option>
    </select>
  </div>

  <div class="form-group">
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
  </div>
</div>

@section('js')
  <script src="{{ asset('js/backend/room/detail.vue.js') }}"></script>
@endsection