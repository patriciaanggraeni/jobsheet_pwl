<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use App\Models\MahasiswaMataKuliahModel;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class MahasiswaController extends Controller {

    public function index() {
        // $mahasiswa = MahasiswaModel::with('kelas')->get();
        // $paginate = MahasiswaModel::orderBy('id', 'asc')->paginate(3);
        // return view('mahasiswa', ['mahasiswa' => $mahasiswa, 'paginate' => $paginate]);
        $kelas = KelasModel::all();
        return view('mahasiswa.mahasiswa', ['kelas' => $kelas]);
    }

    public function data_mahasiswa() {
        $mahasiswa = MahasiswaModel::with('kelas')->get();
        return DataTables::of($mahasiswa)
        ->addIndexColumn()
        ->addColumn('nama_kelas', function($row) {
            return $row->kelas->nama_kelas;
        })
        ->make(true);
    }

    public function create() {
        $kelas = KelasModel::all();
        return view('mahasiswa.create', ['kelas' => $kelas]);
    }

    public function store(Request $request) {
    
        $request->validate( [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'kelas_id' => 'required',
            'gambar' => 'image|mimes:png,jpg,jpeg',
            'jenis_kelamin' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:50',
            'tgl_lahir' => 'required',
            'alamat' => 'required|string',
            'no_telp' => 'required|digits_between:6,15',
        ] );

        $gambar = $request->file('gambar')->store('image', 'public');

        MahasiswaModel::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas_id' => $request->kelas_id,
            'gambar' => $gambar,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        redirect('mahasiswa')->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    public function show( $id ) {
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();
        return view('mahasiswa.detailmhs', ['mahasiswa' => $mahasiswa]);
    }

    public function edit( $id ) {
        $mahasiswa = MahasiswaModel::with('kelas')->where('id', $id)->first();
        $kelas = KelasModel::all();
        return view('mahasiswa.editmhs', ['mahasiswa' => $mahasiswa, 'kelas' => $kelas]);
    }

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

    public function destroy($id) {
        MahasiswaModel::where('id', $id)->delete();
        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa Berhasil Dihapus!');
    }

    public function export_mahasiswa_pdf($id) {
        $mahasiswa = MahasiswaModel::find($id);
        $khs = MahasiswaMataKuliahModel::where('id_mahasiswa',$id)->get();
        $pdf = PDF::loadview('mahasiswa.exportpdf', ['mahasiswa' => $mahasiswa, 'khs' => $khs]);
        return $pdf->stream();
    }
}
