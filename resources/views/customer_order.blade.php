@extends('layout')


@section('main-content')
<link rel="stylesheet" href="{{asset('order-asset\main-theme\cust-theme.css')}}">

<!-- UniIcon CDN Link  -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<!-- Paginate CDN Link -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">

<body>
    <!-- <div class="main"> -->
        
            <div class="row flex-nowrap">

                <!-- SIDEBAR MENU -->

                <div class="col-lg-2 col-md-2 col-sm-2 min-vh-100 class1">
                    <a class="d-flex text-decoration-none align-items-center">
                        <span class="fs-d"><h3>SideMenu</h3></span>
                    </a>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="uil uil-user sidebar"></i>
                                <span class="fs-4 ms-3 d-done d-sm-inline sidetext">My Account</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="uil uil-transaction sidebar"></i>
                                <span class="fs-4 ms-3 d-done d-sm-inline sidetext">Purchases</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="uil uil-shopping-cart-alt sidebar"></i>
                                <span class="fs-4 ms-3 d-done d-sm-inline sidetext">Add To Cart</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="uil uil-bell sidebar"></i>
                                <span class="fs-4 ms-3 d-done d-sm-inline sidetext">Notifications</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Order Processing Status -->

                <div class="col border">
                    {{-- <div class="row second-row my-first-block">
                        <ul>
                            <li>
                                <i class="icon uil uil-capture"></i>
                                <div class="progress one">
                                    <p>1</p>
                                    <i class="uil uil-check"></i>
                                </div>
                                <p class="text">Order Confirmed</p>
                            </li>
                            <li>
                                <i class="icon uil uil-clipboard-notes"></i>
                                <div class="progress two">
                                    <p>2</p>
                                    <i class="uil uil-check"></i>
                                </div>
                                <p class="text">Preparing Order</p>
                            </li>
                            <li>
                                <i class="icon uil uil-credit-card"></i>
                                <div class="progress three">
                                    <p>3</p>
                                    <i class="uil uil-check"></i>
                                </div>
                                <p class="text">Shipping Order</p>
                            </li>
                            <li>
                                <i class="icon uil uil-exchange"></i>
                                <div class="progress four">
                                    <p>4</p>
                                    <i class="uil uil-check"></i>
                                </div>
                                <p class="text">In Shippment</p>
                            </li>
                            <li>
                                <i class="icon uil uil-map-marker"></i>
                                <div class="progress five">
                                    <p>5</p>
                                    <i class="uil uil-check"></i>
                                </div>
                                <p class="text">Order Arrived</p>
                            </li>
                        </ul>
                    </div> --}}

                    <!-- Fillout Forms (for guests) -->
                    <div class = "row row-col border">
                        <div class="tray tray-center">
                            <!-- create new order panel -->
                            <div class="panel mb25 mt5">
                                {{-- <div class="panel-heading">
                                    <span class="panel-title hidden-xs">Customer Details</span>
                                    <ul class="nav panel-tabs-border panel-tabs">
                                        <li class="active">
                                            <a href="#tab1_1" data-toggle="tab">Customer</a>
                                        </li>
                                        <li>
                                            <a href="#tab1_3" data-toggle="tab">Shipping</a>
                                        </li>
                                    </ul>
                                </div> --}}

                                
                                <div class="panel-body p25 pb5">
                                    <div class="tab-content pn br-n admin-form">
                                        <div id="tab1_1" class="tab-pane active">

                                            <div class="panel-body p25 pb5">
                                                <div class="tab-content pn br-n admin-form">
            
                                                        <!-- INPUT PANEL CUSTOMER INFO -->
                                                        <div class="section row">
                                                            <div class="col-md-6">
                                                                <label>
                                                                    Name: {{ $customerDetails->FirstName . ' ' .  $customerDetails->LastName }}
                                                                </label>
                                                            </div>
            
                                                            <div class="col-md-6">
                                                                <label>
                                                                    Email: {{ $customerDetails->Email }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!-- end section -->
            
                                                        <div class="section row">
                                                            <div class="col-md-6">
                                                                <label>
                                                                    Address: {{ $customerDetails->Address }}
                                                                </label>
                                                            </div>
            
                                                            <div class="col-md-6">
                                                                <label>
                                                                    Phone: {{ $customerDetails->Phone }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!-- end section -->
                                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class = "row row-col">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">ORDER ID</th>
                                <th scope="col">PRODUCT NAME</th>
                                <th scope="col">ORDER STATUS</th>
                                <th scope="col">DETAILS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @forelse ($orderItems as $item)
                                    <td>{{ $item->OrderItemID}}</td>
                                    <td>{{ $item->product->ProductName }}</td>
                                    <td>
                                        @switch($item->order->OrderStatus)
                                            @case('Confirmed')
                                                <span class="bg-success text-white px-2 py-1 rounded">{{ $item->order->OrderStatus }}</span>
                                                @break
                                            @case('Processing')
                                                <span class="bg-warning text-dark px-2 py-1 rounded">{{ $item->order->OrderStatus }}</span>
                                                @break
                                            @case('Shipping')
                                                <span class="bg-primary text-white px-2 py-1 rounded">{{ $item->order->OrderStatus }}</span>
                                                @break
                                            @case('In-Delivery')
                                                <span class="bg-info text-dark px-2 py-1 rounded">{{ $item->order->OrderStatus }}</span>
                                                @break
                                            @case('Received')
                                                <span class="bg-info text-white px-2 py-1 rounded">{{ $item->order->OrderStatus }}</span>
                                                @break
                                            @case('Returned')
                                                <span class="bg-danger text-white px-2 py-1 rounded">{{ $item->order->OrderStatus }}</span>
                                                @break
                                            @default
                                                {{ $item->order->OrderStatus }}
                                        @endswitch
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal"   
                                        data-order-date="{{ $item->order->OrderDate }}"   
                                        data-shipment-date="{{ $item->shipment->ShipmentDate }}"   
                                        data-subtotal="{{ $item->Subtotal }}"   
                                        data-order-item-id="{{ $item->OrderItemID }}"> <!-- Added this line -->
                                        View
                                    </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3">There are no user!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        @if ($orderItems->hasPages())
                        <div class="d-flex justify-content-end">
                            {!! $orderItems->links() !!}
                        </div>
                        @endif
                    
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details -->
        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailModalLabel">Order Item Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Order Date:</strong> <span id="orderDate"></span></p>
                        <p><strong>Shipment Date:</strong> <span id="shipmentDate"></span></p>
                        <p><strong>Subtotal:</strong> <span id="subtotal"></span></p>
                        <p><strong>ID:</strong> <span id="order-item-id"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!-- Additional buttons if needed -->
                    </div>
                </div>
            </div>
        </div>

        <!-- SCRIPTS -->
        <script>
        $(document).ready(function () {
            $('#detailModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var orderDate = button.data('order-date');
                var shipmentDate = button.data('shipment-date');
                var subtotal = button.data('subtotal');
                var orderItemId = button.data('order-item-id'); // Retrieve OrderItemID

                var modal = $(this);
                modal.find('#orderDate').text(orderDate);
                modal.find('#shipmentDate').text(shipmentDate);
                modal.find('#subtotal').text(subtotal);
                // Assuming you have an element with id 'orderItemId' in your modal to show the OrderItemID
                modal.find('#orderItemId').text(orderItemId); // Display OrderItemID in the modal body
            });
        });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <!-- Admin Forms JS -->
        <script src="{{ asset('order-asset/admin-tools/admin-forms/js/jquery-ui-datepicker.min.js') }}"></script>
        <!-- Theme Javascript -->
        <script src="{{ asset('order-asset/js/cust.js') }}"></script>
        <script src="{{ asset('order-asset/js/utility/utility.js') }}"></script>
        <script src="{{ asset('order-asset/js/demo/demo.js') }}"></script>
        <script src="{{ asset('order-asset/js/main.js') }}"></script>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>



    </body>
</html>
@endsection