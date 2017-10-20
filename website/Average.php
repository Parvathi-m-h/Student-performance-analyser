<html>
<head>
		<title>STUDENT DETAILS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<style>
		body{
		background-color: lightblue;
	}
	
	.header{
	position: absolute;
	top: calc(95% - 35px);
	left: calc(58% - 455px);
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
	top: calc(95% - 75px);
	left: calc(50% - 75px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 2px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family:  sans-serif;
	font-size: 20px;
	font-weight: 600;
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
	<script type="text/javascript" src="canvasjs.min.js"></script>
	<script type="text/javascript" src="jquery-1.2.6.js"></script>
	
	
	</head>
<body>
    
	

		
	 <div class="login">
	 <form method="post">
				
				
				</form>
				</div>
				<div>
					<table class="table">
						</table>
					</div>
					<br>
					<div id="chartContainer" style="height:400px; width: 100%;"></div>
				<script type="text/javascript">
				function successSID(jsonData){

				  
					
				// 	str = JSON.stringify(obj);
				// 	str = JSON.stringify(obj, null, 4); // (Optional) beautiful indented output.
				// 	// console.log(str); // Logs output to dev tools console.
				// 	// alert(str); // Displays output using window.alert()
				
				// 		obj = JSON.parse(str);
				// 		 console.log(Object.values(obj));
				// window.alert(Object.values(obj));
						var student=[]
						for(index in jsonData) {
							student.push(JSON.stringify(jsonData[index]));
						}

								var obj = JSON.parse(student);
								// alert(obj["Rollno"]);
							var chart = new CanvasJS.Chart("chartContainer", {
									
									data: [              
									{
										// Change type to "doughnut", "line", "splineArea", etc.
										type: "column",
										dataPoints: [
											{ label: "M1",  y: parseInt(obj["M1"])  },
											{ label: "M2", y: parseInt(obj["M2"])   },
											{ label: "M3", y: parseInt(obj["M3"])   },
											{ label: "ML",  y: parseInt(obj["ML"])   },
											{ label: "E1",  y: parseInt(obj["E1"])  },
											{ label: "E2",  y: parseInt(obj["E2"])   },
											{ label: "E3",  y: parseInt(obj["E3"])  },
											{ label: "E4",  y: parseInt(obj["E4"])   },
											{ label: "EL",  y: parseInt(obj["EL"]) },
											{ label: "Assignment",  y:parseInt(obj["Assignment"])  },
											{ label: "Project",  y: parseInt(obj["Project"])   }
										]
									}
									]
								});
								chart.render();	
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
$conn = mysqli_connect($servername, $username, $password,"university");

// Check connection
if (mysqli_connect_errno()) {
    echo "Connection failed: " . mysqli_connect_error();
} 
echo "Connected successfully<br>";


    
    
    $query="SELECT * FROM student_data";
    $res=mysqli_query($conn,$query);
    // var_dump($res);
		$M1=0;$M2=0;$M3=0;$ML=0;
			$E1=0;$E2=0;$E3=0;$E4=0;$EL=0;
			$Assignment=0;$Project=0;$count=0;
	while($row=mysqli_fetch_array($res)){
	
			
		
			$M1+=$row['M1'];$M2+=$row['M2'];
			$M3+=$row['M3'];$ML+=$row['ML'];
			
			$E1+=$row['E1'];$E2+=$row['E2'];
			$E3+=$row['E3'];$E4+=$row['E4'];
			$EL+=$row['EL'];

			$Assignment+=$row['Assignment'];$Project+=$row['Project'];

			$count+=1;
			
				
	}
					$data = array();
			 array_push($data,array('M1'=> ($M1/$count),'M2'=> ($M2/$count),'M3'=> ($M3/$count),'ML'=> ($ML/$count),
			'E1'=> ($E1/$count),'E2'=> ($E2/$count),'E3'=> ($E3/$count),'E4'=> ($E4/$count),'EL'=> ($EL/$count),'Assignment'=> ($Assignment/$count),'Project'=> ($Project/$count)));

    
    $response[student] = $posts;
			
			$fp = fopen('results.json', 'w');
			fwrite($fp, json_encode($data));
			fclose($fp);
			 $rowEn=json_encode($row);
			 echo "<script>successSID(".json_encode($data).");</script>";


mysqli_close($conn);
?>	
</body>

</html>



   
   
   
   
   
   
   
   
   
   
   
   
   

