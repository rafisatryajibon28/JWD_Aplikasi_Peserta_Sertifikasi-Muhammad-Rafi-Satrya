@extends('layouts.app')

@section('title', 'Dashboard Peserta')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">Dashboard Peserta</h4>
    <span class="text-muted">Halo, {{ $user->name }}</span>
</div>

@if(!$profil)
    <div class="card mb-4">
        <div class="card-body text-center py-5">
            <h5 class="mb-2">Anda belum mendaftar skema</h5>
            <p class="text-muted mb-3">
                Silakan daftar skema sertifikasi yang ingin diikuti.
                Data yang Anda kirim akan muncul di dashboard admin.
            </p>
            <a href="{{ route('profil.create') }}" class="btn btn-primary">Daftar Skema</a>
        </div>
    </div>
@else
    <div class="alert alert-success">
        Anda sudah terdaftar sebagai peserta.
    </div>

    <div class="card mb-3">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <strong>Data Saya</strong>
            <a href="{{ route('profil.edit') }}" class="btn btn-warning btn-sm">Edit Data</a>
        </div>
        <div class="card-body">
            <table class="table table-borderless mb-0">
                <tr>
                    <td width="180" class="text-muted">Nama Lengkap</td>
                    <td class="fw-semibold">{{ $profil->nama }}</td>
                </tr>
                <tr>
                    <td class="text-muted">NIK</td>
                    <td>{{ $profil->nik }}</td>
                </tr>
                <tr>
                    <td class="text-muted">Email</td>
                    <td>{{ $profil->email ?? '-' }}</td>
                </tr>
                <tr>
                    <td class="text-muted">No. HP</td>
                    <td>{{ $profil->no_hp ?? '-' }}</td>
                </tr>
                <tr>
                    <td class="text-muted">Alamat</td>
                    <td>{{ $profil->alamat ?? '-' }}</td>
                </tr>
                <tr>
                    <td class="text-muted">Skema</td>
                    <td>
                        @if($profil->skema)
                            {{ $profil->skema->kode_skema }} - {{ $profil->skema->nama_skema }}
                        @else
                            -
                        @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endif
@endsection
