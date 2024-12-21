<?php

namespace App\Exports;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BlogsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $user = Auth::user();
        if ($user->hasRole('Admin')) {
            $blogs = Blog::with('user')
                ->get()
                ->map(function ($blog) {
                    return [
                        'title' => $blog->title,
                        'content' => $blog->content,
                        'author_name' => $blog->user->name, // Get author's name
                        'created_at' => $blog->created_at,
                    ];
                });
        } elseif ($user->hasRole('Author')) {
            $blogs = Blog::with('user')
                ->where('user_id', $user->id)
                ->get()
                ->map(function ($blog) {
                    return [
                        'title' => $blog->title,
                        'content' => $blog->content,
                        'author_name' => $blog->user->name, // Get author's name
                        'created_at' => $blog->created_at,
                    ];
                });
        }
        return $blogs;
    }
    public function headings(): array
    {
        return ["Title", "Content", "Author Name", "Created At"];
    }
}
