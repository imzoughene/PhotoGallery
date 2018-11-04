<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Imzoughene PhotoGallery</title>
    <link rel="stylesheet" href="/css/foundation.min.css">
    <link rel="stylesheet" href="/css/app.css">

  </head>
  <body>

    <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas>
      <div class="grid-y grid-padding-x" style="height: 100%;">
        <br>

        <div class="cell auto">
          <h5>Main menu</h5>
          <ul class="side-nav">
            <li> <a href="/">Home</a> </li>
            <li> <a href="/login">Login</a> </li>
            <li> <a href="/register">Register</a> </li>
            <li> <a href="/gallery/create">Create Gallery</a> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="off-canvas-content" data-off-canvas-content>
      <div class="title-bar hide-for-large">
        <div class="title-bar-left">
          <button class="menu-icon" type="button" data-toggle="my-info"></button>
          <span class="title-bar-title">Mike Mikerson</span>
        </div>
      </div>
    @if(Session::has("message"))
      <div  data-alert class="alert-box">
        {{Session::get("message")}}
      </div>
    @endif
    @yield("content")
    <script type="text/javascript" src="/js/vendor/jquery.js"></script>
    <script type="text/javascript" src="/js/vendor/what-input.js"></script>

    <script type="text/javascript" src="/js/vendor/foundation.min.js"></script>
    <script type="text/javascript">
      $("document").foundation();
    </script>
    <script type="text/javascript" src="/js/app.js"></script>

  </body>
</html>
