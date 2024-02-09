@extends('layout')


@section('main-content')

<body class="ecommerce-page">

  <!-- Start: Main -->
  <div id="main">

      <!-- Start: Topbar -->
      <header id="topbar" class="ph10">
        <div class="topbar-left">
          <ul class="nav nav-list nav-list-topbar pull-left">
            <li>
              <a href="{{url('/')}}">Home Page</a>
            </li>
            <li>
              <a href="#">Products</a>
            </li>
            <li class="active">
              <a href="#">Orders</a>
            </li>
            <li>
              <a href="#">Customers</a>
            </li>
            <li>
              <a href="#">Settings</a>
            </li>
          </ul>
        </div>
      </header>
      <!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">

        <!-- begin: .tray-center -->
        <div class="tray tray-center">

          <!-- recent orders table -->
          <div class="panel">
            <div class="panel-menu admin-form theme-primary">
              <div class="row">
                <div class="col-md-4">
                  <label for="filter-datepicker" class="field prepend-picker-icon">
                    <input type="text" value="02/03/2015" id="filter-datepicker" name="filter-datepicker" class="gui-input" placeholder="Filter by Date">
                  </label>
                </div>
                <div class="col-md-4">
                  <label class="field select">
                    <select id="filter-status" name="filter-status">
                      <option value="0">Filter by Status</option>
                      <option value="1">Edit</option>
                      <option value="2">Delete</option>
                      <option value="3">Active</option>
                      <option value="4">Inactive</option>
                    </select>
                    <i class="arrow double"></i>
                  </label>
                </div>
                <div class="col-md-4">
                  <label class="field select">
                    <select id="filter-customer" name="filter-customer">
                      <option value="0">Filter Customer</option>
                      <option value="1">Alan</option>
                      <option value="2">Susan</option>
                      <option value="3">Louis</option>
                      <option value="4">Randy</option>
                    </select>
                    <i class="arrow double"></i>
                  </label>
                </div>
              </div>
            </div>
            <div class="panel-body pn">
              <div class="table-responsive">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                  <thead>
                    <tr class="bg-light">
                      <th class="text-center">Select</th>
                      <th class="">Order Date</th>
                      <th class="">Order ID</th>
                      <th class="">Customer</th>
                      <th class="">Notes</th>
                      <th class="text-center">Order Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                        <span>Louis Renold</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="#">Edit</a>
                            </li>
                            <li>
                              <a href="#">Delete</a>
                            </li>
                            <li>
                              <a href="#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="#">Pending</a>
                            </li>
                            <li>
                              <a href="#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                        <span>Louis Renold</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="#">Edit</a>
                            </li>
                            <li>
                              <a href="#">Delete</a>
                            </li>
                            <li>
                              <a href="#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="#">Pending</a>
                            </li>
                            <li>
                              <a href="#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/2.jpg">
                        <span>Sara Loft</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-info br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Pending
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="#">Edit</a>
                            </li>
                            <li>
                              <a href="#">Delete</a>
                            </li>
                            <li>
                              <a href="#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="#">Pending</a>
                            </li>
                            <li>
                              <a href="#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/3.jpg">
                        <span>Frank Roles</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="#">Edit</a>
                            </li>
                            <li>
                              <a href="#">Delete</a>
                            </li>
                            <li>
                              <a href="#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="#">Pending</a>
                            </li>
                            <li>
                              <a href="#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/4.jpg">
                        <span>Michael Runes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="#">Edit</a>
                            </li>
                            <li>
                              <a href="#">Delete</a>
                            </li>
                            <li>
                              <a href="#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="#">Pending</a>
                            </li>
                            <li>
                              <a href="#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/5.jpg">
                        <span>Amanda Marshall</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="#">Edit</a>
                            </li>
                            <li>
                              <a href="#">Delete</a>
                            </li>
                            <li>
                              <a href="#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="#">Pending</a>
                            </li>
                            <li>
                              <a href="#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                        <span>Terry Planes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="#">Edit</a>
                            </li>
                            <li>
                              <a href="#">Delete</a>
                            </li>
                            <li>
                              <a href="#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="#">Pending</a>
                            </li>
                            <li>
                              <a href="#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/4.jpg">
                        <span>Michael Runes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Completed
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="#">Edit</a>
                            </li>
                            <li>
                              <a href="#">Delete</a>
                            </li>
                            <li>
                              <a href="#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="#">Pending</a>
                            </li>
                            <li>
                              <a href="#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/5.jpg">
                        <span>Amanda Marshall</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Archived
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="#">Edit</a>
                            </li>
                            <li>
                              <a href="#">Delete</a>
                            </li>
                            <li>
                              <a href="#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="#">Pending</a>
                            </li>
                            <li>
                              <a href="#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                        <span>Terry Planes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-warning br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Archived
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="#">Edit</a>
                            </li>
                            <li>
                              <a href="#">Delete</a>
                            </li>
                            <li>
                              <a href="#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="#">Pending</a>
                            </li>
                            <li>
                              <a href="#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/5.jpg">
                        <span>Amanda Marshall</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="#">Edit</a>
                            </li>
                            <li>
                              <a href="#">Delete</a>
                            </li>
                            <li>
                              <a href="#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="#">Pending</a>
                            </li>
                            <li>
                              <a href="#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                        <span>Terry Planes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="#">Edit</a>
                            </li>
                            <li>
                              <a href="#">Delete</a>
                            </li>
                            <li>
                              <a href="#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="#">Pending</a>
                            </li>
                            <li>
                              <a href="#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="">
                        <label class="option block mn">
                          <input type="checkbox" name="mobileos" value="FR">
                          <span class="checkbox mn"></span>
                        </label>
                      </td>
                      <td class="">
                        01/11/2015
                      </td>
                      <td class="">#50362061</td>
                      <td class="w175">
                        <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/avatars/1.jpg">
                        <span>Terry Planes</span>
                      </td>
                      <td class="">Lorem ipsum dolor sit amet, adipiscing eli</td>
                      <td class="text-right">
                        <div class="btn-group text-right">
                          <button type="button" class="btn btn-danger br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Canceled
                            <span class="caret ml5"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="ecommerce_orders#">Edit</a>
                            </li>
                            <li>
                              <a href="ecommerce_orders#">Delete</a>
                            </li>
                            <li>
                              <a href="ecommerce_orders#">Archive</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="ecommerce_orders#">Complete</a>
                            </li>
                            <li class="active">
                              <a href="ecommerce_orders#">Pending</a>
                            </li>
                            <li>
                              <a href="ecommerce_orders#">Canceled</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
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
