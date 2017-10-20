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

.login input[type=file]{
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

.login input[type=submit]{
	width: 250px;
	height: 30px;
	background: #5379fa;
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

.login input[type=file]:hover{
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
             <!--<form method="post">-->
	        <input type="file" id="file-input" name="filename" id="fname"/>
            <!--<input type="submit" value="Upload" id="myButton" name="login">-->
             <button onclick="myFunDel()">Delete User</button>
					<!--</form>-->
				</div>


       <!--<script>
                        function readSingleFile(e) {
                        var file = e.target.files[0];
                        if (!file) {
                            return;
                        }
                        var reader = new FileReader();
                        reader.onload = function(e) {cr
                            var contents = e.target.result;
                            displayContents(contents);
                        };
                        reader.readAsText(file);
                        }
</script>-->
       <!--<script>
                function displayContents(contents) {
                var element = document.getElementById('file-content');
                element.innerHTML = contents;
                }

                document.getElementById('file-input')
                .addEventListener('change', readSingleFile, false);
  </script>-->

</body>

</html>



   
   
   
   
   
   
   
   
   
   
   
   
   

