<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>All Faculty</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/jumbotron.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <!-- Example row of columns -->



      <div class="row">
          @foreach ($faculties as $faculty)
              <div class="col-md-4">
                <h2>{{ $faculty->name }}</h2>
                <img class="img-circle profile-pic" src="/images/profile-140-140.jpg" alt="Generic placeholder image" height="140" width="140">
                <p> Email: {{ $faculty->email }}</p>
                <p> Phone: {{ $faculty->phone }}</p>
                <p><a class="btn btn-default" href="faculty/{{ $faculty->id }}" role="button">View details &raquo;</a></p>
              </div>
          @endforeach
      </div>

      <hr>

      <footer>
        <p>&copy; 2015 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="/js/jquery-2.2.4.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
