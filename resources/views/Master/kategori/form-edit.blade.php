@extends('master/all')
@section('master-konten')

<h5> Edit Master Kategori </h5>

<form action="{{ route('master-kategori-update',$barang[0]->id)}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="html_kode" class="form-label">Kode</label>
        <input type="text" class="form-control w-50" id="html_kode" name="html_kode" value="{{ old('html_kode',$barang[0]->kode)}}" placeholder="Kode Kategori"  disabled>
        @if ($errors->has('html_kode'))
            <div class="badge text-bg-danger">{{ $errors->first('html_kode') }}</div>
        @endif
    </div>
    <div class="mb-3">
        <label for="html_nama_kategori" class="form-label">Nama kategori</label>
        <input type="text" class="form-control w-50" id="html_nama_kategori" name="html_nama_kategori" value="{{ old('html_nama_kategori',$barang[0]->nama_kategori)}}" placeholder="Nama Kategori">
        @if ($errors->has('html_nama_kategori'))
            <div class="badge text-bg-danger">{{ $errors->first('html_nama_kategori') }}</div>
        @endif
    </div>
    

    <button type="submit" class="btn btn-warning">
        <i class="fa fa-solid fa-save me-2"></i>Update
    </button>
</form>
@endsection
