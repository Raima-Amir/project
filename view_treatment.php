<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>

<?php include('includes/links.php'); ?>
<script src="jquery.js"></script>
<script>

$(document).ready(function(e) {
    
	$("#btn").click(function(e) {
        $("#date").show('fast');
		$("#fullshow").hide('fast');
		
		
		
    });
	
	$("#btn1").click(function(e) {
        $("#date").hide('fast');
		$("#fullshow").show('fast');
		
		
		
    });
	
	
});


</script>

<style>
#date{
display:none;	
	
	}


</style>
</head>

<body>


    
 
 <?php include('includes/admin_header.php'); ?>

 
 <br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
<form action="view_treatment.php" method="post">
&nbsp;<strong>Filter Your Apppoinments</strong>
<input type="date"   required="" class="form-group" name="start">

<input type="date"   required="" class="form-group" name="end">

<input type="submit" class="btn btn-info" value="Search" name="search" id="btn">
<input type="submit" class="btn btn-danger" value="Show All Data"  id="btn1">
</form>


<input class="profile_btn btn btn-primary btn-xs" type="button" value="Print" onclick="javascript:printDiv('printablediv')" />
</div>


<br>
<br>

<?php
include('includes/connect.php');

if(isset($_POST['search'])){
	
$start = $_POST['start'];
$end   = $_POST['end'];



	 $query="SELECT treatment.id , user.name  as 'patient', treatment.time,treatment.date,treatment.fees,treatment.description,treatment.duration
from treatment
INNER join user on user.userid = treatment.userid WHERE    treatment.date BETWEEN '$start' and '$end'";
	
	$run=mysqli_query($con,$query);

	$row=mysqli_num_rows($run);
	

	if($row>0){
		?>
        <div class="container-fluid" >
        <div id="date">
        <div id="printablediv">
        <table class="table table-hovered" >
        
        <tr bgcolor="#666262">
        <th style="color:#FCFCFC">ID</th>
        <th  style="color:#FCFCFC">Patient Name</th>
         <th  style="color:#FCFCFC">Time</th>
          <th  style="color:#FCFCFC">Date</th>
           <th  style="color:#FCFCFC">Fees</th>
            <th  style="color:#FCFCFC">Description</th>
             <th  style="color:#FCFCFC">Duration</th>
            
        
        
        
        
        </tr>
        
        <?php
		while($data=mysqli_fetch_array($run)){
			
			echo "
			<tr>
        <th>".$data['id']."</th>
        <th>".$data['patient']."</th>
        <th>".$data['time']."</th>
        <th>".$data['date']."</th>
        <th>".$data['fees']."</th>
        <th>".$data['description']."</th>
        <th>".$data['duration']."</th>
        
        
        
        </tr>
			
			
			";
			
			
			}
		
		
		
		
		}
	
	
}
	
	
	
	



?>
</table> 
</div><!--end of print div-->
</div><!--end of date div-->
<?php



	 $query="SELECT treatment.id , user.name  as 'patient', treatment.time,treatment.date,treatment.fees,treatment.description,treatment.duration
from treatment
INNER join user on user.userid = treatment.userid";
	
	$run=mysqli_query($con,$query);

	$row=mysqli_num_rows($run);
	

	if($row>0){
		?>
        <div class="container-fluid">
        <div id="fullshow">
        <table class="table table-hovered">
        
        <tr bgcolor="#666262">
        <th style="color:#FCFCFC">ID</th>
        <th  style="color:#FCFCFC">Patient Name</th>
         <th  style="color:#FCFCFC">Time</th>
          <th  style="color:#FCFCFC">Date</th>
           <th  style="color:#FCFCFC">Fees</th>
            <th  style="color:#FCFCFC">Description</th>
             <th  style="color:#FCFCFC">Duration</th>
          
        
        
        
        
        </tr>
        
        <?php
		while($data=mysqli_fetch_array($run)){
			
			echo "
			<tr>
        <th>".$data['id']."</th>
        <th>".$data['patient']."</th>
        <th>".$data['time']."</th>
        <th>".$data['date']."</th>
        <th>".$data['fees']."</th>
        <th>".$data['description']."</th>
        <th>".$data['duration']."</th>
        
        
        
        </tr>
			
			
			";
			
			
			}
		
		
		
		
		}
	
	

	
	
	
	



?>
</table> 
</div><!--end of fullshow-->
<br>
<br>



</div>
<?php include('includes/footer.php'); ?>
<script>

function printDiv(printablediv){

    var divElements = document.getElementById(printablediv).innerHTML;
    newpage_print = window.open('', '_blank' );
    data = "<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>"
    var script = newpage_print.document.createElement('script');
    script.setAttribute('type', 'text/javascript');
    script.innerHTML = "function none_it() { try { document.getElementById('sample_1_length').style.display = 'none'; document.getElementById('sample_1_filter').style.display = 'none'; document.getElementById('sample_1_paginate').style.display = 'none'; document.getElementById('sample_1_info').style.display = 'none'; } catch(ex)  {  return false; } } setInterval(function(){ none_it(); window.print(); window.close(); }, 1000);";
    newpage_print.document.body.innerHTML = data + divElements;
    newpage_print.document.body.appendChild(script);
    
}

</script>





</body>
</html>