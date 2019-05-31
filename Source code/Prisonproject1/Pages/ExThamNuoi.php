<hr>
<a href=".././User/TiepNhan&PhongThich.php?a=9"> <b>Quay Lại</b></a> <br>
<strong>Lên lịch thăm nuôi cho Phạm Nhân</strong>
<form action="TiepNhan&PhongThich.php?a=6&b=5" method="POST">
<table border="1" cellspacing="0">
    <tr>
       
            <i>
                <b>Ngày Thăm Nuôi:</b> nhập theo dịnh dạng yyyy-mm-dd 
            </i>
    </tr>
    <tr bgcolor='#e0b58d'>
            <th>ID Lịch Thăm Nuôi</th>
            <th>Ngày Thăm Nuôi</th>
            <th>Phạm Nhân Được Thăm Nuôi</th>
            <th>Cán Bộ Giám Sát</th>
           
    </tr>
    <tr>
        <?php
                if(isset($_GET['id']) && isset($_GET['id'])!=""
                && isset($_GET['id1']) && isset($_GET['id1'])!=""  && isset($_GET['id2']) && isset($_GET['id2'])!="")
                {
                    $maPhamNhan = $_GET['id'];
                    $maCanBoGiamSat = $_GET['id1'];
                    $maLich = $_GET['id2'];
                    echo'
                    <td ><input type="text" name="nbLichThamNuoi" id="nbLichThamNuoi"  value="'.$maLich.'" ></td>
                    <td ><input type="text" name="txtNgayThamNuoi" id="txtNgayThamNuoi"  value="" ></td>
                    <td ><input type="text" size="30" name="nbMaPhamNhan" id="nbMaPhamNhan"  value="'.$maPhamNhan.'"></td>
                    <td ><input type="text" name="nbMaCanBo" id="nbMaCanBo"  value="'.$maCanBoGiamSat.'" ></td>
                    ';
                }
        ?>
        
    </tr>
</table>
    <input type="submit" value="Cập nhật"></a>
</form>