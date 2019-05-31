<h1 align="Center">Xóa Thân Nhân</h1>
<form action="index.php?a=5" method="POST">
	Nhập ID Thân Nhân: <input type="text" name="txtID" id="txtID">
	<input type="submit" value="Xóa">
</form>
<?php
	if(isset($_POST["txtID"]) && ($_POST["txtID"] != "")){
		$id = $_POST["txtID"];
		$sql = "DELETE FROM thannhan WHERE MaThanNhan='$id'";
		DataProvider::ExecuteQuery($sql);
		DataProvider::ChangeURL("index.php?a=5");
	}
?>