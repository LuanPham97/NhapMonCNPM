<?php
include_once ('.././lib/DataProvider.php');
require('Classes/PHPExcel.php');


if(isset($_POST['btnTiepNhan']))
{
    $objExcel = new PHPExcel;
    $objExcel->setActiveSheetIndex(0);
    $sheet = $objExcel->getActiveSheet()->setTitle('DanhSachTiepNhan');

    $rowCount = 1;
    $sheet->setCellValue('A'.$rowCount,'Mã Phạm Nhân');
    $sheet->setCellValue('B'.$rowCount,'Họ và Tên');
    $sheet->setCellValue('C'.$rowCount,'Địa Chỉ');
    $sheet->setCellValue('D'.$rowCount,'Tình Trạng');
    $sheet->setCellValue('E'.$rowCount,'Mức Độ Phạm Tội');
    $sheet->setCellValue('F'.$rowCount,'Mức Độ Cải Tạo');
    $sheet->setCellValue('G'.$rowCount,'Hình Phạt');
    $sheet->setCellValue('H'.$rowCount,'Năng Khiếu');
    $sheet->setCellValue('I'.$rowCount,'Ngày Kiểm Tra Định Kỳ');
    $sheet->setCellValue('J'.$rowCount,'Ngày Vào');
    $sheet->setCellValue('K'.$rowCount,'Chế Độ Theo Dõi');
    $sheet->setCellValue('L'.$rowCount,'Thân Nhân');
    $sheet->setCellValue('M'.$rowCount,'Địa Chỉ Thân Nhân');

    $sql ="SELECT * 
    FROM PhamNhan pn, HinhPhat hp, TinhTrangSucKhoe ttsk, MucDoPhamToi mdpt, MucDoCaiTao mdct, ThanNhan tn, NangKhieu nk
    Where pn.HinhPhat = hp.MaHinhPhat and ttsk.MaTinhTrang = pn.TinhTrangSucKhoe 
        and mdpt.MaMucDo = pn.MucDoPhamToi and mdct.MaMucDo = pn.MucDoCaiTao and tn.MaThanNhan = pn.ThanNhan and nk.MaNangKhieu = pn.NangKhieu 
        and pn.NgayVaoTu = CURDATE() ";

    $result = DataProvider::ExecuteQuery($sql);

    while($row = mysqli_fetch_array($result))
    {
        $rowCount++;
        $sheet->setCellValue('A'.$rowCount, $row['MaPhamNhan']);
        $sheet->setCellValue('B'.$rowCount, $row['TenPhamNhan']);
        $sheet->setCellValue('C'.$rowCount, $row['DiaChi']);
        $sheet->setCellValue('D'.$rowCount, $row['TenTinhTrang']);
        $sheet->setCellValue('E'.$rowCount, $row['TenMucDoPT']);
        $sheet->setCellValue('F'.$rowCount, $row['TenMucDo']);
        $sheet->setCellValue('G'.$rowCount, $row['TenHinhPhat']);
        $sheet->setCellValue('H'.$rowCount, $row['TenNangKhieu']);
        $sheet->setCellValue('I'.$rowCount, $row['NgayKTDinhKy']);
        $sheet->setCellValue('J'.$rowCount, $row['NgayVaoTu']);
        $sheet->setCellValue('K'.$rowCount, $row['CheDoTheoDoi']);
        $sheet->setCellValue('L'.$rowCount, $row['TenThanNhan']);
        $sheet->setCellValue('M'.$rowCount, $row['DiaChiThanNhan']);
    }
    $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
    $filename = 'DanhSachPhamNhanSeTiepNhan.xlsx';
    $objWriter->save($filename);

    header('Content-Disposition: attachment; filename="'.$filename.'" ');
    header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
    header('Content-Length:' . filesize($filename));
    header('Content-Transfer-Encoding: binary');
    header('Cache-Control: must-revalidate');
    header('Pragma: no-cache');
    readfile($filename);
    return;
}



if(isset($_POST['btnPhongThich']))
{
    $objExcel = new PHPExcel;
    $objExcel->setActiveSheetIndex(0);
    $sheet = $objExcel->getActiveSheet()->setTitle('DanhSachPhongThich');

    $rowCount = 1;
    $sheet->setCellValue('A'.$rowCount,'Mã Phạm Nhân');
    $sheet->setCellValue('B'.$rowCount,'Họ và Tên');
    $sheet->setCellValue('C'.$rowCount,'Địa Chỉ');
    $sheet->setCellValue('D'.$rowCount,'Tình Trạng');
    $sheet->setCellValue('E'.$rowCount,'Mức Độ Phạm Tội');
    $sheet->setCellValue('F'.$rowCount,'Mức Độ Cải Tạo');
    $sheet->setCellValue('G'.$rowCount,'Hình Phạt');
    $sheet->setCellValue('H'.$rowCount,'Năng Khiếu');
    $sheet->setCellValue('I'.$rowCount,'Ngày Kiểm Tra Định Kỳ');
    $sheet->setCellValue('J'.$rowCount,'Ngày Xuất');
    $sheet->setCellValue('K'.$rowCount,'Chế Độ Theo Dõi');
    $sheet->setCellValue('L'.$rowCount,'Thân Nhân');
    $sheet->setCellValue('M'.$rowCount,'Địa Chỉ Thân Nhân');

    $sql ="SELECT * 
    FROM PhamNhan pn, HinhPhat hp, TinhTrangSucKhoe ttsk, MucDoPhamToi mdpt, MucDoCaiTao mdct, ThanNhan tn, NangKhieu nk
    Where pn.HinhPhat = hp.MaHinhPhat and ttsk.MaTinhTrang = pn.TinhTrangSucKhoe 
        and mdpt.MaMucDo = pn.MucDoPhamToi and mdct.MaMucDo = pn.MucDoCaiTao and tn.MaThanNhan = pn.ThanNhan and nk.MaNangKhieu = pn.NangKhieu 
        and pn.NgayRaTuDuKien = CURDATE() ";

    $result = DataProvider::ExecuteQuery($sql);

    while($row = mysqli_fetch_array($result))
    {
        $rowCount++;
        $sheet->setCellValue('A'.$rowCount, $row['MaPhamNhan']);
        $sheet->setCellValue('B'.$rowCount, $row['TenPhamNhan']);
        $sheet->setCellValue('C'.$rowCount, $row['DiaChi']);
        $sheet->setCellValue('D'.$rowCount, $row['TenTinhTrang']);
        $sheet->setCellValue('E'.$rowCount, $row['TenMucDoPT']);
        $sheet->setCellValue('F'.$rowCount, $row['TenMucDo']);
        $sheet->setCellValue('G'.$rowCount, $row['TenHinhPhat']);
        $sheet->setCellValue('H'.$rowCount, $row['TenNangKhieu']);
        $sheet->setCellValue('I'.$rowCount, $row['NgayKTDinhKy']);
        $sheet->setCellValue('J'.$rowCount, $row['NgayRaTuDuKien']);
        $sheet->setCellValue('K'.$rowCount, $row['CheDoTheoDoi']);
        $sheet->setCellValue('L'.$rowCount, $row['TenThanNhan']);
        $sheet->setCellValue('M'.$rowCount, $row['DiaChiThanNhan']);
    }
    $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
    $filename = 'DanhSachPhamNhanDuocPhongThich.xlsx';
    $objWriter->save($filename);

    header('Content-Disposition: attachment; filename="'.$filename.'" ');
    header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
    header('Content-Length:' . filesize($filename));
    header('Content-Transfer-Encoding: binary');
    header('Cache-Control: must-revalidate');
    header('Pragma: no-cache');
    readfile($filename);
    return;
}

?>