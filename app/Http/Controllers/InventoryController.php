<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    // Menampilkan daftar semua inventory
    public function index()
    {
        $inventories = Inventory::all(); // Ambil semua data inventory
        return view('inventories.index', compact('inventories')); // Tampilkan ke view index.blade.php
    }

    // Menampilkan form untuk menambahkan inventory baru
    public function create()
    {
        return view('inventories.create'); // Tampikan form tambah data inventory
    }

    // Menyimpan inventory baru ke database
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        // Membuat data inventory baru
        Inventory::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        // Redirect ke halaman index setelah data disimpan
        return redirect()->route('inventories.index')->with('success', 'Inventory added successfully!');
    }

    // Menampilkan form untuk mengedit inventory tertentu
    public function edit($id)
    {
        $inventory = Inventory::findOrFail($id); // Cari inventory berdasarkan ID
        return view('inventories.edit', compact('inventory')); // Tampilkan form edit dengan data inventory
    }

    // Memperbarui data inventory
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        // Cari inventory berdasarkan ID dan perbarui data
        $inventory = Inventory::findOrFail($id);
        $inventory->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        // Redirect ke halaman index setelah data diperbarui
        return redirect()->route('inventories.index')->with('success', 'Inventory updated successfully!');
    }

    // Menghapus data inventory
    public function destroy($id)
    {
        // Cari dan hapus inventory berdasarkan ID
        $inventory = Inventory::findOrFail($id);
        $inventory->delete();

        // Redirect ke halaman index setelah data dihapus
        return redirect()->route('inventories.index')->with('success', 'Inventory deleted successfully!');
    }
}
