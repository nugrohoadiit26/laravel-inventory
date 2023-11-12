@extends('master/all')
@section('master-konten')

<h5> Edit Master Gudang </h5>

<form action="{{ route('master-gudang-update',$barang[0]->id)}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="html_kode" class="form-label">Kode</label>
        <input type="text" class="form-control w-50" id="html_kode" name="html_kode" value="{{ old('html_kode',$barang[0]->kode)}}" placeholder="Kode Gudang"  disabled>
        @if ($errors->has('html_kode'))
            <div class="badge text-bg-danger">{{ $errors->first('html_kode') }}</div>
        @endif
    </div>
    <div class="mb-3">
        <label for="html_nama_kategori" class="form-label">Nama Gudang</label>
        <input type="text" class="form-control w-50" id="html_nama_gudang" name="html_nama_gudang" value="{{ old('html_nama_gudang',$barang[0]->nama_gudang)}}" placeholder="Nama Gudang">
        @if ($errors->has('html_nama_gudang'))
            <div class="badge text-bg-danger">{{ $errors->first('html_nama_gudang') }}</div>
        @endif
    </div>
    

    <button type="submit" class="btn btn-warning">
        <i class="fa fa-solid fa-save me-2"></i>Update
    </button>
</form>
@endsection
