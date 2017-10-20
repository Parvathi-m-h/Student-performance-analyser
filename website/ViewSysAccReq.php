<html>
<head>
		<title>STUDENT DETAILS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<style>
		body{
		background-image: url("lab3pic.png");
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

<!--<div class="header">
			<div>System <span>Access </span>Request</div>
		</div> 


		 <div class="login">
	<p id="name"></p>
				</div><br>
				<p id="email"></p>
				</div><br>
				<p id="reason"></p>
				</div><br>-->

				<div id="tablePrint"> </div>
   	<script type="text/javascript">
				function successSID(data){
						// var student=[]
						// for(index in jsonData) {
						// 	student.push(JSON.stringify(jsonData[index]));
						// }
						// 		var obj = JSON.parse(student);
						
							var name = [];
     				 var email = [];
					  var reason = [];
 					for (i = 0; i < data.length; i++) { 
       			 		name.push(data[i].Roll_no);
       			 		email.push(data[i].email);
						reason.push(data[i].Req_reason)
    					}
						
							// document.getElementById("name").value=name;	

var myTable= "<table><tr><td style='width: 300px;font-size: 30px;font-weight: 300;margin-bottom: 15px; border: 1px solid rgba(255,255,255,0.3);padding: 20px 15px; color: darkBlue;'>name</td>";
myTable+= "<td style='width: 300px;font-size: 30px;font-weight: 300;margin-bottom: 15px; border: 1px solid rgba(255,255,255,0.3);padding: 20px 15px;  color: darkBlue; ;'>Email</td>";
myTable+="<td style='width: 300px;font-size: 30px;font-weight: 300;margin-bottom: 15px; border: 1px solid rgba(255,255,255,0.3);padding: 20px 15px;  color: darkBlue; ;'>reason</td></tr>";

// myTable+="<tr><td style='width: 300px;font-size: 30px;font-weight: 300;margin-bottom: 15px; border: 1px solid rgba(255,255,255,0.3);padding: 20px 15px;                    '>---------------</td>";
// myTable+="<td     style='width: 300px;font-size: 30px;font-weight: 300;margin-bottom: 15px; border: 1px solid rgba(255,255,255,0.3);padding: 20px 15px;  text-align: right;'>---------------</td>";
// myTable+="<td     style='width: 300px; font-size: 30px;font-weight: 300;margin-bottom: 15px; border: 1px solid rgba(255,255,255,0.3);padding: 20px 15px; text-align: right;'>---------------</td></tr>";

						for (var i=0; i<data.length; i++) {
myTable+="<tr><td style='width: 300px;font-size: 30px;font-weight: 300;margin-bottom: 15px; border: 1px solid rgba(255,255,255,0.3);padding: 20px 15px;text-align: left; '> " + name[i] + "</td>";
// myArray[i] = myArray[i].toFixed(3);
myTable+="<td style='width: 300px;font-size: 30px;font-weight: 300;margin-bottom: 15px; border: 1px solid rgba(255,255,255,0.3);padding: 20px 15px;  text-align: center;'>" + email[i] + "</td>";
myTable+="<td style='width: 300px;font-size: 30px;font-weight: 300;margin-bottom: 15px; border: 1px solid rgba(255,255,255,0.3);padding: 20px 15px;  text-align: center;'>" + reason[i] + "</td></tr>";
  }  
   myTable+="</table>";

 document.write( myTable);


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
$conn = mysqli_connect($servername, $username, $password,"request");

// Check connection
if (mysqli_connect_errno()) {
    echo "Connection failed: " . mysqli_connect_error();
} 
echo "Connected successfully<br>";


    
    $query="SELECT * FROM systemaccess";
    $res=mysqli_query($conn,$query);
	$data = array();
	while($row=mysqli_fetch_array($res)){
		$Roll_no=$row['Roll_no'];
		$email=$row['email'];
		$Req_reason=$row['Req_reason'];

		 array_push($data,array('Roll_no'=> $Roll_no, 'email'=> $email,'Req_reason'=>$Req_reason));
	}
    
    // // $sql = "INSERT INTO systemaccess(Roll_no, Req_reason)
    // --       VALUES ('$name', '$fb')";

			
			

			echo "<script>successSID(".json_encode($data).");</script>";

mysqli_close($conn);
?>	        
</body>

</html>