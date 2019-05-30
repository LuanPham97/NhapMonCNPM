<hr>
<a href=".././User/TiepNhan&PhongThich.php?a=9"> <b>Quay Lại</b></a> <br>
<strong>Lên Lịch Thăm Nuôi Cho Phạm Nhân</strong>

<table align='center' border='1' cellpadding='0' cellspacing='0' bgcolor='white'>
        <tr bgcolor='#e0b58d'>
            <th>ID Lịch Thăm Nuôi</th>
            <th>Ngày Thăm Nuôi</th>
            <th>Phạm Nhân Được Thăm Nuôi</th>
            <th>Cán Bộ Giám Sát</th>
            <th></th>
        </tr>
        <tr   bgcolor='white'>
            <?php
                       $sql ="SELECT * 
                       FROM PhamNhan pn, LichThamNuoi ltn, CanBo cb
                       Where pn.MaPhamNhan = ltn.PhamNhanDuocThamNuoi and ltn.CanBoGiamSat = cb.MaCanBo";
                    $result = DataProvider::ExecuteQuery($sql);

                    if(isset($_GET['id']) && isset($_GET['id'])!="")
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                                echo"<td width='6%'>".$row['IDLichThamNuoi']."</td>";
                                echo"<td width='6%'>".$row['NgayThamNuoi']."</td>";
                                echo"<td width='6%'>".$row['TenPhamNhan']."</td>";
                                echo"<td width='6%'>".$row['HoTen']."</td>";
                                echo '<td width="5%">
                                <b><a  style="font-size: 17px" href="TiepNhan&PhongThich.php?a=15&id='.$row['PhamNhanDuocThamNuoi'].'&id1='.$row['CanBoGiamSat'].'&id2='.$row['IDLichThamNuoi'].'">Lên Lịch Thăm Nuôi</a></b>
                                </td>';                               
                                echo "</tr>";
                        }
   
                    }
            ?>
        </tr>
</table>
