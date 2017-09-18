@extends('main')

@section('title', '| Edit een Section')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
 <link rel="stylesheet" href="{{ asset('css/sections/sectionsEdit.css') }}">
@endsection

@section('content')
 <div class="tabcontent" style="display: block;">
     <div class="col-md-1"></div>
         <div class="col-md-10">
             <div class="panel panel-default">
                 <div class="panel-heading">edit hier een section.</div>
                    <div class="panel-body">
                       <a href="{{ url('/admin/pages/'. $page->id .'/sections/show') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
                       <br />
                       <br />
                       <div class="table-responsive">
                         <table class="table table-borderless">
                           <tbody>
                             <tr>
                               <th> edit section form </th>
                               <td> flinke section form</td>
                             </tr>
                           </tbody>
                         </table>
                       </div>

                   </div>
               </div>
           </div>
       </div>
    </div>
 </div>
@endsection
