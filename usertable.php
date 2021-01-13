<?php
$servername="localhost";
$username="root";
$password="";
$database="projectwork";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
$sql="CREATE TABLE user (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(255) NOT NULL,
email VARCHAR(255),password VARCHAR(255))";
$result= mysqli_query($conn,$sql);
if(!$result)
{
    die("not created".mysqli_error($conn));

}
?>