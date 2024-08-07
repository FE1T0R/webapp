<?php

namespace App\Http\Controllers;

use App\Mail\VerificationMail;
use App\Models\Site;
use App\Models\User;
use Generator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function active(){
        $useractive = Auth::user()->id;

        
        $sites = Site::orderBy('id','desc')->where('user_id',$useractive)->get();   //ok
        return $sites;
    }
    public function index(){
        $sites = $this->active();
        //$sites = Site::where('id',$id)->paginate();
        $alerts = "";
        return view('sites.site', compact(['sites','alerts']));
    }

    public function search(Request $request){
        $useractive = Auth::user()->id;
        $data = "%".$request->search."%";
        $sites = Site::where('name_s','like',$data)->where('user_id','=',$useractive)->orderBy('id','desc')->get();
        return view('sites.site', compact('sites'));
    }



    public function create(){
        $createdPass = "";
        return view('sites.newsite',compact('createdPass'));
    }

    public function store(Request $request){
        $request->validate([
            'nameSite' => 'required',
            'emailSite' => 'required',
            'pswSite' => ['required','min:12']
        ]);
        $nuevo = new Site();
        $nuevo->name_s = $request->nameSite;
        $nuevo->username_s = $request->usernameSite;
        $nuevo->email_s = $request->emailSite;
        $nuevo->password_s = GeneratorController::tokenencrypt($request->pswSite);
        $nuevo->icon_s = $request->iconSite;
        $nuevo->user_id = Auth::user()->id;
        $nuevo->save();
        return redirect()->route('sites.index')->with('alerts','store');
            
    }
    public function edit(Site $site){
        $useractive = Auth::user()->id;
        if($site->user_id == $useractive){
            return view('sites.edit',compact('site'));
        }else{
            return redirect()->route('sites.index');
        }
        
    }

    public function update(Request $request, Site $site){
        $request->validate([
            'nameSite' => 'required',
            'emailSite' => 'required',
            'pswSite' => ['min:11']
        ]);
        $site->name_s =  $request->nameSite;
        $site->username_s = $request->usernameSite;
        $site->email_s = $request->emailSite;
        $site->password_s = GeneratorController::tokenencrypt($request->pswSite);
        $site->icon_s = $request->iconSite;
        $site->save();     
        return redirect()->route('sites.index')->with('alerts','update');       
    }

    public function destroy( Site $site){
        $site->delete();
        $sites = $this->active();
        return redirect()->route('sites.index')->with('alerts','delete');
        //return redirect()->route('sites.index')->with('alert_type','danger')->with('alert_message','Your site has been deleted');
        //return view('sites.site')->with('alert_type','danger')->with('alert_message','Your site has been deleted');
    }

    
}
