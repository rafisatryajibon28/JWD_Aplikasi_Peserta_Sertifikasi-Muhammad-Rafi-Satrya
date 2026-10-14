<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Skema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilPesertaController extends Controller
{
    public function create()
    {
        $skemas = Skema::orderBy('kode_skema')->get();
        $user = Auth::user(); 

        return view('peserta.daftar', compact('skemas', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'     => ['required', 'string', 'max:100', 'regex:/^[a-zA-Z\s]+$/'],
            'nik'      => ['required', 'string', 'max:16', 'regex:/^[0-9]+$/', 'unique:pesertas,nik'],
            'email'    => 'nullable|email|max:100',
            'no_hp'    => ['nullable', 'string', 'max:12', 'regex:/^[0-9]+$/'],
            'alamat'   => 'nullable|string',
            'skema_id' => 'required|exists:skemas,id',
        ], [
            'nama.required'     => 'Nama lengkap wajib diisi',
            'nama.regex'        => 'Nama hanya boleh berisi huruf dan spasi',
            'nik.required'      => 'NIK wajib diisi',
            'nik.max'           => 'NIK tidak boleh lebih dari 16 karakter', 
            'nik.regex'         => 'NIK hanya boleh berisi angka',
            'nik.unique'        => 'NIK sudah terdaftar',
            'no_hp.max'         => 'Nomor HP tidak boleh lebih dari 12 karakter', 
            'no_hp.regex'       => 'Nomor HP hanya boleh berisi angka',
            'skema_id.required' => 'Skema sertifikasi wajib dipilih',
            'skema_id.exists'   => 'Skema tidak ditemukan',
        ]);

        Peserta::create([
            'user_id'  => Auth::id(), 
            'nama'     => $request->nama,
            'nik'      => $request->nik,
            'email'    => $request->email,
            'no_hp'    => $request->no_hp,
            'alamat'   => $request->alamat,
            'skema_id' => $request->skema_id,
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Pendaftaran berhasil. Data Anda sudah tersimpan.');
    }

    public function edit()
    {
        $profil = Peserta::where('email', Auth::user()->email)->firstOrFail(); 
        $skemas  = Skema::orderBy('kode_skema')->get();

        return view('peserta.profil_edit', compact('profil', 'skemas'));
    }

    public function update(Request $request)
    {
        $peserta = Peserta::where('email', Auth::user()->email)->firstOrFail();

        $request->validate([
            'nama'     => ['required', 'string', 'max:100', 'regex:/^[a-zA-Z\s]+$/'],
            'nik'      => ['required', 'string', 'max:16', 'regex:/^[0-9]+$/', 'unique:pesertas,nik,' . $peserta->id],
            'email'    => 'nullable|email|max:100',
            'no_hp'    => ['nullable', 'string', 'max:12', 'regex:/^[0-9]+$/'],
            'alamat'   => 'nullable|string',
            'skema_id' => 'required|exists:skemas,id',
        ], [
            'nama.required'     => 'Nama lengkap wajib diisi',
            'nama.regex'        => 'Nama hanya boleh berisi huruf dan spasi',
            'nik.required'      => 'NIK wajib diisi',
            'nik.max'           => 'NIK tidak boleh lebih dari 16 karakter', 
            'nik.regex'         => 'NIK hanya boleh berisi angka',
            'nik.unique'        => 'NIK sudah terdaftar',
            'no_hp.max'         => 'Nomor HP tidak boleh lebih dari 12 karakter', 
            'no_hp.regex'       => 'Nomor HP hanya boleh berisi angka',
            'skema_id.required' => 'Skema sertifikasi wajib dipilih',
        ]);

        $peserta->update($request->only([
            'nama', 'nik', 'email', 'no_hp', 'alamat', 'skema_id'
        ]));

        return redirect()->route('dashboard')
            ->with('success', 'Data peserta berhasil diubah.');
    }
}