<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Characteristic;
use App\Models\Consul;
use App\Models\Intelligence;
use App\Models\Study;


class DashboardController extends Controller
{
    public function index()
    {
        // $characteristics = Characteristic::get();
        return view('dashboard.index');
    }
}
