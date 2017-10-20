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
	width: 250px;
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
	width: 250px;
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
	 <button onclick="myFunS()">Student Performance</button>
	 <button onclick="myFunC()">Class Performance</button>
	 <button onclick="myFunLM()">Learning Material</button>
	 <button onclick="myFunVF()">View Feedback</button>
     <button onclick="myFunGF()">Give Feedback</button>
	 <button onclick="myFunCP()">Change Password</button>
	<button onclick="myFunSA()">System Access Request</button>
				</div>
				<script>
					function myFunS() {
							$loc="student/graphChoice.php";
        location.href = $loc;
					}
</script>

<script>
					function myFunC() {
							$loc="Average.php";
        location.href = $loc;
					}
</script>

<script>
					function myFunLM() {
							$loc="learnTeacherChoice.php";
        location.href = $loc;
					}
</script>
<script>
					function myFunVF() {
							$loc="view_fb.php"
        location.href = $loc;
					}
</script>
<script>
					function myFunGF() {
							$loc="give_fb.php";
        location.href = $loc;
					}
</script>	
<script>
					function myFunCP() {
							$loc="changePassword.php";
        location.href = $loc;
					}
					function myFunSA() {
							$loc="SystemAccess.php";
        location.href = $loc;
					}
</script>	
</body>

</html>



   
   
   
   
   
   
   
   
   
   
   
   
   

