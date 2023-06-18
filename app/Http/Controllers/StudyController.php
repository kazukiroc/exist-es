<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studies = Study::get();
        // $studies = DB::table('studies')->paginate(7);

        return view('dashboard.study.index', compact('studies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.study.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'keterangan' => 'required'
        ]);

        Study::create($validatedData);

        return redirect('/study')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Study $studies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $studies = Study::findOrFail($id);

        return view('dashboard.study.edit', compact('studies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'keterangan' => 'required'
        ]);

        $studies = Study::findOrFail($id);

        $studies->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/study')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $studies = Study::findOrFail($id);

        $studies->delete();

        return redirect('/study')->with('success', 'Data berhasil dihapus!');
    }
}
