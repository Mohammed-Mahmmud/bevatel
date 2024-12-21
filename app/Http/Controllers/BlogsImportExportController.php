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
            $successfulImports = [];
            $skippedImports = [];
            Excel::import(new BlogsImport(function ($row) use (&$successfulImports, &$skippedImports) {
                $blog = $this->model($row);
                if ($blog) {
                    $successfulImports[] = $row;
                } else {
                    $skippedImports[] = [
                        'row'    => $row,
                        'reason' => 'Duplicate slug or error occurred'
                    ];
                }
            }), $file);

            // Log the results
            Log::info('Successfully imported rows: ' . count($successfulImports));
            Log::info('Skipped rows: ' . count($skippedImports));
            foreach ($skippedImports as $skipped) {
                Log::warning('Skipped row: ' . json_encode($skipped['row']) . ' - Reason: ' . $skipped['reason']);
            }
            return redirect()->back();
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            toastr($ex->getMessage(), 'error', 'error');
            return redirect()->back();
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
