<?php include "config.php" ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bs4/css/bootstrap.min.css">
  <link rel="stylesheet" href="lib/sweetalert2.min.css">

  <title>Arkademy</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Arkademy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" size="100" placeholder="Search" aria-label="Search">
      </form>
      <button class="btn btn-large my-2 my-sm-0" style="background: #FADC9C;color :#ffffff;" type="button"
        data-toggle="modal" data-target="#tambahmodal">Add</button>
    </div>
  </nav>

  <div class="container mt-4">
    <table class="table">
      <thead style="background: #FADC9C;color :#ffffff;">
        <tr>
          <th>No</th>
          <th>Cashier</th>
          <th>Product</th>
          <th>Category</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $kueri = " SELECT product.id, product.name, product.price, product.id_category, product.id_cashier, category.id AS idcategory, category.name AS nama_category, cashier.id AS idcashier, cashier.name AS nama_cashier FROM product LEFT JOIN category ON product.id_category = category.id LEFT JOIN cashier ON product.id_cashier = cashier.id ";
          $data = mysqli_query($kon, $kueri);
          $no = 1;
          while($row = mysqli_fetch_assoc($data)) {
       ?>
        <tr>
          <td><b><?= $no++ ?></b></td>
          <td><?= $row['nama_cashier'] ?></td>
          <td><?= $row['name'] ?></td>
          <td><?= $row['nama_category'] ?></td>
          <td><?= $row['price'] ?></td>
          <td>
            <a href="?id=<?= $row['id'] ?>#ubahmodal" >Ubah</button>
              &nbsp; <a href="">Hapus</a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <!-- Modal Tambah -->
  <div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="POST">
          <div class="modal-body">

            <div class="input-field col s12">
              <select class="custom-select" name="kasir">
                <?php
              $kueri = " SELECT * FROM cashier ";
              $data = mysqli_query($kon, $kueri);
              while($row = mysqli_fetch_assoc($data)){
              ?>
                <option value="<?= $row['id'] ?>"> <?= $row['name'] ?> </option>
                <?php } ?>
              </select>
              <br>
              <br>
              <select class="custom-select" name="kategori">
                <?php
              $kueri = " SELECT * FROM category ";
              $data = mysqli_query($kon, $kueri);
              while($row = mysqli_fetch_assoc($data)){
              ?>
                <option value="<?= $row['id'] ?>"> <?= $row['name'] ?> </option>
                <?php } ?>
              </select>
              <br><br>
              <div class="input-group input-group-sm mb-3">
                <input type="text" class="form-control" aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-sm" placeholder="nama makanan" name="nama">
              </div>
              <div class="input-group input-group-sm mb-3">
                <input type="number" class="form-control" aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-sm" placeholder="harga" name="harga">
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="submit" name="tambah" style="background: #FADC9C;color :#ffffff;">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php
    if(isset($_POST['tambah'])){
      $name = $_POST['nama'];
      $price = $_POST['harga'];
      $id_category = $_POST['kategori'];
      $id_cashier = $_POST['kasir'];
      $sql = " INSERT INTO product VALUES (NULL, '$name', $price, $id_category, $id_cashier) ";
      $data = mysqli_query($kon, $sql);
      if(mysqli_affected_rows($kon) > 0){
        echo "<script>";
        echo "Swal.fire(
                          'Good job!',
                          'Data Berhasil Ditambah!',
                          'success'
                        )";
        echo "</script>";
      }else{
        echo "tes";
        mysqli_error($kon);
      }
    }
  ?>

  <!-- modal ubah -->
  <div class="modal fade" id="?id=1#ubahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="POST">
          <div class="modal-body">

            <div class="input-field col s12">
              <select class="custom-select" name="kasir">
                <?php
              $kueri = " SELECT * FROM cashier ";
              $data = mysqli_query($kon, $kueri);
              while($row = mysqli_fetch_assoc($data)){
              ?>
                <option value="<?= $row['id'] ?>"> <?= $row['name'] ?> </option>
                <?php } ?>
              </select>
              <br>
              <br>
              <select class="custom-select" name="kategori">
                <?php
              $kueri = " SELECT * FROM category ";
              $data = mysqli_query($kon, $kueri);
              while($row = mysqli_fetch_assoc($data)){
              ?>
                <option value="<?= $row['id'] ?>"> <?= $row['name'] ?> </option>
                <?php } ?>
              </select>
              <br><br>
              <div class="input-group input-group-sm mb-3">
                <input type="text" class="form-control" aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-sm" placeholder="nama makanan" name="nama">
              </div>
              <div class="input-group input-group-sm mb-3">
                <input type="number" class="form-control" aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-sm" placeholder="harga" name="harga">
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="submit" name="tambah" style="background: #FADC9C;color :#ffffff;">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <button type="button" class="btn btn-info" id="testes" onclick="gagal()">button</button>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="lib/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script src="lib/popper.min.js" type="text/javascript"></script>
  <script src="bs4/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="lib/sweetalert2.js" type="text/javascript"></script>
</body>

<script>
$(document).on('click', '#testes', function () {
  swal({
      title: "OOPS",
      text: "Data gagal ditambahkan",
      icon: "warning",
      dangerMode: true,
      buttons: [false, "OK"],
    }).then(function () {
      window.location.href = "add.php";
    });
    });
  gagal();

  function gagal() {
    swal({
      title: "OOPS",
      text: "Data gagal ditambahkan",
      icon: "warning",
      dangerMode: true,
      buttons: [false, "OK"],
    }).then(function () {
      window.location.href = "add.php";
    });
  }

  function berhasil() {
    swal({
      title: "BERHASIL",
      text: "Data Telah ditambahkan",
      icon: "success",
      buttons: [false, "OK"],
    }).then(function () {
      window.location.href = "index..php";
    });
  }
</script>

</html>