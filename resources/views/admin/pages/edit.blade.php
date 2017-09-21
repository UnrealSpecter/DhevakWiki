@extends('main')

@section('title', '| Edit een page')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
 <link rel="stylesheet" href="{{ asset('css/admin/adminEdit.css') }}">
 <link rel="stylesheet" href="{{ asset('css/effectButtons/bubble.css') }}">
@endsection

@section('content')
 <div class="container">
   <div class="row">
     <div class="col-md-1"></div>
       <div class="col-md-10">
         <div class="panel panel-default">
           <div class="panel-heading">Bewerk page: "{{ $page->title }}"</div>
           <div class="panel-body">
             <a href="{{ url('/admin/pages/') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
             <a href="{{ url('/admin/pages/'. $page->id .'/sections/create') }}" title="Back"><button class="btn right-side btn-warning btn-xs">sections <i class="fa fa-arrow-right" aria-hidden="true"></i> </button></a>
             <br>
             <br>

             @if ($errors->any())
               <ul class="alert alert-danger">
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
               </ul>
             @endif



             {!! Form::model($page, ['method' => 'PATCH', 'url' => ['/admin/pages', $page->id], 'class' => 'form-horizontal', 'files' => true,  'enctype' => 'multipart/form-data' ]) !!}
             @section('image')
             @if($page->image)
             <div class="col-md-4">

             </div>
                <div class="col-md-6">
                        <img class="imgborder" width="50%" src="/images/{{ $page->image }}"
                             alt="{{$page->title}}">
                </div>
            @endif
             @endsection
             @include ('partials._form', ['submitButtonText' => 'Update'])

             {!! Form::close() !!}

         </div>
       </div>
     </div>
   </div>
 </div>

 <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js'></script>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js'></script>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js'></script>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js'></script>
 <script src="/js/bubble/index.js"></script>

@endsection
