<?php

namespace App\Http\Controllers;

use App\Models\Characteristic;
use App\Models\Consul;
use App\Models\ConsulMap;
use App\Models\Intelligence;
use App\Models\Reccomendation;
use App\Models\Study;
use Illuminate\Http\Request;

class ExpertConsultationController extends Controller
{
    public function index()
    {
        return view('dashboard.consultation.expert.index', [
            'consuls' => Consul::where('id_expert', auth()->user()->id)->latest()->get(),
            'consul_maps' => ConsulMap::all()
        ]);
    }
    public function create()
    {
        return view('dashboard.consultation.expert.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        Consul::create([
            'name' => $request->name,
            'id_expert' => $request->id_expert
        ]);

        return redirect(route('exp-consultation.index'))->with('success', 'Data berhasil ditambahkan!');
    }
    public function edit(string $id)
    {
        $consul = Consul::findOrFail($id);
        return view('dashboard.consultation.expert.edit', [
            'consul' => $consul
        ]);
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);

        $consul = Consul::findOrFail($id);

        $consul->update([
            'name' => $request->name
        ]);

        return redirect(route('exp-consultation.index'))->with('success', 'Data berhasil diubah!');
    }
    public function tambahPertanyaan(string $id)
    {
        $consul = Consul::findOrFail($id);
        return view('dashboard.consultation.expert.pertanyaan', [
            'pertanyaans' => Characteristic::all(),
            'consul' => $consul,
            'characters' => Characteristic::all(),
            'consul_maps' => ConsulMap::all()
        ]);
    }
    public function simpanPertanyaan(Request $request, $id)
    {
        $consul = Consul::findOrFail($id);
        $consul->characters()->sync($request->character);

        return redirect(route('exp-consultation.index'))->with('success', 'Data berhasil disimpan!');
    }
    public function destroy($id)
    {
        $consul = Consul::findOrFail($id);
        $consul->characters()->detach();
        $consul->delete();

        return redirect(route('exp-consultation.index'))->with('success', 'Data berhasil dihapus!');
    }
}
