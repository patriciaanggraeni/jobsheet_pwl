<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>

    <center>
        <h5>Laporan Artikel</h5>
        <h1>Nama : {{ $mahasiswa->nama }}</h1>
        <h1>Nim  : {{ $mahasiswa->nim }}</h1>
        <h1>Kelas: {{ $mahasiswa->kelas->nama_kelas }}</h1>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($khs as $i => $a)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $a->matakuliah->nama_matkul }}</td>
                    <td>{{ $a->matakuliah->sks }}</td>
                    <td>{{ $a->matakuliah->jam }}</td>
                    <td>{{ $a->nilai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>
