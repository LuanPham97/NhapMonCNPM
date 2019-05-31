<hr>
<a href=".././User/CanBo.php?a=7"> <b>Quay Lại</b></a> <br>
<strong>Nhập thông tin phạm nhân cần cập nhật</strong>
<form action="CanBo.php?a=6&b=2" method="POST">
<table border="1" cellspacing="0">
    <tr>
       
            <i>

                <b>*Mã Tình Trạng:</b> Bình Thường - 1,
                            Sốt - 2,
                            Ho - 3,
                            Suy nhược - 4,...      
                <br>
                <b>*Mã Mức Độ phạm tội:</b> Đặc biệt nghiêm trọng - 1,
                                            Rất nghiệm trọng - 2,
                                            Nghiêm trọng - 3,
                                            ít nghiêm trọng -4, ...
                <br>
                <b>Chế độ theo dõi: </b>phụ thuộc vào tình trạng và mức độ phạm tội

            </i>
    </tr>
    <tr>
        <td>Mã Phạm Nhân</td>
        <td>Tình Trạng</td>
        <td>Mức độ phạm tội</td>
        <td>Chế độ theo dõi</td>
    </tr>
    <tr>
        <?php
                if(isset($_GET['id']) && isset($_GET['id'])!="" 
                    && isset($_GET['id1']) && isset($_GET['id1'])!="" && isset($_GET['id2']) && isset($_GET['id2'])!="")
                {
                    $maPhamNhan = $_GET['id'];
                    $tenTinhTrang = $_GET['id1'];
                    $tenMucDoPhamToi = $_GET['id2'];
                    echo'<td><input type="number" name="nbMaPhamNhan" id="nbMaPhamNhan" size="16" value="'.$maPhamNhan.'" ></td>
                    <td><input type="txt" name="txtTenTinhTrang" id="txtTenTinhTrang" size="16"  value="'.$tenTinhTrang.'"></td>
                    <td><input type="text" name="txtMucDoPhamToi" id="txtMucDoPhamToi" size="16" value="'.$tenMucDoPhamToi.'"></td>
                    <td><input type="text" name="txtCheDoTheoDoi" id="txtCheDoTheoDoi" size="16"></td>';
                    
                    
                }
        ?>
        
    </tr>
</table>
    <input type="submit" value="Cập nhật"></a>
</form>