<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Invoice - {{get_setting('title')}} </title>

    <link rel="stylesheet" href="{{static_asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/fontAwesome5Pro.css')}}">
    <link rel="stylesheet" href="{{static_asset('front/css/print.css')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{my_asset(get_setting('favicon'))}}">
    <style>
        .bkg-img, body {
            background-image: url('https://img.freepik.com/premium-vector/abstract-blue-geometric-technology-background_41814-239.jpg?w=900');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="body-wrapper sbkg-img">
        <div class="bodywrapper__inner">
            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Print Invoice </h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <a href="#" class="btn btn-sm btn-outline--primary"> <i class="fa fa-undo"></i> Back</a>
                </div>
            </div>

            <div class="card bkg-img">
                <div class="card-body">
                    <div id="printInvoice" class="mt-3 bkg-img">
                        <table width="100%">
                            <tbody>
                                <tr>
                                    <td style="border: 0; text-align: left;" width="18%">
                                        <div id="logo">
                                            <img src="{{my_asset(get_setting('logo'))}}" alt="{{get_setting('title')}}" width="150" height="45" />
                                        </div>
                                    </td>
                                    <td style="border: 0; text-align: center;" width="50%">
                                        {{-- TIN: 800124570-87 <br /> --}}
                                        Phone: {{get_setting('phone')}}<br />
                                        Email: {{get_setting('email')}}<br />
                                        Street: {{get_setting('address')}}
                                    </td>
                                    <td style="border: 0; text-align: center;" width="48%">
                                        <br />
                                        <div class="">{!! DNS1D::getBarcodeHTML($shipment->code, 'C128') !!}</div>
                                        {{$shipment->code}}

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="content-header">
                            <h3>
                                Invoice Number :
                                <small>#{{$shipment->code}}</small>
                                <br />
                                Date: {{show_datetime($shipment->shipment_date)}}
                                <br />
                                Estimate Delivery Date : {{show_date($shipment->delivery_date)}}
                            </h3>
                        </div>

                        <div class="invoice">
                            <div class="d-flex justify-content-between mt-3">
                                <div class="text-center">
                                    <span> </span>
                                </div>
                                <div>
                                    <b>Order ID : {{$shipment->code}}</b><br />


                                </div>
                            </div>
                            <hr />

                            <td style="border: 1; text-align: left;" width="20%">PACKAGE INFORMATION</td>
                            <div class="invoice-info d-flex justify-content-between">
                                <div>
                                    From
                                    <address>
                                        <strong>{{$shipment->sender_name}}</strong><br />
                                        Address: {{$shipment->sender_address}}<br />
                                        Phone: {{$shipment->sender_phone}}<br />
                                        Email: {{$shipment->sender_email}}
                                    </address>
                                </div>
                                <div>
                                    To
                                    <address>
                                        <strong>{{$shipment->receiver_name}}</strong><br />
                                        Address: {{$shipment->receiver_address}}<br />
                                        Phone: {{$shipment->receiver_phone}}<br />
                                        Email: {{$shipment->receiver_email}}
                                    </address>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Qty</th>
                                                <th>Courier Type</th>
                                                <th>Description</th>
                                                <th>Sending Time</th>
                                                {{-- <th>Price</th> --}}
                                                <th>Payment</th>
                                                {{-- <th>Subtotal</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="#">1</td>
                                                <td data-label="Courier Type"><span class="badge bg-info"> {{$shipment->package_type}} </span> </td>
                                                <td>{{$shipment->description}}</td>
                                                <td data-label="Sending Time">{{show_datetime1($shipment->shipment_date)}}</td>
                                                {{-- <td data-label="Price">$5,000.00</td> --}}
                                                <td data-label="Status"><b class="badge fw-bold bg-info">{{payment_status($shipment->payment_status)}}</b></td>
                                                {{-- <td data-label="Subtotal">$5,000.00</td> --}}
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <hr />
                        </div>
                    </div>
                    <div class="row no-print">
                        <div class="col-sm-12">
                            <div class="float-sm-end">
                                <button class="btn btn-outline-primary printInvoice"><i class="fas fa-download mx-3"></i>Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bodywrapper__inner end -->
    </div>




    <script src="https://script.viserlab.com/courierlab/assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/assets/global/js/bootstrap.bundle.min.js"></script>

    <script src="https://script.viserlab.com/courierlab/assets/viseradmin/js/printThis.js"></script>

    <script>
        (function($) {
            "use strict";
            $('.printInvoice').click(function() {
                $("#printInvoice").printThis();
            });
        })(jQuery)
    </script>
</body>
</html>
