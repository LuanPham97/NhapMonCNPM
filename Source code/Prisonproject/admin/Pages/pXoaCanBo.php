<h1 align="Center">Xóa Cán Bộ</h1>
<form action="index.php?a=15" method="POST">
	Nhập ID Cán Bộ Cần Xóa: <input type="text" name="txtID" id="txtID"><br><br>
	<input type="submit" value="Xóa">
</form>
<?php
	if(isset($_POST["txtID"]) && ($_POST["txtID"] != "" )){
		$id = $_POST["txtID"];
		$sql = "DELETE FROM canbo WHERE MaCanBo = '$id'";
		DataProvider::ExecuteQuery($sql);
		DataProvider::ChangeURL("index.php?a=15");
	}

?>