<?php

namespace App\Actions\Blogs;

use App\Helper\ImageHelper;
use App\Models\Blog;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;

class UpdateBlogAction
{
    use ImageHelper;
    public function handle(Blog $blog, array $data)
    {
        $blog->update(Arr::except($data, ['image']));
        if (isset($data['image'])) {
            $this->UpdateImage($data['image'], $blog, $data['slug']);
        }
        toastr(trans('Dashboard/toastr.info'), 'info', trans('Dashboard/toastr.updated'));
        return $blog;
    }
}
