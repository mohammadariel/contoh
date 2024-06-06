<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>
<body>
    <h3>Data Mahasiswa</h3>
    <a href="/tambah"> + Tambah Mahasiswa Baru</a>
    <br/>
    <br/>
    <table boorder="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Opsi</th>
        </tr>
    @foreach($mahasiswa as $m)
    <tr>
        <td>{{ $m->mhs_nim }}</td>
        <td>{{ $m->mhs_nama }}</td>
        <td>{{ $m->mhs_alamat }}</td>
        <td>{{ $m->mhs_jk }}</td>
        <td>{{ $m->mhs_umur }}</td>
        <td>
            <a href="/edit/{{ $m->mhs_nim}}">Edit</a>
            |
            <a href="hapus/{{ $m->mhs_nim }}">Hapus</a>
        </td>
    </tr>
@endforeach
</body>