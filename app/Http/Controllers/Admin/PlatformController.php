<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platforms = Platform::all();
        // dd($platforms);

        return view('settings.platforms.index', compact('platforms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('settings.platforms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $newPlatform = new Platform();
        $newPlatform->name = $data['name'];
        $newPlatform->description = $data['description'];
        $newPlatform->color = $data['color'];

        $newPlatform->save();

        return redirect()->route('admin.settings.platforms.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Platform $platform)
    {
        return view('settings.platforms.edit', compact('platform'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Platform $platform)
    {

        $data = $request->all();
        $platform->name = $data['name'];
        $platform->description = $data['description'];
        $platform->color = $data['color'];

        $platform->update();

        return redirect()->route('admin.settings.platforms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Platform $platform)
    {
        $platform->delete();

        return redirect()->route('admin.settings.platforms.index');
    }
}
