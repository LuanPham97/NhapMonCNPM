<a href=".././index.php">
                <img src="../img/Banner.gif" alt="image found" class="logo">
</a>    
<div class="header">
    <table bgcolor="whitesmoke" height="100" width="990" border="0" >
        <tr bgcolor="whitesmoke">
           
            <td width="600" bgcolor="whitesmoke" colspan="3" align="center">
                <!-- <a href="index.php"><b>Trang chủ</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; -->
                <a href="location.php"><b>Thông tin liên hệ</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href=""><b>Góp ý</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
            </td>
            
            <td >
                <?php
  
                    if(isset($_SESSION["maLoaiTaiKhoan"]))
                    {
                        include ("mThongTinTaiKhoan.php");
                    }
                    else
                    {
                        DataProvider::ChangeURL('.././index.php');
                    }
                ?>
            </td>   
        </tr> 
    </table>
</div>

 