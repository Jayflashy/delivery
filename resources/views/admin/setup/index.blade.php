@extends('admin.layouts.master')
@section('title', 'General Settings')

@section('content')
<div>
    <div class="card">
        <div class="card-header h4">Website Information </div>
        <div class="card-body">
            <form action="{{route('admin.setting.update')}}" method="post" class="row">
                @csrf
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-sm-3 form-label">@lang('Website Name')</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" value="{{ get_setting('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-label">@lang('Website Email')</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" value="{{ get_setting('email') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-label">@lang('Website Address')</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" class="form-control" value="{{ get_setting('address') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-sm-3 form-label">@lang('Website Phone')</label>
                        <div class="col-sm-9">
                            <input type="tel" name="phone" class="form-control" value="{{ get_setting('phone') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-label">@lang('Website About')</label>
                        <div class="col-sm-9">
                            <textarea name="description" rows="3" class="form-control">{{ get_setting('description') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-0 text-end">
                    <button class="btn-success btn w-100" type="submit">Save Settings</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header h4">Social Links </div>
        <div class="card-body">
            <form action="{{route('admin.setting.update')}}" method="post" class="row">
                @csrf
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-sm-3 form-label">@lang('Facebook')</label>
                        <div class="col-sm-9">
                            <input name="facebook" type="text" class="form-control" value="{{get_setting('facebook') }}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-label">@lang('Twitter')</label>
                        <div class="col-sm-9">
                            <input name="twitter" type="text" class="form-control" value="{{get_setting('twitter') }}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-label">@lang('Telegram')</label>
                        <div class="col-sm-9">
                            <input name="telegram" type="text" class="form-control" value="{{get_setting('telegram') }}" >
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-sm-3 form-label">@lang('Instagram')</label>
                        <div class="col-sm-9">
                            <input name="instagram" type="text" class="form-control" value="{{get_setting('instagram') }}" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-label">@lang('Whatsapp')</label>
                        <div class="col-sm-9">
                            <input name="whatsapp" type="text" class="form-control" value="{{get_setting('whatsapp') }}" >
                        </div>
                    </div>
                </div>
                <div class="form-group mb-0 text-end">
                    <button class="btn-success btn w-100" type="submit">Save Settings</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <h4 class="card-header">Logo/Image Settings</h4>
        <div class="card-body">
            <form class="row" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-lg-6">
                    <label class="form-label">@lang('Site Logo')</label>
                    <div class="col-sm-12 row">
                        <input type="file" class="form-control" name="logo" accept="image/*"/>
                        <img class="primage mt-2" src="{{ my_asset(get_setting('logo'))}}" alt="Site Logo" >
                    </div>
                </div>
                <div class="form-group col-lg-6">
                    <label class="form-label">@lang('Favicon')</label>
                    <div class="col-sm-12">
                        <input type="file" class="form-control" name="favicon" accept="image/*"/>
                        <img class="primage mt-2" src="{{ my_asset(get_setting('favicon'))}}" alt="Favicon" >
                    </div>
                </div>
                {{-- <div class="form-group col-lg-6">
                    <label class="form-label">@lang('Touch Icon') <small>(App icon)</small></label>
                    <div class="col-sm-12">
                        <input type="file" class="form-control" name="touch_icon" accept="image/*"/>
                        <img class="primage mt-2" src="{{ my_asset(get_setting('touch_icon'))}}" alt="Favicon" >
                    </div>
                </div> --}}
                <div class="text-end">
                    <button class="btn btn-success w-100" type="submit">@lang('Update Setting')</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <h4 class="card-header">Slider Images</h4>
        <div class="card-body">
            <form class="row" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-lg-6">
                    <label class="form-label">@lang('Slider 1')</label>
                    <div class="col-sm-12 row">
                        <input type="file" class="form-control" name="slider1" accept="image/*"/>
                        <img class="primage mt-2" src="{{ my_asset(get_setting('slider1'))}}" alt="Site Logo" >
                    </div>
                </div>
                <div class="form-group col-lg-6">
                    <label class="form-label">@lang('Slider 2')</label>
                    <div class="col-sm-12 row">
                        <input type="file" class="form-control" name="slider2" accept="image/*"/>
                        <img class="primage mt-2" src="{{ my_asset(get_setting('slider2'))}}" alt="Site Logo" >
                    </div>
                </div>
                <div class="form-group col-lg-6">
                    <label class="form-label">@lang('Slider 3')</label>
                    <div class="col-sm-12 row">
                        <input type="file" class="form-control" name="slider3" accept="image/*"/>
                        <img class="primage mt-2" src="{{ my_asset(get_setting('slider3'))}}" alt="Site Logo" >
                    </div>
                </div>
                <div class="form-group col-lg-6">
                    <label class="form-label">@lang('Slider 4')</label>
                    <div class="col-sm-12 row">
                        <input type="file" class="form-control" name="slider4" accept="image/*"/>
                        <img class="primage mt-2" src="{{ my_asset(get_setting('slider4'))}}" alt="Site Logo" >
                    </div>
                </div>
                <div class="form-group col-lg-6">
                    <label class="form-label">@lang('Slider 5')</label>
                    <div class="col-sm-12 row">
                        <input type="file" class="form-control" name="slider5" accept="image/*"/>
                        <img class="primage mt-2" src="{{ my_asset(get_setting('slider5'))}}" alt="Site Logo" >
                    </div>
                </div>
                <div class="form-group col-lg-6">
                    <label class="form-label">@lang('Slider 6')</label>
                    <div class="col-sm-12 row">
                        <input type="file" class="form-control" name="slider6" accept="image/*"/>
                        <img class="primage mt-2" src="{{ my_asset(get_setting('slider6'))}}" alt="Site Logo" >
                    </div>
                </div>
                <div class="text-end">
                    <button class="btn btn-success w-100" type="submit">@lang('Update Setting')</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('breadcrumb')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">@yield('title')</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
@endsection

@section('styles')
<style>
    .primage {
        max-height: 50px !important;
        max-width: 150px !important;
        margin: 0;
    }
    /* .card-header{border-top:1px solid #1d1f1d } */
    .form-group{
        margin-bottom: 15px;
    }
</style>
@endsection
