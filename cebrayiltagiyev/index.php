
index.php
<?
  include 'connection.php';

  $select = "SELECT * from menu";
  $result = $con->query($select);


  $text = "SELECT * from metn";
 
  $result_metn = $con->query($text);

?>

<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Spectral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Spectral</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
									  <? while($row = mysqli_fetch_assoc($result)) {?>
                                             <li class="nav-item active">
                                         		 <a class="nav-link" href="#hero-area"> <?= $row['menu'] ?></a>
                            					</li>

            						  <? } ?>
											<!-- <li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Generic</a></li>
											<li><a href="elements.html">Elements</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li> -->


										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Spectral</h2>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<? while($mtn = mysqli_fetch_assoc($result_metn)) {?>
									<p>
                                             <?= $mtn['text'] ?>
                            					</p>

            						  <? } ?>

								<!-- <h2>Arcu aliquet vel lobortis ata nisl<br />
								eget augue amet aliquet nisl cep donec</h2>
								<p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
								fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p> -->
							</header>
							<ul class="icons major">
								<li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>
								<li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
								<li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
							</ul>
						</div>
					</section>



				<!-- CTA -->
			
					</section>

				

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>