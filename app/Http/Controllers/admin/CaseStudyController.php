<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use App\Models\TempImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CaseStudyController extends Controller
{
 public function index(Request $request)
{
    $caseStudies = CaseStudy::query()
        ->orderBy('order_by') // Sort by order_by field (ascending)

        // Optional: if you want latest ones within the same order_by
        ->orderByDesc('created_at');

    if (!empty($request->get('keyword'))) {
        $caseStudies->where('title', 'like', '%' . $request->get('keyword') . '%');
    }

    $caseStudies = $caseStudies->paginate(10);
    return view('admin.casestudy.list', compact('caseStudies'));
}




    public function create()
    {
        return view('admin.casestudy.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image_id' => 'required',
            'title' => 'required|string',
            'excerpt' => 'required|string',
            'slug' => 'required|string|unique:case_studies,slug',
            'description' => 'nullable',
            'order_by' => 'nullable|integer', // Added validation
        ]);

        if ($validator->passes()) {
            $caseStudy = new CaseStudy();
            $caseStudy->title = $request->title;
            $caseStudy->excerpt = $request->excerpt;
            $caseStudy->description = $request->description;
            $caseStudy->slug = $request->slug;
            $caseStudy->order_by = $request->order_by ?? 0; // Set order_by (default 0 if not provided)

            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);
                $newImageName = uniqid() . '.' . $ext;
                $sPath = public_path('/temp/' . $tempImage->name);
                $dPath = public_path('/uploads/casestudies/' . $newImageName);
                File::copy($sPath, $dPath);
                $caseStudy->image = $newImageName;
            }

            $caseStudy->save();

            return redirect()->route('casestudy.index')->with('success', 'Case Study added successfully');
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }


    public function edit($id)
    {
        $casestudy = CaseStudy::findOrFail($id);
        return view('admin.casestudy.edit', compact('casestudy'));
    }

   public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'image_id' => 'nullable',
        'title' => 'required|string',
        'excerpt' => 'required|string',
        'slug' => 'required|string|unique:case_studies,slug,' . $id,
        'description' => 'nullable',
        'order_by' => 'nullable|integer',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'errors' => $validator->errors()
        ]);
    }

    $caseStudy = CaseStudy::findOrFail($id);
    $caseStudy->title = $request->title;
    $caseStudy->excerpt = $request->excerpt;
    $caseStudy->description = $request->description;
    $caseStudy->slug = $request->slug;
    $caseStudy->order_by = $request->order_by ?? 0;

    if (!empty($request->image_id)) {
        $tempImage = TempImage::find($request->image_id);
        if ($tempImage) {
            $extArray = explode('.', $tempImage->name);
            $ext = last($extArray);
            $newImageName = uniqid() . '.' . $ext;
            $sPath = public_path('/temp/' . $tempImage->name);
            $dPath = public_path('/uploads/casestudies/' . $newImageName);
            File::copy($sPath, $dPath);

            // Optionally delete the old image if exists
            if (!empty($caseStudy->image)) {
                $oldPath = public_path('/uploads/casestudies/' . $caseStudy->image);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $caseStudy->image = $newImageName;
        }
    }

    $caseStudy->save();

    return redirect()->route('casestudy.index')->with('success', 'Case Study updated successfully');
}


    public function destroy($id)
    {
        $caseStudy = CaseStudy::findOrFail($id);
        $caseStudy->delete();

        session()->flash('success', 'Case Study deleted successfully');

        return response()->json([
            'status' => true,
            'message' => 'Case Study deleted successfully'
        ]);
    }
}
