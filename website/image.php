<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hci1";
$l=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('cannot connect to the server'); 

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Upload</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" type="text/css" />
<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link type="text/css" href="css/bootstrap-table.css" rel="stylesheet">
		<link type="text/css" href="css/font-awesome.css" rel="stylesheet">
 <style>
 body {
	background-image: url("lab3pic.png");
}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	
  </style>

</head>
</head>
<body>

<div id="header">
</div>
<div id="body">
 <br><br><br><h3><center>Upload  materials</center></h3><br>
<center> <form method="POST" action="getdata.php" enctype="multipart/form-data">
 <input type="file" name="myimage"><br><br><br>
 <input type="submit" name="submit_image" value="Upload">
</form></center>
    <br /><br />
    <?php
 if(isset($_GET['success']))
 {
  ?>
        <label>Successfull<a href="index.php">View file.</a></label>
        
		<?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        <label>Not Uploaded !</label>
       <?php
 }
 else
 {
  ?>
       
        <?php
 }
 ?>
</div>
<div id="footer">
</div>
</body>
</html>