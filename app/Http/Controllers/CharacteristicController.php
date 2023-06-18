<?php

namespace App\Http\Controllers;

use App\Models\Characteristic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharacteristicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characteristics = Characteristic::get();
        // $characteristics = DB::table('characteristics')->paginate(7);

        return view('dashboard.characteristic.index', compact('characteristics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.characteristic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode' => 'required',
            'ciri' => 'required'
        ]);

        Characteristic::create($validatedData);

        return redirect('/characteristic')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Characteristic $characteristics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $characteristics = Characteristic::findOrFail($id);

        return view('dashboard.characteristic.edit', compact('characteristics'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'ciri' => 'required'
        ]);

        $characteristics = Characteristic::findOrFail($id);

        $characteristics->update([
            'ciri' => $request->ciri
        ]);

        return redirect('/characteristic')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $characteristics = Characteristic::findOrFail($id);

        $characteristics->delete();

        return redirect('/characteristic')->with('success', 'Data berhasil dihapus!');
    }
}
