<html>
<head>
		<title>STUDENT DETAILS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<style>
		body{
		background-image: url("student_id.jpg");
	}
	
	.header{
	position: absolute;
	top: calc(45% - 35px);
	left: calc(70% - 455px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 50px;
	font-weight: 200;
}

.header div span{
	color: #FF69B4 !important;
}

.login{
	position: absolute;
	top: calc(65% - 75px);
	left: calc(45% - 75px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 275px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family:  sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login button{
	width: 400px;
	height: 35px;
	background: #5379fa;
	border: 1px solid ##5379fb;
	cursor: pointer;
	border-radius: 2px;
	color: #ffffff;
	font-family: 'Exo', sans-serif;
	font-size: 20px;
	font-weight: 300;
	padding: 6px;
	margin-top: 10px;
}

.login button:hover{
	opacity: 0.8;
}

.login button:active{
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

.login button:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}


.login input[type=submit]{
	width:275px;
	height: 35px;
	background: #c0c0c0;
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
.login textarea {
	/*width: 250px;
	height: 35px;*/
	background: #c0c0c0;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #000;
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
			<div>Provide <span>Feedback </span></div>
		</div>     
		
	 <div class="login">
    <form method="post">
            <input type="text" placeholder="Student ID" name="name"><br>
           <textarea rows="4" cols="30" placeholde="Enter Feedback" name="fb">
                </textarea>
           <input type="submit" value="ENTER" id="myButton" name="login">
           </form>
				</div>
				
		

<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$fnameErr="";
$rowEn="";
// Create connection
$conn = mysqli_connect($servername, $username, $password,"feedback");

// Check connection
if (mysqli_connect_errno()) {
    echo "Connection failed: " . mysqli_connect_error();
} 
echo "Connected successfully<br>";

if(isset($_POST['login'])){
    $name=$_POST['name'];
    $fb=$_POST['fb'];
    
    if (empty($_POST['name'])) {
   echo "Student ID is required";
  } 
    // $query="SELECT * FROM student_data";
    // $res=mysqli_query($conn,$query);
    
    $sql = "INSERT INTO student_data(Roll_no, fb)
          VALUES ('$name', '$fb')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



    
    
}

mysqli_close($conn);
?>	        
</body>

</html>



   
   
   
   
   
   
   
   
   
   
   
   
   

