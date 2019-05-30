<h1 align="Center">Xóa Tù Nhân</h1>
<form action="index.php?a=9" method="POST">
	Nhập ID Phạm Nhân Cần Xóa: <input type="text" name="txtID" id="txtID">
	<input type="submit" value="Xóa">
</form>

<?php
	if(isset($_POST["txtID"]) && $_POST["txtID"] !=""){
		$id = $_POST["txtID"];
		$sql = "DELETE FROM phamnhan WHERE MaPhamNhan = '$id'";
		DataProvider::ExecuteQuery($sql);
		DataProvider::ChangeURL("index.php?a=9");
	}
?>