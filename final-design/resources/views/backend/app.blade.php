<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
  @yield('css')
  <title>@yield('title')</title>
</head>
<body>
  @include('util.nav')
  @yield('header')

  <div class="container" id="content">
    @if(session('msg'))
      <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">
                &times;
            </button>
            {!! session('msg') !!}
          </div>
        </div>
      </div>
    @endif

    @if(session('tip'))
      <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
          <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">
                &times;
            </button>
            {!! session('tip') !!}
          </div>
        </div>
      </div>
    @endif

    @yield('content')
  </div>

  <script src="{{asset('js/vue.js')}}"></script>
  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/axios.min.js')}}"></script>
  <script src="{{asset('js/common.js')}}"></script>
  <script src="{{asset('js/backend/nav.vue.js')}}"></script>
  @yield('js')
</body>
</html>