@extends('backend.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
@endsection

@section('title')
  Notice-index
@endsection

@section('content')
  <h1 class="text-center">Notices</h1>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th></th>
          <th>Title</th>
          <th>Content</th>
          <th>Begin time</th>
          <th>End time</th>
        </tr>
      </thead>
      <tbody>

        @foreach($notices as $key => $notice)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td><a href="{{ url('/admin/notice/' . $notice->id) }}">{{ $notice->title }}</a></td>
            <td class="max-td">{{ $notice->content }}</td>
            <td>{{ $notice->begin_at }}</td>
            <td>{{ $notice->end_at }}</td>
          </tr>
        @endforeach

      </tbody>
    </table>

@endsection