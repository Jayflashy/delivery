@extends('admin.layouts.master')

@section('title', 'Add Shipment')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id ?? 0}}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border border-info">
                            <h5 class="card-header td-head">Sender Details</h5>
                            <div class="card-body">
                                <div class="mb-1">
                                    <label for="sender">Sender Name</label>
                                    <input type="text" name="sender_name" id="sender" class="form-control" required placeholder="Sender name">
                                </div>
                                <div class="mb-1">
                                    <label for="sender_email">Sender Email</label>
                                    <input type="email" name="sender_email" id="sender_email" class="form-control" required placeholder="Sender Email">
                                </div>
                                <div class="mb-1">
                                    <label for="sender_phone">Sender Phone</label>
                                    <input type="text" name="sender_phone" id="sender_phone" class="form-control" placeholder="Sender Phone number">
                                </div>
                                <div class="mb-1">
                                    <label for="sender_address">Sender Address</label>
                                    <input type="text" name="sender_address" id="sender_address" class="form-control" required placeholder="Sender Address">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border border-info">
                            <h5 class="card-header td-head">Receiver Details</h5>
                            <div class="card-body">
                                <div class="mb-1">
                                    <label for="receiver">Receiver Name</label>
                                    <input type="text" name="receiver_name" id="receiver" class="form-control" required placeholder="Receiver name">
                                </div>
                                <div class="mb-1">
                                    <label for="receiver_email">Receiver Email</label>
                                    <input type="email" name="receiver_email" id="sender_email" class="form-control" required placeholder="Receiver Email Address">
                                </div>
                                <div class="mb-1">
                                    <label for="receiver_phone">Receiver Phone</label>
                                    <input type="text" name="receiver_phone" id="receiver_phone" class="form-control" placeholder="Receiver Phone number">
                                </div>
                                <div class="mb-1">
                                    <label for="receiver_address">Receiver Address</label>
                                    <input type="text" name="receiver_address" id="receiver_address" class="form-control" required placeholder="Receiver Address">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header td-head">Courier Details</h5>
                    <div class="card-body row">
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Shipment Status</label>
                            <select class="form-select" name="status" required>
                                <option value="1">Shipment Accepted</option>
                                <option value="2">Shipment at Sort Facility</option>
                                <option value="3">Shipment Departed</option>
                                <option value="4">Shipment Arrived at Sort Facility</option>
                                <option value="5">Shipment In Transit</option>
                                <option value="6">Shipment On Hold</option>
                                <option value="7">Shipment Arrived - Awaiting To be Cleared</option>
                                <option value="8">Shipment Arrived - Awaiting Pickup</option>
                                <option value="9">Shipment Delivered</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Payment Status</label>
                            <select name="payment_status" class="form-select" required >
                                <option value="1">Paid</option>
                                <option value="2">Processing</option>
                                <option value="3">Failed</option>
                                <option value="4">Pending</option>
                                <option value="5">Refunded</option>
                            <select>
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Shipment Date</label>
                            <input type="datetime-local" name="shipment_date" class="form-control" required placeholder="Shipment Date">
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Expected Delivery Date</label>
                            <input type="datetime-local" name="delivery_date" class="form-control" required placeholder="Expected Delivery Date">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header td-head">Package Information</h5>
                    <div class="card-body row">
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Package Description</label>
                            <input type="text" name="description" placeholder="package description" class="form-control" required>
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Tracking Percentage(%)</label>
                            <input type="text" name="percent" value="10" placeholder="Track Percent%" class="form-control" required>
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Package Type</label>
                            <input type="text" name="package_type" placeholder="package Type" class="form-control" required>
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Amount</label>
                            <input type="text" name="amount" value="1" placeholder="Amount" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-2">Create Shipment</button>
            </form>
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
</style>
@endsection
