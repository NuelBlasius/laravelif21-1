@extends('layout.main')
@section('title', 'Daftar Fakultas')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Program Studi</h4>
            <p class="card-description">
            List program studi
            </p>
            <a href="{{ url('prodi/create') }}" class="btn btn-primary btn-rounded btn-fw">Tambah</a>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nama Program Studi</th>
                    <th>Nama Fakultas</th>
                    <th>Singkatan</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($prodi as $item)
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['fakultas'] ['nama'] }}</td>
                        <td>{{ $item['fakultas'] ['singkatan'] }}</td>
                    </tr>
                    @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection