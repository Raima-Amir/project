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
					<h4 class="contact-title text-uppercase text-bl mb-sm-4 mb-3">ADD Treatment</h4>
					<div class="form-bg-w3ls">
						<center>
                        <?php
						include('includes/connect.php');
						$query="select * from user where role = '2'";
						$run=mysqli_query($con,$query);
						?>
                        <form action="add_treatment.php" method="post">
							<div class="form-group">
								<select required class="form-control" name="pid">
										<option value="">Patient Refrence</option>
										
                                        <?php
										
										while($data=mysqli_fetch_array($run)){
							
							echo "<option value='$data[0]'>$data[1]</option>";
							
											
											}
										
										?>
                                        
                                        
																			</select>
							</div>
							<div class="form-group">
								<input type="time" name="time" class="form-control" placeholder="Time" required="">
							</div>
							<div class="form-group">
								<input type="date" name="date" class="form-control" placeholder="Date" required="">
							</div>
                            <div class="form-group">
								<input type="number" name="fees" class="form-control" placeholder="Fees" required="">
							</div>
                            
                            
                            <div class="form-group">
								<textarea name="description" class="form-control" placeholder="Description" required></textarea>
							</div>
                            <div class="form-group">
								<input type="text" name="duration" class="form-control" placeholder="duration" required="">
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
	
	$pid=$_POST['pid'];
	$time=$_POST['time'];
	$date=$_POST['date'];
	$fees=$_POST['fees'];
	$desc=$_POST['description'];
	$duration=$_POST['duration'];
	
	
	$query="insert into treatment(userid,time,date,fees,description,duration)values('$pid','$time','$date','$fees','$desc','$duration')";
	
	$run=mysqli_query($con,$query);
	
	if($run){
		
	echo "<Script>alert('Treatment Has Been Add Successfully')</script>";	
		
		}
		
		else{
			
			echo "<Script>alert('Error Occured!!')</script>";	
			
			}
	
	
	
	
	
	
	
	}



?>

</body>
</html>