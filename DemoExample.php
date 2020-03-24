<html>
<body>
<form action="DemoExample.php">
<input type="text" name="n1" placeholder="Enter the name">
<br>
<br>
<input type="text" name="n2" placeholder="Enter the roll">
<br>
<br>
<input type="submit" name="X" value="Login">
<?php
if(isset($_REQUEST["X"]))
{
$a=$_REQUEST["n1"];
$b=$_REQUEST["n2"];
$conn=mysqli_connect("localhost","id11094580_nitya","nitya");
mysqli_select_db($conn,"id11094580_nitya");
mysqli_query($conn,"insert into Stu values('$a',$b)");
echo"Data Stored Successfully";
}
?>
</form>
</body>
</html>
   