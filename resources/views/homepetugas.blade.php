@extends('layouts.app')

@section('content')
    <section class="ftco-section ftco-slant" id="section-services">
    <div class="container">
     <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tgl</th>
      <th scope="col">Pelapor</th>
      <th scope="col">Laporan</th>
      <th scope="col">Kategori</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
      <th scope="col" colspan="2"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($pengaduan as $pd)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $pd->tgl_pengaduan }}</td>
      <td>{{ $pd->name }}</td>
      <td>
        {{ str_limit($pd->laporan, 10,'') }}
        @if (strlen($pd->laporan) > 100)
          <span id="dots">...</span>
          <span id="more">{{ substr($pd->laporan, 100) }}</span>
        @endif
      </td>
      <td>{{ $pd->kategori }}</td>
      <td>
        <img src="<?php echo $pd->foto?>" width="80px" alt=""/>
      </td>
      <!-- {{ $pd->foto }} -->
      <td>{{ $pd->status }}</td>
      <td>
        <form action="{{ route('petugas.delete', $pd->id_pengaduan) }}" method="POST">
        @method('DELETE')
        @csrf
          <button type="submit" class="btn btn-danger">&#10006</button>
        </form>
      </td>
      <td><a href="{{ route('petugas.tanggapan', $pd->id_pengaduan) }}" class="btn btn-success">&#10004</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    </section>
@endsection
