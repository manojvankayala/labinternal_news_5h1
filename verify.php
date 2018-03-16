 <?php
$con=mysqli_connect("localhost","root","vishnu123","proweb");
if(isset($_POST["sub"])){
	$username=$_POST["uname"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$sql = "INSERT INTO `user` VALUE('$username','$email',' $password')";
	$result=mysqli_query($con,$sql);
	if($result){
		header("location:register1.php");
	}
	else
	echo "failed";
	}
?>
<html>
        <head>
                <title>Login Page</title>               
   
        </head>
        <body>
        <center>
        <form action ='' method="POST">
        <fieldset>
        <legend>Fill the below doc</legend>
        <h2 align='center'> Registration Page</h2>
           Name:&nbsp;<input type='text' name="uname"> <br><br>
           E-mail Id:&nbsp;&nbsp;&nbsp; <input type='text' name="email"> <br><br>
           password: <input type='password' name="password" > <br><br>
           &nbsp;&nbsp;&nbsp;<input type='submit' name="sub" value='Submit'>
           &nbsp;&nbsp;&nbsp;<input type='reset' value='Reset'>
        </form>
        </center>
        </fieldset>
        </body>
</html>
