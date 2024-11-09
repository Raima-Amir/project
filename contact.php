<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>

<?php include('includes/links.php'); ?>

</head>

<body>

<?php include('includes/Header.php'); ?>
<div class="main-banner-2">

		</div>
<div class="contact-w3l py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-sm-5 mb-4">
				<h6 class="w3ls-title-sub">Get In Touch</h6>
				<h3 class="w3ls-title text-uppercase text-bl font-weight-bold">Contact Us</h3>
			</div>
			<div class="row pt-md-0">
				<div class="col-lg-6 contact-agileits-w3layouts">
					<h4 class="contact-title text-uppercase text-bl mb-sm-4 mb-3">Our Address</h4>
					<h5 class="font-weight-light text-bl">If you have any questions about the services we provide simply use the
						form below. We try and respond to all queries
						and comments within 24 hours.</h5>
					<div class="midd-contact my-xl-5 my-4 pl-4 border-left">
						<h6 class="text-bl mb-2">Address &amp; Direction:</h6>
						<p></p>
					</div>
					<p class="para-agileits-w3layouts">
						<i class="fa fa-map-marker pr-3"></i>25095 Main Shahr-e-Faisal Road,Karachi</p>
					<p class="para-agileits-w3layouts my-sm-3 my-2">
						<i class="fa fa-phone pr-3"></i>032 625 4592</p>
					<p class="para-agileits-w3layouts">
						<i class="fa fa-envelope-open pr-2"></i>
						<a href="mailto:mail@example.com">info 1@example.com</a>
					</p>
				</div>
				<div class="col-lg-6 regstr-r-w3-agileits mt-lg-0 mt-5">
					<h4 class="contact-title text-uppercase text-bl mb-sm-4 mb-3">Get in Touch</h4>
					<div class="form-bg-w3ls">
						<form action="contact.php" method="post">
							<div class="form-group">
								<input type="text" name="Name" class="form-control" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input type="email" name="Email" class="form-control" placeholder="Email" required="">
							</div>
							<div class="form-group">
								<input type="text" name="Subject" class="form-control" placeholder="Subject" required="">
							</div>
							<div class="form-group">
								<textarea name="Message" class="form-control" placeholder="Message" required></textarea>
							</div>
							<button type="submit" class="button-w3layouts btn text-uppercase" name="sub">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
include('includes/connect.php');
if(isset($_POST['sub'])){
	
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$sub=$_POST['Subject'];
	$msg=$_POST['Message'];
	
	
	$query="insert into contact(name,email,subject,message) values('$name','$email','$sub','$msg') ";
	
	$run=mysqli_query($con,$query);
	if($run){
		
		echo "<script>alert('Thankyou For Contacting Us')
		window.location.href='contact.php';
		
		</script>";
		
		}
	else{
		echo "<script>alert('Error!')</script>";
		
		}
	}


?>

<?php include('includes/footer.php'); ?>


</body>
</html>