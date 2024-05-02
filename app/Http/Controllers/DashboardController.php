<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Pengunjung;
use App\Models\Tamu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(auth()->user()->role == "admin"){
            $pengunjung = Pengunjung::whereYear('created_at', date('Y'))->get();
    
            return view("pages.dashboard", [
                'acara' => Acara::all(),
                'pengunjung' => $pengunjung,
                'pengunjungByMonth' => $pengunjung->groupBy(function($pengunjung){
                    return $pengunjung->created_at->format('M');
                }),
                'pengunjungByStatus' => $pengunjung->groupBy(function($pengunjung){
                    return $pengunjung->status;
                })
            ]);
        } elseif (auth()->user()->role == "user") {
            return redirect('/acara');
        } else{
            return abort('403');
        }
    }
}
