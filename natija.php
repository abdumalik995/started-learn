<?php 
	session_start();
	$javob3 = $_GET['javob3'];
	$_SESSION['javob3'] = $javob3;
	$javob2 = $_SESSION['javob2'];
	$javob1 = $_SESSION['javob1'];

	if ($javob1 == 7 && $javob2 == 7 && $javob3 == 12) {
		echo "Javoblar to'g'ri";
	} else {
		echo "Javoblarda xatolik bor";
		print_r($_SESSION);
	}
 ?>