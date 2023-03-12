@extends('layouts.app')
@section('title', 'Petugas')
    
@section('content')
    <div class="container-fluid">
      <h3>Tambah Petugas</h3>

      <div class="card">
        <div class="card-body">
          <form method="POST" action="{{route('admin.tambah-petugas-store')}}">
            @csrf

            <div class="mb-3">
              <label for="nik" class="form-label">NIK <span class="text-danger">*</span></label>
              <input value="" name="nik" type="text" class="form-control" id="nik" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
              <input value="" name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
              <input value="" name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="telepon" class="form-label">No HP <span class="text-danger">*</span></label>
              <input value="" name="telepon" type="number" class="form-control" id="telepon" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="role" class="form-label">Role<span class="text-danger">*</span></label>
              <select class="form-select" name="roles" aria-label="Default select example">
                <option selected>Pilih jenis Role</option>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
              <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
              <label for="password_confirmation" class="form-label">Konfirmasi Password <span class="text-danger">*</span></label>
              <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
            </div>

            <button type="submit" class="btn px-5 text-white" style="background: #004643">Kirim</button>
          </form>
        </div>
      </div>
    </div>
@endsection