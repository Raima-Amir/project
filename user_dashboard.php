<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>

<?php include('includes/links.php'); ?>

</head>

<body>

<div id="home">
		<!-- top header -->
		<header>
			<div class="top-bar py-3">
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-6 col-md-8 top-social-agile text-lg-left text-center">
							<div class="row">
								<div class="col-4 header-top_w3layouts">
									<p class="text-bl">
										<span class="fa fa-map-marker mr-2"></span>Parma Via, Italy
									</p>
								</div>
								<div class="col-4 header-top_w3layouts">
									<p class="text-bl">
										<span class="fa fa-phone mr-2"></span>+1 000263676
									</p>
								</div>
								<!-- social icons -->
								<ul class="col-4 top-right-info">
									<li>
										<a href="#">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li class="mx-3">
										<a href="#">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="fa fa-google-plus"></span>
										</a>
									</li>
									<li class="ml-3">
										<a href="#">
											<span class="fa fa-pinterest-p"></span>
										</a>
									</li>
								</ul>
								<!-- //social icons -->
							</div>
						</div>
						<div class="col-xl-7 col-lg-6 col-md-4 top-social-agile text-md-right text-center mt-md-0 mt-2">
							<div class="row">
								<div class="offset-xl-6 offset-lg-4">
								</div>
								<div class="col-xl-3 col-lg-4 col-6 top-w3layouts p-md-0 text-right">
									<!-- login -->
									<a href="admin/login.php" class="login-button-2 text-uppercase text-bl">
										<span class="fa fa-sign-in mr-2"></span>Logout</a>
									<!-- //login -->
								</div>
								<div class="col-xl-3 col-lg-4 col-6 header-w3layouts text-md-right text-left">
									<!-- register -->
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- //top header -->

		<!-- second header -->
		<div class="main-top">
			<div class="container">
				<div class="header d-md-flex justify-content-between align-items-center py-3">
					<!-- logo -->
					<div id="logo">
						<h1>
							<a href="admin/index.html">
								<span class="fa fa-user-md mr-2"></span>
								<span class="logo-sp">Be</span> Clinic
							</a>
						</h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="admin/index.php" class="active">Dashboard</a></li>
                                <li><a href="admin/index.php" >View Appoinment</a></li> 
                                <li><a href="admin/index.php">View Treatment</a></li>
								<li><a href="admin/index.php">Reports</a></li>
                                
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</div>
		<!-- //second header -->
    


	</div>

<?php include('includes/footer.php'); ?>


</body>
</html>