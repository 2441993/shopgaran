<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <base href="{{asset(' ')}}"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin  - Sửa</title>
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
                          <a class="dropdown-item" href="dang-xuat" data-toggle="modal" data-target="#logoutModal">
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
                    <!------------------------sua san pham--------------------------->
                    @if(Session::has('thanhcong'))
                    <div class="alert alert-success" id="qwe"> 
                      {!!Session::get('thanhcong')!!}
                    </div>
                    @endif
                    @if(Session::has('loi'))
                    <div class="alert alert-danger" id="qwe"> 
                      {!!Session::get('loi')!!}
                    </div>
                    @endif 
                    @if(count($errors)>0)
                    <div class="alert alert-danger" id="qwe">
                      @foreach($errors->all() as $item)
                      {!!$item!!}
                      @endforeach
                    </div>
                    @endif
                    @isset($sanphamsua)
                    <h1 class="h3 mb-2 text-gray-800">Sửa Sản Phẩm</h1>
                    <div>
                      @foreach($sanphamsua as $item)
                      <form class="formsuasanpham" action="Post-sua-san-pham/{!!$item->masp!!}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-4 col-8 col-sm-10 offset-2">
                          <label for="nhomsanpham">Nhóm sản phẩm</label>
                          <select class="custom-select" name="manhom" required>
                            <option selected disabled value="">Choose...</option>
                            @foreach($nhomsanpham as $nsp)
                            <option value="{!!$nsp->manhom!!}">{!!$nsp->tennhom!!}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-8 offset-2">
                          <div class="form-row">
                            <div class="form-group col-md-12 col-8 col-sm-10">
                              <label for="tensanpham">Tên sản phẩm</label>
                              <input type="text" class="form-control" name="tensanpham" value="{!!$item->tensp!!}" required>
                              <span class="text-danger" id="loitensp"></span>
                            </div>

                            <div class="form-group col-md-6 col-8 col-sm-10">
                              <label for="soluongnhap">Số Lượng Nhập</label>
                              <input type="text" class="form-control" name="soluongnhap" value="{!!$item->slnhap!!}" required>
                              <span class="text-danger" id="loislnhap"></span>
                            </div>
                            <div class="form-group col-md-6 col-8 col-sm-10">
                              <label for="soluongton">Số Lượng Tồn</label>
                              <input type="text" class="form-control" name="soluongton" value="{!!$item->slton!!}" required>
                              <span class="text-danger" id="loislton"></span>
                            </div>
                          </div>
                          <div class="form-group col-md-12 col-8 col-sm-10">
                            <label for="mota">Mô Tả</label>
                            <textarea class="form-control" name="mota" rows="3"></textarea>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6 col-8 col-sm-10">
                              <label for="dongia">Đơn Giá</label>
                              <input type="text" class="form-control" name="dongia" value="{!!$item->dongia!!}" required>
                              <span class="text-danger" id="loidongia"></span>
                            </div>
                            <div class="form-group col-md-6 col-8 col-sm-10">
                              <label for="giagoc">Giá Gốc</label>
                              <input type="text" class="form-control" name="giagoc" value="{!!$item->giagoc!!}" required>
                              <span class="text-danger" id="loigiagoc"></span>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6 col-8 col-sm-10">
                              <label for="khuyuenmai">Khuyến Mãi(%)</label>
                              <input type="text" class="form-control" name="khuyuenmai" value="{!!$item->KhuyenMai!!}" placeholder="VD: 40%" required>
                              <span class="text-danger" id="loikhuyuenmai"></span>
                            </div>
                            <div class="form-group col-md-6 col-8 col-sm-10">
                              <label for="khuyuenmai">Trạng Thái</label>
                              <input type="text" class="form-control" name="trangthai" value="{!!$item->TrangThai!!}" placeholder="VD: 40%" required>
                              <span class="text-danger" id="loitrangthai"></span>
                            </div>
                          </div>
                          <div>
                              <input id="suasanpham" type="submit" class="btn btn-primary" value="Sửa" style="margin-bottom: 100px; margin-top: 30px;">
                          </div>
                        </div>
                      </form>
                    </div>
                    @endforeach
                    @endisset
                    <!------------end them san pham------->
                    <!------------sua user------->
                    @isset($userSua)
                    <h1 class="h3 mb-2 text-gray-800">Sửa user</h1>
                    <div>
                      @foreach($userSua as $item)
                      <form action="Post-sua-user/{!!$item->id!!}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-8 offset-2">
                          <div class="form">
                            <div class="form-group col-md-11 col-10 col-sm-10">
                              <label for="tensanpham">UserName</label>
                              <input type="text" class="form-control" name="username" value="{!!$item->name!!}" required>
                              <span class="text-danger" id="loiusername"></span><BR>
                              <span class="text-danger" id="loiusernamedodai"></span>
                            </div>
                            <div class="form-group col-md-11 col-10 col-sm-10">
                              <label for="soluongnhap">PassWord</label>
                              <input type="text" class="form-control" name="password" value="{!!$item->password!!}" required>
                              <span class="text-danger" id="loipassword"></span>
                              <span class="text-danger" id="loipassworddodai"></span>
                            </div>
                            <div class="form-group col-md-11 col-10 col-sm-10">
                              <label for="soluongton">Email</label>
                              <input type="text" class="form-control" name="email" value="{!!$item->email!!}" required>
                              <span class="text-danger" id="loiemail"></span>
                            </div>
                            <div class="form-group col-md-11 col-10 col-sm-10">
                              <label for="soluongton">Trạng Thái</label>
                              <input type="text" class="form-control" name="trangThai" value="{!!$item->trangThai!!}" required>
                              <span class="text-danger" id="loiemail"></span>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary suauser">Sửa</button>
                        </div>
                      </form>
                      @endforeach
                    </div>
                    @endisset

                    <!-- /sua nhan vien -->
                    @isset($suanhanvien)
                    <h1 class="h3 mb-2 text-gray-800">Sửa nhân viên</h1>
                    <div>
                      @foreach($nhanvien as $item)
                      <form action="Post-sua-nhan-vien/{!!$item->Manv!!}" method="post">
                        @csrf

                        <div class="col-md-8 offset-2">
                          <div class="form">
                            <div class="form-group col-md-12 col-10 col-sm-10">
                              <label for="tennhanvien">Tên nhan viên</label>
                              <input type="text" class="form-control" name="tennv" value="{!!$item->tennv!!}" required>
                              <span class="text-danger" id="loitennv"></span>
                            </div>
                            <div class="form-group col-md-12 col-10 col-sm-10">
                              <label for="ngaysinh">Ngày Sinh</label>
                              <input type="text" class="form-control" name="ngaysinh" value="{!!$item->ngaysinh!!}" required>
                              <span class="text-danger" id="loingaysinh"></span>
                            </div>
                            <div class="form-group col-md-12 col-10 col-sm-10">
                              <label for="diachi">Địa Chỉ</label>
                              <input type="text" class="form-control" name="diachi" value="{!!$item->dicchi!!}" required>
                              <span class="text-danger" id="loidiachi"></span>
                            </div>

                            <div class="form-group col-md-12 col-10 col-sm-10">
                              <label for="sodienthoai">Số Điện thoại</label>
                              <input type="text" class="form-control" name="sdt" value="{!!$item->sdt!!}" required>
                              <span class="text-danger" id="loisdt"></span>
                            </div>
                            <div class="form-group col-md-12 col-10 col-sm-10">
                              <label for="sodienthoai">Trạng Thái</label>
                              <input type="text" class="form-control" name="TrangThai" value="{!!$item->TrangThai!!}" required>
                              <span class="text-danger" id="loiTrangThai"></span>
                            </div>
                          </div>
                          <button style="margin-bottom: 100px; margin-top: 20px" id="suanhanvien" type="submit" class="btn btn-primary">Sửa</button>
                        </div>
                      </form>
                      @endforeach
                    </div>
                    @endisset            
                    <!-- /end sua nhan vien -------->

                    <!-- /sua khach hang -->
                    @isset($suakhachhang)
                    <h1 class="h3 mb-2 text-gray-800">Sửa khách hàng</h1>
                    <div>
                      @foreach($khachhang as $item)
                      <form id="suakhachang" action="Post-sua-khach-hang/{!!$item->makh!!}" method="post">
                        @csrf

                        <div class="col-md-8 offset-2">
                          <div class="form">
                            <div class="form-group col-md-12 col-10 col-sm-10">
                              <label for="tennhanvien">Tên khách hàng</label>
                              <input type="text" class="form-control" name="tenkh" value="{!!$item->tenkh!!}" required>
                              <span class="text-danger" id="loitenkh"></span>
                            </div>
                            <div class="form-group col-md-12 col-10 col-sm-10">
                              <label for="diachi">Địa Chỉ</label>
                              <input type="text" class="form-control" name="diachi" value="{!!$item->diachi!!}" required>
                              <span class="text-danger" id="loidiachi"></span>
                            </div>

                            <div class="form-group col-md-12 col-10 col-sm-10">
                              <label for="sodienthoai">Số Điện thoại</label>
                              <input type="text" class="form-control" name="sdt" value="{!!$item->sdt!!}" required>
                              <span class="text-danger" id="loisdt"></span>
                            </div>
                            <div class="form-group col-md-12 col-10 col-sm-10">
                              <label for="sodienthoai">Trạng Thái</label>
                              <input type="text" class="form-control" name="TrangThai" value="{!!$item->TrangThai!!}" required>
                              <span class="text-danger" id="loiTrangThai"></span>
                            </div>
                          </div>
                          <input class="btn btn-primary" type="submit" name="submit" value="Sửa">
                        </div>
                      </form>
                      @endforeach
                    </div>
                    @endisset
                    <!-- /end sua khach hang

                     -------->

                    <!-- /sua hoa don -->
                    @isset($suahoadon)
                    <h1 class="h3 mb-2 text-gray-800">Sửa hóa đơn</h1>
                    <div>
                      <form id="suahoadon" action="sua-hoa-don/{!!$hoadon->mahd!!}" method="Post">
                        @csrf

                        <div class="col-md-8  offset-2">
                          <select class="custom-select form-group col-md-6 col-8 col-sm-6" name="shipper" required>
                            <option selected disabled value="">Shipper</option>
                            @foreach($shipper as $shipper)
                            <option value="{!!$shipper->idshipper!!}">{!!$shipper->tenshiper!!}</option>
                            @endforeach
                          </select>
                          <div class="form-row">
                            <div class="form-group col-md-6 col-8 col-sm-8">
                              <label for="diachi">Số Lượng</label>
                              <input type="text" class="form-control" name="soluongsp" value="{!! $hoadon->slsp !!}" required>
                            </div>
                            <div class="form-group col-md-6 col-8 col-sm-8">
                              <label for="sodienthoai">Ngày lập hóa đơn</label>
                              <input type="text" class="form-control" name="ngaylaphd" value="{!! $hoadon->ngaylapHD !!}" required>
                              <span class="text-danger" id="loingaylaphd"></span>
                            </div>
                            <div class="form-group col-md-6 col-8 col-sm-8">
                              <label for="diachi">Ngày giao hàng</label>
                              <input type="text" class="form-control" name="ngaygiao" value="{!! $hoadon->ngaygiao !!}" required>
                              <span class="text-danger" id="loingaygiao"></span>
                            </div>
                            <div class="form-group col-md-6 col-8 col-sm-8">
                              <label for="sodienthoai">Nơi Giao Hàng</label>
                              <input type="text" class="form-control" name="noigiaohang" value="{!! $hoadon->noichuyen !!}" required>
                              <span class="text-danger" id="loinoigiaohang"></span>
                            </div>
                            <div class="form-group col-md-12 col-8 col-sm-8">
                              <label for="sodienthoai">Trạng Thái</label>
                              <input type="text" class="form-control" name="trangthai" value="{!! $hoadon->TrangThai !!}" required>
                              <span class="text-danger" id="loitrangthai"></span>
                            </div>
                            <div class="form-group col-md-6 col-8 col-sm-8">
                              <button type="submit" class="btn btn-primary suahoadon" style="padding-left: 20px; padding-right: 20px">Sửa</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!--end hoa don-->
                      <!--Chi tiet hoa don-->
                      <div style="margin-top: 100px; margin-bottom: 100px">
                        <h4 class="col-md-12 col-12 col-sm-12">Chi Tiết Hóa Đơn</h5>

                          <table class="table container col-md-12 col-12 col-sm-12">
                            <thead>
                              <tr>
                                <th scope="col">Mã sản phẩm</th>
                                <th scope="col">Đơn giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Trạng Thái</th>
                                <th></th>
                              </tr>
                            </thead>
                            @foreach($chitiethoadon as $item)
                              <form action="sua-chi-tiet-hoa-don/{!!$item->mahd!!}/{!!$item->masp!!}" method="post">
                              <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="form-group">
                                      <input type="text" class="form-control col-md-12 col-12 col-sm-8" id="{!!$item->masp!!}" name="masp" value="{!! $item->masp !!}" required>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="form-group">
                                      <input type="text" class="form-control col-md-12 col-12 col-sm-8" id="{!!$item->masp!!}" name="dongia" value="{!! $item->dongia !!}" required>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="form-group">
                                      <input type="text" class="form-control col-md-12 col-12 col-sm-8" id="{!!$item->masp!!}" name="soluongct" value="{!! $item->soluong !!}" required>
                                    </div>
                                    <span class="text-danger" id="loisoluongct"></span>
                                  </td>
                                  <td>
                                    <div class="form-group">
                                      <input type="text" class="form-control col-md-12 col-12 col-sm-8" id="{!!$item->masp!!}" name="trangthaict" value="{!! $item->TrangThai !!}" required>
                                      <span class="text-danger" id="loitrangthaict"></span>
                                    </div>
                                  </td>
                                  <td>
                                    <input class="btn btn-primary suacthd" type="submit" name="submit" value="Sửa">
                                    <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" style="background: black"></i>

                                    <a  class="btn btn-primary" href="xoa-chi-tiet-hoa-don/{!!$item->mahd!!}/{!!$item->masp!!}" name="txtxoa" type="button">Xóa</a>
                                  </td>
                                  <!--<td>
                                    <a id="{!!$item->mahd!!}" name="btnsua" href="#">Sửa</a> 
                                    | 
                                    <a href="#" title="">Xóa</a>
                                  </td>
                                </tr>-->
                              </tbody>
                              </form>
                              @endforeach

                          </table>
                        </div>
                        @endisset
                        <!-- /.container-fluid -->
                      </div>
                      <!--end Chi tiet hoa don-->

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="scroll-to-top rounded" href="#page-top">
              <i class="fas fa-angle-up"></i>
            </a>
            <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Your Website 2020</span>
                </div>
              </div>
            </footer>
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

          </body>

          </html>
