  @extends('layout')


  @section('main-content')

  <body class="ecommerce-page">

    <!-- Start: Main -->
    <div id="main">

        <!-- Begin: Content -->
        <section id="content" class="table-layout animated fadeIn">

          <!-- begin: .tray-center -->
          <div class="tray tray-center">

            <!-- recent orders table -->
            <div class="panel">

              <div class="panel-body pn">
                <div class="table-responsive">
                  <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                    <thead>
                      <tr>
                      <th scope="col">#</th>
                      <th scope="col">Order Date</th>
                      <th scope="col">Shipment Date</th>
                      <th scope="col">Full Name</th>
                      <th scope="col">Product</th>
                      <th scope="col">Payment Type</th>
                      <th scope="col">Order Status</th>
                      <th scope="col">Update Status</th>
                      </tr>
                  </thead>
                    <tbody>
                      <tr>
                          @foreach ($orderItems as $item)
                          <!-- Display order item details -->
                          <td>{{ $item->OrderItemID }}</td>
                          <td>{{ $item->order->OrderDate }}</td>
                          <td>{{ $item->shipment->ShipmentDate}}</td>
                          <!-- Display customer details -->
                          <td>{{ $item->order->customer->FirstName . ', ' . $item->order->customer->LastName}}</td>
                          <td>{{ $item->product->ProductName }}</td>
                          <td>{{ $item->Subtotal}}</td>
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

                            <form action="{{ url("/order/{$item->OrderItemID}/status") }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="status" onchange="this.form.submit()">
                                    @foreach (App\Models\OrderSummary::ORDER_STATUSES as $status)
                                        <option value="{{ $status }}" {{ $item->order->OrderStatus === $status ? 'selected' : '' }}>{{ ucfirst($status) }}</option>
                                    @endforeach
                                </select>
                            </form>
                            
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <!-- end: .tray-center -->

          <!-- begin: .tray-right -->
          <aside class="tray tray-right tray290">

            <!-- menu quick links -->
            <div class="admin-form">

              <h4> Filter Orders</h4>

              <hr class="short">

              <div class="section mb15">
                <label for="order-id" class="field prepend-icon">
                  <input type="text" name="order-id" id="order-id" class="gui-input" placeholder="Order ID #">
                  <label for="order-id" class="field-icon">
                    <i class="fa fa-tag"></i>
                  </label>
                </label>
              </div>

              <h5><small>Price Range($)</small></h5>
              <div class="section row mb15">
                <div class="col-md-6">
                  <label for="price1" class="field prepend-icon">
                    <input type="text" name="price1" id="price1" class="gui-input" placeholder="0">
                    <label for="price1" class="field-icon">
                      <i class="fa fa-usd"></i>
                    </label>
                  </label>
                </div>
                <div class="col-md-6">
                  <label for="price2" class="field prepend-icon">
                    <input type="text" name="price2" id="price2" class="gui-input" placeholder="1000">
                    <label for="price2" class="field-icon">
                      <i class="fa fa-usd"></i>
                    </label>
                  </label>
                </div>
              </div>

              <h5><small>Sales Date</small></h5>
              <div class="section row">
                <div class="col-md-6">
                  <label for="date1" class="field prepend-icon">
                    <input type="text" name="date1" id="date1" class="gui-input" placeholder="01/01/15">
                    <label for="date1" class="field-icon">
                      <i class="fa fa-calendar"></i>
                    </label>
                  </label>
                </div>
                <div class="col-md-6">
                  <label for="date2" class="field prepend-icon">
                    <input type="text" name="date2" id="date2" class="gui-input" placeholder="01/31/15">
                    <label for="date2" class="field-icon">
                      <i class="fa fa-calendar"></i>
                    </label>
                  </label>
                </div>
              </div>

              <h5><small>Search Categories</small></h5>
              <div class="section mb15">
                <label class="field select">
                  <select id="filter-categories" name="filter-categories">
                    <option value="0" selected="selected">Filter by Categories</option>
                    <option value="1">Electronics</option>
                    <option value="2">Software</option>
                  </select>
                  <i class="arrow double"></i>
                </label>
              </div>

              <h5><small>Search Customers</small></h5>
              <div class="section">
                <label class="field select">
                  <select id="filter-customers" name="filter-customers">
                    <option value="0" selected="selected">Filter by Customer</option>
                    <!-- data -->
                    <option value="1">Michael</option>
                    <option value="2">David</option>
                    <option value="3">Sara</option>
                    <option value="4">Tasha</option>
                  </select>
                  <i class="arrow double"></i>
                </label>
              </div>

              <hr class="short">

              <div class="section">
                  <button class="btn btn-default btn-sm ph25" type="button">Search</button>
                  <label class="field option ml15">
                    <input type="checkbox" name="info">
                    <span class="checkbox"></span>
                    <span class="text-muted">Save Search</span>
                  </label>
              </div>

            </div>

          </aside>
          <!-- end: .tray-right -->

        </section>
        <!-- End: Content -->

      </section>

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Admin Forms JS -->
    <script src="order-asset/admin-tools/admin-forms/js/jquery-ui-datepicker.min.js"></script>

    <!-- Theme Javascript -->
    <script src="assets/js/utility/utility.js"></script>
    <script src="assets/js/demo/demo.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function() {

      "use strict";

      // Init Theme Core    
      Core.init();

      // Init Demo JS  
      Demo.init();

      // select dropdowns - placeholder like creation
      var selectList = $('.admin-form select');
      selectList.each(function(i, e) {
        $(e).on('change', function() {
          if ($(e).val() == "0") $(e).addClass("empty");
          else $(e).removeClass("empty")
        });
      });
      selectList.each(function(i, e) {
        $(e).change();
      });

      // Init datepicker widget
      $('#filter-datepicker').datepicker({
        numberOfMonths: 1,
        showOn: 'both',
        buttonText: '<i class="fa fa-calendar-o"></i>',
        prevText: '<i class="fa fa-chevron-left"></i>',
        nextText: '<i class="fa fa-chevron-right"></i>',
        beforeShow: function(input, inst) {
          var newclass = 'admin-form';
          var themeClass = $(this).parents('.admin-form').attr('class');
          var smartpikr = inst.dpDiv.parent();
          if (!smartpikr.hasClass(themeClass)) {
            inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
          }
        }
      });

    });
    </script>
    <!-- END: PAGE SCRIPTS -->
  </body>

  @endsection
