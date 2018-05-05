@extends('backend.app')

@section('title')
  Change Password
@endsection

@section('content')
<h1 class="text-center">Change password</h1>

<div class="row">
  <div class="col-lg-4 col-lg-offset-4">

    {!! Form::open(['url' => '/admin/change-password', 'method' => 'post']) !!}
      <div class="form-group">
        {!! Form::label('Old password') !!}
        {!! Form::password('oldPassword', ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('New password') !!}
        {!! Form::password('newPassword', ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('Retype passwor') !!}
        {!! Form::password('retypePassword', ['class' => 'form-control']) !!}
      </div>

      {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

  </div>
</div>
@endsection