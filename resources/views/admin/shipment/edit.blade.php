@extends('admin.layouts.master')

@section('title', 'Edit Shipment')

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
                                    <input type="text" name="sender_name" id="sender" value="{{$shipment->sender_name}}" class="form-control" required placeholder="Sender name">
                                </div>
                                <div class="mb-1">
                                    <label for="sender_email">Sender Email</label>
                                    <input type="email" name="sender_email" id="sender_email"  value="{{$shipment->sender_email}}" class="form-control" required placeholder="Sender Email">
                                </div>
                                <div class="mb-1">
                                    <label for="sender_phone">Sender Phone</label>
                                    <input type="text" name="sender_phone" id="sender_phone" value="{{$shipment->sender_phone}}" class="form-control" placeholder="Sender Phone number">
                                </div>
                                <div class="mb-1">
                                    <label for="sender_address">Sender Address</label>
                                    <input type="text" name="sender_address" id="sender_address" value="{{$shipment->sender_address}}" class="form-control" required placeholder="Sender Address">
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
                                    <input type="text" name="receiver_name" id="receiver" value="{{$shipment->receiver_name}}" class="form-control" required placeholder="Receiver name">
                                </div>
                                <div class="mb-1">
                                    <label for="receiver_email">Receiver Email</label>
                                    <input type="email" name="receiver_email" id="sender_email" value="{{$shipment->receiver_email}}" class="form-control" required placeholder="Receiver Email Address">
                                </div>
                                <div class="mb-1">
                                    <label for="receiver_phone">Receiver Phone</label>
                                    <input type="text" name="receiver_phone" id="receiver_phone" value="{{$shipment->receiver_phone}}" class="form-control" placeholder="Receiver Phone number">
                                </div>
                                <div class="mb-1">
                                    <label for="receiver_address">Receiver Address</label>
                                    <input type="text" name="receiver_address" id="receiver_address" value="{{$shipment->receiver_address}}" class="form-control" required placeholder="Receiver Address">
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
                                <option value="1" @if($shipment->status == 1) selected @endif>Shipment Accepted</option>
                                <option value="2" @if($shipment->status == 2) selected @endif>Shipment at Sort Facility</option>
                                <option value="3" @if($shipment->status == 3) selected @endif>Shipment Departed</option>
                                <option value="4" @if($shipment->status == 4) selected @endif>Shipment Arrived at Sort Facility</option>
                                <option value="5" @if($shipment->status == 5) selected @endif>Shipment In Transit</option>
                                <option value="6" @if($shipment->status == 6) selected @endif>Shipment On Hold</option>
                                <option value="7" @if($shipment->status == 7) selected @endif>Shipment Arrived - Awaiting To be Cleared</option>
                                <option value="8" @if($shipment->status == 8) selected @endif>Shipment Arrived - Awaiting Pickup</option>
                                <option value="9" @if($shipment->status == 9) selected @endif>Shipment Delivered</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Payment Status</label>
                            <select name="payment_status" class="form-select" required >
                                <option value="1" @if($shipment->payment_status == 1) selected @endif>Paid</option>
                                <option value="2" @if($shipment->payment_status == 2) selected @endif>Processing</option>
                                <option value="3" @if($shipment->payment_status == 3) selected @endif>Failed</option>
                                <option value="4" @if($shipment->payment_status == 4) selected @endif>Pending</option>
                                <option value="5" @if($shipment->payment_status == 5) selected @endif>Refunded</option>
                            <select>
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Shipment Date</label>
                            <input type="datetime-local" name="shipment_date" value="{{$shipment->shipment_date}}" class="form-control" required placeholder="Shipment Date">
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Expected Delivery Date</label>
                            <input type="datetime-local" name="delivery_date" class="form-control" value="{{$shipment->delivery_date}}" required placeholder="Expected Delivery Date">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header td-head">Package Information</h5>
                    <div class="card-body row">
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Package Description</label>
                            <input type="text" name="description" placeholder="package description" value="{{$shipment->description}}" class="form-control" required>
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Tracking Percentage(%)</label>
                            <input type="text" name="percent" value="{{$shipment->percent}}" placeholder="Track Percent%" class="form-control" required>
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Package Type</label>
                            <input type="text" name="package_type" placeholder="package Type" class="form-control" value="{{$shipment->package_type}}" required>
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label">Amount</label>
                            <input type="text" name="amount" placeholder="Amount" class="form-control" value="{{$shipment->amount}}" required>
                        </div>
                    </div>
                </div>
                <div class="d-sm-flex justify-content-betweeen">
                    <button type="submit" class="btn btn-success w-100 m-2">Edit Shipment</button>
                    <a href="{{route('admin.shipment.history', $shipment->code)}}" class="m-2 btn btn-primary w-100 ">Track History</a>
                </div>
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
