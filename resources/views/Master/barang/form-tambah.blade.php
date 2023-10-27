@extends('master/all')
@section('master-konten')

<form action="#" method="post">
<div class="mb-3">
    <label for="html_kode" class="form-label">Kode</label>
    <input type="text" class="form-control" id="html_kode" placeholder="kode barang">
  </div>
  <div class="mb-3">
    <label for="html_nama" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" id="html_nama" placeholder="nama barang">
  </div>
  <div class="mb-3">
    <label for="html_diskripsi" class="form-label">Deskripsi</label>
    <textarea class="form-control" id="html_diskripsi" rows="3"></textarea>
  </div>

  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
