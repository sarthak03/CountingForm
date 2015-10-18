<?php
include('config.php');
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_GET['for']) && isset($_GET['sno'])){

	$for = $_GET['for']; 
	$sno = $_GET['sno'];

	
	$answer = explode("-",$for);

	$type = $answer[0];
	$count = $answer[1];

	if($count == "up"){
		$query = "UPDATE questions SET " . $type . " = " . $type . " + 1" . " WHERE Sno = " . $sno;
		mysqli_query($conn,$query); 
	}
	else if($count == "down"){
		$query = "UPDATE questions SET " . $type . " = " . $type . " - 1" . " WHERE Sno = " . $sno;
		mysqli_query($conn,$query); 

	}

	$result = $conn->query("SELECT $type FROM questions WHERE Sno = $sno");		
	$conn->error;
	$row = mysqli_fetch_array($result);

	echo $type . "-" . $sno . "," . $row[0];
}
?>