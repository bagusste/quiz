<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('../resources/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('../resources/img/logo.png') }}">

    <title>SI-PLN</title>
  </head>
  <body>
    <form action="user/log_in" method="post" class="container-sm w-50 border p-5 position-absolute top-50 start-50 translate-middle bg-dark bg-gradient text-center">
      @csrf
            <h2 class="text-light">Selamat Datang</h2>
            <h1 class="text-light">SI-PLN</h1>
            <img class="mb-4" src="../resources/img/logo.png" alt="" width="72" height="72">
    
            <div class="form-floating mb-3">
                <input type="email" class="form-control w-100" id="floatingInput" placeholder="name@example.com" name="user_email" required>
                <label for="floatingInput">Alamat Email</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control w-100" id="floatingPassword" placeholder="Password" name="user_password" required>
                <label for="floatingPassword">Kata Sandi</label>
            </div>
            <button type="submit" class="btn btn-primary w-50 mb-3" name="btn_masuk">Masuk</button>
          </div>
          <div class="">
            <small class="text-light">Belum Punya Akun ? <a href="register">Daftar!</a> </small>
          </div>
    </form>
    <p class="position-absolute top-100 start-50 translate-middle text-center mt-5">Copyright &copy; 2022<br>Created by Bagus Setiawan</p> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>