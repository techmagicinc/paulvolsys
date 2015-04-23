
<html>
    <head>
        <title>Search</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">


    </head>
    <body>

        <nav class="navbar navbar-default nav wrap" role="navigation">

  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="http://localhost/img/wayfree.png" alt="">
   <!--    <a class="navbar-brand" href="#">Brand</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="timestamp.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="index.php">Admin Login</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Volunteer Services <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="New_Volunteer.php">New User Registration</a></li>
            <li><a href="contactform.html">Contact Administrator</a></li>
            <li><a href="edit_time.php">Profile Management</a></li>
            <li><a href="reportscript.php">Reporting</a></li>
            <!-- <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
      </ul>
  

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
        <div class="col-lg-4 col-lg-offset-4">
            <div class="form-group">
                <input type="text" id="search-input" class="form-control" placeholder="Search" onkeydown="down()" onkeyup="up()">
            </div>
            <div class="col-lg-12" id="search-results">
                 
            </div>
        </div>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="{{asset('js/search.js')}}"></script>
    </body>
</html>