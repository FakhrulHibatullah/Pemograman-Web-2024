<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

<<<<<<< HEAD

class PasienController extends Controller
{
    public function index(){
        $list_pasien = Pasien::all();
        return view('admin.pasien', compact('list_pasien'));
     }
}
=======
class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pasien = Pasien::all();
        return view('admin.pasien', compact('list_pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form_pasien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi form input
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender'=> 'required|string',
            'email'=> 'required|string',
            'alamat'=> 'required|string',
            'nama_kecamatan'=> 'required|string',

        ]);

        Pasien::create($validated);
        return redirect('admin/pasien')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasien = Pasien::find($id);
        return view('admin.detail_pasien', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::find($id);
        return view('admin.pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi form input
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender'=> 'required|string',
            'email'=> 'required|string',
            'alamat'=> 'required|string',
            'nama_kecamatan'=> 'required|string',

        ]);

        $pasien = Pasien::find($id);
        $pasien->update($validated);
        return redirect('admin/pasien')->with('pesan', 'Data Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('admin/pasien')->with('pesan', 'Data Berhasil di Hapus');
    }
}
>>>>>>> 191058c (Pratikum Terakhir)
