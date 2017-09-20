@extends('main')

@section('title', '| Maak een Section')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
 <link rel="stylesheet" href="{{ asset('css/sections/sectionsCreate.css') }}">
@endsection

@section('content')
 <div class="tabcontent" style="display: block;">
     <div class="col-md-1"></div>
         <div class="col-md-10">
             <div class="panel panel-default">
                 <div class="panel-heading">Maak hier een nieuwe section.</div>
                    <div class="panel-body">
                       <a href="{{ url('/admin/pages/'. $page->id .'/edit') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
                       <br />
                       <br />
                       <div class="col-md-2"></div>
                         <div class="col-md-3 padding-top-more">
                           <div class="well">
                             {!! Form::open(['url' => '/admin/pages/ '.$page->id .'/sections', 'method' => 'POST']) !!}
                               <h2>nieuwe categorie</h2>
                               {{ Form::label('name', 'section:') }}
                               {{ Form::text('name', null, ['class' => 'form-control', 'minlength' => '5']) }}
                               {{ Form::submit('maak nieuwe section', ['class' => 'btn btn-primary btn-block margin-top']) }}
                             {!! Form::close()!!}
                           </div>
                         </div>

                   </div>
               </div>
           </div>
       </div>
    </div>
 </div>
@endsection
