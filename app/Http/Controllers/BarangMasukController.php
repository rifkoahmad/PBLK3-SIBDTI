<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang_masuks = BarangMasuk::all();
        return view('admin.barangmasuk.index', compact('barang_masuks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('admin.barangmasuk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id_barang' => 'required|integer',
            'jumlah' => 'required|integer',
            'tanggal_masuk' => 'required|date',
            'supplier' => 'required|string|max:100',
        ]);

        $barangmasuk = BarangMasuk::create($validateData);
        if($barangmasuk){
            return to_route('barangmasuk.index')->with('success', 'Berhasil Menambah Data');
        } else{
            return to_route('barangmasuk.index')->with('failed', 'Gagal Menambah Data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
