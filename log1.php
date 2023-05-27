<?php
$server="localhost";
$uname="root";
$pwd="";
$db="form";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connect");
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$query="insert into login values('$uname','$pwd')";
if($res=mysqli_query($con,$query))
{
   echo"<script> alert('data saved');
   window.location.href='verify1.php';</script>";    
}
else
{

    echo"<script>alert('data unsaved')</script>";
}
?>