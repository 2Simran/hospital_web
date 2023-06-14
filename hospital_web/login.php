<?php
session_start();
$error="";
if(!empty($_POST)){
// Input 
$email=$_POST['email'];
$password=$_POST['password'];
// Validation
if($password==""){
$error.="<li>Password is Mandatory</li>";
}
if($email==""){
$error.="<li>E-Mail is Mandatory</li>";
}
}
?>
<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--<title>Login & Registration Form | CoderGirl</title>-->
<!---Custom CSS File--->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
/* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}
body{
min-height: 100vh;
width: 100%;
background-image: url("Top-banner.jpg");
}
.container{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
max-width: 430px;
width: 100%;
background: #fff;
border-radius: 7px;
box-shadow: 0 5px 10px rgba(0,0,0,0.3);
}
.container .registration{
display: none;
}
#check:checked ~ .registration{
display: block;
}
#check:checked ~ .login{
display: none;
}
#check{
display: none;
}
.container .form{
padding: 2rem;
}
.form header{
font-size: 2rem;
font-weight: 500;
text-align: center;
margin-bottom: 1.5rem;
}
.form input{
height: 60px;
width: 100%;
padding: 0 15px;
font-size: 17px;
margin-bottom: 1.3rem;
border: 1px solid #ddd;
border-radius: 6px;
outline: none;
}
.form input:focus{
box-shadow: 0 1px 0 rgba(0,0,0,0.2);
}
.form a{
font-size: 16px;
color: #009579;
text-decoration: none;
}
.form a:hover{
text-decoration: underline;
}
.form input.button{
color: #fff;
background: #3FBBC0;
font-size: 1.2rem;
font-weight: 500;
letter-spacing: 1px;
margin-top: 1.7rem;
cursor: pointer;
transition: 0.4s;
}
.form input.button:hover{
background: #006653;
}
.signup{
font-size: 17px;
text-align: center;
}
.signup label{
color: #009579;
cursor: pointer;
}
.signup label:hover{
text-decoration: underline;
}
</style>
</head>
<body>
<div class="container">
<input type="checkbox" id="check">
<div class="login form">
<header>Admin Login</header>

<?php
if($error!=""){
echo"<div class='alert alert-danger' role='alert'>
<ul>
".$error."
</ul>
</div>";
}
elseif(!empty($_POST)){
include_once("../db.php");
// mysqli_query($con,"SELECT * FROM admin WHERE username='$uname' and password='$upassword'");
$sql = "SELECT * FROM admin WHERE email='".$email."' AND password ='".$password."'";
// echo $sql;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
$_SESSION['username']=$row['username'];
if(!empty($_SESSION['username'])){
header("Location:../admin/dashboard.php"); 
}
}
} else {
echo "Username and Password Not Matched";
}
mysqli_close($conn); 
}
echo"<form method='POST' action='".$_SERVER['PHP_SELF']."'>
<input type='text' placeholder='Enter your email' name='email'>
<input type='password' placeholder='Enter your password' name='password'>
<a href='#'>Forgot password?</a>
<input type='submit' class='button' value='Login'>
</form>";
// echo $_SESSION['username'];
?>
</div>
<div class="registration form">
<div class="signup">
<span class="signup">Already have an account?
<label for="check">Login</label>
</span>
</div>
</div>
</div>
<!-- Doctor Login -->
<div class="container">
<input type="checkbox" id="check">
<div class="login form">
<header>Doctor Login</header>
<?php
if($error!=""){
echo"<div class='alert alert-danger' role='alert'>
<ul>
".$error."
</ul>
</div>";
}
elseif(!empty($_POST)){
include_once("../db.php");
// mysqli_query($con,"SELECT * FROM doctors WHERE docEmail='$uname' and password='$dpassword'");
$sql = "SELECT * FROM doctors WHERE docEmail='".$uname."' AND password ='".$dpassword."'";
echo $sql;
$num=mysqli_fetch_array(mysqli_query($conn,$sql));
$_SESSION['dlogin']=$_POST['username'];
$_SESSION['username']=$_POST['username'];
$_SESSION['id']=$num['id'];
$uid=$num['id'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
//Code Logs
$log=mysqli_query($conn,"insert into doctorslog(uid,username,userip,status) values('$uid','$uname','$uip','$status')");
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
$_SESSION['username']=$row['id'];
if(!empty($_SESSION['username'])){
header("Location:../doctor/dashboard.php");
}
}
} else {
echo "Username and Password Not Matched";
}
mysqli_close($conn);
}
echo"<form method='POST' action='".$_SERVER['PHP_SELF']."'>
<input type='text' placeholder='Enter your email' name='username'>
<input type='password' placeholder='Enter your password' name='password'>
<a href='#'>Forgot password?</a>
<input type='submit' class='button' value='Login'>
</form>";
?>
</div>
<div class="registration form">
<div class="signup">
<span class="signup">Already have an account?
<label for="check">Login</label>
</span>
</div>
</div>
</div>
</body>
</html>

<?php
session_start();
$error="";

if(!empty($_POST)){
// Input 
$uname=$_POST['username'];
$dpassword=md5($_POST['password']);
// Validation
if($dpassword==""){
$error.="<li>Password is Mandetory</li>";
}
if($uname==""){
$error.="<li>E-Mail is Mandetory</li>";
}
}
?>
<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--<title>Login & Registration Form | CoderGirl</title>-->
<!---Custom CSS File--->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
/* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}
body{
min-height: 100vh;
width: 100%;
background-image: url("Top-banner.jpg");
}
.container{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
max-width: 430px;
width: 100%;
background: #fff;
border-radius: 7px;
box-shadow: 0 5px 10px rgba(0,0,0,0.3);
}
.container .registration{
display: none;
}
#check:checked ~ .registration{
display: block;
}
#check:checked ~ .login{
display: none;
}
#check{
display: none;
}
.container .form{
padding: 2rem;
}
.form header{
font-size: 2rem;
font-weight: 500;
text-align: center;
margin-bottom: 1.5rem;
}
.form input{
height: 60px;
width: 100%;
padding: 0 15px;
font-size: 17px;
margin-bottom: 1.3rem;
border: 1px solid #ddd;
border-radius: 6px;
outline: none;
}
.form input:focus{
box-shadow: 0 1px 0 rgba(0,0,0,0.2);
}
.form a{
font-size: 16px;
color: #009579;
text-decoration: none;
}
.form a:hover{
text-decoration: underline;
}
.form input.button{
color: #fff;
background: #3FBBC0;
font-size: 1.2rem;
font-weight: 500;
letter-spacing: 1px;
margin-top: 1.7rem;
cursor: pointer;
transition: 0.4s;
}
.form input.button:hover{
background: #006653;
}
.signup{
font-size: 17px;
text-align: center;
}
.signup label{
color: #009579;
cursor: pointer;
}
.signup label:hover{
text-decoration: underline;
}
</style>
</head>
<body>
<div class="container">
<input type="checkbox" id="check">
<div class="login form">
<header>Doctor Login</header>
<?php
if($error!=""){
echo"<div class='alert alert-danger' role='alert'>
<ul>
".$error."
</ul>
</div>";
}
elseif(!empty($_POST)){
include_once("../db.php");
// mysqli_query($con,"SELECT * FROM doctors WHERE docEmail='$uname' and password='$dpassword'");
$sql = "SELECT * FROM doctors WHERE docEmail='".$uname."' AND password ='".$dpassword."'";
echo $sql;
$num=mysqli_fetch_array(mysqli_query($conn,$sql));
$_SESSION['dlogin']=$_POST['username'];
$_SESSION['username']=$_POST['username'];
$_SESSION['id']=$num['id'];
$uid=$num['id'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
//Code Logs
$log=mysqli_query($conn,"insert into doctorslog(uid,username,userip,status) values('$uid','$uname','$uip','$status')");
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
$_SESSION['username']=$row['id'];
if(!empty($_SESSION['username'])){
header("Location:../doctor/dashboard.php");
}
}
} else {
echo "Username and Password Not Matched";
}
mysqli_close($conn);
}
echo"<form method='POST' action='".$_SERVER['PHP_SELF']."'>
<input type='text' placeholder='Enter your email' name='username'>
<input type='password' placeholder='Enter your password' name='password'>
<a href='#'>Forgot password?</a>
<input type='submit' class='button' value='Login'>
</form>";
?>
</div>
<div class="registration form">
<div class="signup">
<span class="signup">Already have an account?
<label for="check">Login</label>
</span>
</div>
</div>
</div>
</body>
</html>
