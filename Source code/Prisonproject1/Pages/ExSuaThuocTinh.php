<?php

if(isset($_GET["b"]) && $_GET["b"] == 1)
{
    if(isset($_POST["nbMaPhamNhan"]) && isset($_POST["nbMaPhamNhan"])!="" )
    {
        $maPhamNhan = $_POST["nbMaPhamNhan"];
        if(isset($_POST["nbMaTinhTrang"]) && $_POST["nbMaTinhTrang"] != "")
        {
            $maTinhTrang = $_POST["nbMaTinhTrang"];

                $sql = "UPDATE PhamNhan
                        SET TinhTrangSucKhoe = '$maTinhTrang'
                        WHERE MaPhamNhan = '$maPhamNhan' ";
                DataProvider::ExecuteQuery($sql);
        }

        if(isset($_POST["txtNgayKTDK"]) && $_POST["txtNgayKTDK"] != "")
        {
            $NgayKTDinhKy = $_POST["txtNgayKTDK"];
            $sql = "UPDATE PhamNhan 
            SET NgayKTDinhKy = '$NgayKTDinhKy'
            WHERE MaPhamNhan = '$maPhamNhan' ";
            DataProvider::ExecuteQuery($sql);
        }   
    }
    DataProvider::ChangeURL(".././User/Yte.php?a=2");
}

if(isset($_GET["b"]) && $_GET["b"] == 2 && isset($_POST["nbMaPhamNhan"]) 
        && isset($_POST["txtCheDoTheoDoi"]))
{
    $maPhamNhan = $_POST["nbMaPhamNhan"];
    $CheDoTheoDoi= $_POST["txtCheDoTheoDoi"];
   
    $sql = "UPDATE PhamNhan
            SET CheDoTheoDoi = '$CheDoTheoDoi'
            WHERE MaPhamNhan = '$maPhamNhan'";
    DataProvider::ExecuteQuery($sql);
    DataProvider::ChangeURL(".././User/CanBo.php?a=7");
}

if(isset($_GET["b"]) && $_GET["b"] == 3)
{
    if(isset($_POST["nbMaPhamNhan"]) && isset($_POST["nbMaPhamNhan"])!="" )
    {
        $maPhamNhan = $_POST["nbMaPhamNhan"];
        if(isset($_POST["nbMaMucDoCaiTao"]) && $_POST["nbMaMucDoCaiTao"] != "")
        {
            $maMucDoCaiTao = $_POST["nbMaMucDoCaiTao"];

                $sql = "UPDATE PhamNhan
                        SET MucDoCaiTao = '$maMucDoCaiTao'
                        WHERE MaPhamNhan = '$maPhamNhan' ";
                DataProvider::ExecuteQuery($sql);
        }

        if(isset($_POST["txtMaNangKhieu"]) && $_POST["txtMaNangKhieu"] != "")
        {
            $NangKhieu = $_POST["txtMaNangKhieu"];
            $sql = "UPDATE PhamNhan 
            SET NangKhieu = '$NangKhieu'
            WHERE MaPhamNhan = '$maPhamNhan' ";
            DataProvider::ExecuteQuery($sql);
        }
        
        if(isset($_POST["txtHoatDongDeNghi"]) && $_POST["txtHoatDongDeNghi"] != "")
        {
            $HoatDongDeNghi = $_POST["txtHoatDongDeNghi"];
            $sql = "UPDATE PhamNhan 
            SET HoatDongDeNghi  = '$HoatDongDeNghi'
            WHERE MaPhamNhan = '$maPhamNhan' ";
            DataProvider::ExecuteQuery($sql);
        }
        
        if(isset($_POST["txtMaKhenThuong"]) && $_POST["txtMaKhenThuong"] != "")
        {
            $maKhenThuong = $_POST["txtMaKhenThuong"];
            $sql = "UPDATE khenthuong_phamnhan 
            SET MaKhenThuong  = '$maKhenThuong'
            WHERE MaPhamNhan = '$maPhamNhan' ";
            DataProvider::ExecuteQuery($sql);
        }
        
    }
    DataProvider::ChangeURL(".././User/CaiTao.php?a=11");
}

if(isset($_GET["b"]) && $_GET["b"] == 4)
{
    if(isset($_POST["nbMaPhamNhan"]) && isset($_POST["nbMaPhamNhan"])!="")
    {
        $maPhamNhan = $_POST["nbMaPhamNhan"];
      
        if(isset($_POST["txtHovaTen"]) && $_POST["txtHovaTen"] != "")
        {
            $HovaTen = $_POST["txtHovaTen"];

                $sql = "UPDATE PhamNhan
                        SET TenPhamNhan = '$HovaTen'
                        WHERE MaPhamNhan = '$maPhamNhan' ";
                DataProvider::ExecuteQuery($sql);
        }

        if(isset($_POST["txtDiachi"]) && $_POST["txtDiachi"] != "")
        {
            $DiaChi = $_POST["txtDiachi"];
            $sql = "UPDATE PhamNhan 
            SET DiaChi = '$DiaChi'
            WHERE MaPhamNhan = '$maPhamNhan' ";
            DataProvider::ExecuteQuery($sql);
        }
        
        if(isset($_POST["DNgayVao"]) && $_POST["DNgayVao"] != "")
        {
            $NgayVao = $_POST["DNgayVao"];
            $sql = "UPDATE PhamNhan 
            SET NgayVaoTu  = '$NgayVao'
            WHERE MaPhamNhan = '$maPhamNhan' ";
            DataProvider::ExecuteQuery($sql);
        }
        if(isset($_POST["DNgayXuat"]) && $_POST["DNgayXuat"] != "")
        {
            $NgayXuat = $_POST["DNgayXuat"];
            $sql = "UPDATE PhamNhan 
            SET NgayRaTuDuKien  = '$NgayXuat'
            WHERE MaPhamNhan = '$maPhamNhan' ";
            DataProvider::ExecuteQuery($sql);
        }
    }
        
    if(isset($_POST["nbMaThanNhan"]) && isset($_POST["nbMaThanNhan"])!="")
    {
        $maThanNhan = $_POST["nbMaThanNhan"];
        if(isset($_POST["txtTenThanNhan"]) && $_POST["txtTenThanNhan"] != "")
        {
             $TenThanNhan = $_POST["txtTenThanNhan"];
             $sql = "UPDATE ThanNhan 
             SET TenThanNhan  = '$TenThanNhan'
             WHERE MaThanNhan = '$maThanNhan' ";
             DataProvider::ExecuteQuery($sql);
        }

        if(isset($_POST["txtDiaChiThanNhan"]) && $_POST["txtDiaChiThanNhan"] != "")
        {
             $diaChiThanNhan = $_POST["txtDiaChiThanNhan"];
             $sql = "UPDATE ThanNhan 
             SET DiaChiThanNhan  = '$diaChiThanNhan'
             WHERE MaThanNhan = '$maThanNhan' ";
             DataProvider::ExecuteQuery($sql);
        }
    }
    
    DataProvider::ChangeURL(".././User/TiepNhan&PhongThich.php?a=9");
}

if(isset($_GET["b"]) && $_GET["b"] == 5)
{
    if(isset($_POST["nbMaPhamNhan"]) && isset($_POST["nbMaPhamNhan"])!="" )
    {
        $maPhamNhan = $_POST["nbMaPhamNhan"];
        if(isset($_POST["txtNgayThamNuoi"]) && $_POST["txtNgayThamNuoi"] != ""
        && isset($_POST["nbLichThamNuoi"]) && $_POST["nbLichThamNuoi"] != "" )
        {
            $NgayThamNuoi = $_POST["txtNgayThamNuoi"];
            $IdLichThamNuoi = $_POST["nbLichThamNuoi"];
                $sql = "UPDATE LichThamNuoi
                        SET NgayThamNuoi = '$NgayThamNuoi'
                        WHERE IDLichThamNuoi = '$IdLichThamNuoi' and PhamNhanDuocThamNuoi = '$maPhamNhan' ";
                DataProvider::ExecuteQuery($sql);
        }
        
    }
    DataProvider::ChangeURL(".././User/TiepNhan&PhongThich.php?a=9");
}


?>