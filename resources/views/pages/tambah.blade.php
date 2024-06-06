<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>
<body>
    <h3>Data Mahasiswa</h3>
    <a href="/misal">Kembali</a>

    <br/>
    <br/>

    <form action="/simpan" method="post">
        {{ csrf_field() }}
        NIM <input type="number" name="mhs_nim" required="required"><br/>
        Nama <input type="text" name="mhs_nama" required="required"><br/>
        Alamat <textarea name="mhs_alamat" required="required"></textarea> <br/>
        Jenis Kelamin <input type="text" name="mhs_jk" required="required"><br/>
        Umur <input type="number" name="mhs_umur" required="required"><br/>
        <input type="submit" value="Tambah">
    </form>
</body>