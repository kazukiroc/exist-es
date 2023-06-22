<?php

namespace App\Http\Controllers;

use App\Models\Intelligence;
use App\Models\Study;
use Illuminate\Http\Request;

class IntelligenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $intelligences = Intelligence::get();

        return view('dashboard.intelligence.index', compact('intelligences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $studies = Study::get();

        return view('dashboard.intelligence.create', compact('studies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode' => 'required',
            'jenis' => 'required',
//            'prodi' => 'required'
        ]);

//        $prodi = $validatedData['prodi'];
//        $validatedData['prodi'] = implode(',', $prodi);

        Intelligence::create($validatedData);

        return redirect(route('intelligence.index'))->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Intelligence $intelligences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $studies = Study::get();

        $intelligences = Intelligence::findOrFail($id);

        return view('dashboard.intelligence.edit', compact('intelligences', 'studies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jenis' => 'required',
//            'prodi' => 'required'
        ]);


        $intelligences = Intelligence::findOrFail($id);

        $intelligences->update([
            'jenis' => $request->jenis,
//            'prodi' => $request->prodi
        ]);

        return redirect(route('intelligence.index'))->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $intelligences = Intelligence::findOrFail($id);

        $intelligences->delete();

        return redirect(route('intelligence.index'))->with('success', 'Data berhasil dihapus!');
    }
}
