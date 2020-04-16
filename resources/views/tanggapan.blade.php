@extends('layouts.app')

@section('content')
<section class="ftco-section ftco-slant" id="section-services">
    <div class="container">
        <form action="{{ route('petugas.tanggapan', @$pengadu->id_pengaduan) }}" method="POST">
        
        @csrf
        
            <div class="form-group">
                <label for="id_pengaduan">ID Pengaduan</label>
                <input type="text" class="form-control" id="id_pengaduan" name="id_pengaduan" value="{{ old('id_pengaduan',@$pengadu->id_pengaduan) }}" readonly>

            </div>
            
            <div class="form-group">
                <label for="tgl_pengaduan">Tanggal Pengaduan</label>
                <input type="text" class="form-control" id="tgl_pengaduan" name="tgl_pengaduan" value ="{{ old('tgl_pengaduan',@$pengadu->tgl_pengaduan) }}" readonly>
            </div>

            <div class="form-group">
                <label for="tanggapan">Tanggapan</label>
                <textarea class="form-control" id="tanggapan" name="tanggapan" rows="3"></textarea>
            </div>
            
            <div class="form-group">
                <label for="id_petugas">ID Petugas</label>
                <input type="text" class="form-control" id="id_petuags" name="id_petugas" value="{{ Auth::user()->id_petugas }}" readonly> 
            </div>
            
            <input class="btn btn-primary" type="submit" value="Kirim Tanggapan">
        </form>
    </div>
</section>
@endsection
