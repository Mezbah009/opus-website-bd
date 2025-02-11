<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CyberSecuritySecondSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CyberSecuritySecondSectionController extends Controller
{
    public function index(Request $request)
    {

        $sections = CyberSecuritySecondSection::all();
        return view('cyber_security.index', compact('sections'));
    }

    public function create($id)
    {
        return view('cyber_security.create');
    }

    public function store($id, Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [

            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->passes()) {

            // dd($product);

            $section = new CyberSecuritySecondSection();
            $section->title = $request->title;
            $section->description = $request->description;


            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $iconName = 'icon' . time() . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('uploads/first_section'), $iconName);
                $section->icon = $iconName;
            }

            $section->save();

            // dd("Section saved");

            return redirect()->route('cyber_security.index')->with('success', 'Section created successfully.');
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }

    public function edit($id)

    {
        $section = CyberSecuritySecondSection::findOrFail($id);
        return view('admin.product_third_section.edit', compact('section'));
    }

    public function updateThirdSection(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->passes()) {
            // Find the ProductThirdSection record to update
            $section = CyberSecuritySecondSection::findOrFail($id);

            // Update the title and description
            $section->title = $request->title;
            $section->description = $request->description;

            // Handle icon update
            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $iconName = 'icon' . time() . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('uploads/first_section'), $iconName);
                $section->icon = $iconName;
            }

            // Save the updated section
            $section->save();

            // Redirect to index page
            return redirect()->route('cyber_security.index')->with('success', 'Section updated successfully.');
        } else {
            return back()->withErrors($validator)->withInput();
        }
    }


    public function destroy($id)
    {
        $section = CyberSecuritySecondSection::findOrFail($id);
        $section->delete();

        // Flash success message
        session()->flash('success', ' Second Section deleted successfully');

        // Return JSON response
        return redirect()->route('cyber_security.index')->with('success', 'Section deleted successfully.');
    }
}
