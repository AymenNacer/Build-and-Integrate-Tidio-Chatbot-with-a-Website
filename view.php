<?php 
$conn = mysqli_connect('localhost', 'robot', 'robot1234', 'Robot Controller');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}


	// write query for all pizzas
	$sql = 'SELECT * FROM `directions`';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$directions = mysqli_fetch_all($result, MYSQLI_ASSOC);

 	
 		echo $directions[count($directions)-1]['Forwards'];
 		echo $directions[count($directions)-1]['Backwards'];
 		echo $directions[count($directions)-1]['Right'];
 		echo $directions[count($directions)-1]['Left'];
 		echo $directions[count($directions)-1]['Stop'];
 		
	
	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

	

 ?>
		



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>