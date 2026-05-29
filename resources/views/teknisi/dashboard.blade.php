@extends('layouts.app')

@section('title', 'Teknisi Dashboard - Layanan INET')

@section('content')
<div class="sidebar">
    <div class="logo">
        <i class="ti ti-wifi"></i> INET
    </div>
    <nav class="nav flex-column">
        <a href="{{ route('teknisi.dashboard') }}" class="nav-link active">
            <i class="ti ti-dashboard me-2"></i> Dashboard
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-clipboard-check me-2"></i> Tugas Saya
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-history me-2"></i> Riwayat Pekerjaan
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-star me-2"></i> Rating
        </a>
        <hr class="my-3" style="background-color: rgba(255, 255, 255, 0.1);">
        <a href="{{ route('logout') }}" class="nav-link" 
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="ti ti-logout me-2"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </nav>
</div>

<div class="navbar">
    <div class="ms-auto d-flex align-items-center gap-3">
        <div class="dropdown">
            <button class="btn btn-sm btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                <i class="ti ti-user me-2"></i> {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="container-xl">
        <div class="page-header">
            <h1>Dashboard Teknisi</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="ti ti-check me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-card-icon primary">
                        <i class="ti ti-clipboard-check"></i>
                    </div>
                    <h6>Total Tugas</h6>
                    <h3>{{ $stats['total_tugas'] }}</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-card-icon secondary">
                        <i class="ti ti-alert-circle"></i>
                    </div>
                    <h6>Ditugaskan</h6>
                    <h3>{{ $stats['tugas_assigned'] }}</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-card-icon danger">
                        <i class="ti ti-loader"></i>
                    </div>
                    <h6>Dalam Proses</h6>
                    <h3>{{ $stats['tugas_progress'] }}</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-card-icon success">
                        <i class="ti ti-check"></i>
                    </div>
                    <h6>Selesai</h6>
                    <h3>{{ $stats['tugas_selesai'] }}</h3>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Tugas Terbaru</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No. Booking</th>
                                    <th>Pelanggan</th>
                                    <th>Alamat Pemasangan</th>
                                    <th>Paket</th>
                                    <th>Status Tugas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($recent_tasks as $task)
                                    <tr>
                                        <td>#{{ $task->booking->id }}</td>
                                        <td>{{ $task->booking->customer->user->name }}</td>
                                        <td>{{ Str::limit($task->booking->alamat_pasang, 30) }}</td>
                                        <td>{{ $task->booking->paket->nama_paket }}</td>
                                        <td>
                                            <span class="badge badge-{{ strtolower(str_replace('_', '-', $task->status)) }}">
                                                {{ ucfirst(str_replace('_', ' ', $task->status)) }}
                                            </span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Detail</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">Belum ada tugas</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2024 Layanan INET. Hak Cipta Dilindungi.</p>
        </div>
    </div>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endsection
