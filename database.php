<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
else{
    echo"connection successfully";
}
$sql = "CREATE DATABASE projectwork";
$result= mysqli_query($conn,$sql);
if($result)
{
    echo"database created";
}
else{
    die("not created".mysqli_error($conn));

}

?>