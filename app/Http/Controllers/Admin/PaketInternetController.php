<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaketInternet;
use Illuminate\Http\Request;

class PaketInternetController extends Controller
{
    /**
     * Display list of paket internet
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $pakets = PaketInternet::when($search, function ($query, $search) {
            $query->where('nama_paket', 'like', "%{$search}%")
                  ->orWhere('deskripsi', 'like', "%{$search}%");
        })
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('admin.paket-internet.index', compact('pakets', 'search'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.paket-internet.create');
    }

    /**
     * Store paket internet
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_paket' => 'required|string|max:255',
            'kecepatan' => 'required|integer|min:1|max:10000',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
            'status' => 'boolean',
        ], [
            'nama_paket.required' => 'Nama paket harus diisi',
            'kecepatan.required' => 'Kecepatan harus diisi',
            'kecepatan.integer' => 'Kecepatan harus berupa angka',
            'harga.required' => 'Harga harus diisi',
            'harga.numeric' => 'Harga harus berupa angka',
        ]);

        PaketInternet::create($validated);

        return redirect()->route('admin.paket-internet.index')
                       ->with('success', 'Paket internet berhasil ditambahkan');
    }

    /**
     * Show edit form
     */
    public function edit(PaketInternet $paketInternet)
    {
        return view('admin.paket-internet.edit', compact('paketInternet'));
    }

    /**
     * Update paket internet
     */
    public function update(Request $request, PaketInternet $paketInternet)
    {
        $validated = $request->validate([
            'nama_paket' => 'required|string|max:255',
            'kecepatan' => 'required|integer|min:1|max:10000',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
            'status' => 'boolean',
        ]);

        $paketInternet->update($validated);

        return redirect()->route('admin.paket-internet.index')
                       ->with('success', 'Paket internet berhasil diperbarui');
    }

    /**
     * Delete paket internet
     */
    public function destroy(PaketInternet $paketInternet)
    {
        $paketInternet->delete();

        return redirect()->route('admin.paket-internet.index')
                       ->with('success', 'Paket internet berhasil dihapus');
    }
}
