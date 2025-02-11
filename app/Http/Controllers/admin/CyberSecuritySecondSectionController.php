<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CyberSecuritySecondSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CyberSecuritySecondSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexSecondSection()
    {
        $second_sections = CyberSecuritySecondSection::all();
        return view('admin.cyber_security.index', compact('second_sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cyber_security_second_section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Create new section
        $section = new CyberSecuritySecondSection();
        $section->title = $request->title;
        $section->description = $request->description;

        // Handle image upload (store in `public/uploads/first_section`)
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = 'icon_' . time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('uploads/first_section'), $iconName);
            $section->icon = 'uploads/first_section/' . $iconName;
        }

        $section->save();

        return redirect()->route('cyber_security.index')->with('success', 'Section created successfully.');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $section = CyberSecuritySecondSection::findOrFail($id);
        return view('admin.cyber_security_second_section.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate request
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $section = CyberSecuritySecondSection::findOrFail($id);
        $section->title = $request->title;
        $section->description = $request->description;

        // Handle image update
        if ($request->hasFile('icon')) {
            // Delete old image if exists
            if ($section->icon && file_exists(public_path($section->icon))) {
                unlink(public_path($section->icon));
            }

            $icon = $request->file('icon');
            $iconName = 'icon_' . time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('uploads/first_section'), $iconName);
            $section->icon = 'uploads/first_section/' . $iconName;
        }

        $section->save();

        return redirect()->route('cyber_security_second_section.index')->with('success', 'Section updated successfully.');
    }

    public function destroy($id)
    {
        $section = CyberSecuritySecondSection::findOrFail($id);

        // Delete associated image from `public/uploads/first_section`
        if ($section->icon && file_exists(public_path($section->icon))) {
            unlink(public_path($section->icon));
        }

        $section->delete();

        return redirect()->route('cyber_security_second_section.index')->with('success', 'Section deleted successfully.');
    }
}
