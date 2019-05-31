<?php

            $sql ="SELECT * 
                    FROM PhamNhan pn, MucDoCaiTao mdct, NangKhieu nk, khenthuong_phamnhan ktpn, KhenThuong KT
                    Where pn.NangKhieu = nk.MaNangKhieu and mdct.MaMucDo = pn.MucDoCaiTao 
                    and ktpn.MaPhamNhan = pn.MaPhamNhan and KT.MaKhenThuong = ktpn.MaKhenThuong";
            $result = DataProvider::ExecuteQuery($sql);


            echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='white'>                      
                        <tr>
                            <caption><h3>Danh sách thông tin phạm nhân</h3></caption>
                        </tr>
                        <tr bgcolor='#e0b58d'>
                            <th width='6%'>Mã Phạm nhân</th>
                            <th width='6%'>Họ và tên</th>
                            <th width='6%'>Địa Chỉ</th>
                            <th width='6%'>Mức độ cải tạo</th>
                            <th width='6%'>Năng khiếu</th>                
                            <th width='6%'>Hoạt động đề nghị</th>
                            <th width='6%'>Đề nghị khen thưởng</th>
                            <th width='6%'></th>
                        </tr>";
                        
                            while($row = mysqli_fetch_array($result))
                            {
                                echo"<tr bgcolor='white'>";

                                echo"<td width='6%'>".$row['MaPhamNhan']."</td>";
                                echo"<td width='6%'>".$row['TenPhamNhan']."</td>";
                                echo"<td width='6%'>".$row['DiaChi']."</td>";
                                echo"<td width='6%'>".$row['TenMucDo']."</td>";
                                echo"<td width='6%'>".$row['TenNangKhieu']."</td>";
                                echo"<td width='6%'>".$row['HoatDongDeNghi']."</td>";
                                echo"<td width='6%'>".$row['TenKhenThuong']."</td>";
                                echo '<td width="9%"><b><a style="font-size: 20px" href="CanBo.php?a=12&id='.$row['MaPhamNhan'].'">Cập nhật</a></font></b></td>';                             
                                
                                echo "</tr>";
                            }
            echo"</table>";