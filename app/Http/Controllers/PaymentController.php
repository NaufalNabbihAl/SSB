<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function indexAdmin()
    {
        $payments = Payment::all();
        return view('admin.payment', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'nomor_psad' => 'required|string|max:255',
            'bukti_pembayaran' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'nullable|string|max:500',
        ]);

        // Simpan file bukti pembayaran 
        $buktiPembayaran = null;
        if ($request->hasFile('bukti_pembayaran')) {
            $buktiPembayaran = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
        }

        // Simpan data pembayaran
        Payment::create([
            'user_id' => Auth::id(),
            'nama_siswa' => $request->nama_siswa,
            'nomor_psad' => $request->nomor_psad,
            'bukti_pembayaran' => $buktiPembayaran,
            'deskripsi' => $request->deskripsi,
        ]);

        // Redirect ke halaman sukses atau halaman lain yang diinginkan
        return redirect()->route('payment.create')->with('success', 'Pembayaran berhasil disimpan');
    
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
    public function destroy(string $id)
    {
        //delete data pembayaran
        $payment = Payment::find($id);
        $payment->delete();
        return redirect()->route('admin.payment')->with('success','Data Berhasil Dihapus');
    }
}
