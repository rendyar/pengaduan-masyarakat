<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/css/register.css') }}" rel="stylesheet">
</head>
<body>
  <div class="bg-register">
    <div class="d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="card p-3">
          <div class="row">
            <div class="col-md-8">
              <div class="card-title">
                <h4 class="mb-0">Buat Akun Baru</h4>
                <p class="mt-2" style="font-weight: 600">Sudah memiliki akun? <a href="{{route('login')}}">Login Sekarang</a></p>
              </div>
            </div>

          </div>
          <div class="card-body">
            <h5 class="fw-bold">Informasi</h5>
            <form method="POST" action="{{route('register')}}">
              @csrf
              <div class="mb-3">
                <label for="nik" class="form-label">NIK <span class="text-danger">*</span></label>
                <input value="" name="nik" type="text" class="form-control" id="nik" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                <input value="" name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                  <option selected>Pilih jenis kelamin</option>
                  <option value="laki-laki">Laki-laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                <input value="" name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Nomor Whatsapp <span class="text-danger">*</span></label>
                <input value="" name="telepon" type="number" class="form-control" id="phone" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" name="password" class="form-control" id="password">
              </div>
              <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password <span class="text-danger">*</span></label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
              </div>
              <button type="submit" class="btn btn-primary px-5">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}