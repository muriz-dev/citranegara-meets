<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Pengunjung;
use App\Http\Requests\StorePengunjungRequest;
use App\Http\Requests\UpdatePengunjungRequest;
use Illuminate\Http\Request;
use App\Exports\PengunjungExport;
use Maatwebsite\Excel\Facades\Excel;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($acara)
    {
        return view("pages.pengujung.pengunjung", [
            'acara' => Acara::where('kode_acara', $acara)->first(),
            'pengunjung' => Pengunjung::where('kode_acara', $acara)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($acara)
    {
        return view('pages.pengujung.crt_pengunjung', [
            'acara' => $acara
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePengunjungRequest $request, $acara)
    {
        $validatedData = $request->validate([
            'kode_acara' => ['required'],
            'nama_lengkap' => ['required'],
            'telepon' => ['required'],
            'email' => ['required', 'email'],
            'profil' => ['required'],
            'status' => ['required'],
            'asal' => ['required'],
        ]);

        Pengunjung::create($validatedData);

        return redirect('/acara/'.$acara.'/pengunjung')->with('success','Data pengunjung berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengunjung $pengunjung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($acara, Pengunjung $pengunjung)
    {
        return view('pages.pengujung.upt_pengunjung', [
            'acara' => $acara,
            'pengunjung' => $pengunjung
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengunjungRequest $request, $acara, Pengunjung $pengunjung)
    {
        $validatedData = $request->validate([
            'kode_acara' => ['required'],
            'nama_lengkap' => ['required'],
            'telepon' => ['required'],
            'email' => ['required', 'email'],
            'profil' => ['required'],
            'status' => ['required'],
            'asal' => ['required'],
        ]);

        $pengunjung->update($validatedData);

        return redirect('/acara/'.$acara.'/pengunjung')->with('success','Data pengunjung berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($acara, Pengunjung $pengunjung)
    {
        $pengunjung->delete();

        return redirect('/acara/'.$acara.'/pengunjung')->with('success','Data pengunjung berhasil dihapus');
    }

    public function register($acara)
    {
        return view("pages.registrasi.pengunjung.form", [
            'acara' => Acara::where('kode_acara', $acara)->first()
        ]);
    }

    public function registration($acara, Request $request)
    {
        $validatedData = $request->validate([
            'kode_acara' => ['required'],
            'nama_lengkap' => ['required'],
            'telepon' => ['required'],
            'email' => ['required', 'email'],
            'profil' => ['required'],
            'status' => ['required'],
            'asal' => ['required'],
        ]);

        Pengunjung::create($validatedData);

        return redirect('/acara/'. $acara .'/registrasi/success')->with('success','Selamat kamu telah terdafar di acara');
    }

    public function export($acara){
        return (new PengunjungExport)->selectAcara($acara)->download('Laporan Peserta Rapat SMK Citra Negara.xlsx');
    }
} 
