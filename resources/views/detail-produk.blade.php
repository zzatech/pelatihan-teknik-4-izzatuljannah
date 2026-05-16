@extends('master')
@section('konten_utama')
<div class="container mt-5">
    <h1>My portofolio</h1>
    <p>Mahasiswa teknik informatika | {{ $nama }}</p>
</div>
<div class="row">
     <div class="col-md-4 mb-4">
        <div class="card h-100 shadow border-danger">
            <img src="{{ asset('img/')}}" class="card-img-top" style="height: 200px;">
            <div class="card-body">
                <h5 class="card-title fw-bold text-primary">Izzatul Jannah</h5>
            </div>
        </div>
     </div>
</div>
<div class="row">
     <div class="col-md-4 mb-4">
        <div class="card h-100 shadow border-danger">
            <img src="{{ asset('img/')}}" class="card-img-top" style="height: 200px;">
            <div class="card-body">
                <h5 class="card-title fw-bold text-primary">Daftar Riwayat Hidup</h5>
            </div>
        </div>
     </div>
</div>
<div class="row">
     <div class="col-md-4 mb-4">
        <div class="card h-100 shadow border-danger">
            <img src="{{ asset('img/')}}" class="card-img-top" style="height: 200px;">
            <div class="card-body">
                <h5 class="card-title fw-bold text-primary">Pendidikan</h5>
            </div>
        </div>
     </div>
</div>
<a class="btn btn-primary">Kembali ke beranda</a>
@endsection