<?php

namespace App\Http\Controllers;

use App\Models\Consul;
use App\Models\ConsulMap;
use App\Models\Intelligence;
use App\Models\Knowledge;
use App\Models\Reccomendation;
use App\Models\Result;
use App\Models\Study;
use App\Models\UserConsul;
use Illuminate\Http\Request;
use App\Models\Characteristic;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.consultation.user.index', [
            'consuls' => Consul::all(),
            'user_consuls' => UserConsul::all(),
            'users' => User::all(),
            'results' => Result::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        $user_consul = UserConsul::findOrFail($id);
        $consul = Consul::findOrFail($user_consul->id_consul);
//        $consul->characters()->detach();
        $consul->characterResults()->detach();
        $user_consul->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
    public function list()
    {
        return view('dashboard.consultation.user.list', [
            'consuls' => Consul::all(),
            'user_consuls' => UserConsul::all(),
            'users' => User::all()
        ]);
    }
    public function addList(Request $request)
    {
        UserConsul::create([
            'id_user'=> $request->id_user,
            'id_consul' => $request->id_consul
        ]);
        return redirect(route('my-consultation.list-index'))->with('success', 'Data berhasil ditambahkan!');
    }
    public function isiKonsul(string $id)
    {
        $consul = Consul::findOrFail($id);

        return view('dashboard.consultation.user.fill', [
            'characters' => Characteristic::all(),
            'consul_maps' => ConsulMap::where('id_consul', $id),
            'consul' => $consul,
            'results' => Result::all()
        ]);
    }
    public function simpanKonsul(Request $request, $id)
    {
        $consul = Consul::findOrFail($id);
        $data = [];
        $num = 0;
//        $consul->characters
        $skors = $request->skor;
        if (!empty($skors)) {
            foreach ($consul->characters as $character) {
                $data[$character->id] = ['id_user' => auth()->user()->id, 'skor' =>$skors[$num]];
                $num += 1;
            }
            $consul->characterResults()->sync($data);
            $num = 0;
            $data = [];
        }
//        $consul->characterResults()->sync($request->skor);
        return redirect(route('my-consultation.index'))->with('success', 'Anda berhasil mengisi konsultasi!');
    }
    public function hasilKonsul($id)
    {
        $consul = Consul::findOrFail($id);
        $user = User::find(auth()->user()->id);
        $knowledges = Knowledge::all();

        $final = DB::table('knowledge')
            ->join('results', 'knowledge.id_character', '=', 'results.id_character')
//            ->join('orders', 'users.id', '=', 'orders.user_id')
//            ->join('reccomendations', 'knowledge.id_intelligence', '=', 'reccomendations.id_intelligence')
            ->where('results.id_consul', '=', $id)
            ->select('knowledge.id_intelligence', 'results.id_consul', 'results.id_user', DB::raw('SUM(skor) as total_skor'))
            ->groupBy('id_intelligence')
//            ->having('total_skor', '>', '')
            ->get();
        return dd($final);
        return view('dashboard.consultation.user.hasil', [
            'results' => $final->where('skor', max($final->skor))->get(), //??
            'intelligences' => Intelligence::all(),
            'studies' => Study::all(),
            'reccomendations' => Reccomendation::all(),
            'consul' => $consul,
            'user' => $user
        ]);


//        return redirect(route('my-consultation.hasil'))->with('success', 'Anda berhasil mengisi konsultasi!');
    }
}
