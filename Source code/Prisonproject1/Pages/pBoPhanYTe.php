<?php
            $sql ="SELECT * 
                    FROM PhamNhan pn, TinhTrangSucKhoe TTSK
                    Where pn.TinhTrangSucKhoe = TTSK.MaTinhTrang";
            $result = DataProvider::ExecuteQuery($sql);


            echo'  <table width="310" height="20" class="formLietKe">
                <tr>
                    <td>
                        <form action="Yte.php?a=3" method="POST" class="LietKeDSKTSucKhoe" >
                            Ngày:<input type="text" name="txtLietKeDSKTSucKhoe" id="txtLietKeDSKTSucKhoe">
                            <button type="submit" name="btnLietKeDSKTSucKhoe">Liệt Kê DS</button>
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
                            <th width='6%'>Tình trạng</th>
                            <th width='6%'>Ngày Vào</th>
                            <th width='6%'>Ngày Xuất</th>
                            <th width='10%'>Kiểm tra định kỳ</th>

                            <th width='6%'></th>
                        </tr>";
                        
                            while($row = mysqli_fetch_array($result))
                            {
                                echo"<tr bgcolor='white'>";
                                
                                echo"<td width='6%'>".$row['MaPhamNhan']."</td>";
                                echo"<td width='6%'>".$row['TenPhamNhan']."</td>";
                                echo"<td width='6%'>".$row['TenTinhTrang']."</td>";
                                echo"<td width='6%'>".$row['NgayVaoTu']."</td>";
                                echo"<td width='6%'>".$row['NgayRaTuDuKien']."</td>";
                                echo"<td width='6%'>".$row['NgayKTDinhKy']."</td>";
                                echo "</tr>";
                            }
            echo"</table>";
?>