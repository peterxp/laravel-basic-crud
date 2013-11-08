<!DOCTYPE html>
<html lang="en">
<head>
    <title>iCMS::Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{ HTML::style('vendor/twbs/bootstrap/dist/css/bootstrap.css') }}
    {{ HTML::style('assets/css/style.css') }}
</head>
<body>

<div class="container">  
  <div class="col-md-12 panel panel-default">
    @yield('content')
  </div>
</div>

  {{ HTML::script('assets/bootstrap/js/jquery.min.js') }}
  {{ HTML::script('assets/bootstrap/js/bootstrap.min.js') }}
</body>
</html>