<html>
<head>
		<title>STUDENT DETAILS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<style>
		body{
		background-image: url("lab1pic.png");
		
	}
	
	.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 455px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 75px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	/*width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family:  sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;*/
	width: 250px;
	height: 35px;
	background: #c0c0c0;
	border: 1px solid ##5379fb;
	cursor: pointer;
	border-radius: 2px;
	color: #000000;
	font-family: 'Exo', sans-serif;
	font-size: 15px;
	font-weight: 150;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=password]{
	/*width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;*/
	width: 250px;
	height: 35px;
	background: #c0c0c0;
	border: 1px solid ##5379fb;
	cursor: pointer;
	border-radius: 2px;
	color: #000000;
	font-family: 'Exo', sans-serif;
	font-size: 15px;
	font-weight: 150;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 250px;
	height: 35px;
	background: # #c0c0c0;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:hover{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}
::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}

	</style>
	</head>
<body>
    
	
<div class="header">
			<div>Student <span>Details </span>Portal</div>
		</div>     
		
	 <div class="login">
	 <form method="post">
				<input type="text" placeholder="username" name="name"><br>
				<input type="password" placeholder="password" name="pswd"><br>
				<input type="submit" value="Login" id="myButton" name="login">
				</form>
				</div>
				<script type="text/javascript">
				function successLogin(){
				$loc="studentChoice.php";
        location.href = $loc;
	}
</script>
	<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$fnameErr="";
// Create connection
$conn = mysqli_connect($servername, $username, $password,"employee");

// Check connection
if (mysqli_connect_errno()) {
    echo "Connection failed: " . mysqli_connect_error();
} 
echo "Connected successfully<br>";

if(isset($_POST['login'])){
    $name=$_POST['name'];
    $pswd=$_POST['pswd'];
    
    if (empty($_POST['name'])) {
   echo "Name is required";
  } else {
	  $fname=$_POST["name"];
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $fnameErr = "Only letters and white space allowed"; 
    }
  }
    $query="SELECT * from person where name='$name'";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($res);
    if($row['password']==$pswd){
        echo "<script>successLogin();</script>";
    }
    else{
        echo "incorrect password";
    }
    
}

mysqli_close($conn);
?>	
</body>

</html>



   
   
   
   
   
   
   
   
   
   
   
   
   

