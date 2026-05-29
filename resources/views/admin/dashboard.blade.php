@extends('layouts.app')

@section('title', 'Admin Dashboard - Layanan INET')

@section('content')
<div class="sidebar">
    <div class="logo">
        <i class="ti ti-wifi"></i> INET
    </div>
    <nav class="nav flex-column">
        <a href="{{ route('admin.dashboard') }}" class="nav-link active">
            <i class="ti ti-dashboard me-2"></i> Dashboard
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-users me-2"></i> Pelanggan
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-tools me-2"></i> Teknisi
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-package me-2"></i> Paket Internet
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-map-pin me-2"></i> Area Jangkauan
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-calendar-check me-2"></i> Booking
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-receipt me-2"></i> Transaksi
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-chart-bar me-2"></i> Laporan
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
            <h1>Dashboard Admin</h1>
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
                        <i class="ti ti-users"></i>
                    </div>
                    <h6>Total Pelanggan</h6>
                    <h3>{{ $stats['total_customers'] }}</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-card-icon secondary">
                        <i class="ti ti-tools"></i>
                    </div>
                    <h6>Total Teknisi</h6>
                    <h3>{{ $stats['total_teknisi'] }}</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-card-icon success">
                        <i class="ti ti-calendar-check"></i>
                    </div>
                    <h6>Total Booking</h6>
                    <h3>{{ $stats['total_bookings'] }}</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-card-icon danger">
                        <i class="ti ti-cash"></i>
                    </div>
                    <h6>Pendapatan Bulan Ini</h6>
                    <h3>Rp {{ number_format($stats['revenue_this_month'], 0, ',', '.') }}</h3>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Status Booking</h5>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-md-3">
                                <div style="padding: 20px;">
                                    <div style="font-size: 32px; font-weight: 700; color: #eab308;">
                                        {{ $stats['bookings_pending'] }}
                                    </div>
                                    <p class="text-muted">Pending</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div style="padding: 20px;">
                                    <div style="font-size: 32px; font-weight: 700; color: #0ea5e9;">
                                        {{ $stats['bookings_approved'] }}
                                    </div>
                                    <p class="text-muted">Disetujui</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div style="padding: 20px;">
                                    <div style="font-size: 32px; font-weight: 700; color: #f97316;">
                                        {{ $stats['bookings_assigned'] }}
                                    </div>
                                    <p class="text-muted">Ditugaskan</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div style="padding: 20px;">
                                    <div style="font-size: 32px; font-weight: 700; color: #16a34a;">
                                        {{ $stats['bookings_completed'] }}
                                    </div>
                                    <p class="text-muted">Selesai</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Booking Terbaru</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No. Booking</th>
                                    <th>Pelanggan</th>
                                    <th>Paket</th>
                                    <th>Tanggal Booking</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($recent_bookings as $booking)
                                    <tr>
                                        <td>#{{ $booking->id }}</td>
                                        <td>{{ $booking->customer->user->name }}</td>
                                        <td>{{ $booking->paket->nama_paket }}</td>
                                        <td>{{ $booking->tanggal_booking->format('d M Y') }}</td>
                                        <td>
                                            <span class="badge badge-{{ strtolower(str_replace('_', '-', $booking->status)) }}">
                                                {{ ucfirst(str_replace('_', ' ', $booking->status)) }}
                                            </span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Detail</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">Tidak ada data</td>
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
