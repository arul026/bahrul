
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <H2>TAMBAH DATA</H2>
<form action="?page=jenis_laundry/simpan" method="POST" enctype="multipart/form-data">
<div class="mb-3 ">
    <label class="form-label">Id_jenislaundry:</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" name="id_jenislaundry">
    </div>
    </div>
    <div class="mb-3 row">
    <label  class="form-label">Jenis_laundry:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="jenis_laundry">
    </div>
  </div>
    <div class="mb-3 row">
    <label  class="form-label">Nama_paket:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="nama_paket">
    </div>
  </div>
    <div class="mb-3 row">
    <label  class="form-label">Harga:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="harga">
    </div>
  </div>
  <td><button type="submit" class="btn btn-dark">simpan</button></td>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</form>
</body>
</html>