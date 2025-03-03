<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div>
     <a class="navbar-brand" href="?page=home"> <img src="LAUNDRY2.png" alt="" height="70"></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="?page=user/index">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=member/index">Member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=jenis_laundry/index">Jenis laundry</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=transaksi/index">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=logout">Logout</a>
        </li>
      </form>
    </div>
  </div>
</nav>
  <body >
  <div class="p-3 mb-2 bg-light text-black">
    <div>
      <?php
        include "isi.php";
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </div>
  </body>
</html>