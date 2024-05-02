<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Http\Requests\StoreAcaraRequest;
use App\Http\Requests\UpdateAcaraRequest;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.acara.acara", [
            'acaras' => Acara::paginate(4),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.acara.crt_acara");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAcaraRequest $request)
    {
        $validatedData = $request->validate([
            'kode_acara' => ['required', 'max:4', 'unique:acara,kode_acara'],
            'nama_acara' => ['required'],
            'lokasi' => ['required'],
            'alamat' => ['required'],
            'tanggal_mulai' => ['required', 'date'],
            'tanggal_selesai' => ['required', 'date'],
            'waktu_mulai' => ['required'],
            'waktu_selesai' => ['required'],
        ]);

        if ($request->thumbnail) {
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('thumbnail-acara');
        }

        $link = url('/acara/'.$request->kode_acara.'/registrasi');

        $QRName = $request->kode_acara.'.png';
        $QRCode = QrCode::format('png')->merge('/public/img/cn.png', 0.25)->errorCorrection('H')->size(400)->generate($link);

        if(Storage::disk()->put('acara-qrcode/'.$QRName, $QRCode)) {
            $validatedData['qrcode'] = 'acara-qrcode/'.$QRName;
        }

        Acara::create($validatedData);

        return redirect('/acara')->with('createSuccess','Acara berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Acara $acara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acara $acara)
    {
        return view("pages.acara.upt_acara", [
            'acara' => $acara
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAcaraRequest $request, Acara $acara)
    {
        $validatedData = $request->validate([
            'kode_acara' => ['required', 'max:4', 'unique:acara,kode_acara,'.$acara->kode_acara.',kode_acara'],
            'nama_acara' => ['required'],
            'lokasi' => ['required'],
            'alamat' => ['required'],
            'tanggal_mulai' => ['required', 'date'],
            'tanggal_selesai' => ['required', 'date'],
            'waktu_mulai' => ['required'],
            'waktu_selesai' => ['required'],
        ]);

        if ($request->thumbnail) {
            if ($acara->thumbnail) {
                Storage::delete($acara->thumbnail);
            }

            $validatedData['thumbnail'] = $request->file('thumbnail')->store('thumbnail-acara');

        }

        $acara->update($validatedData);

        return redirect('/acara')->with('updateSuccess','Acara berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acara $acara)
    {
        if ($acara->thumbnail != '') {
            Storage::delete($acara->thumbnail);
        }

        if(Storage::delete($acara->qrcode)){
            $acara->delete();
        }

        return redirect('/acara')->with('deleteSuccess', 'Acara berhasil dihapus');
    }

    public function download(Acara $acara){
        return Storage::download($acara->qrcode);
    }
}
