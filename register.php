<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="db";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo "<script>console.log('Successful in connection');</script>";
}catch(MySQLi_Sql_Exception $ex){
echo "<script>console.log('Error in connection');</script>";
}
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$phone = $_POST['phone'];
$mob_no=$_POST['mob_no'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$register_query = "INSERT INTO `registration`(`fname`, `mname`, `lname`, `branch`, `year`, `phone`, `mob_no`, `email`, `gender`) VALUES ('$fname','$mname','$lname','$branch','$year','$phone','$mob_no','$email','$gender')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo "<script>alert('Registration Successful!');</script>";
}else{
echo "<script>alert('Error in registration!');</script>";
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}
 
?>

<html>
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body>
	<h2>Register Here..!!</h2>
	<div class="register">
	<form method="post" id="register" action="">
		<label>First Name:</label><br>
		<input type="text" id="fname" name="fname" class="name" placeholder="Enter your first name" pattern="[a-zA-Z]{1,}" required><br><br>
		<label>Middle Name:</label><br>
		<input type="text" id="mname" name="mname" class="name" placeholder="Enter your middle name" pattern="[a-zA-Z]{1,}" required><br><br>
		<label>Last Name:</label><br>
		<input type="text" id="lname" name="lname" class="name" placeholder="Enter your last name" pattern="[a-zA-Z]{1,}" required><br><br>
		<label>Branch:</label>
		<select id="branch" name="branch" class="select">
			<option>Automobile</option>
			<option>Civil</option>
			<option>Computer</option>
			<option>Electrical</option>
			<option>Extc</option>
			<option>IT</option>
			<option>Mechanical</option>
		</select><br><br>
		<label>Year:</label>
		<select id="year" name="year" class="select">
			<option>F.E</option>
			<option>S.E</option>
			<option>T.E</option>
			<option>B.E</option>
		</select><br><br>
		<label>Mobile No.:</label><br>
		<select id="phone" name="phone" class="select">
			<option>+91</option>
			<option>+94</option>
			<option>+96</option>
		</select>
		<input type="text" id="mnum" name="mob_no" placeholder="Enter your mobile number" pattern="[6789][0-9]{9}" required><br><br>
		<label>Email:</label><br>
		<input type="email" name="email" class="name" placeholder="Enter your email"  required><br><br>
		<input type="radio" id="male" name="gender" value="male" class="gender" required><span class="gender">&nbsp; Male</span>&nbsp;&nbsp;
		<input type="radio" id="female" name="gender" value="female" class="gender" ><span class="gender">&nbsp; Female</span>&nbsp;&nbsp;
		<input type="radio" id="others" name="gender" value="others" class="gender" ><span class="gender">&nbsp; Others</span>&nbsp;&nbsp;<br><br>
		<input type="submit" name="submit" value="submit" id="submit">
	</form>
	</div>
</body>
</html>