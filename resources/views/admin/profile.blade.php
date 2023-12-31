@extends('admin.layouts.master')

@section('title', 'Edit Profile')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3>Edit Profile</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.profile') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-2">
                    <label class="col-sm-3 form-label" for="name">{{__('Name')}}</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control" value="{{Auth::user()->name}}" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-sm-3 form-label" for="name">Username</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Username" id="name" name="username" class="form-control" value="{{Auth::user()->username}}" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-sm-3 form-label" for="email">{{__('Email Address')}}</label>
                    <div class="col-sm-9">
                        <input type="email" placeholder="{{__('Email Address')}}" id="email" name="email" class="form-control" value="{{Auth::user()->email}}" required>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label class="col-sm-3 form-label" for="password">{{__('Password')}}</label>
                    <div class="col-sm-9">
                        <input type="password" placeholder="{{__('Password')}}" id="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="form-group mb-3 text-end">
                    <button type="submit" class="btn btn-primary w-100">{{__('Save')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
