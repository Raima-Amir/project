<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>

<?php include('includes/links.php'); ?>

</head>

<body>


    
 
 <?php include('includes/user_header.php'); ?>

 
 <br>
<br>
<br>
<br>
<br>
<br>
<?php
include('includes/connect.php');


$userid = $_SESSION['userid'];

	$query="select * from user where userid  = '$userid'";
	
	$run=mysqli_query($con,$query);
	$row=mysqli_num_rows($run);
	
	if($row>0){
		?>
        <div class="container-fluid">
        <table class="table table-hovered">
        
        <tr bgcolor="#666262">
        <th style="color:#FCFCFC">ID</th>
        <th  style="color:#FCFCFC">Name</th>
        <th  style="color:#FCFCFC">Cell</th>
        <th  style="color:#FCFCFC">Address</th>
        <th  style="color:#FCFCFC">Email</th>
        <th  style="color:#FCFCFC">Password</th>
        <th  style="color:#FCFCFC">Diseases</th>
        <th  style="color:#FCFCFC">Time</th>
        <th  style="color:#FCFCFC">Date</th>
       
        
        
        </tr>
        
        <?php
		while($data=mysqli_fetch_array($run)){
			
			echo "
			<tr>
        <th>".$data['userid']."</th>
        <th>".$data['name']."</th>
        <th>".$data['cell']."</th>
        <th>".$data['address']."</th>
        <th>".$data['email']."</th>
        <th>".$data['password']."</th>
        <th>".$data['diseases']."</th>
        <th>".$data['time']."</th>
        <th>".$data['date']."</th>
    
      
        
        </tr>
			
			
			";
			
			
			}
		
		
		
		
		}
	
	
	
	
	
	



?>
</table> 
</div>
<br>
<br>

<?php include('includes/footer.php'); ?>


</body>
</html>