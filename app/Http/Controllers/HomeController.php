<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.home');
    }

    public function about(){
        return view('front.about');
    }
    public function services(){
        return view('front.services');
    }

    function contact_us(){
        return view('front.contact');
    }

    function tracking(Request $request){
        if($request->code){
            $request->validate([
                'code' => 'required|string|min:5',
            ]);
            $code = $request->code;
            $shipment = Shipment::whereCode($code)->first();
            if($shipment == null){
               return redirect()->route('track')->withError('Shipment Not Found. Please Check and Try Again');
            }else{
                return view('front.track', compact('code','shipment'));
            }
        }
        return view('front.track');
    }
    function print_invoice($code){
        $shipment = Shipment::whereCode($code)->first();
        return view('front.print', compact('shipment'));
    }

    function admin_login(){
        if (Auth::check()){
            if (Auth::user()->user_role == 'admin' || Auth::user()->user_role == 'staff'){
                return redirect()->route('admin.dashboard');
            }
            else{
                return redirect()->route('index');
            }
        }
        else {
            return view('admin.login');
        }
    }

    function adminlogin(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
            'email' => 'email|required|exists:users,email'
        ]);
        $cred = $request->only('email','password');
        if(Auth::attempt($cred)){
            if(session('link') != null){
                return redirect(session('link'));
            }
            return redirect()->route('admin.index');
        }
        return back()->withErrors('Invalid Login Details');
    }
}
