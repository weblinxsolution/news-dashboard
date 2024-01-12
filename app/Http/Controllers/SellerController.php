<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Topics;
use App\Models\User;
use App\Models\WebsiteCategories;
use App\Models\WebsiteNonAdmitted;
use App\Models\Websites;
use App\Models\WebsiteTypesAdmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class SellerController extends Controller
{
    public function fakeUser()
    {
        $new = new User;
        $new->name = "John Doe";
        $new->email = "test@gmail.com";
        $new->number = +12243254359;
        $new->password = Hash::make(123456789);
        $new->save();

        return 'Super Admin Created';
    }
    public function website()
    {
        $title = 'Dashboard';
        $topic = Topics::all();
        $websites = Websites::with('categories', 'non_admitteds', 'type_admitteds', 'traffic')->get();
        return view('seller.index', compact('title', 'websites', 'topic'));
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
        $categories = Categories::all();
        $topics = Topics::all();
        return view('seller.completeData', compact('title', 'categories', 'topics'));
    }
    public function AddWebCompleteDb(Request $request)
    {

        $request->validate([
            'countries' => 'required',
            'description' => 'required',
            'max_links' => 'required',
            'type_of_links' => 'required',
            'non_admitted' => 'required',
            'categories' => 'required',
            'images_per_post' => 'required',
            'sponsored' => 'required',
            'is_publish_home' => 'required',
            'is_related_category' => 'required',
            'price' => 'required',
        ]);

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
            $category->catgy_id = $catgy;
            $category->save();
        }

        foreach ($request['non_admitted'] as $adm) {
            $admitted = new WebsiteNonAdmitted;
            $admitted->web_id = $web->id;
            $admitted->topic_id = $adm;
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

    public function EditWeb($id)
    {
        $title = 'Edit Website';
        $websites = Websites::where('id', $id)->with('categories', 'non_admitteds', 'type_admitteds')->get();
        return view('seller.EditWeb', compact('websites', 'title'));
    }
    public function WebDelete($id)
    {
        Websites::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Website Successfully Deleted!');
    }


    public function login()
    {
        $title = "Login";
        $data = compact('title');
        return view('seller.login')->with($data);
    }

    public function login_check(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $check = User::where("email", $request->email)->first();

        if ($check) {

            if (Hash::check($request->password, $check->password)) {

                session()->put("user_id", $check->id);

                return redirect()->route("seller.website");
            } else {

                return redirect()->back()->with("error", "Please provide valid credentials.");
            }
        } else {

            return redirect()->back()->with("error", "Please provide valid credentials.");
        }
    }

    public function logout()
    {
        session()->forget("user_id");
        return redirect()->route("seller.login")->with("success", "Loggedout successfully !");
    }
}
