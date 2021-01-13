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
if($_SERVER["REQUEST_METHOD"]=="POST")
{   $username = $_POST['user']; 
    $password = $_POST['pass'];
    $email = $_POST['email']; 
 
  // Error message if the input field is left blank 
  
   
    $exist="SELECT * FROM user WHERE email ='$email' ";
    $result= mysqli_query($conn, $exist);
    $num=mysqli_num_rows($result);
    if($num>0)
    {
      ?>
      <script>
      alert("Try again!user already exists");
      </script>
      
      <?php
    
    }
    else{

    $sql="INSERT INTO user (name,email,password) VALUE('$username','$email','$password');";  
    $result= mysqli_multi_query($conn,$sql);
}
}
?>