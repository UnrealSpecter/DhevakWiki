@extends('main')

@section('title', '| Maak een page')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
 <link rel="stylesheet" href="{{ asset('css/admin/adminCreate.css') }}">
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

                       @if ($errors->any())
                         <ul class="alert alert-danger">
                             @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                             @endforeach
                         </ul>
                       @endif

                       {!! Form::open(['url' => '/admin/pages', 'class' => 'form-horizontal', 'files' => true]) !!}

                       @include ('partials._form')

                       {!! Form::close() !!}

                   </div>
               </div>
           </div>
       </div>
    </div>
 </div>
@endsection
