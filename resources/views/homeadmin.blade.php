@extends('layouts.app')

@section('content')
    <section class="ftco-section ftco-slant" id="section-services">
    <div class="container">
     <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tgl_pengaduan</th>
      <th scope="col">ID Pelapor</th>
      <th scope="col">Laporan</th>
      <th scope="col">Kategori</th>
      <th scope="col">tanggapan</th>
      <th scope="col">Petugas</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($tanggapan as $pd)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $pd->tgl_pengaduan }}</td>
      <td>{{ $pd->id_masyarakat }}</td>
      <td>
        {{ str_limit($pd->laporan, 10,'') }}
        @if (strlen($pd->laporan) > 100)
          <span id="dots">...</span>
          <span id="more">{{ substr($pd->laporan, 100) }}</span>
        @endif
      </td>
      <td>{{ $pd->kategori }}</td>
      <td>{{ $pd->tanggapan }}</td>
      <!-- {{ $pd->foto }} -->
      <td>{{ $pd->name }}</td>
      <td>{{ $pd->status }}</td>
      <td><a href="{{Route('admin.generate', $pd->id_tanggapan)}}" class="btn btn-success">Cetak Laporan</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    </section>
@endsection
