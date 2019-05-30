<?php 
	$a = (isset($_GET['a'])) ? $_GET['a'] : 1;
	switch ($a) {
		case 1:
			include ('Pages/pHome.php');
			break;
		
		default:
			# code...
			break;
	}
?>