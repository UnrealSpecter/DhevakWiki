@extends('main')

@section('title', '| Home')

@section('brand')
{{ url('/') }}
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
@endsection

@section('content')
  <div class="container">
  <div class="row breede justify-content-center">
    @foreach($pages as $page)
      <a href="{{ url('tutorial/' . $page->slug) }}">
        <div class="card page padding-remove margin-top">
          <img class="card-img-top img-responsive" width="100%" src="{{ asset('images/' . $page->image) }}" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">{{ str_limit($page->title, 20) }}</h4>
            <p class="card-text ">{{ str_limit($page->description, 200) }}</p>
            <p class="card-text"><small class="text-muted">{{ str_limit($page->category->name, 30) }}</small></p>
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
