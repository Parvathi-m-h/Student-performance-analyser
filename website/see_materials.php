<?php 
session_start();
header("content-type:$_SESSION[mime]");

/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_assessment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>

<?php 
$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";

mysqli_query($conn,$insert_image);
*/


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hci1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$select_image="select * from image_table";

$var=mysqli_query($conn,$select_image);
$vars=$_SESSION['mime'];

while($row=$var->fetch_assoc())
	
{
	if($row['imagename']==$vars){
 $image_name=$row["imagename"];
	$image_content=$row["imagetmp"];
	break;}
}
echo $image_content;

?>
