<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        return view('admin.dosen.index', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|string|max:100',
            'nip' => 'required|string|max:20|unique:dosens,nip',
            'jabatan_akademik' => 'nullable|string|max:50',
            'no_telepon' => 'nullable|string|max:20',
            'email' => 'nullable|string|email|max:100',
            'foto' => 'nullable|mimes:jpg,jpeg,png,gif|max:5000',
        ]);

        // $foto  = $request->file('foto');
        // $filename = date('Y-m-d').$foto->getClientOriginalName();
        // $path = 'foto-dosen/'.$filename;

        // Storage::disk('public')->put($path,file_get_contents($foto));

        // $data['image'] =$filename;

        $dosen = Dosen::create($validateData);
        if($dosen){
            return to_route('dosen.index')->with('success', 'Berhasil Menambah Data');
        } else{
            return to_route('dosen.index')->with('failed', 'Gagal Menambah Data');
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
