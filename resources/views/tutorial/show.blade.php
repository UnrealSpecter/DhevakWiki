@extends('main')

@section('title', '| Show Tutorial')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/tutorial/showTutorial.css') }}">
@endsection

@section('content')

<a href="{{ url('admin/pages/'. $page->id .'/sections/'. $section->id .'/tutorial/edit') }}" title="Back"><button class="btn left-side btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> edit</button></a>

{!! $section->tutorial->content !!}

@endsection
