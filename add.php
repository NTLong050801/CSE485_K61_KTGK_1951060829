<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-
    oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h2 style="text-align: center;margin-top : 50px">Thêm thông tin người hiến máu</h2>
        <?php
        include('cogfig.php');

        ?>
        <form action="" method="Post" style="margin-top: 50px;">
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Tên người hiến máu</label>
                <input name="bd_name" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Giới tính</label>
                <!-- <div class="form-control"> -->
                  <input type="radio" name="bd_sex" value="Nam">
                  <label>Nam</label>
                  <input type="radio" name="bd_sex" value="Nữ">
                  <label>Nữ</label>
                  <input type="radio" name="bd_sex" value="Khác">
                  <label>Khác</label>
                <!-- </div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Năm sinh</label>
                <input name="bd_age" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Nhóm máu</label>
                <input name="bd_bgroup" type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Ngày đăng ký hiến máu</label>
                <input name="bd_reg_date" type="date" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Số điện thoại</label>
                <input name="bd_phno" type="text" class="form-control" id="exampleInput">
            </div>
            <button type="submit" name="btn_add" class="btn btn-primary">Thêm thông tin thông tin</button>

        </form>
        <?php
        if (isset($_POST['btn_add'])) {
            $bd_name = $_POST['bd_name'];
            $bd_sex = $_POST['bd_sex'];
            $bd_age = $_POST['bd_age'];
            $bd_bgroup = $_POST['bd_bgroup'];
            $bd_reg_date = $_POST['bd_reg_date'];
            $bd_phno = $_POST['bd_phno'];
            $insert = "Insert into blood_donor(bd_name ,bd_sex ,bd_age ,bd_bgroup ,bd_reg_date ,bd_phno)
             values ('$bd_name','$bd_sex','$bd_age','$bd_bgroup',$bd_reg_date,'$bd_phno')";
             echo $insert;
            $res = mysqli_query($conn, $insert);
            if ($res == true) {
                header('location:index.php');
            } else {
                header('error.php');
            }
        }

        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>