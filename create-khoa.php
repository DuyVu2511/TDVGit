<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them moi thong tin khoa</title>
</head>
<body>
    <?php
        // xu ly khi nguoi dung nha nut them moi
        /* 
            -1. Ket noi
            -2. Lay du lieu tren form
            -3. Tao truy van them moi (INSERT)
            -4. Thuc thi cau lenh truy van
            -5. Thong bao / Hien thi danh sach    
        */
        $error = '';
        if(isset($_POST["btnTDVThemMoi"])){
            //1.
            $connect = new mysqli('localhost', 'root', '', "k22cntt3_day08");            
            //2.
            $MAKHOA =$_POST["MAKHOA"];
            $TENKHOA =$_POST["TENKHOA"];
            $TRANGTHAI =$_POST["TRANGTHAI"];
            //3.
            $sql = "INSERT INTO KHOA(MAKHOA, TENKHOA, TRANGTHAI)";
            $sql .=" VALUES('$MAKHOA','$TENKHOA',$TRANGTHAI)";
            echo $sql;
            die();
            //4.
            if($connect->query($sql)){
                header("Location:read-khoa.php");
            }else{
                $error="Loi them moi, ". $connect->error;
            }
        }    
    ?>
    <form name="frm" method="post" action="">
        <h1>Them moi thong tin khoa </h1>
        <table border="1px" width="80%" align="center">
            <tbody>
                <tr>
                    <td>Ma khoa</td>
                    <td>
                        <input type="text" name="MAKHOA" id="MAKHOA">
                    </td>
                </tr>
                <tr>
                    <td>Ten khoa</td>
                    <td>
                        <input type="text" name="TENKHOA" id="TENKHOA">
                    </td>
                </tr>
                <tr>
                    <td>Trang thai</td>
                    <td>
                        <select name="TRANGTHAI" id="TRANGTHAI">
                            <option value="1" selected>Hoat dong</option>
                            <option value="2">Tam dung</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Them moi" name="btnTDVThemMoi">
                    </td>
                </tr>
            </tbody>
        </table>
        <div><?php echo $error; ?></div>
        <a href="read-khoa.php">Danh sach khoa</a>
    </form>
</body>
</html>