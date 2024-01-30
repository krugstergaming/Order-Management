@extends('layout')


@section('main-content')
<link rel="stylesheet" href="order-asset\main-theme\cust-theme.css">

<!-- UniIcon CDN Link  -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

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
                    <div class="row second-row my-first-block">
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
                    </div>

                    <!-- Fillout Forms (for guests) -->
                    <div class = "row row-col border">
                        <div class="tray tray-center">
                            <!-- create new order panel -->
                            <div class="panel mb25 mt5">
                                <div class="panel-heading">
                                    <span class="panel-title hidden-xs">Customer Details</span>
                                    <ul class="nav panel-tabs-border panel-tabs">
                                        <li class="active">
                                            <a href="#tab1_1" data-toggle="tab">Customer</a>
                                        </li>
                                        <li>
                                            <a href="#tab1_3" data-toggle="tab">Shipping</a>
                                        </li>
                                    </ul>
                                </div>

                                
                                <div class="panel-body p25 pb5">
                                    <div class="tab-content pn br-n admin-form">
                                        <div id="tab1_1" class="tab-pane active">
                                            
                                            <!-- INPUT PANEL CUSTOMER INFO -->
                                            <div class="section row">
                                                <div class="col-md-6">
                                                    <label for="firstname" class="field prepend-icon">
                                                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="First name...">
                                                            <label for="firstname" class="field-icon">
                                                                <i class="fa fa-user"></i>
                                                            </label>
                                                    </label>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="email" class="field prepend-icon">
                                                        <input type="email" name="email" id="email" class="gui-input" placeholder="Email address">
                                                            <label for="email" class="field-icon">
                                                                <i class="fa fa-envelope"></i>
                                                            </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- end section -->

                                            <!-- Last name/ mobile number input -->
                                            <div class="section row">
                                                <div class="col-md-6">
                                                    <label for="lastname" class="field prepend-icon">
                                                        <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Last name...">
                                                            <label for="lastname" class="field-icon">
                                                                <i class="fa fa-user"></i>
                                                            </label>
                                                    </label>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="mobile" class="field prepend-icon">
                                                        <input type="tel" name="mobile" id="mobile" class="gui-input" placeholder="Telephone / moble number">
                                                        <label for="mobile" class="field-icon">
                                                            <i class="fa fa-phone-square"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- end section -->
                                        </div>
                        
                                        <!-- PANEL FOR ADDRESS FORM -->
                                        <div id="tab1_3" class="tab-pane">

                                            <div class="section">
                                                <label for="lastaddr" class="field prepend-icon">
                                                    <input type="text" name="lastaddr" id="lastaddr" class="gui-input" placeholder="Street address">
                                                    <label for="lastaddr" class="field-icon">
                                                        <i class="fa fa-map-marker"></i>
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="section row">
                                                <div class="col-md-3">
                                                    <label for="zip" class="field prepend-icon">
                                                        <input type="text" name="zip" id="zip" class="gui-input" placeholder="Zip">
                                                        <label for="zip" class="field-icon">
                                                            <i class="fa fa-certificate"></i>
                                                        </label>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="city" class="field prepend-icon">
                                                        <input type="text" name="city" id="city" class="gui-input" placeholder="City">
                                                        <label for="city" class="field-icon">
                                                            <i class="fa fa-building-o"></i>
                                                        </label>
                                                    </label>
                                                </div>
                                                <!-- end section -->
                                            </div>

                                            <!-- end section row section -->
                                            <div class="section row mbn">
                                                <div class="col-sm-8">
                                                    <label class="field option mt10">
                                                        <input type="checkbox" name="info" checked>
                                                            <span class="checkbox"></span>Save Details
                                                            <em class="small-text text-muted">- A Random Unique ID will be generated</em>
                                                    </label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <p class="text-right">
                                                        <button class="btn btn-primary" type="button">Save Detail</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "row row-col">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Order ID</th>
                                <th scope="col">Product</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>01/29/24</td>
                                    <td>Otto</td>
                                    <td>Shoes</td>
                                    <td><span class="badge badge-pill badge-primary">Pending</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>01/29/24</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td><span class="badge badge-pill badge-success">Recieved</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>01/29/24</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td><span class="badge badge-pill badge-success">Recieved</span></td>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>01/29/24</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td><span class="badge badge-pill badge-success">Recieved</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>01/29/24</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td><span class="badge badge-pill badge-success">Recieved</span></td>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>01/29/24</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td><span class="badge badge-pill badge-success">Recieved</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- jQuery (Bootstrap 3) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <!-- jQuery -->
        <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
        <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

        <!-- Admin Forms JS -->
        <script src="order-asset/admin-tools/admin-forms/js/jquery-ui-datepicker.min.js"></script>

        <!-- Theme Javascript -->
        <script src="{{ asset('order-asset/js/cust.js') }}"></script>
        <script src="order-asset/js/utility/utility.js"></script>
        <script src="order-asset/js/demo/demo.js"></script>
        <script src="order-asset/js/main.js"></script>

    </body>
</html>
@endsection