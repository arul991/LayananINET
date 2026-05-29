<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $teknisi = Auth::user()->teknisi;
        
        $stats = [
            'total_tugas' => $teknisi->bookingTeknisis()->count(),
            'tugas_assigned' => $teknisi->bookingTeknisis()->where('status', 'assigned')->count(),
            'tugas_progress' => $teknisi->bookingTeknisis()->where('status', 'on_progress')->count(),
            'tugas_selesai' => $teknisi->bookingTeknisis()->where('status', 'selesai')->count(),
        ];

        $recent_tasks = $teknisi->bookingTeknisis()
            ->with('booking.customer.user', 'booking.paket')
            ->latest()
            ->limit(10)
            ->get();

        return view('teknisi.dashboard', compact('stats', 'recent_tasks', 'teknisi'));
    }
}
