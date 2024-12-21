<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Blogs\StoreBlogAction;
use App\Actions\Blogs\UpdateBlogAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\User;
use Exception;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        try {
            if (auth()->user()->hasRole('Admin')) {
                $blogs = Blog::orderBy('id', 'desc')->get();
            } elseif (auth()->user()->hasRole('Author')) {
                $blogs = Blog::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();
            }
            $authors = User::role('Author')->get();
            return view('dashboard.pages.blogs.view', compact('blogs', 'authors'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(BlogRequest $request)
    {
        try {
            app(StoreBlogAction::class)->handle($request->validationStore()->validated());
            return redirect()->route('blogs.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        try {
            $blogs = Blog::FindOrFail($id);
            return view('dashboard.pages.blogss.view', compact('blogs'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(BlogRequest $request, $id)
    {
        try {
            $blog = Blog::FindOrFail($id);
            app(UpdateBlogAction::class)->handle($blog, $request->validationUpdate($blog)->validated());
            return redirect()->route('blogs.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        try {
            Blog::FindOrFail($id)->delete();
            toastr(trans('Dashboard/toastr.destroy'), 'error', trans('Dashboard/toastr.deleted'));
            return back();
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
