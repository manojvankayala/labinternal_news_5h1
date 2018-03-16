<html>
<head>
</head>
        <body  style="background-color : powderblue";>
        <form action='res.php' method="POST">
                UserName: <input type='text' name="uname"> <br> <br>
                Password: <input type='password' name="pass"> <br><br>
                <input type='submit' name="sub1" value ="Click here to login">
                
                 </form>
                 <form action='verify.php'>
                <input type='submit'  value="click here to register">
                </form> 
        </body>
       
</html>
<?php
      $con=mysqli_connect("localhost","root","vishnu123","proweb");
      /*if($_SESSION["uname"]!='')){
        $var1=$_POST["$uname"];
        $var2=$_POST["$pass"];
        $sql="select name,password from user where name=$var1 and password=$var2";
        $result=mysqli_query($con,$sql);
        if($result){
            header("location:res.php")
        }
        else
        echo "username or password is invalid";
      }*/
?>
