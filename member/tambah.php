
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
<form action="?page=member/simpan" method="POST" enctype="multipart/form-data">
<div class="mb-3 ">
    <label class="form-label">Id:</label>
    <div class="col-sm-10">
     <input type="text" class="form-control" name="id">
    </div>
    </div>
    <div class="mb-3 row">
    <label  class="form-label">Nama:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="nama">
    </div>
  </div>
    <div class="mb-3 row">
    <label  class="form-label">Alamat:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="alamat">
    </div>
  </div>
    <div class="mb-3 row">
    <label  class="form-label">Jenis_kelamin:</label>
    <div class="col-sm-10">
      <select type="text" class="form-control"  name="jenis_kelamin">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>
    <div class="mb-3 row">
    <label  class="form-label">Telepon:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="telepon">
    </div>
  </div>
  <td><button type="submit" class="btn btn-outline-dark">simpan</button></td>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</form>
</body>
</html>