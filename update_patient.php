<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>

<?php include('includes/links.php'); ?>

</head>

<body>


    
 
 <?php include('includes/admin_header.php'); ?>
<?php
include('includes/connect.php');
$id=$_GET['id'];
$name=$_GET['name'];
$cell=$_GET['cell'];
$add=$_GET['add'];
$email=$_GET['email'];
$pass=$_GET['pass'];
$dis=$_GET['diseases'];
$time=$_GET['time'];
$date=$_GET['date'];
$role=$_GET['role'];




?>
 
 <br>
<br>
<br>
<br>
<br>
<br>

 <div class="col-lg-6 regstr-r-w3-agileits mt-lg-0 mt-5">
					<h4 class="contact-title text-uppercase text-bl mb-sm-4 mb-3">EDIT PATIENT</h4>
					<div class="form-bg-w3ls">
						<center>
                        <form action="add_patient.php" method="post">
							
                            <div class="form-group">
								<input type="hidden" name="id" class="form-control" placeholder="Name" required="" value="<?php echo $id; ?>">
							</div>
                            
                            <div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Name" required="" value="<?php echo $name; ?>">
							</div>
							<div class="form-group">
								<input type="text" name="cell" class="form-control" placeholder="Cell" required="" value="<?php echo $cell; ?>">
							</div>
							<div class="form-group">
								<input type="text" name="address" class="form-control" placeholder="Address" required="" value="<?php echo $add; ?>">
							</div>
                            <div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required="" value="<?php echo $email; ?>">
							</div>
                            <div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password" required="" value="<?php echo $pass; ?>">
							</div>
                            
                            <div class="form-group">
								<textarea name="diseases" class="form-control" placeholder="Diseases" required="" value="<?php echo $dis; ?>"></textarea>
							</div>
                            
                            <div class="form-group">
								<input type="time" name="time" class="form-control" placeholder="Time" required="" value="<?php echo $time; ?>">
							</div>
                            <div class="form-group">
								<input type="date" name="date" class="form-control" placeholder="Date" required="" value="<?php echo $date; ?>">
							</div>
                            <div class="form-group">
								<input type="text" name="role" class="form-control" placeholder="Role" required="" value="<?php echo $role; ?>">
							</div>
							
							<button type="submit" class="button-w3layouts btn text-uppercase" name="sub">UPDATE</button>
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
	
	$id=$_POST['id'];
$name=$_POST['name'];
$cell=$_POST['cell'];
$add=$_POST['address'];
$email=$_POST['email'];
$pass=$_POST['password'];
$dis=$_POST['diseases'];
$time=$_POST['time'];
$date=$_POST['date'];
$role=$_POST['role'];

	
	$query="update user set name='$name',cell='$cell',address='$add',email='$email',password='$pass',diseases='$dis',time='$time',date='$date',role='$role' where userid = '$id'";
	
	$run=mysqli_query($con,$query);
	
	if($run){
		
	echo "<Script>alert('User Has Been Updated Successfully')</script>";	
		
		}
		
		else{
			
			echo "<Script>alert('Error Occured!!')</script>";	
			
			}
	
	
	
	
	
	
	
	}



?>

</body>
</html>