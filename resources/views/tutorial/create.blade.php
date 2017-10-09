@extends('main')

@section('title', '| Maak Tutorial')

@section('brand')
{{ url('/admin/pages') }}
@endsection

@section('style')
  <link rel="stylesheet" href="{{ asset('css/tutorial/createTutorial.css') }}">
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

  <script>
  var editor_config = {
  path_absolute : "{{ URL::to('/') }}/",
        selector: 'textarea',
        plugins: 'link image imagetools codesample advlist autolink lists charmap print preview hr anchor pagebreak searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking save table contextmenu directionality emoticons template paste textcolor colorpicker textpattern',
        toolbar: "formatselect | bold italic strikethrough forecolor backcolor | image media link codesample | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
        menubar: false,
        branding: false,
        file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
   };

   tinymce.init(editor_config);
  </script>
@endsection

@section('content')

  {!! Form::open(array('action' => array('Backend\\TutorialController@store',$page->id, $section->id))) !!}
    {{ Form::textarea('content', null, ['class' => 'form-control']) }}
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Creër', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}

@endsection
