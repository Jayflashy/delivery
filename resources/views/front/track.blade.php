@extends('front.layouts.master')
@section('title', 'Track Shipment')
@section('content')
<!-- Services 3 Area Start Here  -->
<section class="services__3 grey-bg-4 pt-120 pb-90 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section__title mb-55 text-center">
                    <h2 class="title">Track and Trace SHipment</h2>
                    <span class="sub-title">Here’s the fastest way to check the status of your shipment</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if(Session::get('error'))
                    <div class="card-header">
                        <div class="w-100 alert alert-danger alert-dismissible  validation fade show mb-0" role="alert">
                            {{Session::get('error')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @endif
                    <div class="card-body">
                        <form action="" method="get">
                            <div class="row g-2">
                                <div class="col-md-9 col-lg-10">
                                    <input type="text" name="code" value="{{$code ?? ""}}" class="form-control" id="code" placeholder="Enter Your Tracking Code" required>
                                </div>
                                <div class="col-md-3 col-lg-2">
                                    <button class="btn btn-success w-100" type="submit">Track Shipment</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                @isset($shipment)
                <div class="card mt-2">
                    <div class="d-sm-flex card-header justify-content-between">
                        <h5 class="fw-bold">Shipping Result for #{{$shipment->code}}</h5>
                        <a href="{{route('print', $shipment->code)}}" target="_blank" class="btn btn-primary">Print Receipt</a>
                    </div>
                    <div class="card-body row">
                        <div class="col-12">
                            <div class="border border-info mb-3 p-2">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="progress" style="height: 40px;">
                                            <div class="progress-bar" role="progressbar" style="width: {{$shipment->percent}}%;" aria-valuenow="{{$shipment->percent}}" aria-valuemin="0" aria-valuemax="100">{{$shipment->percent}}%</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        {{-- Barcode ?? --}}

                                        <div class="">{!! DNS1D::getBarcodeHTML($shipment->code, 'C128') !!}</div>
                                        {{$shipment->code}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h6 class="td-head p-2">Sender Details</h6>
                            <div class="border border-info px-2 mb-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="track-title">
                                            <span class="far fa-user align-tops" style="font-size: 30px;"></span> <label>Sender</br> <b>{{$shipment->sender_name}}</b></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="track-title">
                                            <span class="fa fa-plane-departure align" style="font-size: 30px;"></span> <label>Origin/Departure</br> <b>{{$shipment->sender_address}}</b></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="track-title">
                                            <span class="far fa-calendar align" style="font-size: 30px;"></span> <label>Shipment Date</br> <b>{{show_datetime($shipment->shipment_date)}}</b></label>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <div class="track-title">
                                            <span class="far fa-clock " style="font-size: 30px;"></span> <label>Expected Delivery</br> <b>{{show_datetime($shipment->delivery_date)}}</b></label>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-6">
                                        <div class="track-title">
                                            <span class="far fa-box " style="font-size: 30px;"></span> <label>Package Type</br> <b class="badge bg-info">{{($shipment->package_type)}}</b></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="track-title">
                                            <span class="far fa-comment " style="font-size: 30px;"></span> <label>Description</br> <b>{{($shipment->description)}}</b></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="td-head p-2 mt-4">Receiver Details</h6>
                            <div class="border border-info px-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="track-title">
                                            <span class="far fa-user align-tops" style="font-size: 30px;"></span> <label>Receiver</br> <b>{{$shipment->receiver_name}}</b></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="track-title">
                                            <span class="far fa-phone align-tops" style="font-size: 30px;"></span> <label>Receiver Phone</br> <b>{{$shipment->receiver_phone}}</b></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="track-title">
                                            <span class="fa fa-plane-arrival align" style="font-size: 30px;"></span> <label>Origin/Departure</br> <b>{{$shipment->receiver_address}}</b></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="track-title">
                                            <span class="far fa-clock " style="font-size: 30px;"></span> <label>Expected Delivery</br> <b>{{show_datetime($shipment->delivery_date)}}</b></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="border border-primary">
                                <h5 class="p-2 td-head">Shipment Status</h5>
                                <div class="track-title text-center">
                                    <span class="" style="font-size: 30px;"></span> <label>Status</br> <b class="fw-bold {{shipment_color($shipment->status)}}">{{shipment_status($shipment->status)}}</b></label>
                                </div>
                                    {{-- Timeline --}}
                                <h6 class="td-head p-2">Shipping History</h6>
                                <div class="">
                                    <div class="booking-summary-box">
                                        @foreach ($shipment->history2() as $item)
                                        <div class="track-cost">
                                            <ul class="timeline a">
                                                <li class="event">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="text-left button5">{{show_datetime1($item->date)}}</p>
                                                            <h6 class="text-left button4">
                                                                {{$item->location}}
                                                            </h6>
                                                            <span class="text-left button3 w-100">
                                                                    {{$item->remark}}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!--event schedule 1 end-->
                                            </ul>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            @php
                                $address = $shipment->history2()->first()->location;
                            @endphp
                            <div class="mt-4" style="width: 100%">
                                <h5 class="td-head p-2">Current Location </h5>
                                <iframe scrolling="no" marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?q={{$address}}&width=600&height=450&zoom=14&language=en&output=embed" width="100%" height="500" frameborder="0">
                                <a href="https://www.gps.ie/"></a></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                @endisset
            </div>
        </div>
    </div>
</section>
<!-- Services 3 Area End Here  -->

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
    .track-title {
        border-bottom: 1px solid #ccc;
        padding: 3px 0;
        margin: 0 0 6px;
    }
    .track-title span {
        display: inline-block;
        color: #bbb;
        font-size: 18px;
        margin: 0 5px 0 0;
    }
    .track-title h4 {
        display: inline-block;
        margin: 0;
    }

    .trackstatus-title {
        border-bottom: 0px solid #ccc;
        padding: 3px 0;
        margin: 0 0 6px;
    }
    .trackstatus-title span {
        display: inline-block;
        color: #00ab4c;
        font-size: 18px;
        margin: 0 8px 0 0;
    }
    .trackstatus-title h4 {
        display: inline-block;
        margin: 0;
    }

    .mapstatus-title {
        border-bottom: 0px solid #ccc;
        padding: 3px 0;
        margin: 0 0 6px;
    }
    .mapstatus-title span {
        display: inline-block;
        color: #2962ff;
        font-size: 18px;
        margin: 0 8px 0 0;
    }
    .mapstatus-title h4 {
        display: inline-block;
        margin: 0;
    }
    .progress-container {
        height: 20px;
        position: relative;
    }

    /* Position the icon within the progress bar */
    .progress-icon {
        position: absolute;
        top: 0;
        left: 25%;
        transform: translate(-50%, -50%);
    }
</style>
<link rel="stylesheet" href="{{static_asset('front/css/track.css')}}">


@endsection

@section('page-header')
<section class="page-title-area breadcrumb-spacing" data-background="{{static_asset('front/img/breadcrumb/breadcrumb-bg.png')}}">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xxl-9">
             <div class="page-title-wrapper text-center">
                <h3 class="page-title mb-25">@yield('title')</h3>
                <div class="breadcrumb-menu">
                   <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                      <ul class="trail-items">
                         <li class="trail-item trail-begin"><a href="{{route('index')}}"><span>Home</span></a></li>
                         <li class="trail-item trail-end"><span>@yield('title')</span></li>
                      </ul>
                   </nav>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection
