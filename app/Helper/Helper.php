<?php

use App\Models\Setting;
use App\Models\SystemSetting;

if (!function_exists('static_asset')) {
    function static_asset($path, $secure = null)
    {
        return app('url')->asset('public/assets/' . $path, $secure);
    }
}


//return file uploaded via uploader
if (!function_exists('my_asset')) {
    function my_asset($path, $secure = null)
    {
        return app('url')->asset('public/uploads/' . $path, $secure);
    }
}

function text_trim($string, $length = null)
{
    if (empty($length)) $length = 100;
    return Str::limit($string, $length, "...");
}

if (!function_exists('get_setting')) {
    function get_setting($key)
    {
        $settings = Setting::first();
        $setting = $settings->$key;
        return $setting;
    }
}
if (!function_exists('sys_setting')) {
    function sys_setting($key, $default = null)
    {
        $settings = SystemSetting::all();
        $setting = $settings->where('name', $key)->first();

        return $setting == null ? $default : $setting->value;
    }
}

function slug($string)
{
    return Illuminate\Support\Str::slug($string);
}
// Create slug
function uniqueSlug($name ,$model)
{
    $slug = Str::slug($name);
    $allSlugs = checkRelatedSlugs($slug , $model);
    if (! $allSlugs->contains('slug', $slug)){
        return $slug;
    }

    $i = 1;
    $is_contain = true;
    do {
        $newSlug = $slug . '-' . $i;
        if (!$allSlugs->contains('slug', $newSlug)) {
            $is_contain = false;
            return $newSlug;
        }
        $i++;
    } while ($is_contain);
}
function checkRelatedSlugs($slug , $model)
{
    return DB::table($model)->where('slug', 'LIKE', $slug . '%')->get();
}
// random string
function getTrxcode($length)
{
    $characters = 'ABCDEFGHJKMNOPQRSTUVWXYZ1234567890';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function randomNumber($length)
{
    $characters = '1234567890';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// Shipment Status'
function shipment_status($id){
    $status = "";
    switch ($id) {
        case 1:
            $status = "Shipment Accepted";
            break;
        case 2:
            $status = "Shipment at Sort Facility";
            break;
        case 3:
            $status = "Shipment Departed";
            break;
        case 4:
            $status = "Shipment Arrived at Sort Facility";
            break;
        case 5:
            $status = "Shipment In Transit";
            break;
        case 6:
            $status = "Shipment On Hold";
            break;
        case 7:
            $status = "Shipment Arrived - Awaiting To be Cleared";
            break;
        case 8:
            $status = "Shipment Arrived - Awaiting Pickup";
            break;
        case 9:
            $status = "Shipment Delivered";
            break;
        default:
            $status = "Unknown Status";
            break;
    }
    return $status;
}
function shipment_color($id)
{
    $status = "";
    $color = "";

    switch ($id) {
        case 1:
            $status = "Shipment Accepted";
            $color = "text-info";
            break;
        case 2:
            $status = "Shipment at Sort Facility";
            $color = "text-primary";
            break;
        case 3:
            $status = "Shipment Departed";
            $color = "text-warning";
            break;
        case 4:
            $status = "Shipment Arrived at Sort Facility";
            $color = "text-info";
            break;
        case 5:
            $status = "Shipment In Transit";
            $color = "text-info";
            break;
        case 6:
            $status = "Shipment On Hold";
            $color = "text-danger";
            break;
        case 7:
            $status = "Shipment Arrived - Awaiting To be Cleared";
            $color = "text-warning";
            break;
        case 8:
            $status = "Shipment Arrived - Awaiting Pickup";
            $color = "text-warning";
            break;
        case 9:
            $status = "Shipment Delivered";
            $color = "text-success";
            break;
        default:
            $status = "Unknown Status";
            $color = "text-muted";
            break;
    }

    return $color;
}

function payment_status($id){
    $status = "";
    switch ($id) {
        case 1:
            $status = "Paid";
            break;
        case 2:
            $status = "Processing";
            break;
        case 3:
            $status = "Failed";
            break;
        case 4:
            $status = "Pending";
            break;
        case 5:
            $status = "Refunded";
            break;
        default:
            $status = "Unknown Status";
            break;
    }
    return $status;
}

function shipCode(){
    $prefix = sys_setting('code_prefix');
    $code = randomNumber(sys_setting('code_length'));

    return $prefix.$code;
}

function show_datetime($date, $format = 'd M, Y h:i:s a')
{
    return \Carbon\Carbon::parse($date)->format($format);
}
function show_datetime1($date, $format = 'd M, Y h:ia')
{
    return \Carbon\Carbon::parse($date)->format($format);
}
function bvn_date($date, $format = 'd-M-y')
{
    return \Carbon\Carbon::parse($date)->format($format);
}
function show_date($date, $format = 'd M, Y')
{
    return \Carbon\Carbon::parse($date)->format($format);
}

function show_time($date, $format = 'h:ia')
{
    return \Carbon\Carbon::parse($date)->format($format);
}
