<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game; // Import Model Game
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Tampilkan semua daftar game
     */
    public function index()
    {
        $games = Game::latest()->get();
        return view('admin.games.index', compact('games'));
    }

    /**
     * Form tambah game (opsional jika pakai modal bisa dikosongkan)
     */
    public function create()
    {
        return view('admin.games.create');
    }

    /**
     * Simpan game baru ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_game' => 'required|string|max:255',
            'kategori'  => 'required|string',
            'harga'     => 'required|numeric',
        ]);

        Game::create([
            'nama_game' => $request->nama_game,
            'kategori'  => $request->kategori,
            'harga'     => $request->harga,
            'status'    => 'active',
        ]);

        return redirect()->route('admin.games.index')->with('success', 'Game berhasil ditambahkan!');
    }

    /**
     * Tampilkan detail game (biasanya jarang dipakai untuk CRUD sederhana)
     */
    public function show(string $id)
    {
        $game = Game::findOrFail($id);
        return view('admin.games.show', compact('game'));
    }

    /**
     * Form edit game
     */
    public function edit(string $id)
    {
        $game = Game::findOrFail($id);
        return view('admin.games.edit', compact('game'));
    }

    /**
     * Update data game di database
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_game' => 'required|string|max:255',
            'kategori'  => 'required|string',
            'harga'     => 'required|numeric',
        ]);

        $game = Game::findOrFail($id);
        $game->update($request->all());

        return redirect()->route('admin.games.index')->with('success', 'Data game berhasil diperbarui!');
    }

    /**
     * Hapus game dari database
     */
    public function destroy(string $id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect()->route('admin.games.index')->with('success', 'Game berhasil dihapus!');
    }
}