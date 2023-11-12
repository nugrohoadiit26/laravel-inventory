@extends('master/all')
@section('master-konten')
<h5> Tambah Master Gudang </h5>

<form action="{{ route('master-gudang-simpan')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="html_kode" class="form-label">Kode</label>
        <input type="text" class="form-control w-50" id="html_kode" name="html_kode" value="{{ old('html_kode')}}" placeholder="Kode Gudang" autofocus>
        @if ($errors->has('html_kode'))
            <div class="badge text-bg-danger">{{ $errors->first('html_kode') }}</div>
        @endif
    </div>
    <div class="mb-3">
        <label for="html_nama" class="form-label">Nama Gudang</label>
        <input type="text" class="form-control w-50" id="html_nama" name="html_nama" value="{{ old('html_nama')}}" placeholder="Nama Gudang">
        @if ($errors->has('html_nama'))
            <div class="badge text-bg-danger">{{ $errors->first('html_nama') }}</div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-solid fa-save me-2"></i>Simpan
    </button>
</form>
@endsection
