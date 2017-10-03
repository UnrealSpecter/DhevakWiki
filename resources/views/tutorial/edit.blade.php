@extends('main')

@section('title', '| Edit Tutorial')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/tutorial/editTutorial.css') }}">
@endsection
