<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MusicController extends Controller
{
    public function index()
    {
        $musics = Music::all();
        return view('music.index', compact('musics'));
    }

    public function create()
    {
        return view('music.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required|max:255',
            'title_en' => 'required|max:255',
            'title_ru' => 'required|max:255',
            'description_uz' => 'required',
            'description_en' => 'required',
            'description_ru' => 'required',
            'image' => 'nullable|image|max:2048',
            'music_file' => 'required|file|mimes:mp3,wav|max:10240', // Max size in kilobytes (10 MB)
        ]);

        $music = new Music($request->except('image', 'music_file'));

        if ($request->hasFile('image')) {
            $music->image = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('music_file')) {
            $music->music_file = $request->file('music_file')->store('music', 'public');
        }

        $music->save();

        return redirect()->route('music.index')->with('success', 'Music created successfully.');
    }

    public function edit(Music $music)
    {
        return view('music.edit', compact('music'));
    }

    public function update(Request $request, Music $music)
    {
        $request->validate([
            'title_uz' => 'required|max:255',
            'title_en' => 'required|max:255',
            'title_ru' => 'required|max:255',
            'description_uz' => 'required',
            'description_en' => 'required',
            'description_ru' => 'required',
            'image' => 'nullable|image|max:2048',
            'music_file' => 'nullable|file|mimes:mp3,wav|max:10240', // Max size in kilobytes (10 MB)
        ]);

        $music->fill($request->except('image', 'music_file'));

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($music->image);
            $music->image = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('music_file')) {
            Storage::disk('public')->delete($music->music_file);
            $music->music_file = $request->file('music_file')->store('music', 'public');
        }

        $music->save();

        return redirect()->route('music.index')->with('success', 'Music updated successfully.');
    }

    public function show(Music $music)
    {
        return view('music.show', compact('music'));
    }
}
