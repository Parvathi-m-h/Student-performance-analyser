<html>
<head>
		<title>STUDENT DETAILS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<style>
		body{
		background-image: url("lab2pic.jpg");
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

.login button{
	/*width: 250px;
	height: 35px;*/
	/*background: #A9A9A9;*/
	/*background: #FF69B4;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;*/
	/*color: #a18d6c;*/
	/*color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 20px;
	font-weight: 600;
	padding: 6px;
	margin-top: 10px;*/
	width: 250px;
	height: 35px;
	background: #fff;
	border: 1px solid ##5379fb;
	cursor: pointer;
	border-radius: 2px;
	color:#808080;
	font-family: 'Exo', sans-serif;
	font-size: 19px;
	font-weight: 210;
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
	 <button onclick="myFunS()">STUDENT</button>
	 <button onclick="myFunT()">INSTRUCTOR</button>
	 <button onclick="myFunD()">DEVELOPER</button>
				</div>
				<script>
					function myFunS() {
							$loc="login.php";
        location.href = $loc;
					}
</script>
<script>
					function myFunT() {
							$loc="loginTeacher.php";
        location.href = $loc;
					}
</script>
<script>
					function myFunD() {
							$loc="Adminlogin.php";
        location.href = $loc;
					}
</script>
		
</body>

</html>



   
   
   
   
   
   
   
   
   
   
   
   
   

