<?php
include('cogfig.php');
?>
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
    <h2 style="text-align: center;margin-top : 50px">Quản lý thông tin người hiến máu</h2>
    <a href="add.php" class="btn btn-success" style="margin-top: 50px;">Thêm</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Tên người hiến máu</th>
          <th scope="col">Tuổi</th>
          <th scope="col">Nhóm máu</th>
          <th scope="col">Ngày đăng ký hiến máu</th>
          <th scope="col">Chi tiết</th>
          <th scope="col">Sửa</th>
          <th scope="col">Xóa</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $resuilt = mysqli_query($conn, "Select * from blood_donor");
        if (mysqli_num_rows($resuilt) > 0) {
          $i = 0;
          while ($row = mysqli_fetch_assoc($resuilt)) { ?>
            <tr>
              <th scope="row"><?php echo $i ?></th>
              <td><?php echo $row['bd_name'] ?></td>
              <td><?php echo $row['bd_age'] ?></td>
              <td><?php echo $row['bd_bgroup'] ?></td>
              <td><?php echo $row['bd_reg_date'] ?></td>
              <td><a href="view.php?bd_id=<?php echo $row['bd_id'] ?>"><i class="fas fa-eye"></i></a></td>
              <td><a href="update.php?bd_id=<?php echo $row['bd_id'] ?>"><i class="fas fa-edit"></i></a></td>
              <td><a href="delete.php?bd_id=<?php echo $row['bd_id']?>"><i class="fas fa-trash-alt"></i></a></td>


            </tr>
        <?php
            $i++;
          }
        }
        ?>


      </tbody>
    </table>
  </div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>