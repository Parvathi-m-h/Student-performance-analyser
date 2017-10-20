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
			<div>View <span>Feedback </span></div>
		</div>     
		
	 <div class="login">
        <form method="post">
        <input type="text" placeholder="Student ID" name="name" id="name"><br>   
        <!--<button onclick="myFunction()"  >Enter</button>-->
         <input type="submit" value="ENTER" id="myButton" name="login">
           
        </form >
       <!--<input type="text"  name="feedback" id="fb_b"><br> -->
       <textarea id="fb_b" rows="4" cols="30" placeholde="Feedback" ></textarea>
				</div>
				
                <script>
            function myFunction(jsonData) {
                			var student=[]
						for(index in jsonData) {
							student.push(JSON.stringify(jsonData[index]));
						}

								var obj = JSON.parse(student);
                                // window.alert("hi");
                                document.getElementById("fb_b").value=obj['fb'];
                
    // if (n != null) {
    //     if(n%2==0)
    //         window.alert(n +" is even");
    //     else
    //        { window.alert(n +"It is odd"); document.getElementById("myText").value=9;}
    // }
    
}
</script>
		

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

    
    if (empty($_POST['name'])) {
   echo "Student ID is required";
  } 
    $query="SELECT * from student_data where Roll_no='$name'";
    $res=mysqli_query($conn,$query);
    
  while($row=mysqli_fetch_array($res)){
        $Roll_no=$row['Roll_no']; 
			$fb=$row['fb']; 
			$data = array();
            echo $Roll_no;
            echo $fb;
			 array_push($data,array('Roll_no'=> $Roll_no, 'fb'=>$fb));
			
			 echo "<script>myFunction(".json_encode($data).");</script>";
			
		}

}

mysqli_close($conn);
?>	        
</body>

</html>



   
   
   
   
   
   
   
   
   
   
   
   
   

