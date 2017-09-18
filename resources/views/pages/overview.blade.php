@extends('main')

@section('title', '| De overview')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/overview.css') }}">
@endsection

@section('content')
  <a href="{{ url('/admin/pages/create') }}" class="btn btn-success btn-block createbutton" title="Niewe page"><i class="fa fa-plus" aria-hidden="true"></i></a>
  <div class="container">
  <div class="row breede justify-content-center ">
    @foreach($pages as $page)
      <div class="card page padding-remove margin-top">
        {!! Form::open(['method'=>'DELETE',
          'url' => ['/admin/pages', $page->id],
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
        <a href="{{ url('/admin/pages/' . $page->id) }}">
          <img class="card-img-top img-responsive" width="100%" src="{{ asset('images/' . $page->image) }}" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">{{ str_limit($page->title, 20) }}</h4>
            <p class="card-text ">{{ str_limit($page->description, 40) }}</p>
            <p class="card-text"><small class="text-muted">{{ str_limit($page->category->name, 30) }}</small>
            <a href="{{ url('/admin/pages/' . $page->id . '/edit') }}" title="Edit Page" class="offset-md-11 editding"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></p>
          </div>
        </a>
      </div>
    @endforeach
  </div>
  </div>
  <div class="container">
    <div class="row breede justify-content-center">
      {!! $pages->links() !!}
    </div>
  </div>
@endsection
