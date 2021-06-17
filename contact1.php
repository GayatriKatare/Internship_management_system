<?php

include('connect.php');

if(isset($_POST['done']))
{
    $Name = $_POST['Name'];
      $Email = $_POST['Email'];
    $Phone= $_POST['Phone'];
      $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
     $sql =  "INSERT INTO `contact1`(`Name`, `Email`, `Phone`, `Subject`, `Message`) VALUES ('$Name','$Email','$Phone','$Subject','$Message')";
        $query=mysqli_query($con,$sql);
}
        echo("Insertion successful!");

?>
<!DOCTYPE HTML>
<html>
<head>
	<style type="text/css">

body{
font-family: 'Open Sans', sans-serif;
background: url(img8.jpg) no-repeat 0px 0px;
background-size:cover;
	
}
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}

a{text-decoration:none;}
.txt-rt{text-align:right;}
.txt-lt{text-align:left;}
.txt-center{text-align:center;}
.float-rt{float:right;}
.float-lt{float:left;}
.clear{clear:both;}
.pos-relative{position:relative;}
.pos-absolute{position:absolute;}
.vertical-base{	vertical-align:baseline;}
.vertical-top{	vertical-align:top;}
nav.vertical ul li{	display:block;}
nav.horizontal ul li{	display: inline-block;}
img{max-width:100%;}

.main-content{
	width: 100%;
	margin: 20px 450px;
	margin-bottom: 200px;
}

.header {
    padding:50px 500px;
    text-align: center;
    margin-top: 4em;
}
.header h1 {
    font-size: 3em;
    color: #fff;
    font-weight: 500;
    font-family: 'Arvo', serif;
}
.contact-w3{
    margin: 4em auto 0;
    width: 30%;
    margin-left: 10%;
    -webkit-appearance: none;
  background:#fff;
    padding: 2em;
	border-radius:3px;
}
.contact-w3 input[type="text"], .contact-w3 textarea {
    width: 96%;
    padding: 0.7em;
    background: #fff;
    color: #000;
    border: none;
	background: #fff;
	border:1px dotted rgba(30, 136, 229, 1);
    outline: none;
    font-size: 0.8em;
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -o-border-radius: 3px;
    font-family: 'Open Sans', sans-serif;
}
.row {
    margin: 0.8em 0;
}
.row1 {
    margin-top: 0.8em;
}
.contact-left-w3 {
   float: none;
    width: 100%;
}
.contact-right-w3l {
   float: none;
    width: 100%;
	margin-top: 0.8em;
}
.contact-w3 textarea {
    resize: none;
    height: 150px;
}
.contact-w3 label {
    font-size: 0.95em !important;
    color: rgba(30, 136, 229, 1);
	margin-bottom: 8px;
	display: block;
	font-weight: 600;
}
.contact-w3 input[type="submit"] {
    font-size: 1em;
    padding: 0.8em;
    display: block;
    margin-top: 1em;
    outline: none;
   background:#a31d1f;
    color: #fff;
	background: rgba(30, 136, 229, 1);
    border: none;
    width: 100%;
	cursor: pointer;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
	border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -o-border-radius: 3px;
	 font-family: 'Open Sans', sans-serif;
}
.contact-w3 input[type="submit"]:hover{
	   color: #fff;
    background: #000;
}

.footer-w3-agile {
    text-align: center;
    padding: 4em 0;
}
.footer-w3-agile p {
    font-size: .9em;
    color: #fff;
    margin: 0px;
	line-height:1.8em
}
.footer-w3-agile p a {
    color: #fff;
}
.footer-w3-agile p a:hover {
    color: #fff;
    color: rgba(30, 136, 229, 1);
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #000;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #000;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #000;
}
:-moz-placeholder { /* Firefox 18- */
  color: #000;
}

/**responsive**/
@media(max-width:1440px){
	
}
@media(max-width:1366px){
.contact-w3 {
    width: 32%;	
}
}
@media(max-width:1280px){
.contact-w3 {
    width: 35%;	
}
}
@media(max-width:1080px){
.contact-w3 {
    width: 40%;
}
.header h1 {
    font-size: 2.8em;	
}
@media(max-width:991px){
.contact-w3 {
    width: 43%;
}
	
}
@media(max-width:800px){

.contact-w3 input[type="text"], .contact-w3 textarea {
    width: 94%;	
}
.contact-w3 {
    width: 59%;
}
}
@media(max-width:768px){

}
@media(max-width:736px){
.contact-w3 {
	margin: 3em auto 0;
}
.header {
    margin-top: 3em;
}
.header h1 {
    font-size: 2.5em;
}	
}
@media(max-width:667px){

}
@media(max-width:640px){
	
}
@media(max-width:600px){

.footer-w3-agile {
    padding: 2em 0;
}	
}
@media(max-width:568px){

}
@media(max-width:480px){
.header h1 {
    font-size: 2.3em;
}

.contact-left-w3 {
    float: left;
    width: 100%;
    margin-right: 0;
}	
.contact-right-w3l {
    float: left;
    width: 100%;
    margin-right: 0;
    margin-top: .5em;
}
.contact-w3 input[type="text"], .contact-w3 textarea {
    padding: 0.6em;
    font-size: 0.9em;	
}
.contact-w3 textarea {
    resize: none;
    height: 130px;
}
}
@media(max-width:414px){
.header h1 {
    font-size: 1.8em;
}
.contact-w3 label {
    font-size: 0.9em !important;
}
.contact-w3 input[type="submit"] {
    font-size: 0.95em;
}
.contact-w3 {
    width: 70%;
}
}
@media(max-width:384px){
.contact-w3 {
    padding: 1em;
	margin: 2em auto 0;
}
.header {
    margin-top: 2em;
}
.contact-w3 input[type="submit"] {
    padding: 0.7em;	
}
@media(max-width:375px){
	
}
@media(max-width:320px){
.header h1 {
    font-size: 1.5em;
}
.contact-w3 input[type="submit"] {
    padding: 0.7em;
    font-size: 0.8em;
}
.footer-w3-agile p {
    font-size: .85em;	
}
#heading4{
    font-size: 10px;
    color:white;
}
}
</style>
<title>Contact Form</title>
</head>
<body>
		
		<div class="header">
			<h1> Contact Form</h1>
		</div>
		
			<div class="main-content">
				<div class="contact-w3">
                     <center>
					<form action="#" method="POST" >
						<label>Name</label>
						<input type="text" name="Name" placeholder="Your name" required>
						<div class="row">
							<div class="contact-left-w3">
								<label>Email</label>
									<input type="text" name="Email" placeholder="Email address" required>
							</div>
							<div class="contact-right-w3l">
								<label>Phone</label>
								<input type="text" name="Phone" placeholder="Phone number" required>
							</div>
							<div class="clear"></div>
						</div>
						<label>Subject</label>
							<input type="text" name="Subject" placeholder="Subject" required>
							
						<div class="row1">
							<label>Message</label>
							<textarea placeholder="Message" name="Message"></textarea>
						</div>
						<input type="submit" value="Send message" name="done">

					</form>
				</center>

				</div>

			</div>
			

    
			

</body>
</html>