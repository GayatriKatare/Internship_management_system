<?php
include('connect.php');
header('sign in.html');
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
<td><b>LAST NAME</b></td>
</tr>
<?php
$count=0;
if(isset($_POST['done']))
{
	$Email_Id = $_POST['Email_Id'];
	$Password = $_POST['Password'];

	$se = "SELECT * FROM Personal_Details WHERE Email_Id='$Email_Id' , Password='$Password'";
	$show=mysqli_query($con,$se);
	while($row=mysqli_fetch_array($show))
	{
		$First_Name = $row['First_Name'];
	    $Last_Name = $row['Last_Name'];
        $count++;
        ?>
		<tr>
			<td><?php echo "$First_Name"?></td>
			<td><?php echo "$Last_Name" ?></td>
		</tr>
		</table>
		<?php
	}
if($count==0)
{
	echo "Not found!";
}


}
?>
 </fieldset>
</div>
</form></body>
</html>