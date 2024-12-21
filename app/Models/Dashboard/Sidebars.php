<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Sidebars extends Model
{
  protected $table = 'sidebar';
  protected $guarded = [];
  public $timestamps = true;
  const STATUS = ['Active', 'Not Active'];

  public function parent()
  {
    return $this->belongsTo(Sidebars::class, 'parent_id', 'id');
  }

  public function child()
  {
    return $this->hasMany(Sidebars::class, 'parent_id', 'id');
  }
}
