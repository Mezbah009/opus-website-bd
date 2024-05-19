<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $sections = Contact::when(
            $request->get('keyword'),
            function($query) use($request) {
                $query->where('title', 'like', '%' . $request->get('keyword') . '%');
            }
        )
        ->latest()
        ->paginate(10);

        return view('admin.contact.list', compact('sections'));
    }

    public function create()
    {
        return view('admin.contact.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'flag' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'country_name' => 'nullable|string',
            'company_name' => 'nullable|string',
            'office_name' => 'nullable|string',
            'address' => 'nullable|string',
            'website' => 'nullable|string',
            'linkedIn' => 'nullable|string',
            'facebook' => 'nullable|string',
            'youtube' => 'nullable|string',
        ]);
        // Handle image update
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $validatedData['image'] = $image->store('contact');
        }

        // Handle flag update
        if ($request->hasFile('flag')) {
            $flag = $request->file('flag');
            $validatedData['flag'] = $flag->store('contact');
        }

        Contact::create($validatedData);

        return redirect()->route('contact.index')->with('success', 'Contact updated successfully');
    }

    // Edit method

    public function edit(Contact $contact)
    {
        // dd($contact);
        return view('admin.contact.edit', compact('contact'));
    }

    // Update method
    public function update(Request $request, Contact $contact)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'flag' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'country_name' => 'nullable|string',
            'company_name' => 'nullable|string',
            'office_name' => 'nullable|string',
            'address' => 'nullable|string',
            'website' => 'nullable|string',
            'linkedIn' => 'nullable|string',
            'facebook' => 'nullable|string',
            'youtube' => 'nullable|string',
        ]);


        // Handle image update
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $validatedData['image'] = $image->store('contact');

            if(file_exists(public_path('uploads/' . $contact->image))){
                unlink(public_path('uploads/' . $contact->image));
            }
        } else {
            $validatedData['image'] = $contact->image;
        }

        // Handle flag update
        if ($request->hasFile('flag')) {
            $flag = $request->file('flag');
            $validatedData['flag'] = $flag->store('contact');

            if(file_exists(public_path('uploads/' . $contact->flag))){
                unlink(public_path('uploads/' . $contact->flag));
            }
        } else {
            $validatedData['flag'] = $contact->flag;
        }

        $contact->update($validatedData);

        return redirect()->route('contact.index')->with('success', 'Contact US updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        if(file_exists(public_path('uploads/' . $contact->flag))){
            unlink(public_path('uploads/' . $contact->flag));
        }

        if(file_exists(public_path('uploads/' . $contact->image))){
            unlink(public_path('uploads/' . $contact->image));
        }

        // Flash success message
        session()->flash('success', 'Contact deleted successfully');

        // Return JSON response
        return response()->json([
            'status' => true,
            'message' => 'Contact deleted successfully'
        ]);
    }
}
