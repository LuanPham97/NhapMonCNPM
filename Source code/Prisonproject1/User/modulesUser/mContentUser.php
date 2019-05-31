<?php
    $a = (isset($_GET['a'])) ? $_GET['a'] : 1; 
    
    switch ($a) {
         
        case 2:
            include (".././pages/pBoPhanYTe.php");
            break;
        case 3:
            include (".././pages/ExLietKeDSKiemtraSucKhoe.php");
            break;   
        case 5:
            include (".././pages/pSuaThuocTinh.php");
            break;
        case 6:
            include (".././pages/ExSuaThuocTinh.php");
            break;
        case 7:
            include (".././pages/pBoPhanCanBo.php");
            break;
        case 8:
            include (".././pages/pQDCheDoTheoDoi.php");
            break;
        case 9:
            include (".././pages/pBoPhanTiepNhan&PhongThich.php");
            break;
        case 10:
            include (".././pages/ExTimKiem.php");
            break;
        case 11:
            include (".././pages/pBoPhanCaiTao.php");
            break;
        case 12:
            include (".././pages/pQDKhenThuong.php");
            break;
        case 13:
            include (".././pages/pCapNhatDSPhamNhan.php");
            break;
        case 14:
            include (".././pages/pLichThamNuoi.php");
            break;
        case 15:
            include (".././pages/ExThamNuoi.php");
            break;         
        default:
            include (".././pages/pThongTinTuNhan.php");
            break;
    }
?>