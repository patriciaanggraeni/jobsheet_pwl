<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use App\Models\Mahasiswa;
use App\Models\MahasiswaMataKuliahModel;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_mhs = MahasiswaModel::all();
        return view('mahasiswa')->with('mhs', $data_mhs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = KelasModel::all();
        return view('mahasiswa.mhs', ['kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kelas_id' => 'required',
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|string|max:50',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'no_telp' => 'required|string|max:15'
        ]);

        MahasiswaModel::create($request->all());
        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show( $nim ) {
        $mahasiswa = MahasiswaModel::find($nim);
        return view('mahasiswa.detailmhs', ['mhs' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit( $nim ) {
        $mahasiswa = MahasiswaModel::find($nim);
        $kelas = KelasModel::all();
        return view('mahasiswa.editmhs', ['mhs' => $mahasiswa, 'url_form' => url('/mahasiswa/' . $nim), 'kelas' => $kelas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama' => 'required|string|max:50',
            'kelas_id' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:50',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'no_telp' => 'required|digits_between:6,15'
        ]);

        MahasiswaModel::where('id', $id)->update($request->except('_token', '_method'));
        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa Berhasil Dirubah!');
    }

    public function khs($id) {
        $mahasiswa = Mahasiswamodel::find($id);
        $khs = MahasiswaMataKuliahModel::where('mahasiswa_id',$id)->get();
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