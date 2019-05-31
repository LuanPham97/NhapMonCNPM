<h1 align="Center">Thêm Tù Nhân</h1>
<form action="index.php?a=8" method='POST'>
	Tên Phạm Nhân: <input type="text" name="txtTenPhamNhan" id="txtTenPhamNhan"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hình Phạt: <input type="number" name="nbHinhPhat" id="nbHinhPhat"><br>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(0-Có Thời Gian, 1-Chung Thân, 2-Tử Hình, 3-Treo)<br>
	Địa Chỉ:&nbsp;&nbsp; <input type="text" name="txtDiaChi" id="txtDiaChi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hoạt Động Đề Nghị: <input type="text" name="txtHoatDong" id="txtHoatDong"><br><br>
	Tình Trạng Sức Khỏe: <input type="text" name="txtTinhTrangSucKhoe" id="txtTinhTrangSucKhoe">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chế Độ Theo Dõi: <input type="text" name="txtCheDoTheoDoi" id="txtCheDoTheoDoi"><br>(1-Bình Thường, 2-Sốt, 3-Ho, 4-Suy Nhược)<br>
	Mức Độ Phạm Tội: <input type="text" name="txtMucDoPhamToi" id="txtMucDoPhamToi"><br>(1-Đặt Biệt Nghiêm Trọng, 2-Rất Nghiêm Trọng, 3-Nghiêm Trọng, 4-Ít Nghiêm Trọng)<br>
	Ngày Kiểm Tra Định Kì: <input type="text" name="txtKiemTra" id="txtKiemTra"><br><br>
	Gặp Người Thân: <input type="text" name="txtGapNguoiThan" id="txtGapNguoiThan"><br><br>
	Mức Độ Cải Tạo: <input type="text" name="txtMucDoCaiTao" id="txtMucDoCaiTao"><br>(1-Xuất Sắc, 2-Tốt, 3-Khá, 4-Trung Bình, 5-Yếu) <br>
	Năng Khiếu: <input type="text" name="txtNangKhieu" id="txtNangKhieu"><br>(dan-Chơi Đàn, hat- Hát, kch-Kể Chuyện, mc-Làm MC)<br>
	Ngày Vào Tù: <input type="text" name="txtNgayVaoTu" id="txtNgayVaoTu"><br><br>
	Ngày Ra Tù Dự Kiến: <input type="text" name="txtNgayRaTu" id="txtNgayRaTu"><br><br>
	Mã Thân Nhân: <input type="text" name="txtThanNhan" id="txtThanNhan"><br><br>
	<input type="submit" value="Thêm">
</form>
<?php
	if(isset($_POST["txtTenPhamNhan"]) && isset($_POST["txtDiaChi"]) && 
		isset($_POST["txtTinhTrangSucKhoe"]) && isset($_POST["txtMucDoPhamToi"]) && isset($_POST["txtKiemTra"]) && isset($_POST["txtGapNguoiThan"]) && isset($_POST["txtMucDoCaiTao"]) && ($_POST["txtTenPhamNhan"] != "") && 
		($_POST["txtDiaChi"] != "") && ($_POST["txtTinhTrangSucKhoe"] != "") && ($_POST["txtMucDoPhamToi"] != "") && ($_POST["txtKiemTra"] != "") && ($_POST["txtGapNguoiThan"] != "") && ($_POST["txtMucDoCaiTao"] != "") && isset($_POST["txtNangKhieu"]) && ($_POST["txtNangKhieu"] != "" ) && isset($_POST["txtNgayVaoTu"]) && ($_POST["txtNgayVaoTu"] != "" ) && isset($_POST["txtNgayRaTu"]) && ($_POST["txtNgayRaTu"] != "" ) && isset($_POST["txtThanNhan"]) && ($_POST["txtThanNhan"] != "" ) && isset($_POST["nbHinhPhat"]) && ($_POST["nbHinhPhat"] != "" ) && isset($_POST["txtHoatDong"]) && ($_POST["txtHoatDong"] != "" ) && isset($_POST["txtCheDoTheoDoi"]) && ($_POST["txtCheDoTheoDoi"] != "" )){

		$tenPhamNhan = $_POST["txtTenPhamNhan"];
		$diaChi = $_POST["txtDiaChi"];
		$tinhTrangSucKhoe = $_POST["txtTinhTrangSucKhoe"];
		$mucDoPhamToi = $_POST["txtMucDoPhamToi"];
		$kiemTra = $_POST["txtKiemTra"];
		$gapNguoiThan = $_POST["txtGapNguoiThan"];
		$mucDoCaiTao = $_POST["txtMucDoCaiTao"];
		$nangKhieu = $_POST["txtNangKhieu"];
		$ngayVaoTu = $_POST["txtNgayVaoTu"];
		$ngayRaTu = $_POST["txtNgayRaTu"];
		$thanNhan = $_POST["txtThanNhan"];
		$hinhPhat = $_POST["nbHinhPhat"];
		$hoatDong = $_POST["txtHoatDong"];
		$cheDoTheoDoi = $_POST["txtCheDoTheoDoi"];

		$sql = "INSERT INTO phamnhan (TenPhamNhan, DiaChi, TinhTrangSucKhoe, MucDoPhamToi, NgayKTDinhKy, GapNguoiThan, MucDoCaiTao, NangKhieu, NgayVaoTu, NgayRaTuDuKien, ThanNhan, HinhPhat, HoatDongDeNghi, CheDoTheoDoi) VALUES ('$tenPhamNhan', '$diaChi', '$tinhTrangSucKhoe', '$mucDoPhamToi', '$kiemTra', $gapNguoiThan, '$mucDoCaiTao', '$nangKhieu', '$ngayVaoTu', '$ngayRaTu', '$thanNhan', '$hinhPhat', '$hoatDong', '$cheDoTheoDoi')";
		DataProvider::ExecuteQuery($sql);
		DataProvider::ChangeURL("index.php?a=8");


	}
?>