<?php

namespace App\Actions\Blogs;

use App\Helper\ImageHelper;
use App\Models\Blog;
use Illuminate\Support\Arr;

class StoreBlogAction
{
    use ImageHelper;

    public function handle(array $data)
    {
        $blog = Blog::create(Arr::except($data, ['image']));
        if (isset($data['image'])) {
            $this->StoreImage($data['image'], $blog, $data['slug']);
        }
        toastr(trans('Dashboard/toastr.succes'));
        return $blog;
    }
}
