<hr>
<a href=".././User/Yte.php?a=2"> <b>Quay Lại</b></a> <br>
<strong>Nhập thông tin phạm nhân cần cập nhật</strong>
<form action="Yte.php?a=6&b=1" method="POST">
<table border="1" cellspacing="0">
    <tr>
       
            <i>
                <b>*Tình Trạng:</b> Bình Thường - 1,
                            Sốt - 2,
                            Ho - 3,
                            Suy nhược - 4,...      
                <br>
                <b>*Mã tình trạng:</b> đối chiếu với tên tình trạng để nhập theo giá trị từ 1 - 10 
            </i>
    </tr>
    <tr>
        <td>Mã Phạm Nhân</td>
        <td>Mã Tình Trạng</td>
        <td>Ngày kiểm tra định kỳ</td>
    </tr>
    <tr>
        <?php
                if(isset($_GET['id']) && isset($_GET['id'])!="")
                {
                    $maPhamNhan = $_GET['id'];
                    echo'<td><input type="number" name="nbMaPhamNhan" id="nbMaPhamNhan" size="16" value="'.$maPhamNhan.'" ></td>
                    <td><input type="number" name="nbMaTinhTrang" id="nbMaTinhTrang" size="16" ></td>
                    <td><input type="text" name="txtNgayKTDK" id="txtNgayKTDK" size="16"></td>';
                }
        ?>
        
    </tr>
</table>
    <input type="submit" value="Cập nhật"></a>
</form>