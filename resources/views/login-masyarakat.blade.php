<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/css/login.css') }}" rel="stylesheet">
</head>
<body>
  <section id="login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 right">
                <div class="text-center" style="margin-top: 18.5rem">
                    <img src="{{asset('front/img/logo-login.svg')}}" alt="">
                </div>
            </div>

            <div class="col-md-5 left py-5 px-5">
                <div class="text-center" style="margin-top: 7rem">
                    <h4>Masuk ke PENMAS</h4>
                </div>
                <form method="POST" style="margin-top: 6rem" action="{{ route('proses-masyarakat') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                      <input value="email" name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" style="background: #004643" class="btn text-white mt-2 py-2 px-5 w-100">Masuk</button>
                </form>
                <div class="d-flex mt-3">
                    <p style="color: #6E6E6E;font-size:12px;width:80%">Belum punya akun? <a href="{{route('register')}}" style="font-weight: 600;color:#004643">Daftar Sekarang</a></p>
                </div>
            </div>
        </div>
    </div>
  </section>
</body>
</html>