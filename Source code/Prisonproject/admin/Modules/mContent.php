<?php 
	$a = (isset($_GET['a'])) ? $_GET['a'] : 1;
	switch ($a) {
		case 1:
			include ('Pages/pHome.php');
			break;
		case 2:
			include ('Pages/pThanNhan.php');
			break;
		case 3:
			include ('Pages/pThemThanNhan.php');
			break;
		case 4:
			include ('Pages/pLietKeThanNhan.php');
			break;
		case 5:
			include ('Pages/pXoaThanNhan.php');
			break;
		case 6:
			include ('Pages/pSuaThanNhan.php');
			break;
		case 7:
			include ('Pages/pTuNhan.php');
			break;
		case 8:
			include ('Pages/pThemTuNhan.php');
			break;
		case 9:
			include ('Pages/pXoaTuNhan.php');
			break;
		case 10:
			include ('Pages/pSuaTuNhan.php');
			break;
		case 11:
			include ('Pages/pLietKeTuNhan.php');
			break;
		case 12:
			include ('Pages/pCanBo.php');
			break;
		case 13:
			include ('Pages/pThemCanBo.php');
			break;
		case 14:
			include ('Pages/pSuaCanBo.php');
			break;
		case 15:
			include ('Pages/pXoaCanBo.php');
			break;
		case 16:
			include ('Pages/pLietKeCanBo.php');
			break;
		case 17:
			include ('Pages/pTaiKhoan.php');
			break;
		case 18:
			include ('Pages/pThemTaiKhoan.php');
			break;
		case 19:
			include ('Pages/pXoaTaiKhoan.php');
			break;
		case 20:
			include ('Pages/pSuaTaiKhoan.php');
			break;
		case 21:
			include ('Pages/pLietKeTaiKhoan.php');
			break;
		case 22:
			include ('Pages/Location.php');
			break;	
		default:
			# code...
			break;
	}
?>