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

  @yield('header')

  <div class="container" id="content">
    @yield('content')
  </div>

  <script src="{{asset('js/vue.js')}}"></script>
  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  @yield('js')
</body>
</html>