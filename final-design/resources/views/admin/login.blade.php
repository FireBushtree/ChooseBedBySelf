@extends('app')

@section('title')
  Login
@endsection

@section('content')
  <h1 class='text-center'>Login</h1>

  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">

      @if(isset($msg))
        <div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismis="alert" aria-hidden="true">
            &times;
          </button>
          {!! $msg !!}
        </div>
      @endif

      {!! Form::open(['url' => '/admin/login', 'method' => 'post']) !!}
        <div class="form-group">
          {!! Form::label('Username') !!}
          {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Password') !!}
          {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::checkbox('rememberMe') !!}
          {!! Form::label('Remember me')!!}
        </div>

        <div class="form-group">
          {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection