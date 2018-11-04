@extends("layouts.main")
@section("content")




      <div class="callout primary">
        <article class="grid-container">
          <div class="">
            <a href="/">Back to galleries</a>
            <h1>{{$gallery->name}}</h1>
            <p class="lead">{{$gallery->description}}</p>
          </div>
        </article>
      </div>


      <article class="grid-container">
        <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">

        </div>

        <hr>


      </article>
@stop
