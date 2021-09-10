<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <base href="{{asset(' ')}}"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin  - Hóa Đơn</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <link href="{{URL::to('public/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{URL::to('public/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{URL::to('public/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="trang-chu">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Tables -->
        <li class="nav-item active">
          <a class="nav-link" href="admin/user">
            <i class="fas fa-fw fa-table"></i>
            <span>User</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/nhan-vien">
              <i class="fas fa-fw fa-table"></i>
              <span>Nhân Viên</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin/khach-hang">
                <i class="fas fa-fw fa-table"></i>
                <span>Khách Hàng</span></a>
              </li>

              <!-- Nav Item - Tables -->
              <li class="nav-item">
                <a class="nav-link" href="admin/hoa-don">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Hóa Đơn</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                  <a class="nav-link" href="admin/san-pham">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Sản Phẩm</span></a>
                  </li>
                  <!-- Divider -->
                  <hr class="sidebar-divider d-none d-md-block">

                  <!-- Sidebar Toggler (Sidebar) -->
                  <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                  </div>

                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                  <!-- Main Content -->
                  <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                      <!-- Sidebar Toggle (Topbar) -->
                      <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                          <i class="fa fa-bars"></i>
                        </button>
                      </form>

                      <!-- Topbar Search -->
                      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                          <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm Kiếm..." aria-label="Search" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                              <i class="fas fa-search fa-sm"></i>
                            </button>
                          </div>
                        </div>
                      </form>

                      <!-- Topbar Navbar -->
                      <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                          </a>
                          <!-- Dropdown - Messages -->
                          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                              <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                  <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </li>
                        <!-- Nav Item - Messages -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{!! Auth::user()->name !!}</span>
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                          </a>
                          <!-- Dropdown - User Information -->
                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="dang-xuat">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Logout
                            </a>
                          </div>
                        </li>

                      </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                      <!-- Page Heading -->
                      <h1 class="h3 mb-2 text-gray-800">Hóa Đơn</h1>
                      <!-- DataTales Example -->
                      <div class="card shadow mb-4">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Mã hóa đơn</th>
                                  <th>Số lượng sản phẩm</th>
                                  <th>Ngày lập</th>
                                  <th>Ngày giao</th>
                                  <th>Nơi Chuyển</th>
                                  <th>Trạng Thái</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($hoadon as $item)
                                <tr>
                                  <th>{!! $item-> mahd!!}</th>
                                  <th>{!! $item-> slsp!!}</th>
                                  <th>{!! $item-> ngaylapHD!!}</th>
                                  <th>{!! $item-> ngaygiao!!}</th>
                                  <th>{!! $item-> noichuyen!!}</th>
                                  <th>{!! $item-> TrangThai!!}</th>
                                  <th>
                                    <a href="Post-xoa-hoa-don/{!!$item->mahd!!}" title="">Xóa</a>| 
                                    <!-- <a href="Post-hoan-tra/{!!$item->mahd!!}" title="">hoàn trả</a>| --> 
                                    <a href="admin/sua-hoa-don/{!!$item->mahd!!}" title="">Xem Chi Tiết</a>
                                  </th>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.container-fluid -->

                  </div>
                  <!-- End of Main Content -->

                </div>
                <!-- End of Content Wrapper -->

              </div>
              <!-- End of Page Wrapper -->

              <!-- Scroll to Top Button-->
              <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
              </a>

              <!-- Bootstrap core JavaScript-->
              <script src="{{URL::to('public/admin/vendor/jquery/jquery.min.js')}}"></script>
              <script src="{{URL::to('public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

              <!-- Core plugin JavaScript-->
              <script src="{{URL::to('public/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

              <!-- Custom scripts for all pages-->
              <script src="{{URL::to('public/admin/js/sb-admin-2.min.js')}}"></script>

              <!-- Page level plugins -->
              <script src="{{URL::to('public/admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
              <script src="{{URL::to('public/admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

              <!-- Page level custom scripts -->
              <script src="{{URL::to('public/admin/js/demo/datatables-demo.js')}}"></script>
              <!-- Footer -->
              <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                  </div>
                </div>
              </footer>
              <!-- End of Footer -->
            </body>

            </html>
