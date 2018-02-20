<!DOCTYPE html>
<html lang="en">
	<head>


		<meta charset="UTF-8">


		<title>PWP Playground</title>


		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


		<link rel="stylesheet" href="styles.css">


		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


	</head>
	<body>
		<nav class="navbar fixed-bottom navbar-toggleable-md navbar-inverse bg-inverse">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto ">
					<li class="nav-item active">
						<a class="nav-link" href="#"><h3>Home</h3></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#aboutMe"><h3>About Me</h3></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#carousel"><h3>Portfolio</h3></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact-jumbotron"><h3>Contact Me</h3></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><h3>Resume</h3></a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="jumbotron jumbotron-fluid vertical-center" id="landingPage">
			<div class="container text-center">
				<div class="row">
					<div class="col-lg-12">
						<h1 id="header">WHO IS KEN</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="jumbotron jumbotron-fluid vertical-center" id="aboutMe">
			<div class="container">
				<div class="row">
					<div class="col-1">
						<i class="fas fa-quote-left fa-3x"></i>
					</div>
					<div class="col-10">
						<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
					</div>
					<div class="row align-items-end">
						<div class="col-1">
							<i class="fas fa-quote-right fa-3x"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="jumbotron jumbotron-fluid" id="carousel">
			<header>
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<!-- Slide One - Set the background image for this slide in the line below -->
						<div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
							<div class="carousel-caption d-none d-md-block">
									<p class="card card-block border-0 text-muted text-justify">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.

									</p>
								<button class="btn" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-angle-double-down"></i></button>
								<div class="collapse" id="collapseExample">
									<div class="card card-block border-0 text-white text-justify">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
									</div>
								</div>
							</div>
						</div>
						<!-- Slide Two - Set the background image for this slide in the line below -->
						<div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
							<div class="carousel-caption d-none d-md-block">
								<div class="card card-block text-muted">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
								</div>
								<div class="collapse" id="collapseExample2">
									<div class="card card-block text-muted">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
									</div>
								</div>
								<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
									Button with data-target
								</button>
							</div>
						</div>
						<!-- Slide Three - Set the background image for this slide in the line below -->
						<div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
							<div class="carousel-caption d-none d-md-block">
								<p class="card card-block border-0 text-white text-justify`">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
								</p>
								<button class="btn" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-angle-double-down"></i></button>
								<div class="collapse" id="collapseExample3">
									<div class="card card-block border-0 text-white text-justify">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
									</div>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</header>
		</div>

		<div class="box-thing">
			<h1>Contact Me</h1>
			<h4><i class="fas fa-map-marker mr-2"></i>Albuquerque, NM</h4>
			<h4><i class="fas fa-envelope mr-2"></i>wh015k3n@gmail.com</h4>
			<h4><i class="fas fa-mobile mr-2"></i>(505) 238-6850</h4>
			<div class="row text-center">
				<div class="col-3 mt-5">
					<i class="fab fa-linkedin fa-5x"></i>
				</div>
				<div class="col-3 mt-5">
					<i class="fab fa-git-square fa-5x"></i>
				</div>
			</div>
		</div>

		<div class="jumbotron jumbotron-fluid" id="contact-jumbotron">
			<div class="container" id="contact-container">
						<h1>Get in touch!</h1>
						<h3>Feel free to drop me a line below!</h3>
						<form>
							<div class="form-group">
								<input type="text" class="form-control rounded-0 py-3" id="formGroupExampleInput" placeholder="Name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control rounded-0 py-3" id="formGroupExampleInput2" placeholder="E-Mail">
							</div>
							<div class="form-group">
								<textarea type="text" class="form-control rounded-0 py-3" id="formGroupExampleInput2" placeholder="Message"></textarea>
							</div>
							<button type="submit" class="btn btn-secondary py-4 rounded-0"><h5>Send Message</h5></button>
						</form>
					</div>
				</div>

		<footer class="footer">
			<div class="container">
				<span class="text-muted"></span>
			</div>
		</footer>
	</body>
</html>