<?php

namespace App\Imports;

use App\Helper\ImageHelper;
use App\Models\Blog;
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
        $imageName = trim($row['images']);
        $images = request()->file('images');
        $image = array_filter($images, function ($image) use ($imageName) {
            return $image->getClientOriginalName() === $imageName;
        });
        $blog = new Blog([
            'title'     => $row['title'],
            'content'   => $row['content'],
            'slug'      => $row['slug'],
            'user_id'   => $row['user_id'],
        ]);
        $blog->save();
        if (isset($image)) {
            foreach ($image as $item) {
                $this->StoreImage($item, $blog, $blog->slug);
            }
        }
        return $blog;
    }

    /**
     * Validation rules for the rows.
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required',
            'slug' => 'required|string|unique:blogs',
            'images' => 'required|string',
            'user_id' => 'required|numeric|exists:users,id',
        ];
    }
}
