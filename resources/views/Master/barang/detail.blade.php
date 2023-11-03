@extends('master/all')
@section('master-konten')

<h5>Detail Barang</h5>
@if (@isset($barang[0]))

@php
    //konversi tanggal format sql menjadi gampang dibaca
    $tanggal_dibuat= new DateTime($barang[0]->dibuat_kapan);
    $dibuat=$tanggal_dibuat->format('D, d M Y');

    //konversi tanggal format sql menjadi gampang dibaca
    $tanggal_diperbarui= new DateTime($barang[0]->diperbarui_kapan);
    $diperbarui=$tanggal_diperbarui->format('D, d M Y');


@endphp

<div class="card w-50 shadow">

    <div class="card-body">
      <h5 class="card-title">{{ $barang[0]->kode }}</h5>
      <h5 class="card-title">{{ $barang[0]->nama }}</h5>
      <p class="card-text">{{ $barang[0]->deskripsi }}</p>
      <span class="card-text">dibuat:{{ $dibuat }} | {{ $barang[0]->dibuat_nama }}</span><br>
      <span class="card-text">Terakhir diperbarui:{{$diperbarui }} | {{ $barang[0]->diperbarui_nama }}</span>

    </div>
  </div>

  @else
        <h2>Barang Tidak Ada</h2>
  @endif

  @endsection
