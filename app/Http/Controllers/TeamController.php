<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('backend.team.index', compact('teams'));
    }

    public function create()
    {
        return view('backend.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
            'achievement' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('teams', 'public');
            $data['logo'] = $logoPath;
        }

        Team::create($data);

        return redirect()->route('teams.index')->with('success', 'Team created successfully.');
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view('backend.team.show', compact('team'));
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('backend.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'achievement' => 'required|string',
        ]);

        $team = Team::findOrFail($id);
        if ($request->hasFile('logo')) {
            // Store the new photo in the 'public/players' directory
            $newPhotoPath = $request->file('logo')->store('teams', 'public');

            // Delete the old photo if exists
            if ($team->logo) {
                $oldPhotoPath = storage_path('app/public/' . $team->logo);
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath);
                }
            }

            $team->logo = $newPhotoPath;
        }

        $team->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'achievement' => $request->input('achievement'),
        ]);

        return redirect()->route('teams.index')->with('success', 'Team updated successfully.');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        // Delete the team's logo if exists
        if ($team->logo) {
            Storage::delete($team->logo);
        }

        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team deleted successfully.');
    }
}
