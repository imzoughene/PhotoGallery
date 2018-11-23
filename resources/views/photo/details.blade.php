@extends("layouts.main")
@section("content")




      <div class="callout primary">
        <article class="grid-container">
          <div class="">
            <a href="/gallery/show/{{$photo->gallery_id}}">Back to Gallery</a>
            <h1>{{$photo->title}}</h1>
            <p class="lead">{{$photo->description}}</p>
            <p>Location : {{$photo->location}}</p>
          </div>
        </article>
      </div>


      <article class="grid-container">
        <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">
          <div class="main">
            <img src="/images/{{$photo->image}}" class="main-img" alt="">
          </div>
        </div>

        <hr>


      </article>
@stop
