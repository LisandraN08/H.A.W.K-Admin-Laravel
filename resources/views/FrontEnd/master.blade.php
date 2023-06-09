<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/libs/css/style.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css" />
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css" />
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-ABC123" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-ABC123" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.3/font/bootstrap-icons.css" integrity="sha384-ABC123" crossorigin="anonymous" />

    <title>H.A.W.K Admin page</title>

    <!-- favicon -->
    <link href="../assets/images/favicon (3).ico" rel="icon" class="favIcon" />

    <style>
      .btn-primary {
        background-image: linear-gradient(to right, #5969ff, #717fe0);
        border-color: #5969ff;
        color: #ffffff;
        transition: transform 0.3s;
      }

      .btn-primary:hover {
        transform: scale(1.03);
        color: white;
      }
    </style>
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
      <!-- ============================================================== -->
      <!-- navbar -->
      <!-- ============================================================== -->
      <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
          <a style="color: black" class="navbar-brand" href="index.html"><img src="../assets/images/logo.png" style="width: 50px; height: 50px" /><span>H.A.W.K Admin</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
              <li class="nav-item">
                <div id="custom-search" class="top-search-bar">
                  <input class="form-control" type="text" placeholder="Search.." />
                </div>
              </li>
              <li class="nav-item dropdown notification">
                <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                  <li>
                    <div class="notification-title">Notification</div>
                    <div class="notification-list">
                      <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                          <div class="notification-info">
                            <div class="notification-list-user-img"><img src="../assets/images/ready-stock.png" alt="" class="user-avatar-md rounded-circle" /></div>
                            <div class="notification-list-user-block">
                              <span class="notification-list-user-name">Bryan</span>had just restocked!
                              <div class="notification-date">2 min ago</div>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="notification-info">
                            <div class="notification-list-user-img"><img src="../assets/images/cust.png" alt="" class="user-avatar-md rounded-circle" /></div>
                            <div class="notification-list-user-block">
                              <span class="notification-list-user-name">New customer alert!</span>
                              <div class="notification-date">10 min ago</div>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="notification-info">
                            <div class="notification-list-user-img"><img src="../assets/images/shopping-bag.png" alt="" class="user-avatar-md rounded-circle" /></div>
                            <div class="notification-list-user-block">
                              <span class="notification-list-user-name">New order is made!</span>
                              <div class="notification-date">2 days ago</div>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="notification-info">
                            <div class="notification-list-user-img"><img src="../assets/images/ready-stock.png" alt="" class="user-avatar-md rounded-circle" /></div>
                            <div class="notification-list-user-block">
                              <span class="notification-list-user-name">Dana</span>had just restocked!
                              <div class="notification-date">10 days ago</div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="list-footer" style="background-image: linear-gradient(to right, #000000, #1a1a1a)"><a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li>

              <li class="nav-item dropdown nav-user">
                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                  ><img src="../assets/images/user(3).png" alt="" class="user-avatar-md rounded-circle"
                /></a>
                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                  <div class="nav-user-info" style="background-image: linear-gradient(to right, #000000, #1a1a1a)">
                    <h5 class="mb-0 text-white nav-user-name">Winnie</h5>
                    <span class="status"></span><span class="ml-2">Owner</span>
                  </div>
                  <a class="dropdown-item" href="my-profile.html"><i class="fas fa-user mr-2"></i>My profile</a>
                  <a class="dropdown-item" href="pages/login.html"><i class="fas fa-power-off mr-2"></i>Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- ============================================================== -->
      <!-- end navbar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- left sidebar -->
      <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="index.html">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav flex-column">
                <li class="nav-divider">Menu</li>
                <li class="nav-item">
                  <a class="nav-link active" href="index.html" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle" href="index.html"></i>Dashboard <span class="badge badge-success">6</span></a>
                  <div id="submenu-1" class="collapse submenu">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                        <div id="submenu-1-2" class="collapse submenu">
                          <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link">H.A.W.K Dashboard</a>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-table"></i>Table</a>
                  <div id="submenu-2" class="collapse submenu">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link" href="categoryTable.html">Category <span class="badge badge-secondary">New</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="shipperTable.html">Shipper</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="staffTable.html">Staff</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="productTable.html">Product</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="orderTable.html">Order</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="orderDetailTable.html">Order Details</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-archive"></i>Inventory</a>
                  <div id="submenu-3" class="collapse submenu">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link" href="Restock.html">Input Stock</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/availability.html">Availability</a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-fw fa-calendar-alt"></i>Schedule</a>
                  <div id="submenu-4" class="collapse submenu">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link" href="pages/sortable-nestable-lists.html">To-do List</a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="nav-divider">Others</li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-comments"></i>Social Media </a>
                  <div id="submenu-6" class="collapse submenu">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link" href="pages/404-page.html">Instagram</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/404-page.html">Facebook</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/404-page.html">Linkedin</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/404-page.html">Whatsapp Group</a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="my-profile.html" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-user"></i>My Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-liqnk" href="pages/login.html" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-fw fa-sign-out-alt"></i>Logout</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- end left sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- wrapper  -->
      <!-- ============================================================== -->
      <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                  <h2 class="pageheader-title">H.A.W.K Dashboard</h2>
                  <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                  <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">H.A.W.K Dashboard</li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="text-muted">Total Revenue</h5>
                      <div class="metric-value d-inline-block">
                        <h1 class="mb-1">3.200</h1>
                      </div>
                      <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                        <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                      </div>
                    </div>
                    <div id="sparkline-revenue"></div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="text-muted">Items Sold</h5>
                      <div class="metric-value d-inline-block">
                        <h1 class="mb-1">200</h1>
                      </div>
                      <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                        <span>-1.72%</span>
                      </div>
                    </div>
                    <div id="sparkline-revenue2"></div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="text-muted">Completed orders</h5>
                      <div class="metric-value d-inline-block">
                        <h1 class="mb-1">150</h1>
                      </div>
                      <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                        <span>-3.10%</span>
                      </div>
                    </div>
                    <div id="sparkline-revenue3"></div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="text-muted">Total Customers</h5>
                      <div class="metric-value d-inline-block">
                        <h1 class="mb-1">190</h1>
                      </div>
                      <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                        <span>-2.00%</span>
                      </div>
                    </div>
                    <div id="sparkline-revenue4"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- ============================================================== -->

                <!-- ============================================================== -->

                <!-- recent orders  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <h5 class="card-header">Recent Orders</h5>
                    <div class="card-body p-0">
                      <div class="table-responsive">
                      <table class="table">
                        <thead class="bg-light">
                          <tr class="border-0">
                            <th class="border-0">Product Name</th>
                            <th class="border-0">Price</th>
                            <th class="border-0">Quantity</th>
                            <th class="border-0">Total Price</th>
                            <th class="border-0">Order Created</th>
                            <th class="border-0">Customer Name</th>
                            <th class="border-0">Order Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($orders as $order)
                              <tr>
                                  <td>{{ $order->product_name }}</td>
                                  <td>{{ $order->price }}</td>
                                  <td>{{ $order->quantity }}</td>
                                  <td>{{ $order->total_price }}</td>
                                  <td>{{ $order->order_Detail_created }}</td>
                                  <td>{{ $order->customer_name }}</td>
                                  @if ($order->order_status == 'In Progress')
                                      <td><span class="badge-dot badge-brand mr-1"></span>On-process</td>
                                  @else
                                      <td><span class="badge-dot badge-success mr-1"></span>Delivered</td>
                                  @endif
                              </tr>
                          @endforeach
                      </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ============================================================== -->
                <!-- end recent orders  -->

                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- customer acquistion  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end customer acquistion  -->
                <!-- ============================================================== -->
              </div>
              <div class="row">
                <!-- ============================================================== -->
                <!-- product category  -->
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <div class="card">
                      <h5 class="card-header">Products sold</h5>

                      <div id="c3chart_donut"></div>
                    </div>
                  </div>
                </div>
                <!-- ============================================================== -->
                <!-- end product category  -->

                <!-- ============================================================== -->
                <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                  <!-- ============================================================== -->
                  <!-- top perfomimg  -->
                  <!-- ============================================================== -->
                  <div class="card">
                    <h5 class="card-header">Best Selling Products</h5>
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table no-wrap p-table">
                          <thead class="bg-light">
                            <tr class="border-0">
                              <th class="border-0">Product name</th>
                              <th class="border-0">Sold</th>
                              <th class="border-0">Revenue</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Illustro F IB HIHE5236 C1 50</td>
                              <td>12</td>
                              <td>Rp 4.200.000</td>
                            </tr>
                            <tr>
                              <td>Illustro F IS SC961936 C2 51</td>
                              <td>7</td>
                              <td>Rp 2.784.000</td>
                            </tr>
                            <tr>
                              <td>Under Armour F UA 5044 900 54</td>
                              <td>7</td>
                              <td>Rp 13.930.000</td>
                            </tr>
                            <tr>
                              <td>Tommy Hilfiger F TH 0090 J5G 52</td>
                              <td>5</td>
                              <td>Rp 10.500.000</td>
                            </tr>
                            <tr>
                              <td>Coach HC5149T 9004 s56</td>
                              <td>3</td>
                              <td>Rp 7.752.000</td>
                            </tr>
                            <tr>
                              <td>Converse F CO MCV5076LB 001 52</td>
                              <td>3</td>
                              <td>Rp 5.040.000</td>
                            </tr>
                            <tr>
                              <td colspan="3">
                                <a href="#" class="btn btn-primary btn-outline-light float-right mt-2" >Details</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- ============================================================== -->
                  <!-- end top perfomimg  -->
                  <!-- ============================================================== -->
                </div>
              </div>

              <div class="row">
                <!-- ============================================================== -->
                <!-- sales  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end sales  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- new customer  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end new customer  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- visitor  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end visitor  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- total orders  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end total orders  -->
                <!-- ============================================================== -->
              </div>
              <div class="row">
                <!-- ============================================================== -->
                <!-- total revenue  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- category revenue  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- end category revenue  -->
                <!-- ============================================================== -->

                <div class="col-xl-12 col-lg-7 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <h5 class="card-header">Total Revenue</h5>
                    <div class="card-body">
                      <div class="card-body">
                        <div id="c3chart_area"></div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">Rp 28.900.000</span><span class="text-success float-right">+6.54%</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ============================================================== -->
              <!-- sales traffice source  -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- end sales traffice source  -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- sales traffic country source  -->
              <!-- ============================================================== -->
              <div class="col-xl-12 col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="card">
                  <h5 class="card-header">Best Selling Brands</h5>
                  <div class="card-body p-0">
                    <ul class="country-sales list-group list-group-flush">
                      <li class="country-sales-content list-group-item">
                        <span class="mr-2"
                          ><i class="brand-icon gucci" title="Gucci"><img src="../assets/images/converse.png" style="width: 32px" /></i>
                        </span>
                        <span class="">Converse</span><span class="float-right text-dark">48%</span>
                      </li>
                      <li class="list-group-item country-sales-content">
                        <span class="mr-2"
                          ><i class="brand-icon gucci" title="Gucci"><img src="../assets/images/coach.png" style="width: 35px" /></i>
                        </span>
                        <span class="">Coach</span><span class="float-right text-dark">40%</span>
                      </li>
                      <li class="list-group-item country-sales-content">
                        <span class="mr-2"
                          ><i class="brand-icon gucci" title="Gucci"><img src="../assets/images/oak.png" style="width: 35px" /></i>
                        </span>
                        <span class="">Oakley</span><span class="float-right text-dark">32%</span>
                      </li>
                      <li class="list-group-item country-sales-content">
                        <span class="mr-2"
                          ><i class="brand-icon gucci" title="Gucci"><img src="../assets/images/prada.png" style="width: 32px" /></i>
                        </span>
                        <span class="">Prada</span><span class="float-right text-dark">20%</span>
                      </li>
                      <li class="list-group-item country-sales-content">
                        <span class="mr-2"
                          ><i class="brand-icon gucci" title="Gucci"><img src="../assets/images/guess.png" style="width: 32px" /></i>
                        </span>
                        <span class="">Guess</span><span class="float-right text-dark">12%</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- ============================================================== -->
              <!-- end sales traffice country source  -->
              <!-- ============================================================== -->
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.</div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="text-md-right footer-links d-none d-sm-block">
                  <a href="javascript: void(0);">About</a>
                  <a href="javascript: void(0);">Support</a>
                  <a href="javascript: void(0);">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- end wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
  </body>
</html>
