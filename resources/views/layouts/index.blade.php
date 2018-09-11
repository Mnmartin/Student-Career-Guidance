
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Mmust Career Guidance</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#">Dashboard</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Mmust Career Guidance</a>
          </div>
      
        </div>
      </header>

      
    </div>
<hr>
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
         

          <div class="blog-post">
            @if(count($courses)>0)
            @foreach($courses->all() as $cat)
            <h2 class="blog-post-title">{{$cat->course}}</h2>
            <p class="blog-post-meta">Course Description  <a href="#">{{$cat->criteria}}</a> </p>
            @endforeach
            @endif

            <p>{{$cat->description}}.</p>
            <hr>
          </div>
           <div class="blog-post">
            @foreach($guidances as $guide)
            <p><a href="#">Course Significance </a>:{{$guide->advantage}}.</p>
            <blockquote>
              @endforeach
              <p><a href="#">Course Limitation</a>:{{$guide->demerit}}.</p>
            </blockquote>
             <h3 class="blog-post-title">Application Areas</h3>
            <p><em>{{$guide->application}}</em>.</p>
            
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
             @if(count($courses)>0)
            @foreach($courses->all() as $cat)
            <h4 class="font-italic">Course Requirement</h4>
            <p class="mb-0"><em>{{$cat->requirement}}</em>.</p>
            @endforeach
            @endif
          </div>

          <div class="p-3">
            @if(count($categories)>0)
            @foreach($categories->all() as $cate)
            <h4 class="font-italic">Course Category</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">{{$cate->category}} </a></li>
             
            </ol>
            @endforeach
            @endif
          </div>

        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
