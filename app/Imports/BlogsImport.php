<?php

namespace App\Imports;

use App\Helper\ImageHelper;
use App\Models\Blog;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class BlogsImport implements ToModel, WithHeadingRow, WithValidation
{
    use ImageHelper;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        try {
            $imageName = trim($row['images']);
            $images = request()->file('images');
            $image = array_filter($images, function ($image) use ($imageName) {
                return $image->getClientOriginalName() === $imageName;
            });
            if (Blog::where('slug', $row['slug'])->exists()) {
                Log::warning('Duplicate slug found: ' . $row['slug'] . ' for blog: ' . $row['title']);
                return null;
            }
            $blog = new Blog([
                'title'     => $row['title'],
                'content'   => $row['content'],
                'slug'      => $row['slug'],
                'user_id'   => $row['user_id'],
            ]);
            $blog->save();
            toastr('success', 'Blogs imported successfully.');
            Log::info('Successfully imported blog: ' . $row['title'] . ' (Slug: ' . $row['slug'] . ')');
            if (isset($image) && count($image) > 0) {
                foreach ($image as $item) {
                    $this->StoreImage($item, $blog, $blog->slug);
                }
                Log::info('Image associated with blog: ' . $row['title']);
            } else {
                Log::warning('No image found for blog: ' . $row['title']);
            }
            return $blog;
        } catch (\Exception $e) {
            Log::error('Error importing row: ' . json_encode($row) . '. Error: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Validation rules for the rows.
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'slug' => 'required|string|unique:blogs',
            'images' => 'required|string',
            'user_id' => 'required|numeric|exists:users,id',
        ];
    }
}
