
<form class="frmLogin" name="frmLogin" action="index.php?a=3" method="post" onsubmit="return CheckDangNhap()">
   <b>Tài khoản:</b>  <input name="txtUS" type="text" id="txtUS" size="15" maxlength="20" width="15">
   <b>Mật khẩu:</b> <input name="txtPWD" type="password" id="txtPWD" size="15" maxlength="20" width="15">
    <input type="submit" value="Đăng nhập">
</form>

</table>
<script type="text/javascript">
    function CheckDangNhap()
    {
        var control = document.getElementById("txtUS");
        if(control.value =="")
        {
            control.focus();
            alert("Tên đăng nhập không được rỗng");
            return false;
        }

        control = document.getElementById("txtPWD");
        if(control.value == "")
        {
            control.focus();
            alert("Mật khẩu không được rỗng");
            return false;
        }

        return true;
    }

</script>