<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach sinh vien</title>
</head>
<body>
    <?php
    // 1. Ketnoi
    $connect_tdv = new mysqli('localhost', 'root', '', 'k22cntt3_day08');
    // 2. Tao truy van doc du lieu
    $sql_tdv = "SELECT * FROM SINHVIEN WHERE 1=1";
    // 3. Thuc thi cau lenh truy van
    $result_tdv = $connect_tdv->query($sql_tdv);
    // 4. Duyet va hien thi
    ?>
    <h1>Danh sach sinh vien</h1>
    <table border="1px" width="80%" align="center">
        <thead>
            <tr>
                <th>STT</th>
                <th>Ma sinh vien</th>
                <th>Ho ten</th>
                <th>Ten</th>
                <th>Ngay sinh</th>
                <th>Gioi tinh</th>
                <th>Dia chi</th>
                <th>Dien thoai</th>
                <th>Email</th>
                <th>Trang thai</th>
                <th>Ma khoa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //4. Duyet va hien thi
            if($result_tdv->num_rows){
                $stt=0;
                while($row_tdv = $result_tdv->fetch_array()){
                    $stt++;
            ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $row_tdv["MASV"];?></td>
                <td><?php echo $row_tdv["HOSV"];?></td>
                <td><?php echo $row_tdv["TENSV"];?></td>
                <td><?php echo $row_tdv["NGAYSINH"];?></td>
                <td><?php echo $row_tdv["GIOITINH"];?></td>
                <td><?php echo $row_tdv["DIACHI"];?></td>
                <td><?php echo $row_tdv["DIENTHOAI"];?></td>
                <td><?php echo $row_tdv["EMAIL"];?></td>
                <td><?php echo $row_tdv["TRANGTHAI"];?></td>
                <td><?php echo $row_tdv["MAKHOA"];?></td>
            </tr>
            <?php
                } //end while
            }else{
            ?>
            <tr>
                <td colspan="10">Chua co sinh vien nao</td>
            </tr>
            <?php
            } //end if
                //let thuc lap
            ?>
        </tbody>
    </table>
</body>
</html>