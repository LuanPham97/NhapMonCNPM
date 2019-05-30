<?php

            $sql ="SELECT * 
                    FROM PhamNhan pn, HinhPhat hp, TinhTrangSucKhoe ttsk, MucDoPhamToi mdpt, MucDoCaiTao mdct, ThanNhan tn, NangKhieu nk
                    Where pn.HinhPhat = hp.MaHinhPhat and ttsk.MaTinhTrang = pn.TinhTrangSucKhoe 
                        and mdpt.MaMucDo = pn.MucDoPhamToi and mdct.MaMucDo = pn.MucDoCaiTao and tn.MaThanNhan = pn.ThanNhan and nk.MaNangKhieu = pn.NangKhieu";
            $result = DataProvider::ExecuteQuery($sql);

        
            echo'<table width="100%" height="20" class="formXuat">
            <tr>
               
                <td>
                    <form action=".././phpExcel/Export.php" method="POST" " >
                    <tr>
                            <td width="50%"><button name="btnLichThamNuoi"><a href="TiepNhan&PhongThich.php?a=14">Lên lịch thăm nuôi</a></button></td>
                            <td width="15%"><button type="submit" name="btnTiepNhan">Xuất danh sách PN tiếp nhận</button></td>
                            <td width="15%"><button type="submit" name="btnPhongThich">Xuất danh sách PN phóng thích</button></td>
                    </tr>
                    </form>
                </td>
            </tr>
            </table>';
            echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='white'>                      
                        <tr class='formXuat'>
                            <caption><h3>Danh sách thông tin phạm nhân</h3></caption>
                        </tr>
                        
                        <tr bgcolor='#e0b58d'>
                            <th width='6%'>Mã Phạm nhân</th>
                            <th width='6%'>Họ và tên</th>
                            <th width='6%'>Địa Chỉ</th>
                            <th width='6%'>Tình trạng</th>
                            <th width='6%'>Mức độ phạm tội</th>
                            <th width='6%'>Mức độ cải tạo</th>                   
                            <th width='6%'>Hình Phạt</th>
                            <th width='6%'>Năng khiếu</th>
                            <th width='6%'>Ngày Kiểm tra Định Kỳ</th>
                            <th width='6%'>Ngày Vào</th>
                            <th width='6%'>Ngày Xuất</th>
                            <th width='6%'>Chế độ theo dõi</th>
                            <th width='6%'>Thân Nhân</th>
                            <th width='6%'>Địa Chỉ Thân Nhân</th>
                            <th width='6%'></th>
                        </tr>";
                        
                            while($row = mysqli_fetch_array($result))
                            {
                                echo"<tr bgcolor='white'>";

                                echo"<td width='6%'>".$row['MaPhamNhan']."</td>";
                                echo"<td width='6%'>".$row['TenPhamNhan']."</td>";
                                echo"<td width='6%'>".$row['DiaChi']."</td>";
                                echo"<td width='6%'>".$row['TenTinhTrang']."</td>";
                                echo"<td width='6%'>".$row['TenMucDoPT']."</td>";
                                echo"<td width='6%'>".$row['TenMucDo']."</td>";
                                echo"<td width='6%'>".$row['TenHinhPhat']."</td>";
                                echo"<td width='6%'>".$row['TenNangKhieu']."</td>";
                                echo"<td width='6%'>".$row['NgayKTDinhKy']."</td>";
                                echo"<td width='6%'>".$row['NgayVaoTu']."</td>";
                                echo"<td width='6%'>".$row['NgayRaTuDuKien']."</td>";
                                echo"<td width='6%'>".$row['CheDoTheoDoi']."</td>";
                                echo"<td width='6%'>".$row['TenThanNhan']."</td>";
                                echo"<td width='6%'>".$row['DiaChiThanNhan']."</td>";
                                echo '<td width="9%"><b><a href="TiepNhan&PhongThich.php?a=13&id0='.$row['MaHinhPhat'].'&id='.$row['MaPhamNhan'].'&id1='.$row['TenTinhTrang'].'&id2='.$row['TenMucDoPT'].'&id3='.$row['MaThanNhan'].'">Cập nhật</a></font></b></td>';                             
                                
                                echo "</tr>";
                            }
            echo"</table>";
?>