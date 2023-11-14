<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('backend.player.index', compact('players'));
    }

    public function create()
    {
        return view('backend.player.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'ign' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'instagram' => 'required|string',
            'facebook' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('players', 'public');
            $data['photo'] = $photoPath;
        }

        Player::create($data);

        return redirect()->route('players.index')->with('success', 'Player created successfully.');
    }

    public function show($id)
    {
        $player = Player::findOrFail($id);
        return view('backend.player.show', compact('player'));
    }

    public function edit($id)
    {
        $player = Player::findOrFail($id);
        return view('backend.player.edit', compact('player'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'ign' => 'required|string',
            'instagram' => 'required|string',
            'facebook' => 'required|string',
        ]);

        $player = Player::findOrFail($id);

        if ($request->hasFile('photo')) {
            // Store the new photo in the 'public/players' directory
            $newPhotoPath = $request->file('photo')->store('players', 'public');

            // Delete the old photo if exists
            if ($player->photo) {
                $oldPhotoPath = storage_path('app/public/' . $player->photo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath);
                }
            }

            $player->photo = $newPhotoPath;
        }

        $player->update([
            'name' => $request->input('name'),
            'ign' => $request->input('ign'),
            'instagram' => $request->input('instagram'),
            'facebook' => $request->input('facebook'),
        ]);

        return redirect()->route('players.index')->with('success', 'Player updated successfully.');
    }

    public function destroy($id)
    {
        $player = Player::findOrFail($id);

        // Delete the player's photo if exists
        if ($player->photo) {
            Storage::delete($player->photo);
        }

        $player->delete();

        return redirect()->route('players.index')->with('success', 'Player deleted successfully.');
    }
}
