<?php
include('connect.php');
?>
<?php
if(isset($_POST['sub']))
{
	$First_Name = $_POST['First_Name'];
	$Last_Name = $_POST['Last_Name'];
	$BDate = $_POST['BDate'];
	$Email_Id = $_POST['Email_Id'];
	$Password = $_POST['Password'];
	$Mobile_Number = $_POST['Mobile_Number'];
	$Gender = $_POST['Gender'];
	
	$r="INSERT INTO Personal_Details set First_Name='$First_Name',Last_Name='$Last_Name' , BDate='$BDate', Email_Id='$Email_Id' , Password='$Password' , Mobile_Number='$Mobile_Number', Gender='$Gender'";
	mysqli_query($con,$r);
	echo "personal Insertion successful!";


	$Address = $_POST['Address'];
	$City = $_POST['City'];
	$pincode = $_POST['pincode'];
	$State = $_POST['State'];
	$Country = $_POST['Country'];
	
	$s="INSERT INTO Address_Details set Address='$Address', City='$City' , pincode='$pincode', State='$State' , Country='$Country'";
	mysqli_query($con,$s);
	echo "add Insertion successful!";

	$ClassX_Board = $_POST['ClassX_Board'];
	$ClassX_Percentage = $_POST['ClassX_Percentage'];
	$ClassX_YrOfPassing = $_POST['ClassX_YrOfPassing'];
	$ClassXII_Board = $_POST['ClassXII_Board'];
	$ClassXII_Percentage = $_POST['ClassXII_Percentage'];
	$ClassXII_YrOfPassing = $_POST['ClassXII_YrOfPassing'];
	
	$t="INSERT INTO Education set ClassX_Board='$ClassX_Board',ClassX_Percentage='$ClassX_Percentage' , ClassX_YrOfPassing='$ClassX_YrOfPassing', ClassXII_Board='$ClassXII_Board' , ClassXII_Percentage='$ClassXII_Percentage', ClassXII_YrOfPassing='$ClassXII_YrOfPassing'";
	mysqli_query($con,$t);
	echo "X and XII Insertion successful!";


	$Course = $_POST['Course'];
	$Branch = $_POST['Branch'];
	$DtOfJoining = $_POST['DtOfJoining'];
	$DtOfPassing = $_POST['DtOfPassing'];
	$Hobby = $_POST['Hobby'];
	
	$u="INSERT INTO Other_Details set Course='$Course' , Branch='$Branch' , DtOfJoining='$DtOfJoining', DtOfPassing='$DtOfPassing' , Hobby='$Hobby'";
	mysqli_query($con,$u);
	echo "other Insertion successful!";


	$current_Semester = $_POST['current_Semester'];
	$current_Percentage = $_POST['current_Percentage'];
	$No_ofBacklogs = $_POST['No_ofBacklogs'];
	$Name_ofBacklogs = $_POST['Name_ofBacklogs'];
	
	$v="INSERT INTO Degree set current_Semester='$current_Semester',current_Percentage='$current_Percentage' , No_ofBacklogs='$No_ofBacklogs', Name_ofBacklogs='$Name_ofBacklogs'";
	mysqli_query($con,$v);
	echo "Higher Insertion successful!";

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Registration Form</title>
<link rel="stylesheet" type="text/css" href="allcss.css">
</head>
<body class="mainsignup" >
<form method="POST">
<div class="signupd">
<h1 align="center" >STUDENT REGISTRATION FORM</h1>


<fieldset>
<legend>Personal Information</legend>
<table align="center" cellpadding = "10">
<tr>
<td><b>FIRST NAME</b></td>
<td><input type="text" id="input" name="First_Name" placeholder="Enter Your First Name" maxlength="30"/>
</td>
</tr>
 

<tr>
<td><b>LAST NAME</b></td>
<td><input type="text" id="input" name="Last_Name" placeholder="Enter Your Last Name" maxlength="30"/>
</td>
</tr>
 
<tr>
<td><b>DATE OF BIRTH</b></td>
<td>
<input type="date" name="BDate">
</td>
</tr>
<tr>
<td><b>EMAIL ID</b></td>
<td><input type="email" id="input" name="Email_Id" placeholder="Enter Your Email ID" maxlength="50" /></td>
</tr>
<tr>
<td><b>PASSWORD</b></td>
<td><input type="Password" id="input" name="Password" placeholder="Enter Your password" maxlength="10" /></td>
</tr>
<tr>
<td><b>MOBILE NUMBER</b></td>
<td>
<input type="nuber" id="input" name="Mobile_Number" placeholder="Enter Your Mobile Number" maxlength="10" />
</td>
</tr>
<tr>
<td><b>GENDER</b></td>
<td>
<input type="radio" name="Gender" value="Male" />Male
  <input type="radio" name="Gender" value="Female" />Female
  <input type="radio" name="Gender" value="Other" />Other
</td>
</tr>
</table>
</fieldset>
<br><br>
<fieldset>
<legend>Permanent Address Details</legend>
<table align="center">
 <tr>
<td><b>ADDRESS </b><br /><br /><br /></td>
<td><textarea name="Address" placeholder="Enter Your Permanent Address" id="input" rows="4" cols="30"></textarea></td>
</tr>
<tr>
<td><b>CITY</b></td>
<td><input type="text" id="input" name="City" placeholder="Enter Your City" maxlength="30" />
</td>
</tr>
<tr>
<td><b>PIN CODE</b></td>
<td><input type="number" id="input" name="pincode" placeholder="Enter Your pincode" maxlength="6"  />

</td>
</tr>
<tr>
<td><b>STATE</b></td>
<td><input type="text" id="input" name="State" placeholder="Enter Your State" maxlength="30" />
</td>
</tr>
<tr>
<td><b>COUNTRY</b></td>
<td><input type="text" id="input" name="Country" placeholder="Enter your country" maxlength="20" /></td>
</tr>
</table>
</fieldset>
<br><br>
<fieldset>
<legend>Academics Details</legend>
<table align="center">
<td><b>QUALIFICATION</b><br /><br /></td>
<tr>
<td><b>Sl.No.</b></td>
<td><b>Examination</b></td>
<td><b>Board</b></td>
<td><b>Percentage</b></td>
<td><b>Year of Passing</b></td>
<td><b>Upload Documents</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class X</td>
<td><input type="text" name="ClassX_Board" maxlength="30" /></td>
<td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
<td><input type="date" name="ClassX_YrOfPassing" maxlength="30" /></td>
<td><input type="file" name="Xfile" value="file"></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
<td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
<td><input type="date" name="ClassXII_YrOfPassing" maxlength="30" /></td>
<td><input type="file" name="XIIfile" value="file"></td>
</tr>
</table>
<table align="center" cellpadding = "10">
<td><br><br><b>QUALIFICATION</b> <br /><br /></td>
<tr>
<td><b>APPLIED FOR     </b></td>
<td><input type="radio" name="Course" value="BTech" />B.Tech
   <input type="radio" name="Course" value="MTech" />M.Tech
</td>
</tr>
<tr>
<td><b>Branch<b></td>
<td>
<input type="radio" name="Branch" value="COMP" />COMPUTER

<input type="radio" name="Branch" value="IT" />IT

<input type="radio" name="Branch" value="ENTC" />ENTC

<input type="radio" name="Branch" value="CIVIL" />CIVIL

<input type="radio" name="Branch" value="MECH" />MECHANICAL
</td>
<tr>
<td><b>Date of Joining</b></td>
<td><b>Date of Passing</b></td>
</tr>
<tr>
<td><input type="date" name="DtOfJoining" maxlength="12" /></td>
<td><input type="date" name="DtOfPassing" maxlength="12" /></td>
</tr>
<tr>
<td><b>Current Semester</b></td>
<td><b>Percentage</b></td>
<td><b>Upload Documents</b></td>
<td><b>Number of Backlogs</b></td>
<td><b>Names of Backlogs</b></td>
</tr>
<tr>
<td><input type="number" name="current_Semester" maxlength="1"></td>
<td><input type="number" name="current_Percentage" maxlength="5"></td>
<td><input type="file" name="Cfile" value="file"></td>
<td><input type="number" name="No_ofBacklogs" maxlength="3" /></td>
<td><input type="text" name="Name_ofBacklogs" maxlength="50" /></td>
</tr>
</table>
</fieldset>
<br><br>
<fieldset>
<legend>Other Details</legend>
<table align="center">
<tr>
<td><b>HOBBIES     <b></td>
<td>
<input type="radio" name="Hobby" value="Drawing" />Drawing

<input type="radio" name="Hobby" value="Singing" />Singing

<input type="radio" name="Hobby" value="Dancing" />Dancing

<input type="radio" name="Hobby" value="Cooking" />Sketching
<br/>
Others
<input type="<tr>
text" id="input" name="Hobby" maxlength="30" />
</td>
</tr>
<tr>
<td><b>CV     </b></td>
<td><input type="file" name="CVfile" value="file"></td>
</tr>
</table>
</fieldset>
<br /><br /><br>
<center><input type="submit" value="Submit" id="signupb" name="sub"></center>
</div>
</form>
</body>
</html>
