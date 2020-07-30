<?php 
// check connection
$conn = mysqli_connect('localhost', 'robot', 'robot1234', 'Robot Controller');

// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

if (isset($_POST['Forwards'])) {
	$sql = "INSERT INTO `directions` (`id`, `Forwards`, `Backwards`, `Right`, `Left`, `Stop`) VALUES (NULL, 'F', '', '', '', '')";
	if(mysqli_query($conn, $sql)){
				// success
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
	}

if (isset($_POST['Backwards'])) {
	$sql = "INSERT INTO `directions` (`id`, `Forwards`, `Backwards`, `Right`, `Left`, `Stop`) VALUES (NULL, '', 'B', '', '', '')";	if(mysqli_query($conn, $sql)){
				// success
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
	}

if (isset($_POST['Right'])) {
	$sql = "INSERT INTO `directions` (`id`, `Forwards`, `Backwards`, `Right`, `Left`, `Stop`) VALUES (NULL, '', '', 'R', '', '')";
	if(mysqli_query($conn, $sql)){
				// success
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
	}
if (isset($_POST['Left'])) {
	$sql = "INSERT INTO `directions` (`id`, `Forwards`, `Backwards`, `Right`, `Left`, `Stop`) VALUES (NULL, '', '', '', 'L', '')";
	if(mysqli_query($conn, $sql)){
				// success
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
		}
if (isset($_POST['Stop'])) {
	$sql = "INSERT INTO `directions` (`id`, `Forwards`, `Backwards`, `Right`, `Left`, `Stop`) VALUES (NULL, '', '', '', '', 'S')";	
	if(mysqli_query($conn, $sql)){
				// success
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
	}
			mysqli_close($conn);
		
 ?>









<!DOCTYPE html>
<html>
<head>
		<title>Robot Controller</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="RobotController.css">
</head>
<body>
	<div>
		<form action="index.php" method="post">
			<button  id = "Forwards" name = "Forwards" class="btn btn-primary Style">Forwards</button>
	  	    <button  id = "Backwards" name = "Backwards"class="btn btn-primary Style">Backwards</button>
	  	    <button  id = "Right" name = "Right" class="btn btn-primary Style">Right</button>
	  	    <button  id = "Left" name= "Left" class="btn btn-primary Style">Left</button>	
	  	    <button  id = "Stop" name = "Stop" class="btn btn-primary Style">Stop</button>	
		</form>
		<!-- 
		<form action="index.php" method="post">
	  	    <button type="button" name = "5" id = "Forwards" class="btn btn-primary Style">Forwards</button>
	  	    <button type="button" id = "Backwards" class="btn btn-primary Style">Backwards</button>
	  	    <button type="button" id = "Right" class="btn btn-primary Style">Right</button>
	  	    <button type="button" id = "Left" class="btn btn-primary Style">Left</button>	
	  	    <button type="button" id = "Stop" class="btn btn-primary Style">Stop</button>	
  	    </form>	
  	    -->
	</div>
	<script src="//code.tidio.co/247qs1ibuz52sx3ypyl2bguc2wmusimt.js" async></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>