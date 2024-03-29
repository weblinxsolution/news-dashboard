<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteCategories extends Model
{
    use HasFactory;

    public function catgyInfo()
    {
        return $this->belongsTo(Categories::class, "catgy_id", "id");
    }
}
