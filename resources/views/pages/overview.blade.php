@extends('main')

@section('title', '| De overview')

@section('brand')
{{ url('/admin') }}
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/overview.css') }}">
@endsection

@section('content')
  <a href="{{ url('/admin/create') }}" class="btn btn-success btn-block createbutton" title="Niewe page"><i class="fa fa-plus" aria-hidden="true"></i></a>
  <h1 class="display-3 padding-top padding-bottom logo">Dhévak</h1>
  <div class="row col-md-12 justify-content-center spacing-top just">
    @foreach($pages as $page)
      <div class="card col-md-3 offset-md-1 padding-remove margin-top">
        {!! Form::open(['method'=>'DELETE',
          'url' => ['/admin', $page->id],
          'style' => 'display:inline'
          ])
        !!}
        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> ', array(
          'type' => 'submit',
          'class' => 'offset-md-10 text-right deleteknop',
          'title' => 'Delete Page',
          'onclick'=>'return confirm("Wilt u dit blokje verwijderen?")'
          ))
        !!}
        {!! Form::close() !!}
        <a href="{{ url('/admin/' . $page->id) }}">
          <img class="card-img-top img-responsive" width="100%" src="{{ asset('images/' . $page->image) }}" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">{{ str_limit($page->title, 20) }}</h4>
            <p class="card-text ">{{ str_limit($page->description, 200) }}</p>
            <p class="card-text"><small class="text-muted">{{ str_limit($page->category->name, 30) }}</small>
            <a href="{{ url('/admin/' . $page->id . '/edit') }}" title="Edit Page" class="offset-md-11 editding"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></p>
          </div>
        </a>
      </div>
    @endforeach
  </div>
  <div class="col-md-6 offset-md-6 spacing-top">
    <div class="text-center">
      {!! $pages->links() !!}
    </div>
  </div>
@endsection
