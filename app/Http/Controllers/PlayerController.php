<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::latest()->paginate(10);

        return view('admin.players.index', [
            'items' => $players
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlayerRequest $request)
    {
        $request->validated();

        if ($request->hasFile('photo')){
            $photo_path = $request->file('photo')->store('photos', 'public');
        }

        $player = new Player([
            'name' => $request->name,
            'age' => $request->age,
            'shirt_number' => $request->shirt_number,
            'describtion' => $request->describtion,
            'position' => $request->position,
            'photo' => $photo_path,
    ]);

        $player->save();

        return redirect()->route('admin.players.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view('admin.players.show', [
            'item' => $player
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view('admin.players.edit', [
            'item' => $player
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlayerRequest $request, Player $player)
    {
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');

            if ($player->photo_path) {
                Storage::disk('public')->delete($player->photo_path);
            }

            $data['photo_path'] = $photoPath;
        }

        $player->update($data);

        return redirect()->route('admin.players.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player->delete();

        return redirect()->route('admin.players.index');
    }
}
