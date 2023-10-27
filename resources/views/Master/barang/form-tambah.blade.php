@extends('master/all')
@section('master-konten')

<form action="{{ route('master-barang-simpan') }}" method="post">
    @csrf
<div class="mb-3">
    <label for="html_kode" class="form-label">Kode</label>
    <input type="text" class="form-control" id="html_kode" name="html_kode" placeholder="kode barang">
  </div>
  <div class="mb-3">
    <label for="html_nama" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="html_nama" name="html_nama" placeholder="nama barang">
  </div>
  <div class="mb-3">
    <label for="html_diskripsi" class="form-label">Deskripsi</label>
    <textarea class="form-control" id="html_deskripsi" name="html_deskripsi" rows="3"></textarea>
  </div>

  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
