<hr>
<a href=".././User/CaiTao.php?a=11"> <b>Quay Lại</b></a> <br>
<strong>Nhập thông tin phạm nhân cần cập nhật</strong>
<form action="CaiTao.php?a=6&b=3" method="POST">
<table border="1" cellspacing="0">
    <tr>
       
            <i>
               <b>Mức độ cải tạo từ:</b> 1 - Xuât sắc,
                                    2 - Tốt,
                                    3 - Khá,
                                    4 - Trung Bình,
                                    5 - Yếu
                                    <br>
               <b>Năng khiếu theo mã: </b> dan,
                                           hat,
                                           kch,
                                           mc,    
                <b>Mã Khen thưởng: </b> ctt - cải tạo tốt                                                  
            </i>
    </tr>
    <tr>
        <td>Mã Phạm Nhân</td>
        <td>Mức Độ cải tạo</td>
        <td>Năng Khiếu</td>
        <td>Hoạt động đề nghị</td>
        <td>Đề nghị Khen thưởng</td>
    </tr>
    <tr>
        <?php
                if(isset($_GET['id']) && isset($_GET['id'])!="")
                {
                    $maPhamNhan = $_GET['id'];
                    echo'<td><input type="number" name="nbMaPhamNhan" id="nbMaPhamNhan" size="16" value="'.$maPhamNhan.'" ></td>
                    <td><input type="number" name="nbMaMucDoCaiTao" id="nbMaMucDoCaiTao" size="16"></td>
                    <td><input type="text" name="txtMaNangKhieu" id="txtMaNangKhieu" size="16"></td>
                    <td><input type="text" name="txtHoatDongDeNghi" id="txtHoatDongDeNghi" size="16"></td>
                    <td><input type="text" name="txtMaKhenThuong" id="txtMaKhenThuong" size="16"></td>';
                    
                    
                }
        ?>
        
    </tr>
</table>
    <input type="submit" value="Cập nhật"></a>
</form>