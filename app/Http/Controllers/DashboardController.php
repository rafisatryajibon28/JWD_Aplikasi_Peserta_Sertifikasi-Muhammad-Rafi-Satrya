<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Skema;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->isPeserta()) {
            $profil = Peserta::with('skema')
                ->where('user_id', $user->id)
                ->first();

            $skemas = Skema::orderBy('kode_skema')->get();

            return view('dashboard_peserta', compact('user', 'profil', 'skemas'));
        }

        $totalPeserta = Peserta::count();
        $totalSkema   = Skema::count();
        $totalUser    = User::where('role', 'peserta')->count();

        $pesertaTerbaru = Peserta::with('skema')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('dashboard', compact(
            'user',
            'totalPeserta',
            'totalSkema',
            'pesertaTerbaru'
        ));
    }
}
