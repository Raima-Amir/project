<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>

<?php include('includes/links.php'); ?>

</head>

<body>


    
 
 <?php include('includes/admin_header.php'); ?>

 
 <br>
<br>
<br>
<br>
<br>
<br>

 <div class="col-lg-6 regstr-r-w3-agileits mt-lg-0 mt-5">
					<h4 class="contact-title text-uppercase text-bl mb-sm-4 mb-3">ADD PATIENT</h4>
					<div class="form-bg-w3ls">
						<center>
                        <form action="add_patient.php" method="post">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input type="text" name="cell" class="form-control" placeholder="Cell" required="">
							</div>
							<div class="form-group">
								<input type="text" name="address" class="form-control" placeholder="Address" required="">
							</div>
                            <div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required="">
							</div>
                            <div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password" required="">
							</div>
                            
                            <div class="form-group">
								<textarea name="diseases" class="form-control" placeholder="Diseases" required></textarea>
							</div>
                            
                            <div class="form-group">
								<input type="time" name="time" class="form-control" placeholder="Time" required="">
							</div>
                            <div class="form-group">
								<input type="date" name="date" class="form-control" placeholder="Date" required="">
							</div>
                            <div class="form-group">
								<input type="hidden" value="2" name="role" class="form-control" placeholder="Role" required="">
							</div>
							
							<button type="submit" class="button-w3layouts btn text-uppercase" name="sub">Submit</button>
						</form>
                        </center>
					</div>
				</div>
 
<br>
<br>

<?php include('includes/footer.php'); ?>
<?php
include('includes/connect.php');
if(isset($_POST['sub'])){
	
	$name=$_POST['name'];
	$cell=$_POST['cell'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$diseases=$_POST['diseases'];
	$time=$_POST['time'];
	$date=$_POST['date'];
	$role=$_POST['role'];
	
	$query="insert into user(name,cell,address,email,password,diseases,time,date,role)values('$name','$cell','$address','$email','$pass','$diseases','$time','$date','$role')";
	
	$run=mysqli_query($con,$query);
	
	if($run){
		
	echo "<Script>alert('User Has Been Add Successfully')</script>";	
		
		}
		
		else{
			
			echo "<Script>alert('Error Occured!!')</script>";	
			
			}
	
	
	
	
	
	
	
	}



?>

</body>
</html>