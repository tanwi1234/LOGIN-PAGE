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
{
    
    $email=$_POST['email'];
    $password= $_POST['pass'];
    $sql="SELECT * FROM user WHERE email='$email' AND password='$password'";  
    $result= mysqli_query($conn,$sql);
    $rows=mysqli_num_rows($result);
    if($rows==1)
{
    header('location:signin.php');

}
else{
  
  ?>
      <script>
      alert("Try again!Invalid email or password");
      </script>
      
      <?php
}


}
		?>