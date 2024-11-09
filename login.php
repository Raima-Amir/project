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
<section class="logins py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-section mb-md-5 mb-4">
				<h6 class="w3ls-title-sub">Easy to Login</h6>
				<h3 class="w3ls-title text-uppercase text-dark font-weight-bold">Login Now</h3>
			</div>
			<div class="login px-sm-4 mx-auto mw-100 login-wrapper">
				<form class="login-wrapper" action="login.php" method="post">
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" class="form-control" name="email" placeholder="" required="">
						
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" placeholder="" required="">
					</div>
					<button type="submit" class="btn submit mt-4" name="submit">Login</button>
					
				</form>
			</div>
		</div>
	</section>
<?php include('includes/footer.php'); ?>
<?php

include('includes/connect.php');
/*session_start();

if(isset($_SESSION['email'])){
	
	echo "<script>window.location.href='login.php'</script> ";
	
	}*/
	


if(isset($_POST['submit'])){
	
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
	$query="select * from user where email='$email' and password='$pass'";
	
	$run=mysqli_query($con,$query);
	$rows=mysqli_num_rows($run);
	
	if($rows>0){
		
		
		while($data=mysqli_fetch_array($run)){
			
			if($data['role']=='1'){
				
				session_start();
				$userid=$data['userid'];
				$username=$data['name'];
				
				
				$_SESSION['username'] = $username;
				$_SESSION['userid'] = $userid;
			   
		
				
	
				
				echo "<script>window.location.href='admin_dashboard.php'</script>";
				
				}
				else if($data['role']=='2'){
				
					session_start();
					
				$userid=$data['userid'];
				$username=$data['name'];
				
				
				$_SESSION['username'] = $username;
				$_SESSION['userid'] = $userid;
					
		
					
					echo "<script>window.location.href='user_dashboard2.php'</script>";
					
					}

				else{
					
					echo "<script>alert('Wrong ID & Password')</script>";
					
					}
			
			
			}
		
		
		}
	
	}
	 


?>

</body>
</html>

