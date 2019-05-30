<a href=".././User/ThanNhan.php"> <b>Quay Lại</b></a>
<div class="search">
    <h2>Kết quả tìm kiếm: </h2>
<?php
    echo"<table align='center' width='100%' border='0' cellpadding='5' cellspacing='3' bgcolor='white'>                      
        <tr>
        <caption><h3>Thông tin phạm nhân</h3></caption>
        </tr>
        <tr bgcolor='#e0b58d'>
        <th width='6%'>Mã số tù nhân</th>
        <th width='6%'>Họ và tên</th>
        <th width='6%'>Địa Chỉ</th>
        <th width='6%'>Tình trạng</th>
        <th width='6%'>Mức độ phạm tội</th>                   
        <th width='6%'>Hình Phạt</th>
        <th width='6%'>Ngày Vào</th>
        <th width='6%'>Ngày Xuất</th>
        <th width='10%'>Kiểm tra định kỳ</th>
        <th width='6%'>Mức độ cải tạo</th>   
        <th width='6%'>Gặp người thân</th>             
        <th width='6%'>Năng khiếu</th>
        <th width='6%'>Thân nhân</th>
        <th width='6%'></th>
        </tr>";
        echo"<tr bgcolor='white' align='center'>";

            echo"<td width='6%'> $maPhamNhan </td>";
            echo"<td width='6%'> $tenPhamNhan </td>";
            echo"<td width='6%'> $diaChi </td>";
            echo"<td width='6%'> $tinhTrang </td>";
            echo"<td width='6%'> $mucDoPhamToi </td>";
            echo"<td width='10%'> $hinhPhat </td>";
            echo"<td width='6%'> $ngayVao </td>";
            echo"<td width='6%'> $ngayRa </td>";
            echo"<td width='6%'> $ngayKiemTra </td>";
            echo"<td width='6%'> $mucDoCaiTao </td>";
            echo"<td width='6%'> $duocGapNguoiThan </td>";
            echo"<td width='6%'> $nangKhieu </td>";
            echo"<td width='6%'> $thanNhan </td>";                             

        echo "</tr>";

    echo"</table>";
?>
</div>