<?php

namespace App\Http\Controllers;

use App\Models\Consul;
use Illuminate\Http\Request;

class ExpertConsultationController extends Controller
{
    public function index()
    {
        return view('dashboard.consultation.expert.index', [
            'consuls' => Consul::where('id_expert', auth()->user()->id)->latest()->get()
        ]);
    }
}
