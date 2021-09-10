<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Đăng Ký</title>

    <!-- Icons font CSS-->
    <link href="public/signup/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="public/signup/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="public/signup/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="public/signup/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="public/signup/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" >
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Đăng Ký Tài Khoản</h2>
                </div>
                <div class="card-body">
                    <!-- -------------------- form dang ky----------------------------------------->
                    <form class="form-signup" action="dang-ky" method="post">
                        {!! csrf_field() !!}
                        @if(Session::has('thanhcong'))
                        <div class="alert alert-success"> 
                            {!!Session::get('thanhcong')!!}
                        </div>
                        @endif
                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $item)
                            <li>{!!$item!!}</li>
                            @endforeach
                        </div>
                        @endif
                        <div class="form-row">
                            <div class="value col-md-12 col-12 col-sm-12">
                                
                                <div class="input-group ">
                                    <input class="input--style-5 col-md-12 col-12 col-sm-12" type="text" name="username" placeholder="Tên Đăng Nhập" required>
                                </div>
                                <span class="text-danger" id="loiten"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="row col-md-12 col-12 col-sm-12">
                                <div class="col form-group input-group-desc">
                                    
                                    <input class="input--style-5 col-md-12 col-12 col-sm-12" type="text" name="password" placeholder="Mật Khẩu"  required>
                                    <span class="text-danger" id="loimk"></span>
                                </div>
                                <div class="col form-group input-group-desc">
                                 
                                 <input class="input--style-5 col-md-12 col-12 col-sm-12" type="text" name="Repass" placeholder="Nhập lại Mật Khẩu"  required>
                                 <span class="text-danger" id="loinlmk"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value col-md-12 col-12 col-sm-12">
                                
                                <div class="input-group">
                                    <input class="input--style-5 col-md-12 col-12 col-sm-12" type="text" name="email" placeholder="Email" required>
                                    <span class="text-danger" id="loiemail"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value col-md-12 col-12 col-sm-12">
                                
                                <div class="input-group">
                                    <input class="input--style-5 col-md-12 col-12 col-sm-12" type="text" name="tenkhachhang" placeholder="Họ Và Tên" required>
                                    <span class="text-danger" id="loihoten"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value col-md-12 col-12 col-sm-12">
                                
                                <div class="input-group">
                                    <input class="input--style-5 col-md-12 col-12 col-sm-12" type="text" name="diachi" placeholder="Địa Chỉ" required>
                                    <span class="text-danger" id="loidiachi"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value col-md-12 col-12 col-sm-12">
                                
                                <div class="input-group">
                                    <input class="input--style-5 col-md-12 col-12 col-sm-12" type="text" name="sdt" placeholder="Số Điện Thoại" required>
                                    <span class="text-danger" id="loisdt"></span>
                                </div>
                                
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Đăng Ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="public/signup/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="public/signup/vendor/select2/select2.min.js"></script>
    <script src="public/signup/vendor/datepicker/moment.min.js"></script>
    <script src="public/signup/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="public/signup/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->