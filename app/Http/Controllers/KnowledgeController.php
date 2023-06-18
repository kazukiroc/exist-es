<?php

namespace App\Http\Controllers;

use App\Models\Characteristic;
use App\Models\Intelligence;
use App\Models\Knowledge;
use Illuminate\Http\Request;

class KnowledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $knowledge = Knowledge::get();

        return view('dashboard.knowledge.index', compact('knowledge'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $characteristics = Characteristic::get();
        $intelligences = Intelligence::get();

        return view('dashboard.knowledge.create', compact('characteristics', 'intelligences'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ciri' => 'required',
            'jenis' => 'required'
        ]);

        Knowledge::create($validatedData);

        return redirect('/knowledge')->with('success', 'Data berhasil ditambahkan!');
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
        $characteristics = Characteristic::get();
        $intelligences = Intelligence::get();

        $knowledge = Knowledge::findOrFail($id);

        return view('dashboard.knowledge.edit', compact('knowledge', 'characteristics', 'intelligences'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'ciri' => 'required',
            'jenis' => 'required'
        ]);

        $knowledge = Knowledge::findOrFail($id);

        $knowledge->update([
            'ciri' => $request->ciri,
            'jenis' => $request->jenis
        ]);

        return redirect('/knowledge')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $knowledge = Knowledge::findOrFail($id);

        $knowledge->delete();

        return redirect('/knowledge')->with('success', 'Data berhasil dihapus!');
    }
}
