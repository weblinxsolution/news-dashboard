<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Websites extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->hasMany(WebsiteCategories::class, 'web_id', 'id')->with("catgyInfo");
    }
    public function non_admitteds()
    {
        return $this->hasMany(WebsiteNonAdmitted::class, 'web_id', 'id')->with("topicInfo");
    }
    public function type_admitteds()
    {
        return $this->hasMany(WebsiteTypesAdmitted::class, 'web_id', 'id');
    }
    public function traffic()
    {
        return $this->hasMany(WebTrafic::class, 'web_id', 'id');
    }
}
