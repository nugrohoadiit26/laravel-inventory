@extends('master/all')
@section('master-konten')

Halaman Master Barang
{{-- //.row>col --}}
<div class="row">
    <div class="col-12 text-end">
        <a href="{{ route('master-barang-tambah') }}" class="btn btn-primary">+Tambah Data</a>
    </div>
</div>
<table class="table table-hover">
    <thead>
        <tr>

            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>id_kategori</th>
            <th>id_gudang</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($barang as $b )
            <tr>

                <th scope="row">{{ $i++ }}</th>
                <td>{{ $b->kode }}</td>
                <td>{{ $b->nama }}</td>
                <td>{{ $b->deskripsi }}</td>
                <td>{{ $b->id_kategori }}</td>
                <td>{{ $b->id_gudang }}</td>
                <td><a class='btn btn-secondary btn-sm' href=''>Detail</a>
                    <a class='btn btn-warning btn-sm' href=''>Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection

