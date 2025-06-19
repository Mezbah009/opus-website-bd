<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Demo;
use Illuminate\Http\Request;
use App\Exports\DemoExport;
use Maatwebsite\Excel\Facades\Excel;

class DemoController extends Controller
{
    public function index()
    {
        // Get all demos with associated product info
        $demos = Demo::with('product')->latest()->paginate(10);


        return view('admin.demos.index', compact('demos'));
    }


    public function destroy($id)
    {
        $demo = Demo::findOrFail($id);
        $demo->delete();

        return redirect()->back()->with('success', 'Demo request deleted successfully.');
    }

    public function export()
    {
        return Excel::download(new DemoExport, 'demo_requests.xlsx');
    }
}
