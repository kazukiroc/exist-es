<?php

namespace App\Http\Controllers;

use App\Models\Characteristic;
use App\Models\Intelligence;
use App\Models\Knowledge;
use App\Models\Reccomendation;
use App\Models\Study;
use Illuminate\Http\Request;

class KnowledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.knowledge.index',[
            'intelligences' => Intelligence::all(),
            'characters' => Characteristic::all(),
            'knowledges' => Knowledge::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        $characteristics = Characteristic::get();
//        $intelligences = Intelligence::get();
//        $intel = Intelligence::whereNotIn('id', Knowledge::all()->pluck('id'))->get();
//        return dd($intel);
//        return view('dashboard.knowledge.create', [
//            'intelligences' => Intelligence::whereNotIn('id', Knowledge::all()->pluck('id')),
//            'characters' => Characteristic::all(),
//            'knowledge' => Knowledge::all()
//        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $validatedData = $request->validate([
//            'ciri' => 'required',
//            'jenis' => 'required'
//        ]);
//
//        Knowledge::create($validatedData);
//
//        return redirect('/knowledge')->with('success', 'Data berhasil ditambahkan!');


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
        $intelligence = Intelligence::findOrFail($id);
        return view('dashboard.knowledge.edit', [
            'intelligences' => Intelligence::all(),
            'intelligence' => $intelligence,
            'characters' => Characteristic::all(),
            'knowledges' => Knowledge::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $intelligence = Intelligence::findOrFail($id);
        $intelligence->characters()->sync($request->character);

        return redirect(route('knowledge.index'))->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $intelligence = Intelligence::findOrFail($id);
        $intelligence->characters()->detach();

        return redirect(route('knowledge.index'))->with('success', 'Data berhasil dihapus!');
    }
}
