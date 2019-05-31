<?php
  session_start();
    include_once ('.././lib/DataProvider.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông Tin Liên Hệ</title>
    <link rel="stylesheet" href=".././CSS/style.css" type="text/css">
</head>
<body>
<div class="container">
    <div class="header">
        <?php include ('../USer/modulesUser/mHeaderUser.php'); ?>
        <style>
            .formLienHe{
                background-color: white;
                font-weight:bold;
                font-family:"Palatino Linotype";
                color: #34495e;
                border-radius: 0%;
                font-size: 25px;
            }
        </style>
        <form action="pNhanThongTinLienHe.php" method="POST" >
            <table width="100%" border="0" align="center" class="formLienHe"> 
                <tr>
                    <td> <b> HỆ THỐNG QUẢN LÝ TÙ NHÂN XIN HÂN HẠNH ĐƯỢC HỖ TRỢ</b></td>
                    <td><b>THÔNG TIN LIÊN VỚI CHÚNG TÔI</b></td>
                </tr>    
                <tr>
                    <td>Tiêu đề &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txtTieuDe"  size="30" maxlength="50"></td>
                    <td> Hợp tác : liên hệ HopTac@prisonproject.com</td>
                </tr>
                <tr>
                    <td>Nội dung &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txtNoiDung"  size="30"> </td>
                    <td>  Email: cskh@prisonproject.com</td>
                </tr>
                <tr>
                    <td>Họ & Và Tên: <input type="text" name="txtHovaTen"  size="30"></td>
                    <td>&COPY; Software made by student of FIT - HCMUS</td>
                </tr>
                <tr>
                    <td>Địa chỉ Email: <input type="text" name="txtDiaChiEmail" size="30"> </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Số điện thoại : <input type="tell" name="nbSoDienThoai" size="30"> </td>
                    <td></td>
                </tr>
                    <td>&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" value="Gửi thông tin">
                    </td>
                    <td></td>
            </table>
        </form>
    </div>
    <br>
    <div class="footer">
       
                <?php include ("../modules/mFooter.php"); ?>             
    </div>
</div>
</body>
</html>