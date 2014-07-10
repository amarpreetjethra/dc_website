<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="FormValidation.css">
<!--<script type="text/javascript" src="MyFormValidation.js" ></script>-->
<script>

function onlyNumbers(event)				
{
    	var e =event; 
   	var charCode = e.which || e.keyCode;

    		if ((charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 37 || charCode == 39 || charCode == 9) 
       			 return true;
			else
				 return false;

}

function onlyChars(event)
{
	var e =event;
	var charCode = e.which || e.keyCode;
	if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || charCode == 9)
		return true;
	else 
		return false;
}
/*Function used to copy the current address to permanent address*/
function Copy(add)
{
	if(add.checkme.checked==true)
	{
		add.permanentaddress.value=add.currentaddress.value;
	}
}

function digitsonly(e)
{
	var data=document.getElementById('cnumber').value;
	if(data.Length!=10)
       {
       alert("Please enter 10 digits");
       return false;
       }
    else
    	return true;   
}


	
</script>
</head>
<body>
<body style="background-color:grey;">

	<?php 
        include ('header.php');
   ?> <br><br><br><br>
	<div class="container">
		<div class="row">

	<form role="form" method="post" id="theForm" action="#"> 
	 		<div class="form-group">
			
			
<div class="col-md-12" style="border:1px solid black;background-color:grey;">
	<label>
		<h2>Add Project</h2>
	</label><br/>
	<label>Date of Starting</label>
		

	 <div class="row">
 	 <div class="col-md-4">
   		 <input type="date" class="form-control" placeholder="DD/MM/YYYY" name="dos" id="name"> <span id="nameError" class="green"></span>
  	</div>
  	
	</div>

<br/>
    <label>Project Information</label>
    	
	<div class="row">
 	 <div class="col-md-4">
 	 	<label>Project Name</label>
   		 <input type="text" class="form-control" name="projectname" id="name"> <span id="nameError" class="green"></span>
  	</div>
  	<div class="col-md-4">
  		<label>Project ID</label>
   		 <input type="text" class="form-control" name="projectid">
  	</div>
  	<div class="col-md-4">
  		<label>Project Type</label>
    		<input type="text" class="form-control" name="projecttype" id="lname"> <span id="lnameError" class="red"></span>
		
	  </div>
	</div>
                   
	 
	<br>
	
	<div class="row">
 	 <div class="col-md-4">
 	 	<label>Team Leader</label>
   		 <input type="text" class="form-control" name="teamleader" id="name"> <span id="nameError" class="green"></span>
  	</div>

  	<div class="col-md-4">
 	 	<label>Team ID</label>
   		 <input type="text" class="form-control" name="teamid" id="name"> <span id="nameError" class="green"></span>
  	</div>

  	<div class="col-md-4">
 	 	<label>Project Status</label>
   		 <input type="text" class="form-control" name="projectstatus" id="name"> <span id="nameError" class="green"></span>
  	</div>
  	
  	</div>
	
    <br>
    <label>Team Members</label>
 	<input type="text" class="form-control" placeholder="jeff , jenny, jack" id="inputEmail3" name="members"> 

 	<br>

 	<label>Github Link</label>
 	<input type="text" class="form-control"  id="inputEmail3" name="gitlink"> 

 	<br>

 	<label>Project link on web(if available)</label>
 	<input type="text" class="form-control"  id="inputEmail3" name="link"> 

 	<br>
 	<label>Project Description</label>
 	<textarea class="form-control" rows="3" id="add" name="projectdesc" ></textarea>

 	<br><br>

	</div>

	<input class="btn btn-success"type="submit" value="Submit" id="submit">
	<input class="btn btn-danger" type="reset" value="Reset">
	
		</form>
		
		<br>
		

		</div>
				
		</div>
	</div>


<?php


$server = "localhost";
$username = "root";
$password="root";
$database="dc_database";

$con=mysqli_connect($server,$username,$password,$database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
  }
 else
 {
	echo "successfully submitted";
}
  
  
  $dos=$_POST['dos'];
  $projectname=$_POST['projectname'];
  $projectid=$_POST['projectid'];
  $projecttype=$_POST['projecttype'];
  $teamleader=$_POST['teamleader'];
  $teamid=$_POST['teamid'];
  $projectstatus=$_POST['projectstatus'];
  $members=$_POST['members'];
  $gitlink=$_POST['gitlink'];
  $link=$_POST['link'];
  $projectdesc=$_POST['projectdesc'];
  
  
/*
    echo $firstname . " " . $doj . " " . $firstname . " " . $midname . " " . $lastname . " " . $birthday . " " . $gender . " " . $bloodgroup . " " . $interest . " " . " " . $currentaddress . " " . $permanentaddress . " " . 
 $countrycode . " " . $stdcode . " " . $studmobile . " " . $studemail . " " . $github . " " . $fathername . " " . $fathermobile . " " . $fatheremail . " " .  $guardianname . " " . $guardianmobile . " " .  $schoolname . " " . 
 $tenthper . " " . $twealthper . " " . $course . " " . $semester . " " . $cgpa . " " . $onlinecourses . " " . $projectname . " " . $projectduration . " " . $projectdescr . " " . $knowdc . " " . $
 encename . " " . $whychoose ;

*/

 $sql="INSERT INTO projects VALUES('$dos','$projectid', '$projectname', '$projecttype', '$teamleader', '$members', '$projectstatus', '$teamid', '$link', '$gitlink','$projectdesc') ";
  
  mysqli_query($con,$sql);
  


?>
<?php 
    include('footer.php');
?>
</body>
</html>
