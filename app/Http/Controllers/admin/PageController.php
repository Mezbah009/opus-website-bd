<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::latest()->paginate(10); // paginate results
        return view('admin.pages.index', compact('pages'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        // Create and save the page
        $page = new Page();
        $page->title   = $request->title;
        $page->slug    = Str::slug($request->title); // auto-generate slug
        $page->content = $request->content;
        $page->save();

        // Redirect or return response
        return redirect()->route('pages.index')
            ->with('success', 'Page created successfully.');
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
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        // Find and update
        $page = Page::findOrFail($id);
        $page->title   = $request->title;
        $page->slug    = Str::slug($request->title); // regenerate slug if title changes
        $page->content = $request->content;
        $page->save();

        return redirect()->route('pages.index')
            ->with('success', 'Page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id); // Find the page or throw 404
        $page->delete(); // Delete the page

        // Redirect back with success message
        return redirect()->route('pages.index')
            ->with('success', 'Page deleted successfully.');
    }
}
