@extends('main')

@section('title', '| Toekomstige sections')

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
            <div class="whitespace">
            <a href="{{ url('/admin/pages/' . $page->id . 'sections/edit') }}" title="Edit Post"><button class="btn btn-primary btn-center btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Bewerken</button></a>
            {!! Form::open([
              'method'=>'DELETE',
              'url' => ['admin/pages', $page->id],
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
            </div>
            <br>
            <div class="table-responsive">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <th> section lijst </th>
                    <td> flinke section </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
