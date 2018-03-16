<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/4.0/examples/album/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body>

    <header>
       @include ('layouts.nav')
    </header>

    @if ($flash = session("message"))
    <div id="flash-message" class="alert alert-success" role="alert">
        {{ $flash }}
    </div>
    @endif

    <main role="main">
      	<div class="container">
          <div class="blog-header">
          <h1 class="blog-title">The Bootstrap Blog</h1>
          <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
        </div>
        <div class="row">
      		@yield('content')
          @include('layouts.sidebar')
        </div>
      </div>
    </main>

    @include ('layouts.footer')

    </body>
</html>