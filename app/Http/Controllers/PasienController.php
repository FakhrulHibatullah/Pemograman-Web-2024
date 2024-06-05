<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $list_pasien = Pasien::all();
        return view('admin.pasien', compact('list_pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.form_pasien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        return redirect('admin/pasien');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pasien = Pasien::find($id);
        return view('admin.detail_pasien', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
