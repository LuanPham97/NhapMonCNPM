<?php
    if(isset($_POST["txtTimKiem"]) && ($_POST["txtTimKiem"] != "")){
    $timKiem = $_POST['txtTimKiem'];
    $sql = "SELECT *
            FROM PhamNhan pn, HinhPhat hp, TinhTrangSucKhoe ttsk, MucDoPhamToi mdpt, MucDoCaiTao mdct, ThanNhan tn
            Where pn.HinhPhat = hp.MaHinhPhat and ttsk.MaTinhTrang = pn.TinhTrangSucKhoe 
                        and mdpt.MaMucDo = pn.MucDoPhamToi and mdct.MaMucDo = pn.MucDoCaiTao and tn.MaThanNhan = pn.ThanNhan
                        and  pn.TenPhamNhan like '%$timKiem%' ";
    $list = DataProvider::executeQuery($sql);
    while($row = mysqli_fetch_array($list)){
        $maPhamNhan = $row["MaPhamNhan"];
        $tenPhamNhan = $row["TenPhamNhan"];
        $diaChi = $row["DiaChi"];
        $tinhTrang = $row["TenTinhTrang"];
        $mucDoPhamToi = $row["TenMucDoPT"];
        $hinhPhat = $row["TenHinhPhat"];
        $ngayVao = $row["NgayVaoTu"];
        $ngayRa = $row["NgayRaTuDuKien"];
        $ngayKiemTra = $row["NgayKTDinhKy"];
        $mucDoCaiTao = $row["TenMucDo"];
        $duocGapNguoiThan = $row["GapNguoiThan"];
        $nangKhieu = $row["NangKhieu"];
        $thanNhan = $row["TenThanNhan"];

        include (".././templates/tempTimKiemTuNhan.php");
        }
    }
    else{
        DataProvider::ChangeURL("ThanNhan.php");
    }

?>