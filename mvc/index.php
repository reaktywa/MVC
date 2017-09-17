<html>
	<head>
		<title>MVC by Grzegorz Ociepka</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.html">Grzegorz Ociepka</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li> <li class="dropdown">

			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login via

								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
										</div></br>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>

								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="#"><b>Join Us</b></a>
							</div>
					 </div>
				</li>
			</ul></li>

				</ul>
			</nav>

		<!-- Banner -->
		<section id="banner">

			<h2>Framework </h2>

		</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">

<?php
	//print_r($_GET);
	$controllerClassName = $_GET['c'];
	$functionName = $_GET['f'];
	//$parameters = array_slice($_GET, 2, 2);
	//echo "controllerClassName=$controllerClassName functionName=$functionName";

	include ".\\controllers\\" . $controllerClassName . ".php";
	$controller = new $controllerClassName();
    $controller->$functionName();

	$tab = $_GET = array();

?>

</div>
</section>

<section id="four" class="wrapper style2 special">
	<div class="inner">
		<header class="major narrow">
			<h2>Paginacja</h2>

			<div class="container">
			    <div class="paginate" style="width:600px"><!-- remove width id you don't need it-->
			        <ul class="pagination">

<a href="/MVC/mvc/index.php?c=NewsController&f=test&OD=1&DO=5#" class="button">1</a>
<a href="/MVC/mvc/index.php?c=NewsController&f=test&OD=6&DO=10#" class="button">2</a>
<a href="/MVC/mvc/index.php?c=NewsController&f=test&OD=11&DO=15#" class="button">3</a>



        </ul>
        <div class="clearfix"></div>
      </div>
</div>

		</header>
		<form action="#" method="POST">
			<div class="container 75%">

			</div>
		</form>
	</div>
</section>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>
