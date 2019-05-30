<?php
   
    if(isset($_POST["txtLietKeDSKTSucKhoe"]) && ($_POST["txtLietKeDSKTSucKhoe"] != "")){
    $LietKe = $_POST['txtLietKeDSKTSucKhoe'];
    $sql = "SELECT *
            FROM PhamNhan pn, TinhTrangSucKhoe ttsk
            WHERE pn.TinhTrangSucKhoe = ttsk.MaTinhTrang and pn.NgayKTDinhKy Like '%$LietKe%' ";
    $list = DataProvider::executeQuery($sql);

    echo'<hr><br>';
    echo'<a href=".././User/Yte.php?a=2"> <b>Quay Lại</b></a>';
    echo'<div class="search">';
        echo'<h2>Danh sách phạm nhân kiểm tra trong ngày: </h2>';

        echo"<table align='center' width='100%' border='0' cellpadding='5' cellspacing='3' bgcolor='white'>                      
                <tr>
                <caption><h3>Thông tin phạm nhân</h3></caption>
                </tr>
                <tr bgcolor='#e0b58d'>
                <th width='6%'>Mã Phạm nhân</th>
                <th width='6%'>Họ và tên</th>
                <th width='6%'>Tình trạng</th>
                <th width='6%'>Ngày Vào</th>
                <th width='6%'>Ngày Xuất</th>
                <th width='10%'>Kiểm tra định kỳ</th>
                <th width='6%'></th>
                </tr>";
                while($row = mysqli_fetch_array($list)){
                    $maPhamNhan = $row["MaPhamNhan"];
                    $tenPhamNhan = $row["TenPhamNhan"];
                    $tinhTrang = $row["TenTinhTrang"];
                    $ngayVao = $row["NgayVaoTu"];
                    $ngayRa = $row["NgayRaTuDuKien"];
                    $ngayKiemTra = $row["NgayKTDinhKy"];
                    echo"<tr bgcolor='white' align='center'>";

                        echo"<td width='6%'> $maPhamNhan </td>";
                        echo"<td width='6%'> $tenPhamNhan </td>";
                        echo"<td width='6%'> $tinhTrang </td>";
                        echo"<td width='6%'> $ngayVao</td>";
                        echo"<td width='6%'> $ngayRa </td>";
                        echo"<td width='6%'> $ngayKiemTra </td>";                        
                        echo"<td width='6%'><b><a href='Yte.php?a=5&id=$maPhamNhan'>Cập nhật</a></b></td>";
                    echo "</tr>";
                    }
        echo"</table>";

    echo'</div>';
    }
    else{
         DataProvider::ChangeURL("Yte.php?a=2");
    }
?>

