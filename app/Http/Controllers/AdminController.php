<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Topics;
use App\Models\Websites;
use App\Models\WebTrafic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //

    public function fakeAdmin()
    {
        $new = new Admin;
        $new->admin = "admin@gmail.com";
        $new->password = Hash::make(123456789);
        $new->save();

        return 'Super Admin Created';
    }

    public function Website()
    {
        $title = 'Websites';
        $topic = Topics::all();
        $websites = Websites::with('categories', 'non_admitteds', 'type_admitteds', 'traffic')->get();

        // dd($websites);

        return view('admin.index', compact('title', 'websites', 'topic'));
    }

    public function ApprovedWebsite($id)
    {
        $title = 'Approved Websites';
        return view('admin.approvedWeb', compact('title', 'id'));
    }
    public function ApprovedWebsiteDb(Request $request)
    {

        $traffic = new WebTrafic;
        $traffic->web_id = $request->id;
        $traffic->medium = $request->medium;
        $traffic->language = $request->language;
        $traffic->sponsorship = $request->sponsorship;
        $traffic->ipaddress = $request->ipaddress;
        $traffic->dr = $request->dr;
        $traffic->da = $request->da;
        $traffic->pa = $request->pa;
        $traffic->cf = $request->cf;
        $traffic->tf = $request->tf;
        $traffic->credit = $request->credit;
        $traffic->save();

        Websites::where('id', $request->id)->update([
            "status" => $request->status
        ]);

        return redirect()->route('admin.index')->with('success', 'Website Approved Successfully!');
    }

    public function ApprovedWebsiteEdit($id)
    {
        $title = 'Edit Approved Websites';
        $website = Websites::find($id);
        $webTrafic = WebTrafic::where('web_id', $id)->first();
        return view('admin.approvedWebEdit', compact('title', 'webTrafic', 'id', 'website'));
    }
    public function ApprovedWebsiteEditDb(Request $request)
    {

        WebTrafic::where('web_id', $request->id)->update([
            "dr" => $request->dr,
            "da" => $request->da,
            "pa" => $request->pa,
            "cf" => $request->cf,
            "tf" => $request->tf,
            "credit" => $request->credit,
        ]);

        Websites::where('id', $request->id)->update([
            "status" => $request->status
        ]);


        return redirect()->route('admin.index')->with('success', 'Traffic Successfully Updated!');
    }



    public function login()
    {
        $title = "Login";
        $data = compact('title');
        return view('admin.login')->with($data);
    }

    public function login_check(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $check = Admin::where("admin", $request->email)->first();

        if ($check) {

            if (Hash::check($request->password, $check->password)) {

                session()->put("admin_id", $check->id);

                return redirect()->route("admin.index");
            } else {

                return redirect()->back()->with("error", "Please provide valid credentials.");
            }
        } else {

            return redirect()->back()->with("error", "Please provide valid credentials.");
        }
    }

    public function logout()
    {
        session()->forget("admin_id");
        return redirect()->route("admin.login")->with("success", "Loggedout successfully!");
    }
}
