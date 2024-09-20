<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Form Login</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-sm bg-dark rounded text-light">
            <form action="" method="POST">
              <div class="text-center">
                <!-- Ini untuk konfirmasi Login -->
                <!-- <?php if(isset($error)) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Login Gagal</strong> Email atau Password Salah.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?> -->
                <h1>Login</h1>
                
              </div>
              <div class="mb-3">
                
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control" id="username" name="username">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </html>

<?php
if(isset($_POST['login'])){
    //echo "proses";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($koneksi,"select * from user where username='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);

    // echo $cek;
    if($cek>0){
        //berhasil login
        session_start();
        $_SESSION['status']="sukses";
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        header('location:index.php');
    
    }
}

?>


