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


                   </div>
               </div>
           </div>
       </div>
    </div>
 </div>
@endsection
