@extends('admin.layouts.master')

@section('title', 'All Shipments')

@section('content')
<div class="col-12">
    <div class="card">
        <h5 class="card-header">All Shipments</h5>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Code</th>
                        <th>Description</th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shipment as $key => $item)
                    <tr>
                        <td>{{$key +1}}</td>
                        <td>{{$item->code}}</td>
                        <td>{{text_trim($item->description)}}</td>
                        <td>
                            <p class="my-0">{{$item->sender_name}}</p>
                            <p class="my-0">{{$item->sender_email}}</p>
                            <p class="my-0">{{$item->sender_address}}</p>
                        </td>
                        <td>
                            <p class="my-0">{{$item->receiver_name}}</p>
                            <p class="my-0">{{$item->receiver_email}}</p>
                            <p class="my-0">{{$item->receiver_address}}</p>
                        </td>
                        <td>{{shipment_status($item->status)}}</td>
                        <td>{{show_date($item->date)}}</td>
                        <td>
                            <div>
                                <a href="{{route('admin.shipment.edit', $item->code)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{route('admin.shipment.delete', $item->code)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
