
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="allcss.css">
<title>Admin</title>
</head>
<body class="mainadmin">
		<div class="admind">
			<h1 id="signin">Admin Sign In</h1>
			<br>
			<br>
			<form onsubmit="return myfun()" method="post" enctype="multipart/form-data">
				    <lable>EMAIL ID</lable>
				    <br>
					<input type="email" id="em" name="email" placeholder="Enter Your Email" autocomplete="off" required>
					<br>
					<br>
					<lable>PASSWORD</lable>
					<br>
					<input type="password" id="pass" name="pass" placeholder="Enter Your Password" autocomplete="off" required>
					<br>
					<br>
					<br>
					<center><input type="submit" id="signinb" name="signin" value="submit"></center>
			</form>
			<script type="text/javascript">
			function myfun() {
			
			var c = document.getElementById('pass').value;
			var e = document.getElementById('em').value;
	

								if (c != "123321") {
					alert("please enter your correct password");
					return false;
		

				}

				if (e != "admin12345@gmail.com") {
					alert("please enter your correct email id");
					return false;
		

				}
				
		}
				
			
		
	</script>
		</div>
</body>
</html>