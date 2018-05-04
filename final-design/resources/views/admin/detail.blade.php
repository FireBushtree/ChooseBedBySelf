<div>
  <div class="row">
    <label class="col-lg-2">Username</label>
    <div class="col-lg-10">{!! $user->name !!}</div>
  </div>

  <div class="row">
    <label class="col-lg-2">Telephone Number</label>
    <div class="col-lg-10">{!! $user->telephone_num !!}</div>
  </div>

  <div class="row">
    <label class="col-lg-2">E-mail</label>
    <div class="col-lg-10">{!! $user->email !!}</div>
  </div>

  <div class="row">
    <label class="col-lg-2">Created time</label>
    <div class="col-lg-10">{!! $user->created_at !!}</div>
  </div>
</div>

<div class="row">
    {!! Form::open(['url' => 'saveDetail', 'method' => 'post', 'class' => 'form-horizontal']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Username', ['class' => 'col-lg-2']) !!}
        <div class="col-lg-4">
          {!! Form::text('name', $user->name, ['class' => 'form-control'])!!}
        </div>
      </div>
    {!! Form::close() !!}
</div>