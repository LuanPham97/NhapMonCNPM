<?php

            $sql ="SELECT * 
                    FROM PhamNhan pn, HinhPhat hp, TinhTrangSucKhoe ttsk, MucDoPhamToi mdpt, MucDoCaiTao mdct, ThanNhan tn
                    Where pn.HinhPhat = hp.MaHinhPhat and ttsk.MaTinhTrang = pn.TinhTrangSucKhoe 
                        and mdpt.MaMucDo = pn.MucDoPhamToi and mdct.MaMucDo = pn.MucDoCaiTao and tn.MaThanNhan = pn.ThanNhan";
            $result = DataProvider::ExecuteQuery($sql);


            echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='white'>                      
                        <tr>
                            <caption><h3>Danh sách thông tin phạm nhân</h3></caption>
                        </tr>
                        <tr bgcolor='#e0b58d'>
                            <th width='6%'>Mã Phạm nhân</th>
                            <th width='6%'>Họ và tên</th>
                            <th width='6%'>Địa Chỉ</th>
                            <th width='6%'>Tình trạng</th>
                            <th width='6%'>Mức độ phạm tội</th>                   
                            <th width='6%'>Hình Phạt</th>
                            <th width='6%'>Ngày Vào</th>
                            <th width='6%'>Ngày Xuất</th>
                            <th width='6%'>Chế độ theo dõi</th>
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
                                echo"<td width='6%'>".$row['TenHinhPhat']."</td>";
                                echo"<td width='6%'>".$row['NgayVaoTu']."</td>";
                                echo"<td width='6%'>".$row['NgayRaTuDuKien']."</td>";
                                echo"<td width='6%'>".$row['CheDoTheoDoi']."</td>";
                                echo '<td width="9%"><b><a href="CanBo.php?a=8&id='. $row['MaPhamNhan'].'&id1='. $row['TenTinhTrang'].'&id2='. $row['TenMucDoPT'].'">Cập nhật</a></font></b></td>';                             
                                
                                echo "</tr>";
                            }
            echo"</table>";
?>