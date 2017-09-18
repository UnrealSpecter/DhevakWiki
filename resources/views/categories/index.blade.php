@extends('main')

@section('title', '| Alle Categories')

@section('brand')
{{ url('/admin') }}
@endsection

@section('style')
 <link rel="stylesheet" href="{{ asset('css/categories/category.css') }}">
@endsection

@section('content')
  <div class="row padding-top">
    <div class="col-md-5 col-md-offset-1">
      <a href="{{ url('/admin/') }}" title="Back"><button class="btn btn-warning btn-xs padding-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
      <h1>Categorieën</h1>
      <table class="table">
        <thead>
          <tr>
            <th>categorie naam</th>
            <th style="float:right;">actie</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
          <tr>
            <td>{{ $category->name }}</td>
            <td>
              {!! Form::open(['method'=>'DELETE',
                'url' => ['/category', $category->id],
                'style' => 'display:inline'
                ])
              !!}
              {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> ', array(
                'type' => 'submit',
                'class' => 'offset-md-10 text-right deleteknop',
                'title' => 'Delete Category',
                'onclick'=>'return confirm("Wilt u deze categorie verwijderen?")'
                ))
              !!}
              {!! Form::close() !!}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-2"></div>
      <div class="col-md-3 padding-top-more">
        <div class="well">
          {!! Form::open(['route' => 'category.store', 'method' => 'POST']) !!}
            <h2>nieuwe categorie</h2>
            {{ Form::label('name', 'Categorie:') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
            {{ Form::submit('maak nieuwe categorie', ['class' => 'btn btn-primary btn-block margin-top']) }}
          {!! Form::close()!!}
        </div>
      </div>
  </div>

@endsection
