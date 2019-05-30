<table align ="center" border="1" bgcolor="#000000" width="988" cellpadding="10" cellspacing ="2" height=300">
        <tr>
            <td width="50%" align="center" bgcolor="#e8ebef">     
                <div class="ex">
                        <?php
                            $a = (isset($_GET['a'])) ? $_GET['a'] : 1; 

                            switch ($a) {
                                case 3:
                                    include ("pages/ExDangNhap.php");
                                    break;
                                case 4:
                                    include ("pages/exDangXuat.php");
                                    break;
                                default:
                                    include ("pages/pdefault.php");
                                    break;
                            }
                        ?>
                </div>
            </td>
        </tr>
</table>