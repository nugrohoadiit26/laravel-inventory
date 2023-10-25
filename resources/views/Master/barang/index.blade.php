@extends('master/all')
@section('master-konten')

Halaman Master Barang
@foreach ($barang as $b )
{{ $b->kode }}<br>
{{ $b->nama }}<br>
{{ $b->deskripsi }}<br>

@endforeach

@endsection
