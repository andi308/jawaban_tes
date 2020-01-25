<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bs4/css/bootstrap.min.css">

  <title>Hello, world!</title>
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
        data-toggle="modal" data-target="#exampleModal">Add</button>
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
        <tr>
          <td>1</td>
          <td>Pevita Pearce</td>
          <td>Latte</td>
          <td>Drink</td>
          <td>Rp.10.000</td>
          <td>
          <a href="?id=1#exampleModal">Ubah</button>
          &nbsp; <a href="">Hapus</a></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Modal Tambah -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
              <select class="custom-select" placeholder="Kasir">
                <option selected>Choose...</option>
              </select>
              <br>
              <br>
              <select class="custom-select" placeholder="Kasir">
                <option selected>Choose...</option>
              </select>
              <br><br>
              <div class="input-group input-group-sm mb-3">
                <input type="text" class="form-control" aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-sm" placeholder="nama makanan">
              </div>
              <div class="input-group input-group-sm mb-3">
                <input type="text" class="form-control" aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-sm" placeholder="harga">
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" style="background: #FADC9C;color :#ffffff;">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="lib/jquery-3.4.1.min.js"></script>
  <script src="lib/popper.min.js"></script>
  <script src="bs4/js/bootstrap.min.js"></script>
  <script src="lib/sweetalert2.js"></script>
</body>

</html>