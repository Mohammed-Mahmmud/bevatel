<?php

namespace App\Http\Controllers;

use App\Exports\BlogsExport;
use App\Http\Requests\BlogsImportRequest;
use App\Imports\BlogsImport;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class BlogsImportExportController extends Controller
{
    public function import(BlogsImportRequest $request)
    {
        try {
            $file = $request->file('file');
            Log::info('File Path: ' . $file->getRealPath());
            Log::info('File Extension: ' . $file->getClientOriginalExtension());
            Excel::import(new BlogsImport, $file);
            // return response()->json(['message' => 'Blogs imported successfully.'], 201);
            return redirect()->back()->with('message', 'Blogs imported successfully.');
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return response()->json([
                'message' => 'An error occurred during import.',
                'error'   => $ex->getMessage(),
            ], 400);
        }
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new BlogsExport, 'blogs.xlsx');
    }
}
