@extends('main')

@section('title', '| Edit een Section')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
 <link rel="stylesheet" href="{{ asset('css/sections/sectionsEdit.css') }}">
@endsection

@section('content')
<div class="container margin-top">
  <div class="row ">
    <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="panel panel-default">
          <div class="panel-heading">Page: {{ $page->title }}</div>
          <div class="panel-body">
            <a href="{{ url('/admin/pages/'. $page->id . '/sections') }}" title="Back"><button class="btn left-side btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
            <br>
            <div class="table-responsive">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                  </tr>
                  <tr>


                                 {!! Form::model($section, ['method' => 'PATCH', 'url' => ['/admin/pages', $page->id, 'sections', $section->id], 'class' => 'form-horizontal', 'files' => true,  'enctype' => 'multipart/form-data' ]) !!}
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                        {!! Form::label('name', 'section:', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('name', null, ['class' => 'form-control', 'required' => '',
                            'minlength' => '5', 'maxlength' => '50', 'data-parsley-required-message' => "vul dit wel even in",
                             'data-parsley-trigger' => "change"]) !!}
                             {{ Form::submit('edit section', ['class' => 'btn btn-primary btn-block margin-top']) }}
                            {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                     {!! Form::close() !!}
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
