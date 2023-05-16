<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use App\Models\Mahasiswa;
use App\Models\MahasiswaMataKuliahModel;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $mahasiswa = MahasiswaModel::with('kelas')->get();
        $paginate = MahasiswaModel::orderBy('id', 'asc')->paginate(3);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa, 'paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $kelas = KelasModel::all();
        return view('mahasiswa.mhs', ['kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        if ($request->file('gambar')) {
            $gambar = $request->file('gambar')->store('image', 'public');
        }

        MahasiswaModel::create([
            'kelas_id' => $request->kelas_id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gambar' => $gambar,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp
        ]);

        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();
        return view('mahasiswa.detailmhs', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();
        $kelas = KelasModel::all();
        return view('mahasiswa.editmhs', ['mahasiswa' => $mahasiswa, 'kelas' => $kelas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $mahasiswa = MahasiswaModel::find($id);
        $mahasiswa->kelas_id  = $request->kelas_id;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->tgl_lahir = $request->tgl_lahir;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->no_telp = $request->no_telp;

        if ($mahasiswa->gambar && file_exists(storage_path('app/public' . $mahasiswa->gambar))) {
            Storage::delete('public/' . $mahasiswa->gambar);
        }

        $gambar = $request->file('gambar')->store('image', 'public');
        $mahasiswa->gambar = $gambar;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa Berhasil Dirubah!');
    }

    public function show_khs( $id ) {
        $mahasiswa = Mahasiswamodel::find($id);
        $khs = MahasiswaMataKuliahModel::where('id_mahasiswa',$id)->get();
        return view('mahasiswa.nilaimhs', ['mahasiswa' => $mahasiswa, 'khs'=>$khs]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id', $id)->delete();
        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa Berhasil Dihapus!');
    }
}
