@extends('main')

@section('title', '| Maak Tutorial')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/tutorial/createTutorial.css') }}">
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

  <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'link image imagetools codesample',
        toolbar: "formatselect | bold italic strikethrough forecolor backcolor | image link codesample | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
        menubar: false,
        branding: false
      });
  </script>
@endsection

@section('content')

  {!! Form::open(array('action' => array('Backend\\TutorialController@store',$page->id, $section->id))) !!}
    {{ Form::textarea('content', null, ['class' => 'form-control']) }}
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Creër', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}

@endsection
