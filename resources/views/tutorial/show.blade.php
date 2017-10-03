@extends('main')

@section('title', '| Show Tutorial')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/tutorial/showTutorial.css') }}">
@endsection
