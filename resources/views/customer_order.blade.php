@extends('layout')


@section('main-content')
<link rel="stylesheet" href="{{asset('order-asset\main-theme\cust-theme.css')}}">

<!-- UniIcon CDN Link  -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<!-- Bootstrap 5 CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<!-- Data Table CSS -->
<link rel='stylesheet' href='https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>

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
                            <a href="#1" class="nav-link text-white">
                                <i class="uil uil-user sidebar"></i>
                                <span class="fs-4 ms-3 d-done d-sm-inline sidetext">My Account</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a href="#2" class="nav-link text-white">
                                <i class="uil uil-transaction sidebar"></i>
                                <span class="fs-4 ms-3 d-done d-sm-inline sidetext">Purchases</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a href="#3" class="nav-link text-white">
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

                <!-- ORDER PROCESSING STATUS -->

                <div class="col border">
                    <div class = "row row-col">
                        <table id="example" class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">ORDER ID</th>
                                <th scope="col">PRODUCT NAME</th>
                                <th scope="col">ORDER STATUS</th>
                                <th scope="col">DETAILS</th>
                                <th scope="col">TO RATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @forelse ($orderItems as $index => $item)
                                    <td>{{ $index + 1 }}</td>
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

                                    <!-- [PRODUCT DETAILS] TRIGGERED VIA VIEW BUTTON -->
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal"   
                                        data-order-date="{{ $item->order->OrderDate }}"   
                                        data-shipment-date="{{ $item->shipment->ShipmentDate }}"   
                                        data-subtotal="{{ $item->Subtotal }}"   
                                        data-order-item-id="{{ $item->OrderItemID }}"
                                        data-order-status="{{ $item->order->OrderStatus }}"> <!-- Added this line -->
                                        
                                        View
                                        </button>
                                    </td>

                                    <!-- REDIRECT TO RATINGS AND REVIEWS -->
                                    <td>
                                        <button type="button" class="btn btn-dark">Rate
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3">No orders were made</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- @if ($orderItems->hasPages())
                        <div class="d-flex justify-content-end">
                            {!! $orderItems->links() !!}
                        </div>
                        @endif --}}
                    
                    </div>
                </div>
            </div>

        <!-- [PRODUCT DETAILS] PRODUCT DETAIL WHEN PRESSING VIEW BUTTON -->
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
                        <button type="button" class="btn btn-secondary return-refund-button">Return/Refund</button>
                        <button type="button" class="btn btn-danger cancel-button">Cancel Order</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!-- Additional buttons if needed -->
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src='https://code.jquery.com/jquery-3.7.0.js'></script>
        <!-- [PRODUCT DETAILS] SCRIPT INCLUDES CANCEL/ RETRUN BUTTON-->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Get the modal element
                var modal = document.getElementById('detailModal');

                // Listen for the show.bs.modal event
                modal.addEventListener('show.bs.modal', function(event) {
                    // Button that triggered the modal
                    var button = event.relatedTarget;

                    // Extract data from the button
                    var orderDate = button.getAttribute('data-order-date');
                    var shipmentDate = button.getAttribute('data-shipment-date');
                    var subtotal = button.getAttribute('data-subtotal');
                    var orderId = button.getAttribute('data-order-item-id');

                    // Update modal content
                    document.getElementById('orderDate').textContent = orderDate;
                    document.getElementById('shipmentDate').textContent = shipmentDate;
                    document.getElementById('subtotal').textContent = subtotal;
                    document.getElementById('order-item-id').textContent = orderId;

                    // Update button based on order status
                    var orderStatus = button.getAttribute('data-order-status');
                    var returnRefundButton = modal.querySelector('.return-refund-button');
                    var cancelButton = modal.querySelector('.cancel-button');

                    if (orderStatus === 'Received') {
                        returnRefundButton.style.display = 'inline-block';
                        cancelButton.style.display = 'none';
                    } else if (orderStatus === 'Confirmed') {
                        returnRefundButton.style.display = 'none';
                        cancelButton.style.display = 'inline-block';
                    } else {
                        returnRefundButton.style.display = 'none';
                        cancelButton.style.display = 'none';
                    }
                });
            });
        </script>

        <!-- SCRIPT FOR DATATABLE AND SEARCH -->
        <script>
            $(document).ready(function() {
            $('#example').DataTable({
            //disable sorting on last column
            "pageLength": 6, // Set default page length to 7
            "columnDefs": [
                { "orderable": false, "targets": 4 }
            ],
            language: {
                //customize pagination prev and next buttons: use arrows instead of words
                'paginate': {
                'previous': '<span class="fa fa-chevron-left"></span>',
                'next': '<span class="fa fa-chevron-right"></span>'
                },
                //customize number of elements to be displayed
                "lengthMenu": 'Display <select class="form-control input-sm">'+
                '<option value="6">6</option>'+ // Set default to 7
                // '<option value="20">20</option>'+
                // '<option value="30">30</option>'+
                // '<option value="40">40</option>'+
                // '<option value="50">50</option>'+
                // '<option value="-1">All</option>'+
                '</select> results',
                
            }
            })  
            } );
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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