<?php

            $sql ="SELECT * 
                    FROM PhamNhan pn, HinhPhat hp, TinhTrangSucKhoe ttsk, MucDoPhamToi mdpt, MucDoCaiTao mdct, ThanNhan tn
                    Where pn.HinhPhat = hp.MaHinhPhat and ttsk.MaTinhTrang = pn.TinhTrangSucKhoe 
                        and mdpt.MaMucDo = pn.MucDoPhamToi and mdct.MaMucDo = pn.MucDoCaiTao and tn.MaThanNhan = pn.ThanNhan";
            $result = DataProvider::ExecuteQuery($sql);


            echo'<table width="310" height="20" class="formTimKiem">
                <tr>
                    <td>
                        <form action="ThanNhan.php?a=10" method="POST" class="TimKiem" >
                            Tìm kiếm:<input type="text" name="txtTimKiem" id="txtTimKiem">
                            <button type="submit" name="btnTim">Tìm</button>
                        </form>
                    </td>
                </tr>
            </table>';

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
                            <th width='10%'>Kiểm tra định kỳ</th>
                            <th width='6%'>Mức độ cải tạo</th>   
                            <th width='6%'>Gặp người thân</th>             
                            <th width='6%'>Năng khiếu</th>
                            <th width='6%'>Thân nhân</th>
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
                                echo"<td width='10%'>".$row['TenHinhPhat']."</td>";
                                echo"<td width='6%'>".$row['NgayVaoTu']."</td>";
                                echo"<td width='6%'>".$row['NgayRaTuDuKien']."</td>";
                                echo"<td width='6%'>".$row['NgayKTDinhKy']."</td>";
                                echo"<td width='6%'>".$row['TenMucDo']."</td>";
                                echo"<td width='6%'>".$row['GapNguoiThan']."</td>";
                                echo"<td width='6%'>".$row['NangKhieu']."</td>";
                                echo"<td width='6%'>".$row['TenThanNhan']."</td>";
                                // echo '<td width="6%"><b><a href="deleteprisoners.php?id=' . $row['MaPhamNhan'] . '">Chi Tiết</a></font></b></td>';                             
                                
                                echo "</tr>";
                            }
            echo"</table>";
?>