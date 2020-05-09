<?php
$conn = mysqli_connect("localhost","root","","traveldb");

if($conn){
	
	//echo "Connection established";

}else
{
	echo "Could not connect to server.";
}
?>