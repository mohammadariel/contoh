<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    // public function index(){
    //     return "ini merupakan tampilan dari method @index dalam controller PagesController";
    // }
    public function index(){
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('pages.index',['mahasiswa'=>$mahasiswa]);
    }
    public function tambah()
    {
        return view('pages.tambah');
    }
    public function simpan(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'mhs_nim'=> $request->mhs_nim,
            'mhs_nama'=> $request->mhs_nama,
            'mhs_alamat'=> $request->mhs_alamat,
            'mhs_jk'=> $request->mhs_jk,
            'mhs_umur'=> $request->mhs_umur
        ]);
    }
    public function edit($mhs_nim)
    {
        // menganmbil data berdasarkan nim yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('mhs_nim',$mhs_nim)->get();
        // menampilkan data yang didapat ke view edit.blade.php
        return view('pages.edit',['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request)
    {
    // update data mahasiswa
    DB::table('mahasiswa')->where('mhs_nim',$request->mhs_nim)->update([
        'mhs_nama' => $request->mhs_nama,
        'mhs_alamat' => $request->mhs_alamat,
        'mhs_jk' => $request->mhs_jk,
        'mhs_umur' => $request->mhs_umur
    ]);
    // alihkan halaman index
    return redirect('/misal');   
    }

    public function hapus($mhs_nim)
    {
        // menghapus data berdasarkan nim yang dipilih
        DB::table('mahasiswa')->where('mhs_nim',$mhs_nim)->delete();
        // alihkan ke halaman index
        return redirect('/misal');
    }
}


?>