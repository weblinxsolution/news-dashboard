<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteNonAdmitted extends Model
{
    use HasFactory;

    public function topicInfo()
    {
        return $this->belongsTo(Topics::class, "topic_id", "id");
    }
}
