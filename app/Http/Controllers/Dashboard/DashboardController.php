<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Show dashboard based on user role
     */
    public function index()
    {
        $user = Auth::user();

        return match ($user->role) {
            'admin' => redirect()->route('dashboard.admin'),
            'customer' => redirect()->route('dashboard.customer'),
            'teknisi' => redirect()->route('dashboard.teknisi'),
            default => redirect()->route('auth.login'),
        };
    }

    /**
     * Admin Dashboard
     */
    public function adminDashboard()
    {
        return view('dashboard.admin.index', [
            'title' => 'Admin Dashboard',
        ]);
    }

    /**
     * Customer Dashboard
     */
    public function customerDashboard()
    {
        return view('dashboard.customer.index', [
            'title' => 'Customer Dashboard',
        ]);
    }

    /**
     * Teknisi Dashboard
     */
    public function teknisiDashboard()
    {
        return view('dashboard.teknisi.index', [
            'title' => 'Teknisi Dashboard',
        ]);
    }
}