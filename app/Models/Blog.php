<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Blog extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    use HasFactory;
    protected $guarded = [];
    protected $table = 'blogs';
    public $timestamps = true;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
