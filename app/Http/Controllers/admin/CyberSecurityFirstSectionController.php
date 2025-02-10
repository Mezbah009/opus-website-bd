<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CyberSecurityFirstSection;
use Illuminate\Http\Request;

class CyberSecurityFirstSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = CyberSecurityFirstSection::all();
        return view('admin.cyber_security.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cyber_security.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);


        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('front-assets/img/cyber-security'), $imageName);
            $imagePath = 'front-assets/img/cyber-security/' . $imageName;
        }

        CyberSecurityFirstSection::create([
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('cyber_security.index')->with('success', 'Section created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $section = CyberSecurityFirstSection::findOrFail($id);
        return view('admin.cyber_security.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $section = CyberSecurityFirstSection::findOrFail($id);

        $request->validate([
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($section->image && file_exists(public_path($section->image))) {
                unlink(public_path($section->image));
            }

            // Upload new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('front-assets/img/cyber-security'), $imageName);
            $section->image = 'front-assets/img/cyber-security/' . $imageName;
        }

        $section->description = $request->description ?? $section->description;
        $section->save();

        return redirect()->route('cyber_security.index')->with('success', 'Section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $section = CyberSecurityFirstSection::findOrFail($id);

        if ($section->image && file_exists(public_path($section->image))) {
            unlink(public_path($section->image));
        }

        $section->delete();

        return redirect()->route('admin.cyber_security.index')->with('success', 'Section deleted successfully.');
    }
}
