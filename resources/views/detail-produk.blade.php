@extends('master')
@section('konten_utama')
<div class="container mt-5">
    <h1>My portofolio</h1>
    <p>Mahasiswa teknik informatika | {{ $nama }}</p>
</div>
<div class="row">
     <div class="col-md-4 mb-4">
        <div class="card h-100 shadow border-danger">
            <img src="{{ asset('img/pro.jpg')}}" class="card-img-top" style="height: 350px;">
            <div class="card-body">
                <h5 class="card-title fw-bold text-primary text-center">Izzatul Jannah</h5>
            </div>
        </div>
     </div>
</div>
<div class="row">
     <div class="col-md-4 mb-4">
        <div class="card h-100 shadow border-danger">
            <img src="{{ asset('img/drh.png')}}" class="card-img-top" style="height: 200px;">
            <div class="card-body">
                <h5 class="card-title fw-bold text-primary">Daftar Riwayat Hidup</h5>
                <p>Nama: Izzatul Jannah</p>
                <p>Tempat,Tanggal Lahir: Kebumen,05 Juni 2007</p>
                <p>Alamat: Klegenrejo,Klirong,Kebumen</p>
                <p>Umur: 19 Tahun</p>
                <p>Agama: Islam</p>
                <p>Jenis Kelamin: Perempuan</p>
            </div>
        </div>
     </div>
</div>
<div class="row">
     <div class="col-md-4 mb-4">
        <div class="card h-100 shadow border-danger">
            <img src="{{ asset('img/p.png')}}" class="card-img-top" style="height: 200px;">
            <div class="card-body">
                <h5 class="card-title fw-bold text-primary">Pendidikan</h5>
                <p>TK Pantisiwi Utami</p>
                <p>SDN Klegenrejo</p>
                <p>SMP Ashhidiqiyyah</p>
                <p>SMK Ma'arif 9 Kebumen</p>
            </div>
        </div>
     </div>
</div>
<a href="/" class="btn btn-primary btn-lg px-5 rounded-pill">Kembali ke beranda</a>
@endsection