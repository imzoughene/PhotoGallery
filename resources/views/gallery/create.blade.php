@extends("layouts.main")
@section("content")




      <div class="callout primary">
        <article class="grid-container">
          <div class="">
            <h1>Create Gallery.</h1>
            <p class="lead">Create a gallery and start uploading.</p>
          </div>
        </article>
      </div>


      <article class="grid-container">
        <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">
          <div class="main">
            {!! Form::open(array("action"=>"GalleryController@store","enctype"=>"multipart/form-data")) !!}
            {!! Form::label("name","Name") !!}
            {!! Form::text("name",$value=null,$attributes=["placeholder"=>"Gallery Name","name"=>"name"]) !!}


            {!! Form::label("description","Description") !!}
            {!! Form::text("description",$value=null,$attributes=["placeholder"=>"Gallery Description","name"=>"description"]) !!}

            {!! Form::label("cover_image","Cover Image") !!}
            {!! Form::file("cover_image") !!}

            {!! Form::submit("Submit",$attributes=["class"=>"button"]) !!}

            {!! Form::close() !!}
          </div>
        </div>

        <hr>


      </article>
@stop
