@extends('master')

@section('konten_utama')
<div class="text-center";>
    <h1>Selamat datang di portofolio saya</h1>
    <p>Mahasiswa teknik informatika | {{ $nama }}</p>
</div>
<a href="{{url('/detail')}}" class="btn btn-primary" role="button">Klik ini untuk ke halaman selanjutnya
</a>

@endsection