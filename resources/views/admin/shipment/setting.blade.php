@extends('admin.layouts.master')

@section('title', 'Shipment Settings')

@section('content')
<div class="col-12">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <h5 class="card-header fw-bold mb-0">Bank Payment Details</h5>
                <div class="card-body">
                    <form action="{{route('admin.setting.store_settings')}}" method="post" class="row">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="types[]" value="code_prefix">
                            <label class="form-label">Tracking Code Prefix</label>
                            <input type="text"class="form-control" name="code_prefix" placeholder="TRacking Code Prefix" value="{{sys_setting('code_prefix')}}" required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="types[]" value="code_length">
                            <label class="form-label">Code Length</label>
                            <input type="text"class="form-control" name="code_length" placeholder="Code Length" value="{{sys_setting('code_length')}}" required>
                        </div>
                        <div class="form-group text-end mb-0">
                            <button class="btn btn-primary w-100" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('styles')
<style>
    .d-head{
        padding: 2px 10px;
        border: 1px solid #476ea1
    }
    .td-head{
        background: #2248b8;
        color: white;
    }
    .form-group{margin-bottom: 10px}
</style>
@endsection
