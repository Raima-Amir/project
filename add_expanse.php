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
					<h4 class="contact-title text-uppercase text-bl mb-sm-4 mb-3">ADD EXPANSE</h4>
					<div class="form-bg-w3ls">
						<center>
                       
                        <form action="add_expanse.php" method="post">
							<div class="form-group">
								<input type="text" name="categories" class="form-control" placeholder="Enter Category" required="">
                            </div>
                                             
                                <div class="form-group">
								<input type="number" name="amount" class="form-control" placeholder="Enter Amount" required="">
                                </div>
							<div class="form-group">
								<input type="text" name="type" class="form-control" placeholder="Expanse Type" required="">
                                </div>
							<div class="form-group">
								<input type="date" name="date" class="form-control" placeholder="Date" required="">
							</div>
                           
<button type="submit" class="button-w3layouts btn text-uppercase" name="expanse">Add Expanse</button>
						</form>
                        </center>
					</div>
				</div>
 
<br>
<br>

<?php include('includes/footer.php'); ?>
<?php
include('includes/connect.php');
if(isset($_POST['expanse'])){
	
	$categories=$_POST['categories'];
	$amount=$_POST['amount'];
	$type=$_POST['type'];
	$date=$_POST['date'];
	
	$query="insert into expanse(categories,amount,type,date)values('$categories','$amount','$type','$date')";
	
	$run=mysqli_query($con,$query);
	
	if($run){
		
	echo "<Script>alert('Expanses Has Been Add Successfully')</script>";	
		
		}
		
		else{
			
			echo "<Script>alert('Error Occured!!')</script>";	
			
			}
	
	
	
	
	
	
	
	}



?>

</body>
</html>