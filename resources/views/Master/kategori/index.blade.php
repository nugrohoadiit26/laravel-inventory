@extends('master/all')
@section('master-konten')

<h5>Halaman Master Kategori</h5>

<div class="row">
    <div class="col-12 text-end">
        <a href="{{ route('master-kategori-tambah') }}" class="btn btn-primary">+Tambah Kategori</a>
    </div>
</div>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">Nama Kategori</th>
         <th scope="col">Aksi</th>

      </tr>
    </thead>
    <tbody>
      @php
          $i = 1;
      @endphp
        @foreach ($kategori as $k )


        <tr>
            <th scope='row'>{{ $i++}}</th>
            <td>{{ $k->kode }}</td>
            <td>{{ $k->nama_kategori }}</td>

            <td>
                <a href="{{ route('master-kategori-detail', ['id' => $k->id]) }}"
                  class="btn btn-sm btn-success rounded-circle">
                  <i class="fa fa-solid fa-eye"></i>
                </a>
                <a href="{{ route('master-kategori-edit', ['id' => $k->id]) }}"
                    class="btn btn-sm btn-warning rounded-circle">
                    <i class="fa fa-solid fa-pencil"></i>
                  </a>
                <a href="{{ route('master-kategori-hapus',['id'=>$k->id]) }}"
                    class="btn btn-sm btn-danger rounded-circle"
                  onclick="return confirm('Apakah anda yakin ingin hapus {{ $k->kode }} ?')">
                  <i class="fa fa-solid fa-trash"></i> </a></td>
          </tr>
      @endforeach

    </tbody>
  </table>

@endsection
