@extends('main')

@section('title', '| Maak een page')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
 <link rel="stylesheet" href="{{ asset('css/admin/adminCreate.css') }}">
 <link rel="stylesheet" href="{{ asset('css/effectButtons/bubble.css') }}">
@endsection

@section('content')
 <div class="tabcontent" style="display: block;">
     <div class="col-md-1"></div>
         <div class="col-md-10">
             <div class="panel panel-default">
                 <div class="panel-heading">Maak hier een nieuwe page.</div>
                    <div class="panel-body">
                       <a href="{{ url('/admin/pages') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
                       <br />
                       <br />

                       {!! Form::open(['url' => '/admin/pages', 'class' => 'form-horizontal', 'files' => true, 'data-parsley-validate' => '']) !!}

                       @include ('partials._form')

                       {!! Form::close() !!}

                   </div>
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
