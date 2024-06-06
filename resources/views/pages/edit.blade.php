@foreach($mahasiswa as $m)
<form action="/update" method="post">
    {{ csrf_field() }}
    NIM <input type="text" readonly name="mhs_nim" value="{{ $m->mhs_nim }}"> <br/>
    Nama <input type="text" name="mhs_nama" required="required" value="{{ $m->mhs_nama }}"><br/>
    Alamat <textarea name="mhs_alamat" required="required">{{ $m->mhs_alamat }}</textarea> <br/>
    Jenis Kelamin <input type="text" name="mhs_jk" required="required" value="{{ $m->mhs_jk }}"><br/>
    Umur <input type="number" name="mhs_umur" required="required" value="{{ $m->mhs_umur }}"><br/>
    <input type="submit" value="Edit">
</form>
@endforeach