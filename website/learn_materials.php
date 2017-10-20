<html>
<head>
		<title>STUDENT DETAILS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<style>
		body{
		/*background-color: #87ceeb;*/
		background-image: url("lab3pic.png");
	}
	
	.header{
	position: absolute;
	top: calc(10% - 35px);
	left: calc(50% - 455px);
	z-index: 2;
}

.header div{
	float: left;
	color: #000;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #000 !important;
}
.h {
	float: left;
	color: #000;
	font-family: 'Comic Sans MS', sans-serif;
	position: absolute;
	top: calc(20% - 35px);
	left: calc(50% - 455px);
	z-index: 2;
	font-size: 25px;
	font-weight: 100;

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
			<div>Learning <span>Materials </span></div>
			</div>
		<div class="h" >
			<a href="books/android1.mp4">Android App Development for Beginners - 1 - Setting up Your Project</a><br>
			<a href="books/android2.mp4">Android App Development for Beginners - 2 - Running a Simple App</a><br>
		    <a href="books/HCI.pdf">Human Computer Interaction</a><br>
				<a href="books/linear_algebra.pdf">Linear Algebra</a><br>
				<a href="books/DataMining.pdf">Data Mining</a><br>
				<a href="books/Parallel_Programming.pdf">Parallel_Programming</a><br>
			<a href="books/Graph_Theory.pdf">Graph Theory</a><br>
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
</script>
<script>
function displayContents(contents) {
  var element = document.getElementById('file-content');
  element.innerHTML = contents;
}

document.getElementById('file-input')
  .addEventListener('change', readSingleFile, false);
  </script>
<input type="file" id="file-input" />
<h3>Contents of the file:</h3><br>
<pre id="file-content"></pre>-->
<!--<script>
$('a').click(function(e) {
    e.preventDefault();  //stop the browser from following
    window.location.href = 'book/linear_algebra.pdf';
});
</script>-->


</body>

</html>



   
   
   
   
   
   
   
   
   
   
   
   
   

