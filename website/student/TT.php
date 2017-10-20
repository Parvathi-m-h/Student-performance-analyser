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
	top: calc(95% - 35px);
	left: calc(48% - 455px);
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
	font-size: 18px;
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
    
	
<div class="header">
			<div>Enter <span>Test </span> Type</div>
		</div>     
		
	 <div class="login">
	 <form method="post">
				<input type="text" placeholder="Student ID" name="name"><br>
				<input type="text" placeholder="TestType" name="Cid"><br>
				
				<input type="submit" value="ENTER" id="myButton" name="login">
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
								if ( obj["co"]== "tt1"){
							var chart = new CanvasJS.Chart("chartContainer", {	
									data: [              
									{
										// Change type to "doughnut", "line", "splineArea", etc.
										type: "column",
										dataPoints: [
											{ label: "M1",  y: parseInt(obj["M1"])  },
											{ label: "E1", y: parseInt(obj["E1"])   },
											{ label: "E2", y: parseInt(obj["E2"])   },
											{ label: "ML",  y: parseInt(obj["ML"])   }
										]
									}
									]
								});
								}

								else if(obj["co"]== "tt2"){
									var chart = new CanvasJS.Chart("chartContainer", {
									
									data: [              
									{
										// Change type to "doughnut", "line", "splineArea", etc.
										type: "column",
										dataPoints: [
											{ label: "M2",  y: parseInt(obj["M2"])  },
											{ label: "M3",  y: parseInt(obj["M3"])  },
											{ label: "E2",  y: parseInt(obj["E2"])  },
											{ label: "EL",  y: parseInt(obj["EL"])   },
											{ label: "Project",  y: parseInt(obj["Project"])   }
										]
									}
									]
								});
								}

								else if(obj["co"]== "tt3")
								{
									var chart = new CanvasJS.Chart("chartContainer", {
									
									data: [              
									{
										// Change type to "doughnut", "line", "splineArea", etc.
										type: "column",
										dataPoints: [
											{ label: "M1",  y: parseInt(obj["M1"])  },
											{ label: "E3",  y: parseInt(obj["E3"])  },
											{ label: "E4",  y: parseInt(obj["E4"])  },
											{ label: "Assignment",  y:parseInt(obj["Assignment"])  }											
											
										]
									}
									]
								});
								}


								else if(obj["co"]== "tt4")
								{
									var chart = new CanvasJS.Chart("chartContainer", {
									
									data: [              
									{
										// Change type to "doughnut", "line", "splineArea", etc.
										type: "column",
										dataPoints: [
										
											{ label: "Project",  y: parseInt(obj["Project"])   }
											
										]
									}
									]
								});
								}

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

if(isset($_POST['login'])){
    $name=$_POST['name'];
    
    
    if (empty($_POST['name'])) {
   echo "Student ID is required";
  } else {
	  $fname=$_POST["name"];
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $fnameErr = "Only letters and white space allowed"; 
    }
  }
    $query="SELECT * FROM student_data";
    $res=mysqli_query($conn,$query);
	$CO=$_POST['Cid'];
    // var_dump($res);
	while($row=mysqli_fetch_array($res)){
		
		
		if($row["Rollno"]==$name)
		{
			echo "<br>"."Name:".$row["Name"]."<br>";
			print_r($row);
			$Rollno=$row['Rollno']; 
			$Name=$row['Name']; 
			
			$M1=$row['M1'];$M2=$row['M2'];
			$M3=$row['M3'];$ML=$row['ML'];
			
			$E1=$row['E1'];$E2=$row['E2'];
			$E3=$row['E3'];$E4=$row['E4'];
			$EL=$row['EL'];

			$Assignment=$row['Assignment'];$Project=$row['Project'];
			$data = array();
			 array_push($data,array('Rollno'=> $Rollno, 'Name'=> $Name,'M1'=> $M1,'M2'=> $M2,'M3'=> $M3,'ML'=> $ML,
			'E1'=> $E1,'E2'=> $E2,'E3'=> $E3,'E4'=> $E4,'EL'=> $EL,'Assignment'=> $Assignment,'Project'=> $Project,'co'=>$CO));
			


				// $plot = new PHPlot(800, 600);
				// $plot->SetImageBorderType('plain');

				// $plot->SetPlotType('bars');
				// $plot->SetDataType('text-data');
				// $plot->SetDataValues($posts);
				// $plot->SetXTickLabelPos('none');
				// $plot->SetXTickPos('none');

				// $plot->DrawGraph();


			$response[student] = $posts;
			
			$fp = fopen('results.json', 'w');
			fwrite($fp, json_encode($data));
			fclose($fp);
			 $rowEn=json_encode($row);
			 echo "<script>successSID(".json_encode($data).");</script>";
			
		}
		
	}
		

    
    
}

mysqli_close($conn);
?>	
</body>

</html>



   
   
   
   
   
   
   
   
   
   
   
   
   

