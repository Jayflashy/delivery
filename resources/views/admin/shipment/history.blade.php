@extends('admin.layouts.master')

@section('title', 'Shipment History')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5 class="fw-bold mb-0">Add Tracking History</h5>
            <a href="{{route('admin.shipment.edit', $shipment->code)}}" class="btn btn-primary btn-sm">Edit Shipment</a>
        </div>
        <div class="card-body">
            <form action="" class="row" method="POST">
                @csrf
                <div class="col-md-4 mb-1">
                    <label class="form-label">Comment/ Remark</label>
                    <input type="text" name="remark" placeholder="Comment and Remarks" class="form-control" required>
                </div>
                <div class="col-md-4 mb-1">
                    <label class="form-label">Event Location</label>
                    <input type="text" name="location" placeholder="Event Location" class="form-control" required>
                </div>
                <div class="col-md-4 mb-1">
                    <label class="form-label">Date</label>
                    <input type="datetime-local" name="date" placeholder="Tracking Date" class="form-control" required>
                </div>

                <button class="btn btn-primary w-100 mt-3" type="submit">Add History</button>
            </form>
        </div>

    </div>

    <div class="card">
        <h5 class="card-header td-head">Tracking History</h5>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Remark</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($shipment->history as $item)
                        <tr>
                            <td>{{$item->remark}}</td>
                            <td>{{$item->location}}</td>
                            <td>{{show_datetime($item->date)}}</td>
                            <td>
                                <div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#TrackEdit{{$item->id}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('admin.shipment.history.delete', $shipment->code)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="TrackEdit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h6 class="modal-title" id="myModalLabel"> Edit Tracking History</h6>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{route('admin.shipment.history.update', [$shipment->code, $item->id])}}" class="row" method="POST">
                                        @csrf
                                        <div class="mb-1">
                                            <label class="form-label">Comment/ Remark</label>
                                            <input type="text" name="remark" value="{{$item->remark}}" placeholder="Comment and Remarks" class="form-control" required>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Event Location</label>
                                            <input type="text" name="location" value="{{$item->location}}" placeholder="Event Location" class="form-control" required>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Date</label>
                                            <input type="datetime-local" name="date" value="{{$item->date}}" placeholder="Tracking Date" class="form-control" required>
                                        </div>

                                        <button class="btn btn-primary w-100 mt-3" type="submit">Update History</button>
                                    </form>
                                  </div>
                              </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                          <td colspan="4" class="text-center">  No History Found. Please Add New Tracking History </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
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
