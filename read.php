<?php
    //1. Ket noi den may chu csdl
    //2. Tao truy van doc du lieu tu bang
    //3. Thuc thi cau lenh truy van ($mysqli->query)=> tra ve 1 tap ket qua
    //4. Duyet du lieu trong tap ket qua => hien thi (fetch)

    //=====================Thuc hien

    //1. Ket noi den may chu csdl (mysqli)
    $connect = new mysqli('localhost', 'root', '', "k22cntt3_day08");
    //2. Tao truy van doc du lieu tu bang
    $sql = "SELECT * FROM KHOA WHERE 1=1";
    //3. Thuc thi cau lenh truy van
    $resultSet = $connect->query($sql);
    // print_r($resultSet);
    //4. Duyet va hien thi
    while($row = $resultSet->fetch_array()){
        echo "<p>" . $row[0] ." --- " . $row["TENKHOA"];
    }
?>