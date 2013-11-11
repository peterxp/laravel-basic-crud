<!DOCTYPE html>
<html lang="en">
<head>
    <title>Basic Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{ HTML::style('vendor/twbs/bootstrap/dist/css/bootstrap.css') }}
    {{ HTML::style('assets/css/style.css') }}
</head>
<body>

 <div class="container">

       <nav class="navbar navbar-default col-md-12" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex12-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::route('news.index') }}">iCMS</a>
        </div>
     
        <div class="collapse navbar-collapse navbar-ex12-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ URL::route('news.index') }}">News</a></li>
            <li><a href="#" onclick="alert('Do something as you want');">Log Out</a></li>
          </ul>
        </div>
        </nav>

      <div class="col-md-12 panel panel-default">

        <!-- ต่อไปนี้นะ พวกเนื้อหา Dynamic ต่างๆ คือใส้ในของ หน้าต่างๆ จะมาโผลภายไต้ template นี้นะ -->
        @yield('content')
        
      </div>
  </div>

  {{ HTML::script('assets/js/jquery.min.js') }}
  {{ HTML::script('vendor/twbs/bootstrap/dist/js/bootstrap.min.js') }}
</body>
</html>