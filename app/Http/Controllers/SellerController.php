<?php

namespace App\Http\Controllers;

use App\Models\WebsiteCategories;
use App\Models\WebsiteNonAdmitted;
use App\Models\Websites;
use App\Models\WebsiteTypesAdmitted;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function Index()
    {
        $title = 'Dashboard';
        return view('seller.index', compact('title'));
    }

    public function AddWeb()
    {
        $title = 'Add Website';
        return view('seller.addweb', compact('title'));
    }

    public function AddWebUrl(Request $request)
    {
        session()->forget("web_url");
        if ($request['url']) {
            $is_url_exist = Websites::where('url', 'LIKE', "%{$request->url}%")->first();
            if (!$is_url_exist) {
                session()->put('web_url', $request['url']);
            } else {
                return redirect()->back()->with('error', 'URL Already Exist!');
            }
        }

        return redirect()->route('seller.addWebComplete');
    }
    public function AddWebComplete()
    {
        $title = 'Add Complete Date';
        return view('seller.completeData', compact('title'));
    }
    public function AddWebCompleteDb(Request $request)
    {

        $web = new Websites;
        $web->url = session()->get('web_url');
        $web->country = $request->countries;
        $web->description = $request->description;
        $web->max_link = $request->max_links;
        $web->images_per_post = $request->images_per_post;
        $web->is_sponsored = $request->sponsored;
        $web->is_publish_home = $request->is_publish_home;
        $web->is_related_category = $request->is_related_category;
        $web->price = $request->is_related_category;
        $web->is_verified = 0;
        $web->status = 0;
        $web->save();

        foreach ($request['type_of_links'] as $type) {
            $typeLink = new WebsiteTypesAdmitted;
            $typeLink->web_id = $web->id;
            $typeLink->type = $type;
            $typeLink->save();
        }

        foreach ($request['categories'] as $catgy) {
            $category = new WebsiteCategories;
            $category->web_id = $web->id;
            $category->name = $catgy;
            $category->save();
        }

        foreach ($request['non_admitted'] as $adm) {
            $admitted = new WebsiteNonAdmitted;
            $admitted->web_id = $web->id;
            $admitted->topic = $adm;
            $admitted->save();
        }

        return redirect()->route('seller.verifyWeb')->with('success', 'Website Successfully Added!');
    }
    public function VerifyWeb()
    {
        $title = 'Verify Web';
        return view('seller.verifyWeb', compact('title'));
    }
    public function Finish()
    {
        $title = 'Finish';
        return view('seller.finish', compact('title'));
    }
}
