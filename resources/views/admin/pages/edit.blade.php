@extends('main')

@section('title', '| Edit een page')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/admin/adminEdit.css') }}">
@endsection

@section('content')
 <div class="container">
   <div class="row">
     <div class="col-md-1"></div>
       <div class="col-md-10">
         <div class="panel panel-default">
           <div class="panel-heading">Bewerk page: "{{ $page->title }}"</div>
           <div class="panel-body">
             <a href="{{ url('/admin/') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
             <a href="{{ url('/sections/' . $page->id . '/edit' ) }}" title="sections"><button class="btn btn-warning right-side btn-xs">Sections <i class="fa fa-arrow-right" aria-hidden="true"></i> </button></a>
             <br>
             <br>

             @if ($errors->any())
               <ul class="alert alert-danger">
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
               </ul>
             @endif

             {!! Form::model($page, ['method' => 'PATCH', 'url' => ['/admin', $page->id], 'class' => 'form-horizontal', 'files' => true ]) !!}

             @include ('partials._form', ['submitButtonText' => 'Update'])

             {!! Form::close() !!}

         </div>
       </div>
     </div>
   </div>
 </div>
@endsection
