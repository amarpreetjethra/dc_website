<?php


$server = "";
$username = "root";
$password="";
$database="dc_database";

$con=mysqli_connect($server,$username,$password,$database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
  }



$sno=$_POST['sno'];
  
  
  $result = mysqli_query($con,"SELECT * from entrance where serialno='$sno'");
  $row=mysqli_fetch_array($result);
  //$row=$row[0];
  //echo '<script>
  
  
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="FormValidation.css">
<script type="text/javascript" src="MyFormValidation.js" ></script>
<script>

function onlyChars(event)
{
	var e =event;
	var charCode = e.which || e.keyCode;
	if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || charCode == 9)
		return true;
	else 
		return false;
}

</script>

</head>
<body>
<body style="background-color:gray;">
	<div class="container">
		<div class="row"><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="FormValidation.css">
<!--<script type="text/javascript" src="MyFormValidation.js" ></script>-->
<script>

function onlyChars(event)
{
	var e =event;
	var charCode = e.which || e.keyCode;
	if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || charCode == 9)
		return true;
	else 
		return false;
}

</script>
</head>
<body>
<body style="background-color:blue;">
	<div class="container">
		<div class="row">
			
	<form role="form" method="post" id="theForm" action="r.php"> 
	 		
			
<div class="col-md-12" style="border:1px solid black;background-color:gray;">
	<label>
		<h2>Student Profile</h2>
	</label><br/>
	<label>Date of joining</label>
		<div class="form-group">

	 <div class="row">
 	 <div class="col-md-4">
   		 <input disabled="disabled"  type="text" class="form-control" placeholder="DD/MM/YYYY" name="doj" id="name" value="<?php echo $row['date_of_joining']; ?>"> <span id="nameError" class="green" ></span>
  	</div>
  	
	</div>

<br/>
    <label>Personal Information</label>
    	
	<div class="row">
 	 <div class="col-md-4">
 	 	<label>First Name</label>
   		 <input disabled="disabled"  disabled="disabled"  type="text" class="form-control" onkeypress="return onlyChars(event)" name="firstname" id="name" value="<?php echo $row['first_name']; ?>"> <span id="nameError" class="green"></span>
  	</div>
  	<div class="col-md-4">
  		<label>Middle Name</label>
   		 <input disabled="disabled"  type="text" class="form-control" onkeypress="return onlyChars(event)" name="midname" value="<?php echo $row['middle_name']; ?>">
  	</div>
  	<div class="col-md-4">
  		<label>Last Name</label>
    		<input disabled="disabled"  type="text" class="form-control" onkeypress="return onlyChars(event)" name="lastname" id="lname" value="<?php echo $row['last_name']; ?>"> <span id="lnameError" class="red"></span>
		
	  </div>
	</div>
                   
	 
	
	<label>BirthDay</label>
	<div class="form-group">

	 <div class="row">
 	 <div class="col-md-4">
   		 <input disabled="disabled"  type="text" class="form-control" placeholder="DD/MM/YYYY" name="birthday" id="name" value="<?php echo $row['birthday']; ?>"> <span id="nameError" class="green" ></span>
  	</div>
  	
	</div>

	<label>Gender</label>
	<div class="row">
	<div class="col-md-4">
	<select disabled="disabled"  class="form-control" name="gender" value="<?php echo $row['gender']; ?>">
  	<option>Male</option>
  	<option>Female</option>
	</select>
  	</div>
	</div>	

	<label>Blood Group</label>
	<div class="row">
	<div class="col-md-4">
	<input disabled="disabled"  type="text" class="form-control"  name="bloodgroup" id="number" value="<?php echo $row['bloodgroup']; ?>">
	</div>
	</div>

	<br/>
	<label>Area of Intrest</label>
 	<textarea disabled="disabled"  disabled="disabled"  class="form-control" rows="3" id="add" name="interest"><?php echo $row['area_of_interest']; ?></textarea>

 	<br/>
 	<label>Basic Skills</label>
 	<label class="checkbox-inline">
  		<input disabled="disabled"  type="checkbox" id="inlineCheckbox1" value="option1" > HTML
	</label>
	<label class="checkbox-inline">
  		<input disabled="disabled"  type="checkbox" id="inlineCheckbox1" value="option1"> CSS
	</label>
	<label class="checkbox-inline">
  		<input disabled="disabled"  type="checkbox" id="inlineCheckbox1" value="option1"> ANSI C
	</label>
	<label class="checkbox-inline">
  		<input disabled="disabled"  type="checkbox" id="inlineCheckbox1" value="option1"> C++
	</label>
	<label class="checkbox-inline">
  		<input disabled="disabled"  type="checkbox" id="inlineCheckbox1" value="option1"> Javascript
	</label>
	<label class="checkbox-inline">
  		<input disabled="disabled"  type="checkbox" id="inlineCheckbox1" value="option1"> Python
	</label>
	<label class="checkbox-inline">
  		<input disabled="disabled"  type="checkbox" id="inlineCheckbox1" value="option1"> SQl
	</label>

 	<textarea disabled="disabled"  disabled="disabled"  class="form-control" rows="3" id="add" placeholder="MENTION OTHER HERE" name="skills"><?php echo $row['basic_skills']; ?></textarea>

 	<br/>
 	<label>Current Address</label>
 	<textarea disabled="disabled"  disabled="disabled"  class="form-control" rows="3" id="add" name="currentaddress"><?php echo $row['current_address']; ?></textarea>

 	<label>
 	<input disabled="disabled"  type="checkbox" value="" class="checkme" >
 	Copy to Permanent Address
 	</label>
 	<br>

	<label>Permanent Address</label>
 	<textarea disabled="disabled"  disabled="disabled"  class="form-control" rows="3" name="permanentaddress"><?php echo $row['permanent_address']; ?></textarea>
 	<br/>

	<label>Contact Information and Email ID detail</label>
	
	<div class="row">
	<div class="col-md-4">
		<label>Country Code</label>
	<input disabled="disabled"  type="text" class="form-control" placeholder="Country Code" name="countrycode" value="<?php echo $row['country_code']; ?>">
	</div>
	<div class="col-md-4">
		<label>STD Code</label>
	<input disabled="disabled"  type="text" class="form-control" placeholder="STD Code" name="stdcode" value="<?php echo $row['std_code']; ?>">
	</div>
	<div class="col-md-4">
		<label>Mobile number</label>
	<input disabled="disabled"  type="text" class="form-control" placeholder="Mobile number" name="studmobile" value="<?php echo $row['mobile_no']; ?>">
	</div>
	</div>

	<label>Email</label>
 	<input disabled="disabled"  type="email" class="form-control" id="inputEmail3" placeholder="Email" name="studemail" value="<?php echo $row['student_email']; ?>"> 	

 	<label>Github ID/user name</label>
 	<input disabled="disabled"  type="email" class="form-control" id="inputEmail3" placeholder="Email" name="github" value="<?php echo $row['github_id']; ?>"> 

 	<br/>

 	<label>Parental/Guardian Information</label>
	<div class="row">
	<div class="col-md-6">
		<label>Fathers name</label>
	<input disabled="disabled"  type="text" class="form-control" placeholder="Country Code" name="fathername" value="<?php echo $row['fathers_name']; ?>">
	</div>
	<div class="col-md-6">
		<label>Contact no</label>
	<input disabled="disabled"  type="text" class="form-control" placeholder="STD Code" name="fathermobile" value="<?php echo $row['fathers_contact']; ?>">
	</div>
	
	</div>
	<label>Fathers Email ID</label>
 	<input disabled="disabled"  type="email" class="form-control" id="inputEmail3" placeholder="Email" name="fatheremail" value="<?php echo $row['fathers_email']; ?>"> 	

 	<div class="row">
	<div class="col-md-6">
		<label>Guardians Name</label>
	<input disabled="disabled"  type="text" class="form-control" placeholder="Country Code" name="guardianname" value="<?php echo $row['guardian_name']; ?>">
	</div>
	<div class="col-md-6">
		<label>Contact no</label>
	<input disabled="disabled"  type="text" class="form-control" placeholder="STD Code" name="guardianmobile" value="<?php echo $row['guardian_contact']; ?>">
	</div>
	</div>

	<br/>
	<label>Academic Information</label>
	<br/>
	<label>School Name</label>
 	<input disabled="disabled"  type="text" class="form-control" id="inputEmail3" name="schoolname" value="<?php echo $row['school_name']; ?>"> 
	<div class="row">
	<div class="col-md-6">
		<label>Percentage</label>
		<label>10th</label>
	<input disabled="disabled"  type="text" class="form-control" name="tenthper" value="<?php echo $row['percentage_10th']; ?>">
	</div>
	<div class="col-md-6">
		<label>12th</label>
	<input disabled="disabled"  type="text" class="form-control" name="twealthper" value="<?php echo $row['percentage_12th']; ?>">
	</div>

	<div class="col-md-4">
		<label>Course</label>
	<input disabled="disabled"  type="text" class="form-control" placeholder="M.tech/MCA/MBA" name="course" value="<?php echo $row['course']; ?>">
	</div>
	<div class="col-md-4">
		<label>semester</label>
	<input disabled="disabled"  type="text" class="form-control" name="semester" value="<?php echo $row['semester']; ?>">
	</div>
	<div class="col-md-4">
		<label>CGPA</label>
	<input disabled="disabled"  type="text" class="form-control" name="cgpa" value="<?php echo $row['cgpa']; ?>">
	</div>
	</div>

	<br/>
	<label>Online Courses</label>
 	<textarea disabled="disabled"  disabled="disabled"  class="form-control" rows="3" id="add" name="onlinecourses"><?php echo $row['online_courses']; ?></textarea>

 	<br/>

 	<label>Project Details</label>
	<div class="row">
	<div class="col-md-4">
		<label>Project Name</label>
	<input disabled="disabled"  type="text" class="form-control" name="projectname" value="<?php echo $row['project_name']; ?>">
	</div>
	<div class="col-md-4">
		<label>Project Type</label>
	<input disabled="disabled"  type="text" class="form-control" name="projecttype" value="<?php echo $row['project_type']; ?>">
	</div>
	<div class="col-md-4">
		<label>Duration</label>
	<input disabled="disabled"  type="text" class="form-control" name="projectduration" value="<?php echo $row['project_duration']; ?>">
	</div>
	</div>

	<br/>

	<label>Short Description</label>
 	<textarea disabled="disabled"  disabled="disabled"  class="form-control" rows="3" id="add" name="projectdescr"><?php echo $row['project_desc']; ?></textarea>
 	</div>

 	<br/>
 	<label>How you came to know about DC</label><br/>
	<div class="row">
	<div class="col-md-4">
	<select disabled="disabled"  class="form-control" name="knowdc" value="<?php echo $row['reference_catg']; ?>">
  	<option>Friend</option>
  	<option>Senior</option>
  	<option>Faculty</option>
  	<option>Alumni</option>
  	<option>Classmate</option>
	<option>Social-media</option>
  	<option>Others</option>
  	
	</select>
	</div>
	</div>
	

	<br/>
	Specify the name of that person/source
 	<input disabled="disabled"  type="text" class="form-control" id="inputEmail3" name="referencename" value="<?php echo $row['reference']; ?>"> 
	

 	<br/>
 	<label>Why Should we choose you</label>(in lase than 30 words)
 	<textarea disabled="disabled"  disabled="disabled"  class="form-control" rows="3" id="add" name="whychoose"><?php echo $row['why_choose']; ?></textarea>

 	<br/>
	<label>Declaration By Student</label><br/>
	I have inclosed all the documents as proof of the prerequisites to be completed. i here by declare that all the above information stated is true to best of my knowledge. I also accept the rules and policies of development center(refer to Annexure II)<br/>
	<label class="checkbox-inline">
  		<input disabled="disabled"  type="checkbox" id="inlineCheckbox1" value="option1"> I Agree
	</label>
	
	<br/><br/>
	<label>Declaration By Parent/Guardian</label><br/>
	I have declare that the above information is true to the best of my knowledge. I dont have any problem if my son/daughter works in DC for whole day/ holidays/ for a longer duration. I will encourage and support him/her for his/her work. <br/><br/>
	<label class="checkbox-inline">
  		<input disabled="disabled"  type="checkbox" id="inlineCheckbox1" value="option1"> I Agree
	</label>
	<br/>
	NOTE : The timimg for girls is strictly till 6.00 PM only.
	

	<br/><br/>
	

	<input disabled="disabled"  class="btn btn-success"type="submit" value="Submit" id="submit">
	<input disabled="disabled"  class="btn btn-danger" type="reset" value="Reset">
	
		</form>
		
		<br>
		<button class="btn-warning" onclick="window.print()">Print This Page</button>

		</div>
				
		</div>
	</div>

</body>
</html>

