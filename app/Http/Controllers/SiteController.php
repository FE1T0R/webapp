<?php

namespace App\Http\Controllers;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
//        $id = 8;
        $sites = Site::orderBy('id','desc')->paginate();   //ok
//        $sites = Site::where('id',$id)->paginate();
        return view('sites.site', compact('sites'));
    }

//    public function search(Request $request){
//
////        $dato = $request->search;
////        $sites = Site::where('name_s','like %',$dato,'%')->orderBy('id','desc')->paginate();
////        return redirect()->route('sites.index');
//        return $request;
//    }

    public function create(){
        return view('sites.newsite');
    }

    public function save(Request $request){
        $request->validate([
            'nameSite' => 'required',
            'emailSite' => 'required',
            'pswSite' => 'required'
        ]);
        $nuevo = new Site();
        $nuevo->name_s = $request->nameSite;
        $nuevo->username_s = $request->usernameSite;
        $nuevo->email_s = $request->emailSite;
        $nuevo->password_s = $request->pswSite;
        $nuevo->user_id_u = 5;
        $nuevo->save();
        return redirect()->route('sites.index');
    }

    public function edit(Site $site){
        return view('sites.edit',compact('site'));
    }

    public function update(Request $request, Site $site){
        $request->validate([
            'nameSite' => 'required',
            'emailSite' => 'required',
            'pswSite' => 'required'
        ]);
        $site->name_s =  $request->nameSite;
        $site->username_s = $request->usernameSite;
        $site->email_s = $request->emailSite;
        $site->password_s = $request->pswSite;
        $site->save();
        return redirect()->route('sites.index');
    }

    public function destroy( Site $site){
        $site->delete();
        return redirect()->route('sites.index');
    }
//
}
