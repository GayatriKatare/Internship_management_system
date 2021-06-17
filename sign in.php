<?php
include('connect.php');
?>
<?php
if(isset($_POST['done']))
{
	$Email_ID = $_POST['Email_ID'];
    $Password = $_POST['Password'];
    if(($Email_ID == "selact Email_ID from Personal_Details where Email_ID='$Email_ID'") && ($Password == "selact Password from Personal_Details where Password='$Password'"))
    {
       echo "successfully sign in";
    }
    else {
    	die("Invalid email id or password");
    }
    ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="allcss.css">
<title>Internship</title>
</head>
<body class="mainsignin">
		<div class="signind">
			<h1 id="signin">Sign In</h1>
			<br>
			<br>
			<form onsubmit="return myfun()" action="studentdisplay.php" method="post" enctype="multipart/form-data">
				    <lable>EMAIL ID</lable>
				    <br>
					<input type="email" id="inputsi" name="Email_ID" placeholder="Enter Your Email" required>
					<br>
					<br>
					<lable>PASSWORD</lable>
					<br>
					<input type="password" id="password" name="Password" placeholder="Enter Your Password" required>
					<br>
					<br>
					<lable>CONFIRM PASSWORD</lable>
					<br>
					<input type="password" id="passwords" name="cpass" placeholder="Enter Your Password Again" required>
					<br>
					<br>
					<br>
					<center><input type="submit" id="signinb" name="done"></center>
					<br>
				    <center><p><a href="sign up.html">Sign Up here</a>if u do not have an account yet.</p></center>
			</form>
			<script type="text/javascript">
		function myfun(){
			
			var c = document.getElementById('password').value;
			var d = document.getElementById('passwords').value;

				if (c!=d) {
					alert("password should be same");
					return false;
				}

				}
			
		</script>
</div>
</body>
</html>