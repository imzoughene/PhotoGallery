@extends("layouts.main")
@section("content")




      <div class="callout primary">
        <article class="grid-container">
          <div class="">
            <a href="/">Back to galleries</a>
            <h1>{{$gallery->name}}</h1>
            <p class="lead">{{$gallery->description}}</p>
            <a class="button btn-upload" href="/photo/create/{{$gallery->id}}">
              Upload Photo
            </a>
          </div>
        </article>
      </div>


      <article class="grid-container">
        <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">
          <?php foreach ($photos as $photo) : ?>
            <div class="column">
              <a href="/photo/details/{{$photo->id}}">
                <img src="/images/{{$photo->image}}" alt="" class="thumbnail">
              </a>
              <h5>{{$photo->title}}</h5>
              <p>{{$photo->description}}</p>
            </div>
          <?php endforeach; ?>
        </div>

        <hr>


      </article>
@stop
