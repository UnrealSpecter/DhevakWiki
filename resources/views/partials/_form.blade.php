<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Titel', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control', 'required' => '',
        'minlength' => '5', 'maxlength' => '50', 'data-parsley-required-message' => "vul dit wel even in",
         'data-parsley-trigger' => "change"]) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('slug', 'slug', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('slug', null, ['class' => 'form-control', 'required' => '',
        'minlength' => '5', 'maxlength' => '100', 'data-parsley-required-message' => "vul dit wel even in",
        'data-parsley-trigger' => "change"]) !!}
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
  
  @yield('image')
    {!! Form::label('image', 'Thumbnail', ['class' => 'col-md-4 control-label']) !!}
   <div class="col-md-6">
        {!! Form::file('image', ['class' => 'form-control btn btn-default btn-file', 'required' => '',
        'data-parsley-required-message' => "uploud wel even een image", 'data-parsley-max-file-size' => '2048',
        'data-parsley-trigger' => "change"]) !!}
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Beschrijving', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => '',
        'minlength' => '5', 'data-parsley-required-message' => "vul dit wel even in", 'data-parsley-trigger' => "change"]) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
  {{ Form::label('category', 'Categorie', ['class' => 'col-md-4 control-label']) }}
    <div class="col-md-6">
        <select class="form-control" id="category" name="category_id">
            @foreach($categories as $category)
                <option value='{{ $category->id }}'>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
      <span class="button--bubble__container">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Creër', ['class' => 'button button--bubble']) !!}
        <span class="button--bubble__effect-container">
          <span class="circle top-left"></span>
          <span class="circle top-left"></span>
          <span class="circle top-left"></span>

          <span class="button effect-button"></span>

          <span class="circle bottom-right"></span>
          <span class="circle bottom-right"></span>
          <span class="circle bottom-right"></span>
        </span>
        </span>
    </div>
</div>
