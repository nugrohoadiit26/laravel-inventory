@extends('template/index')
@section('konten')

<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link {{ (Request::segment(2) == 'barang' ? 'active':'') }}" href="{{ route('master-barang') }}">Barang</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Request::segment(2) == 'kategori' ? 'active':'') }}" href="{{ route('master-kategori') }}">Kategory</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Request::segment(2) == 'gudang' ? 'active':'') }}" href="{{ route('master-gudang') }}">Gudang</a>
    </li>
      </ul>

      <div class="tab-content p-4">
        @yield('master-konten')
      </div>
@endsection
