@extends('layouts.app')

@section('title', 'Customer Dashboard - Layanan INET')

@section('content')
<div class="sidebar">
    <div class="logo">
        <i class="ti ti-wifi"></i> INET
    </div>
    <nav class="nav flex-column">
        <a href="{{ route('customer.dashboard') }}" class="nav-link active">
            <i class="ti ti-dashboard me-2"></i> Dashboard
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-calendar-check me-2"></i> Booking Baru
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-receipt me-2"></i> Invoice
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-alert-circle me-2"></i> Komplain
        </a>
        <a href="#" class="nav-link">
            <i class="ti ti-history me-2"></i> Riwayat
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
            <h1>Dashboard Pelanggan</h1>
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
                        <i class="ti ti-calendar-check"></i>
                    </div>
                    <h6>Total Booking</h6>
                    <h3>{{ $stats['total_bookings'] }}</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-card-icon secondary">
                        <i class="ti ti-clock"></i>
                    </div>
                    <h6>Menunggu Persetujuan</h6>
                    <h3>{{ $stats['pending_bookings'] }}</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-card-icon success">
                        <i class="ti ti-check"></i>
                    </div>
                    <h6>Selesai</h6>
                    <h3>{{ $stats['completed_bookings'] }}</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stat-card">
                    <div class="stat-card-icon danger">
                        <i class="ti ti-receipt"></i>
                    </div>
                    <h6>Belum Dibayar</h6>
                    <h3>{{ $stats['unpaid_invoices'] }}</h3>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Booking Terbaru</h5>
                        <a href="#" class="btn btn-sm btn-primary">
                            <i class="ti ti-plus me-2"></i> Booking Baru
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No. Booking</th>
                                    <th>Paket</th>
                                    <th>Tanggal</th>
                                    <th>Teknisi</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($recent_bookings as $booking)
                                    <tr>
                                        <td>#{{ $booking->id }}</td>
                                        <td>{{ $booking->paket->nama_paket }}</td>
                                        <td>{{ $booking->tanggal_booking->format('d M Y') }}</td>
                                        <td>
                                            @if ($booking->bookingTeknisis->first())
                                                {{ $booking->bookingTeknisis->first()->teknisi->user->name }}
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
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
                                        <td colspan="6" class="text-center text-muted">Belum ada booking</td>
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
