<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <base href="{{asset(' ')}}"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin  - Thêm</title>

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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin/san-pham">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

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
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
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
                      <a class="nav-link dropdown-toggle"id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                  
                  <!------------------------them san pham--------------------------->
                  @if(Session::has('thanhcong'))
                  <div class="alert alert-success" id="qwe"> 
                    {!!Session::get('thanhcong')!!}
                  </div>
                  @endif 
                  @if(count($errors)>0)
                  <div class="alert alert-danger" id="qwe">
                    @foreach($errors->all() as $item)
                    {!!$item!!}
                    @endforeach
                  </div>
                  @endif
                  @isset($themsanpham)
                  <h1 class="h3 mb-2 text-gray-800">Thêm Sản Phẩm</h1>
                  <div>
                    <form id="themsanpham" action="them-san-pham" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group col-md-4 offset-2">
                        <label for="nhomsanpham">Nhóm sản phẩm</label>
                        <select class="custom-select" name="manhom" required>
                          <option selected disabled value="">Chọn...</option>
                          @foreach($nhomsanpham as $item)
                          <option value="{!!$item->manhom!!}">{!!$item->tennhom!!}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-md-8 offset-2">
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="tensanpham">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="tensanpham" required>
                            <span class="text-danger" id="loitensp"></span>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="soluongnhap">Số Lượng Nhập</label>
                            <input type="text" class="form-control" name="soluongnhap" required>
                            <span class="text-danger" id="loisoluongnhap"></span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="mota">Mô Tả</label>
                          <textarea class="form-control" name="mota" rows="3"></textarea>
                        </div>
                        <div class="form-row">

                          <div class="form-group col-md-12">
                            <label for="dongia">Đơn Giá</label>
                            
                            <input type="text" class="form-control" name="dongia" required>
                            <span class="text-danger" id="loidongia"></span>
                          </div>
                        </div>
                        <div class="form-row">

                          <div class="form-group col-md-12">
                            <label for="khuyuenmai">Khuyến Mãi</label>
                            <input type="text" class="form-control" name="khuyuenmai" value="0" required>
                            <span class="text-danger" id="loikhuyuenmai"></span>
                          </div>
                          <div class="form-group col-md-12">
                            <label for="exampleFormControlFile1">Chọn Hình Ảnh</label>
                            <input type="file" class="form-control-file" name="img" id="img" required>
                          </div>
                        </div>
                        <input type="submit" class="btn btn-primary themsanpham" name="" value="Thêm" style="margin-bottom: 50px; margin-top: 20px">
                      </div>
                    </form>
                    @endisset
                    <!------------end them san pham------->

                    @isset($themuser)
                    <h1 class="h3 mb-2 text-gray-800">Thêm</h1>
                    <div class="container offset-2">
                      <form action="Post-them-user" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-12">
                          <select required class="nav custom-select nav-tabs col-md-3" id="myTab" role="tablist" name="loaiuser">
                            <option class="nav-link active" id="trang-tab" data-toggle="tab" href="#trang" role="tab" aria-controls="trang" selected value="">Chọn...</option>
                            <option value="1" class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Nhân Viên</option>
                            <option value="2" class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact">khách Hàng</option>
                          </select>
                        </div>
                        <div class="col-md-8">
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="username">UserName</label>
                              <input type="text" class="form-control" name="username" required>
                              <ul style="list-style-type: none;position: relative ;left: -40px">
                                <li><span class="text-danger" id="loiusernamesaidinhdang"></span></li>
                                <li ><span class="text-danger" id="loiusernamedodai"></span></li>
                              </ul>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="password">Password</label>
                              <input type="text" class="form-control" name="password" required>
                              <ul style="list-style-type: none;position: relative ;left: -40px">
                                <li><span class="text-danger" id="loipasswordsaidinhdang"></span></li>
                                <li ><span class="text-danger" id="loipassworddodai"></span></li>
                              </ul>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" required>
                              <span class="text-danger" id="loiemail"></span>
                            </div>
                          </div>
                        </div>
                        <hr class="col-md-10" style="position: relative; left: -15%;">
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="trang" role="tabpanel" aria-labelledby="trang-tab"></div>
                          <!-- Nhan VIen -->
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="col-md-8">
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="tennv">Tên Nhân Viên</label>
                                  <input type="text" class="form-control" name="tennv">
                                  <span class="text-danger" id="loitennv"></span>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="ngaysinh">Ngày Sinh</label>
                                  <input type="text" class="form-control" name="ngaysinhNV" placeholder="VD: 01/01/2020">
                                  <span class="text-danger" id="loingaysinhNV"></span>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="diachi">Địa Chỉ</label>
                                  <input type="text" class="form-control" name="diachiNV" >
                                  <span class="text-danger" id="loidiachiNV"></span>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="sdt">Số Điện Thoại</label>
                                  <input type="text" class="form-control" name="sdtNV" >
                                  <span class="text-danger" id="loisdtNV"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Nhan VIen -->
                          <!-- Khach hang -->
                          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="col-md-8">
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="tenkh">Tên Khách Hàng</label>
                                  <input type="text" class="form-control" name="tenKH">
                                  <span class="text-danger" id="loitenKH"></span>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="ngaysinh">Ngày Sinh</label>
                                  <input type="text" class="form-control" name="ngaysinhKH" placeholder="VD: 01/01/2020">
                                  <span class="text-danger" id="loingaysinhKH"></span>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="diachi">Địa Chỉ</label>
                                  <input type="text" class="form-control" name="diachiKH">
                                  <span class="text-danger" id="loidiachiKH"></span>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="sdt">Số Điện Thoại</label>
                                  <input type="text" class="form-control" name="sdtKH">
                                  <span class="text-danger" id="loisdtKH"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end Khach hang -->
                        <input type="submit" class="btn btn-primary themuser" name="" value="Thêm" style="margin-bottom: 50px; margin-top: 20px">
                      </form>
                    </div>
                    @endisset
                    <!-- End of Main Content -->
                  </div>
                  <!-- End of Content Wrapper -->

                </div>
              </div>
            </div>

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
                <script src="{{URL::to('public/admin/js/main.js')}}" type="text/javascript"></script>
                <footer class="sticky-footer bg-white">
                  <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                      <span>Copyright &copy; Your Website 2020</span>
                    </div>
                  </div>
                </footer>
              </body>

              </html>
