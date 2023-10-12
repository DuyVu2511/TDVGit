<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //truy xuat du lieu tu csdl
         //1. Ket noi den may chu csdl (mysqli)
        $connect = new mysqli('localhost', 'root', '', "k22cntt3_day08");
        //2. Tao truy van doc du lieu tu bang
        $sql = "SELECT * FROM KHOA WHERE 1=1";
        //3. Thuc thi cau lenh truy van
        $resultSet = $connect->query($sql);
        // print_r($resultSet);
        //4. Duyet va hien thi
        // while($row = $resultSet->fetch_array()){
        //     echo "<p>" . $row[0] ." --- " . $row["TENKHOA"];
        // }

    ?>
    <h1>DANH SACH KHOA</h1>
    <hr/>
    <a href="create-khoa.php">Them moi</a>
    <table width="80%" align="center" border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>MA KHOA</th>
                <th>TEN KHOA</th>
                <th>TRANG THAI</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $stt =0;
                while($row = $resultSet->fetch_array()){
                    $stt++;
            ?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $row["MAKHOA"]; ?></td>
                    <td><?php echo $row["TENKHOA"]; ?></td>
                    <td><?php echo $row["TRANGTHAI"]; ?></td>
                </tr>
            <?php
             
                }
            ?>
        </tbody>
    </table>
</body>
</html>