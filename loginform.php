

<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	*
	{
		box-sizing: border-box;
		margin: 0px;
		padding:0px;

    }
    
	.bodyimg
	{
		height:100%;
		z-index:-1;
		position:fixed;
		left:0;
		bottom:0;
		
	}
	.container
	{
		display:flex;
		justify-content: center;
		align-items: center;
		
	}	
	.social-media
	{
		display:flex;
		flex-direction:horizontal;
	}
	h2
	{
		text-align:center;
		text-transform: uppercase;
	}
	.content
	{
		display: flex;
		flex-direction:horizontal;
		margin:50px 60px;

	}
	.form-container
	{
		margin:0 90px;
	}

	.form-container form img
	{
		margin:0 200px;

	}
	.contentimg
	{
		width:850px;
		display:flex;
		align-items:center;
	}
	
	.active{
            background:#F9A826;
           color:white;
           padding:10px;

			
			width:250px;
			text-align: center;
			
			font-size:30px;
			text-decoration: none;
			cursor:pointer;
  }
  
		
		h2
		{
			color:black;
			font-weight:bold;
			font-size:56px;
		}
		.heading
		{
			display:flex;
			flex-direction: horizontal;
			align-items:center;
			justify-content: center;
			

		}
		.one,.two
		{
			padding:10px;
			color:white;
			border:1px solid grey;
			width:250px;
			text-align: center;
			background-color:black;
			font-size:30px;
			text-decoration: none;
			cursor:pointer;
		}
		.other
		{
			display:flex;
		flex-direction:horizontal;
		justify-content: center;
		align-items:center;
		font-weight:bold;
		margin-top:15px;
		margin-bottom:7px;
		}
		.social-icon i
	{
		height:46px;
  width: 46px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 0.45rem;
  color: #333;
  border-radius: 50%;
  border: 1px solid #333;
  text-decoration: none;
  transition: 0.3s;
	}
	.social-icon i:hover {
  color: #4481eb;
  border-color: #4481eb;
  text-decoration: none;
}

		.social-media
	{
		display:flex;
		flex-direction:horizontal;
		justify-content: center;
		align-items:center;
	}
		.one:active

		{
			background-color: #fef8f5;
			text-decoration: none;
		}
		.one:visited
		{
			background-color: #fef8f5;
			text-decoration: none;
			color:black;
		}
		.two:active
		{
			background-color: lightgrey;
			text-decoration: none;
		}
		.one:focus
		{
			background-color: lightgrey;
			text-decoration: none;
		}
		.two:focus
		{
			background-color: lightgrey;
			text-decoration: none;
		}
		.one:hover
		{
			color:black;
			text-decoration: none;
			background-color: #fef8f5;
		}
		.two:hover
		{
			color:black;
			text-decoration: none;
			background-color: #fef8f5;
		}
		
		

	.Signin,.Signup
		{
			align-items:center;
			justify-content: center;
			margin:auto;
		}
		.form
		{
			display:flex;
			flex-direction:column;
			border-bottom: 2px solid lightgrey;
			
        }
        .form2
        {
            display:flex;
			flex-direction:column;
			border-bottom: 2px solid lightgrey;
			
        }
		.one
		{
			text-decoration: none;
		}
		.two
		{
			text-decoration: none;
		}
		
		.form input
		{
			
			text-align:left;
			width:500px;
			
			border:none;
			outline:none;
			padding:20px 30px;
			background:lightgrey;

		}
		a
		{
			text-decoration: none;
		}
		#logos
		{
			background-color:#F9A826;
			color:white;
			width:500px;
			margin:auto;
			margin-bottom:20px;
			margin-top:20px;
			font-size:40px;
			padding:5px;
			height:50px;
			
			border-radius:30px;
		}
		#log
		{
			background-color:#F9A826;
			color:white;
			width:500px;
			margin:auto;
			margin-bottom:20px;
			margin-top:10px;
			font-size:40px;
			padding:5px;
			height:50px;
			
			border-radius:30px;
		}
		.form2 input
		
		{
			padding:20px 60px;
			text-align:left;
			width:500px;
			
			
			border:none;
			outline:none;
			
			background:lightgrey;

		}
		.input-field {
  
  width: 500px;

  background-color: #f0f0f0;
 margin:auto;
			margin-bottom:10px;
			margin-top:10px;
  height: 55px;
  border-radius: 55px;
  display: grid;
  grid-template-columns: 15% 85%;
  
 
}
.child
{
	 width: 500px;

  background-color: #f0f0f0;
 margin:auto;
			margin-bottom:10px;
			margin-top:10px;
  height: 55px;
  border-radius: 55px;
  display: grid;
  grid-template-columns: 15% 85%;
}

.input-field i {
  text-align: center;
  line-height: 65px;
  color: grey;
  transition: 0.5s;
  
}
.child i
{
	text-align: center;
  line-height: 65px;
  color: grey;
  transition: 0.5s;
}
#profile
{
	width:150px;
}
.input-field input {
  background: none;
  outline: none;
  border: none;
  line-height: 1; 
}
.child input {
  background: none;
  outline: none;
  border: none;
  line-height: 1; 
}


		
		body
		{
			background:#fef8f5;
		
		}
	
@media screen and (max-width: 900px){
  .container{
    display:flex;
    align-items:center;
    margin:auto;
     justify-content: center;

  }
  h2
		{
			color:white;
			font-weight:0;
			font-size:50px;
		}
  .social-icon i
	{
  color: black;
  
  background:white;
	}
  .form-container
	{
		margin:0 10px;
	}

	.form-container form img
	{
		margin:0 100px;

	}
	#profile
	{
		width:100px;
	}
  button
  {
  	width:300px;
  }
  #log
  {
  	width:300px;
  }

  .bodyimg{
    display: none;
  }

  .contentimg{
    display: none;
  }

  .form-container{
    justify-content: center;
  }
  .form2 input
		
		{
			
			width:300px;
			padding:10px 30px;
		}
  .form input
		{
			
			width:300px;
			padding:10px 30px;
					}
					.input-field {
  
  width: 300px;
  
 
}
.child
{
	 width: 300px;
}
.one,.two
		{
			padding:10px;
			color:white;
			border:1px solid grey;
			width:450px;
			text-align: center;
			background-color:black;
			font-size:30px;
			text-decoration: none;
			cursor:pointer;
		}



}

@media screen and (max-width: 1050px){
  .container{
    grid-gap: 5rem;
  }
}

@media screen and (max-width: 1000px){
  form{
    width: 290px;
  }

  .login-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
  }

  .img img{
    width: 400px;
  }
  body
  {
  background: rgba(0,0,0,0.5);
		box-shadow: inset 100px 70px 200px #000000, inset -100px -70px 200px #000000;
	}

}

	</style>
<body>
    
	<img  class="bodyimg"src="wave.png">
	<div class="container">
		
		<div class="content">
			<div id="icon">
		<img  class="contentimg" src="workss.svg">
	</div>
	<div class="form-container">
	
		
		<form  method="POST" action="signups.php">
			<img src="avatar.svg"  id="profile">
			<h2> Welcome </h2>
			<div class="heading">
			<a href="#" class="one"> Sign up </a>
			<a href="#" class="two"> Sign in</a>
		</div>
		<div class="Signin">
		<br>
		<div class="form">
			<div class="input-field">
			<i class="fas fa-user"></i>
			<input type="text"placeholder="Enter your Name" id="name"autocomplete="off" required name="user">
		</div>
		<div class="input-field">
              <i class="fas fa-envelope"></i>
			<input type="email" placeholder="Enter your Email Id" id="mail" autocomplete="off" required name="email" >
		</div>
		<div class="input-field">
              <i class="fas fa-lock"></i>
			<input type="password" placeholder="Password" id="pass" required name="pass">
		</div>
			<button type="submit" id="log"  > <h4> Sign up </h4></button>
		

		</div>
	</div>
	</form>

	<form method="POST" action="signin.php">
	<div class="Signup">
		<div class="topic2">
			

		<br>
		<div class="form2">
			<div class="child">
			<i class="fas fa-user"></i>
			<input type="email"placeholder="Enter Your Email Id" autocomplete="off" required name="email" >
		</div>
		<div class="child">
			<i class="fas fa-lock"></i>
			<input type="password" placeholder="Password" name="pass" required>
		</div>
			<button type="submit" id="logos" name="signin"> <h4> Sign in</h4></button>

		</div>
	</div>
		
		</form>
		

	</div>
	<div class="other"> Or Sign up using</div>

	<div class="social-media">
              <a href="#"  class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
	</div>
    </div>

    <script>
  	$(document).ready(function(){
  		$(".Signin").show();
  $(".Signup").hide();
  $('.one').addClass("active");
  
$(".two").click(function(){
  $(".Signin").hide();
  $(".Signup").fadeIn(600);
  $('.one.active').removeClass("active");
  $(this).addClass("active");


});
$(".one").click(function(){
  $(".Signin").fadeIn(600);
  $(".Signup").hide();
  $('.two.active').removeClass("active");
  $(this).addClass("active");
});


});
</script>

</body>
</html>