<?php

namespace App\Http\Controllers;

use App\Models\Stuff;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStuffRequest;
use App\Http\Requests\UpdateStuffRequest;
use Illuminate\Support\Facades\Storage;

class StuffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stuffs = Stuff::latest()->paginate(10);

        return view('admin.stuffs.index', [
            'items' => $stuffs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.stuffs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStuffRequest $request)
    {
        $request->validated();

        if ($request->hasFile('photo')){
            $photo_path = $request->file('photo')->store('photos', 'public');
        }

        $stuff = new Stuff([
            'name' => $request->name,
            'age' => $request->age,
            'describtion' => $request->describtion,
            'position' => $request->position,
            'photo' => $photo_path,
    ]);

        $stuff->save();

        return redirect()->route('admin.stuffs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stuff $stuff)
    {
        return view('admin.stuffs.show', [
            'item' => $stuff
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stuff $stuff)
    {
        return view('admin.stuffs.edit', [
            'item' => $stuff
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStuffRequest $request, Stuff $stuff)
    {
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');

            if ($stuff->photo_path) {
                Storage::disk('public')->delete($stuff->photo_path);
            }

            $data['photo_path'] = $photoPath;
        }

        $stuff->update($data);

        return redirect()->route('admin.stuffs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stuff $stuff)
    {
        $stuff->delete();

        return redirect()->route('admin.stuffs.index');
    }
}
