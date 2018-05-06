@extends('app')

@section('title')
  Login
@endsection

@section('content')
  <h1 class='text-center'>Login</h1>

  <div class="row">
    <div class="col-lg-4 col-lg-offset-4" id="login">

      @if(isset($msg))
        <div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            &times;
          </button>
          {!! $msg !!}
        </div>
      @endif

      {!! Form::open(['url' => '/admin/login', 'method' => 'post', '@submit' => 'login']) !!}
        <div class="form-group">
          {!! Form::label('Username') !!}
          {!! Form::text('name', null, ['class' => 'form-control','v-model' => 'name', '@blur' => 'checkName']) !!}
        </div>
        <span class="text-danger" v-html="nameTip"></span>

        <div class="form-group">
          {!! Form::label('Password') !!}
          {!! Form::password('password', ['class' => 'form-control', 'v-model' => 'password', '@blur' => 'checkPassword']) !!}
        </div>
        <span class="text-danger" v-html="passwordTip"></span>

        <div class="form-group">
          {!! Form::checkbox('rememberMe', 'remember', ['v-model' => 'rememberMe']) !!}
          {!! Form::label('Remember me')!!}
        </div>

        <div class="form-group">
          {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection

@section('js')
  <script src="{{ asset('js/backend/admin/login.vue.js') }}"></script>
@endsection