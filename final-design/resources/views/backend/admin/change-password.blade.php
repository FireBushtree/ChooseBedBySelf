@extends('backend.app')

@section('title')
  Change Password
@endsection

@section('content')
<h1 class="text-center">Change password</h1>

<div class="row" id="changePassword">
  <div class="col-lg-4 col-lg-offset-4">

    {!! Form::open(['method'=>'post', '@submit' => 'changePassword']) !!}
      <div class="form-group">
        {!! Form::label('Old password') !!}
        {!! Form::password('oldPassword', ['class' => 'form-control', 'v-model' => 'oldPassword', '@blur' => 'checkOldPassword']) !!}
      </div>
      <span class="text-danger" v-html="oldPasswordTip"></span>

      <div class="form-group">
        {!! Form::label('New password') !!}
        {!! Form::password('newPassword', ['class' => 'form-control', 'v-model' => 'newPassword', '@blur' => 'checkNewPassword']) !!}
      </div>
      <span class="text-danger" v-html="newPasswordTip"></span>

      <div class="form-group">
        {!! Form::label('Retype password') !!}
        {!! Form::password('retypePassword', ['class' => 'form-control', 'v-model' => 'retypePassword', '@blur' => 'checkRetypePassword']) !!}
      </div>
      <div class="text-danger" v-html="retypePasswordTip"></div>

      {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
</div>
@endsection

@section('js')
  <script src="{{ asset('js/backend/admin/change-password.vue.js') }}"></script>
@endsection