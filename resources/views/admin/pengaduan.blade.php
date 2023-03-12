@extends('layouts.app')
@section('title', 'Pengaduan')

@push('css')
<style>
    .card {
        border-radius: 8px !important;
        padding: 1rem;
    }
    .table-responsive {
      display: table !important;
    }
</style>
@endpush

@section('content')
<div class="container">
  <div class="mb-3">
    <p style="font-size: 24px;font-weight:700">Data Laporan</p>
  </div>
    <div class="card">
        <div class="card-title">
        </div>

        <div class="card-body">
            <table class="table table-responsive">
              <thead style="background: #004643">
                <tr class="text-center text-white">
                  <th class="px-4 py-3">Foto</th>
                  <th class="px-4 py-3">Tanggal</th>
                  {{-- <th class="px-4 py-3">Laporan</th> --}}
                  <th class="px-4 py-3">Status</th>
                  <th class="px-4 py-3">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                  <tr>
                    <td><img src="{{asset('foto_laporan/'.$item->path_foto)}}" alt=""></td>
                    <td>{{$item->tanggal_pengaduan}}</td>
                    {{-- <td>{{$item->laporan}}</td> --}}
                    <td>{{$item->status}}</td>
                    <td>
                      <div class="d-flex">
                        <a href="{{route('admin.pengaduan.detail', $item->id)}}" class="btn"><i class="fa-sharp fa-solid fa-eye"></i></a>
                        <form method="POST" action="{{url('pengaduan-delete/'.$item->id)}}">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="btn "><i class="fa-solid fa-trash"></i></button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection