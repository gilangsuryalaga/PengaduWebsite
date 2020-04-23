<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form action="{{ route('admin.generate', @$tanggap->id_tanggapan) }}" method="POST">
    @csrf
    <table class="table table-bordered">
        <tr>    
            <td>
                {{ old('tgl_pengaduan',@$tanggap->tgl_pengaduan) }}
            </td>
            <td>
                {{ old('id_masyarakat',@$tanggap->id_masyarakat) }}
            </td>
        </tr>
        <tr>
            <td>
                {{ old('kategori',@$tanggap->kategori) }}
            </td>
            <td>
                {{ old('laporan',@$tanggap->laporan) }}
            </td>
        </tr>
        <tr>
            <td>
                {{ old('username',@$tanggap->username) }}
            </td>
            <td>
                {{ old('tanggapan',@$tanggap->tanggapan) }}
            </td>
        </tr>
    </table>
</form>
</body>
</html>