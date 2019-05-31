<hr>
<a href=".././User/TiepNhan&PhongThich.php?a=9"> <b>Quay Lại</b></a> <br>
<strong>Nhập thông tin phạm nhân cần cập nhật</strong>
<form action="TiepNhan&PhongThich.php?a=6&b=4" method="POST">
     
       <i>
           <b>Mã Phạm Nhân và Thân Nhân: </b>chỉ được nhập theo số đếm
           <br>
           <b>Ngày Vào và Ngày Xuất: </b> nhập theo định dạng: yyyy-mm-dd hh:mm:ss
       </i>

    <table align='center' width='100%' border='1' cellpadding='0' cellspacing='0' bgcolor='white'>
        <tr bgcolor='#e0b58d'>
            <th width='6%'>Mã Phạm Nhân</th>
            <th width='6%'>Họ và Tên</th>
            <th width='6%'>Địa Chỉ</th>
            <th width='6%'>Tình Trạng</th>
            <th width='6%'>Mức độ phạm tội</th>
            <th width='6%'>Hình Phạt</th>
            <th width='6%'>Ngày Vào</th>
            <th width='6%'>Ngày Xuất</th>
            <th width='6%'>Mã Thân Nhân</th>
            <th width='6%'>Thân Nhân</th> 
            <th width='6%'>Địa Chỉ Thân Nhân</th>
           
        </tr>
        <tr   bgcolor='white'>
            <?php
                    if(isset($_GET['id0']) && isset($_GET['id0'])!=""  && isset($_GET['id']) && isset($_GET['id'])!="" 
                    && isset($_GET['id1']) && isset($_GET['id1'])!="" && isset($_GET['id2']) && isset($_GET['id2'])!=""
                    && isset($_GET['id3']) && isset($_GET['id3'])!="")
                    {
                        $maPhamNhan = $_GET['id'];
                        $tenTinhTrang = $_GET['id1'];
                        $tenMucDoPhamToi = $_GET['id2'];
                        $tenHinhPhat = $_GET['id0'];
                        $maThanNhan = $_GET['id3'];

                        echo"<td width='6%'><input type='text' size='12' name='nbMaPhamNhan' id='nbMaPhamNhan'  value='".$maPhamNhan."' ></td>
                        <td width='6%'><input type='text' size='8' name='txtHovaTen' id='txtHovaTen'  value='' ></td>
                        <td width='6%'><input type='text' size='8' name='txtDiachi' id='txtDiachi'  value='' ></td>
                        <td width='6%'><input type='text' size='9' name='txtTenTinhTrang' id='txtTenTinhTrang'  value='".$tenTinhTrang."' disabled></td>
                        <td width='6%'><input type='text' size='14' name='txtMucDoPhamToi' id='txtMucDoPhamToi'  value='".$tenMucDoPhamToi."' disabled></td>
                        <td width='6%'><input type='text' size='8' name='txtHinhPhat' id='txtHinhPhat'  value='".$tenHinhPhat."' disabled></td>
                        <td width='6%'><input type='text' size='5' name='DNgayVao' id='DNgayVao'  value='' ></td>
                        <td width='6%'><input type='text' size='5' name='DNgayXuat' id='DNgayXuat'  value='' ></td>
                        <td width='6%'><input type='text' size='2' name='nbMaThanNhan' id='nbMaThanThan'  value='".$maThanNhan."' ></td>
                        <td width='6%'><input type='text' size='8' name='txtTenThanNhan' id='txtTenThanNhan'  value='' ></td>
                        <td width='6%'><input type='text' size='8' name='txtDiaChiThanNhan' id='txtDiaChiThanNhan'  value='' ></td>
                        ";

                        
                    }
            ?>
        </tr>
    </table>
    <input type="submit" value="Cập nhật"></a>
</form>