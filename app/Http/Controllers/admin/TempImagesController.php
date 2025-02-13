<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TempImage;
use Image;

class TempImagesController extends Controller
{
    public function create(Request $request){

        $image =$request->image;

        if(!empty($image)){
            $ext =$image->getClientOriginalExtension();
            $newName = time().'.'. $ext;
            $tempImage = new TempImage();
            $tempImage->name = $newName;
            $tempImage->save();
            $image->move(public_path().'/temp',$newName);

            $sourcePath = public_path('temp/' . $newName);
            $destPath = public_path('temp/thumb/' . $newName);


                return response()->json([
                    'status' => true,
                    'image_id' => $tempImage->id,
                    'imagePath' => asset('/temp/thumb/' . $newName),
                    'message' => 'Image uploaded successfully',
                ]);


        }

    }
}
