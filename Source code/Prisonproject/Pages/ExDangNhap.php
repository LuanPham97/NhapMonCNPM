<?php
        if(isset($_POST["txtUS"]) && isset($_POST["txtPWD"]))
        {
            $us = $_POST["txtUS"];
            $pwd = md5($_POST["txtPWD"]);

           
            $sql = "SELECT TenHienThi, MaLoaiTaiKhoan
                    FROM TaiKhoan
                    WHERE TenDangNhap = '$us'
                                    AND MatKhau = '$pwd'";
            
            $result = DataProvider::ExecuteQuery($sql);
            $row = mysqli_fetch_array($result);
            if($row != null)
            {
                $_SESSION["tenHienThi"] = $row["TenHienThi"];
                $_SESSION["maLoaiTaiKhoan"] = $row["MaLoaiTaiKhoan"];
    
                if($_SESSION["maLoaiTaiKhoan"] == 0)
                {
                    DataProvider::ChangeURL("admin/index.php");
                }
                elseif($_SESSION["maLoaiTaiKhoan"] == 2)
                {
                    DataProvider::ChangeURL("User/Yte.php?a=2");
                }
                elseif($_SESSION["maLoaiTaiKhoan"] == 3)
                {
                    DataProvider::ChangeURL("User/TiepNhan&PhongThich.php?a=9");
                }
                elseif($_SESSION["maLoaiTaiKhoan"] == 5)
                {
                    DataProvider::ChangeURL("User/CanBo.php?a=7");
                }
                elseif($_SESSION["maLoaiTaiKhoan"] == 6)
                {
                    DataProvider::ChangeURL("User/CaiTao.php?a=11");
                }
                elseif($_SESSION["maLoaiTaiKhoan"] == 7)
                {
                    DataProvider::ChangeURL("User/ThanNhan.php");
                }
                else
                {

                    echo '<script type="text/javascript">alert("Wrong UserName or Password");</script>';
                    DataProvider::ChangeURL("index.php");
                }
            }
            else
            {
       
                 echo '<script type="text/javascript">alert("Wrong UserName or Password");</script>';
                 DataProvider::ChangeURL("index.php");
                
            }
        }
         else
             DataProvider::ChangeURL("index.php");
?>