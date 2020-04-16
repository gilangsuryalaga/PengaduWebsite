@extends('layouts.app')

@section('content')
<section class="ftco-section ftco-slant" id="section-services">
    <div class="container">
        <form action="" method="POST">
        @csrf
            <div class="form-group">
                <label for="tgl_pengaduan">Tanggal Pengaduan</label>
                <input type="text" class="form-control" id="tgl_pengaduan" name="tgl_pengaduan" placeholder="Yy-Mm-Dd">
            </div>
            
            <div class="form-group">
                <label for="id_masyarakat">Id masyarakat</label>
                <input type="text" class="form-control" id="id_masyarakat" name="id_masyarakat" value ="{{ Auth::user()->id_masyarakat }}" readonly>
            </div>
            
            <div class="form-group">
                <label for="laporan">Isi pengaduan</label>
                <textarea class="form-control" id="laporan" name="laporan" rows="3"></textarea>
            </div>
            
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="pelayanan" readonly> 
            </div>
            
            <div class="form-group">
                <label for="foto">Bukti Laporan</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
            </div>
            
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="proses" readonly>
            </div>
            
            <input class="btn btn-primary" type="submit" value="Kirim Pengaduan">
        </form>
    </div>
</section>
@endsection
