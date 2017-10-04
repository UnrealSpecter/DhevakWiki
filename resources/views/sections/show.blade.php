@extends('main')

@section('title', '| sections')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/sections/sectionsShow.css') }}">
@endsection

@section('content')

<div class="container margin-top">
  <div class="row ">
    <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="panel panel-default">
          <div class="panel-heading">Page: {{ $page->title }}</div>
          <div class="panel-body">
            <a href="{{ url('/admin/pages/'. $page->id) }}" title="Back"><button class="btn left-side btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
            <br>
            <div class="table-responsive">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <th> section lijst </th>
                    <td> acties </td>
                  </tr>@foreach($page->sections as $section)
                  <tr>
                    <td>{{$section->name}}</td>
                    <td><a href="{{ url('/admin/pages/' . $page->id . '/sections/'. $section->id .'/edit') }}" title="bewerk section"><button class="btn btn-primary btn-center btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Bewerken</button></a>
                      {!! Form::open([
                        'method'=>'DELETE',
                        'url' => ['/admin/pages/'. $page->id .'/sections/'. $section->id],
                        'style' => 'display:inline',
                        'class' => 'btn-center'
                        ])
                      !!}
                      {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Verwijderen', array(
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-xs',
                        'title' => 'Delete Post',
                        'onclick'=>'return confirm("Wilt u deze verwijderen?")'
                        ))
                      !!}
                      {!! Form::close() !!}
                    <a href="{{ url('/admin/pages/' . $page->id . '/sections/'. $section->id .'/tutorial') }}" title="show tutorial"><button class="btn btn-info btn-center btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Bekijk Tutorial</button></a>
                    <a href="{{ url('/admin/pages/' . $page->id . '/sections/'. $section->id .'/tutorial/create') }}" title="maak tutorial"><button class="btn btn-success btn-center btn-xs"><i class="fa fa-plus" aria-hidden="true"></i> Maak Tutorial</button></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
