<html>
	<head>	
	<title>Search</title>
	 <script src="<?php echo asset('js/jquery.js');?>"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo asset('css/style.css');?>" type="text/css" >
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
        <li class="active"><a href="/">Home<span class="sr-only">(current)</span></a></li>
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
</head>
<body>
  <form class="form-horizontal" role="form">
	<div class="col-lg-6 col-lg-offset-6">
			<div class="form-group">
       
				<input type="text" id="search-input" class="form-control" placeholder="Search" onkeydown="down()" onkeyup="up()">
		
    </div>
		<div class="col-lg-12" id="search-results">

		</div>
</form>
	</div>

	
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="{{asset('js/search.js')}}"></script>
</body>
</html>