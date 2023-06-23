<?php

namespace App\Http\Controllers;

use App\Models\Intelligence;
use App\ModelsReccomendation;
use App\Models\Study;
use App\Models\Reccomendation;
use Illuminate\Http\Request;

class ReccomendationController extends Controller
{
    public function index()
    {
        return view('dashboard.reccomendation.index',[
            'intelligences' => Intelligence::all(),
            'studies' => Study::all(),
            'reccomendations' => Reccomendation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $intel = Intelligence::whereNotIn('id', Reccomendation::all()->pluck('id'))->get();
        return dd($intel);
        return view('dashboard.reccomendation.create', [
            'intelligences' => Intelligence::whereNotIn('id', Reccomendation::all()->pluck('id')),
            'studies' => Study::all(),
            'reccomendations' => Reccomendation::all()
        ]);
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

        Reccomendation::create($validatedData);

        return redirect(route('intelligence.index'))->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reccomendation $intelligences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $intelligence = Intelligence::findOrFail($id);
        return view('dashboard.reccomendation.edit', [
            'intelligences' => Intelligence::all(),
            'intelligence' => $intelligence,
            'studies' => Study::all(),
            'reccomendations' => Reccomendation::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $intelligence = Intelligence::findOrFail($id);
        $intelligence->studies()->sync($request->prodi);

        return redirect(route('rekomendasi.index'))->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $intelligence = Intelligence::findOrFail($id);
        $intelligence->studies()->detach();

        return redirect(route('rekomendasi.index'))->with('success', 'Data berhasil dihapus!');
    }
}
