<?php

namespace App\Http\Controllers;

use App\Models\Websites;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function Website()
    {
        $title = 'Websites';
        $websites = Websites::with('categories', 'non_admitteds', 'type_admitteds')->get();
        return view('admin.index', compact('title', 'websites'));
    }

}
