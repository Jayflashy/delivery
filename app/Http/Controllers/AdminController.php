<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\SystemSetting;
use Artisan;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Str;

class AdminController extends Controller
{
    //
    function dashboard(){
        return view('admin.index');
    }
    function profile()
    {
        return view('admin.profile');
    }
    function update_profile (Request $request){

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->username = $request->username;
        if($request->password != null){
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return back()->withSuccess(__('Profile Updated Successfully.'));
    }


    // Settings
    public function settings()
    {
        return view('admin.setup.index');
    }
    public function email_setting()
    {
        return view('admin.setup.email');
    }
    public function envkeyUpdate(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
        }
        return back()->withSuccess("Settings updated successfully");

    }
    function update_settings(Request $request){
        $input = $request->all();

        if($request->hasFile('favicon')){
            $image = $request->file('favicon');
            $imageName = 'favicon.png';
            $image->move(public_path('uploads'),$imageName);
            $input['favicon'] =$imageName;
        }
        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $imageName = 'logo.png';
            $image->move(public_path('uploads'),$imageName);
            $input['logo'] =$imageName;
        }
        if($request->hasFile('touch_icon')){
            $image = $request->file('touch_icon');
            $imageName = 'touch.png';
            $image->move(public_path('uploads'),$imageName);
            $input['touch_icon'] =$imageName;
        }
        if($request->hasFile('slider1')){
            $image = $request->file('slider1');
            $name = Str::random(22).'.jpg';
            $image->move(public_path('uploads/sliders'),$name);
            $input['slider1'] ='sliders/'.$name;
        }
        if($request->hasFile('slider2')){
            $image = $request->file('slider2');
            $name = Str::random(22).'.jpg';
            $image->move(public_path('uploads/sliders'),$name);
            $input['slider2'] ='sliders/'.$name;
        }
        if($request->hasFile('slider3')){
            $image = $request->file('slider3');
            $name = Str::random(22).'.jpg';
            $image->move(public_path('uploads/sliders'),$name);
            $input['slider3'] ='sliders/'.$name;
        }
        if($request->hasFile('slider4')){
            $image = $request->file('slider4');
            $name = Str::random(22).'.jpg';
            $image->move(public_path('uploads/sliders'),$name);
            $input['slider4'] ='sliders/'.$name;
        }
        if($request->hasFile('slider5')){
            $image = $request->file('slider5');
            $name = Str::random(22).'.jpg';
            $image->move(public_path('uploads/sliders'),$name);
            $input['slider5'] ='sliders/'.$name;
        }
        if($request->hasFile('slider6')){
            $image = $request->file('slider6');
            $name = Str::random(22).'.jpg';
            $image->move(public_path('uploads/sliders'),$name);
            $input['slider6'] ='sliders/'.$name;
        }

        $setting = Setting::first();
        $setting->update($input);

        return redirect()->back()->with('success',__('Settings Updated Successfully.'));
    }

    function systemUpdate(Request $request)
    {
        $setting = SystemSetting::where('name', $request->name)->first();
        if($setting !=null){
            $setting->value = $request->value;
            $setting->save();
        }
        else{
            $setting = new SystemSetting;
            $setting->name = $request->name;
            $setting->value = $request->value;
            $setting->save();
        }

        return '1';
    }
    public function store_settings(Request $request)
    {
        // return $request;
        foreach ($request->types as $key => $type) {
            if($type == 'site_name'){
                $this->overWriteEnvFile('APP_NAME', $request[$type]);
            }
            else {
                $sys_settings = SystemSetting::where('name', $type)->first();

                if($sys_settings!=null){
                    if(gettype($request[$type]) == 'array'){
                        $sys_settings->value = json_encode($request[$type]);
                    }
                    else {
                        $sys_settings->value = $request[$type];
                    }
                    $sys_settings->save();
                }
                else{
                    $sys_settings = new SystemSetting;
                    $sys_settings->name = $type;
                    if(gettype($request[$type]) == 'array'){
                        $sys_settings->value = json_encode($request[$type]);
                    }
                    else {
                        $sys_settings->value = $request[$type];
                    }
                    $sys_settings->save();
                }
            }
        }

        Artisan::call('cache:clear');

        return redirect()->back()->withSuccess(__('Settings Updated Successfully.'));
    }
    public function overWriteEnvFile($type, $val)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            $val = '"'.trim($val).'"';
            if(is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0){
                file_put_contents($path, str_replace(
                    $type.'="'.env($type).'"', $type.'='.$val, file_get_contents($path)
                ));
            }
            else{
                file_put_contents($path, file_get_contents($path)."\r\n".$type.'='.$val);
            }
        }
    }

    function clear_cache(){
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        return back()->with('success',__('Cache Cleared Successfully.'));
    }
}
