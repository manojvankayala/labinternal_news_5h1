<?php
  $var1=$_POST['UserName'];
  $var2=$_POST['Password'];
  $var3=$_POST['uname'];
  $var4=$_POST['comment'];
  $con=mysqli_connect("localhost","root","vishnu123","proweb");
  $res=mysqli_query($con,"select *from commt");
  $sql = "INSERT INTO `commt` VALUE('99','$var3','$var4')";
  $result=mysqli_query($con,$sql);
  $a=mysqli_fetch_array($res);
  if($a)
    echo "User exists!";
  else
    echo "User doesn't exists";
              
 ?>
<html>
<head></head>
<body style="background-color : orange">
<h1>THE HINDU</h1>
<p>jgfgsfudysduygfgrfusdygfhy<br>usdgfyugyurgfugrsf
hubsdygfsrygfyugrfygrsfhugsdyugfs<br>dyugfyud
1<br>
2<br>
2
2
fgt<br>
dg
dfgt<br>
dfg
</p>
<form action="res.php" method="POST">
<input type="text" name="uname" placeholder="username"><br>
<input type="text" name="comment" placeholder="you can write comment"><br>
<input type="submit" name="cmname" value="submit">
</from>
</body>
</html>
<?php
$query = "SELECT * FROM commt";  
               $result = mysqli_query($conn, $query);  
               while($row = mysqli_fetch_array($result))  
               {    
                    echo $row["uname"]."<br>";
                    echo $row["comment"]."<br>";
               }  
?>

