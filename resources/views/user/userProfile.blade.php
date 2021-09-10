<!DOCTYPE html>
<html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <title>Thông Tin</title>
  <meta charset="utf-8">
  <base href="{{asset(' ')}}"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container bootstrap snippet" style="position: relative;top: 20px">
    <div class="row">
      <div class="col-sm-10"></div>
      <div class="col-sm-2"><a href="trang-chu" class="pull-right"><img title="profile image" class=" img-responsive" src="public/img/logo.png"></a></div>
    </div>
    <div class="row">
      <div class="col-sm-3"><!--left col-->


        <div class="text-center">
          <img src="public/img/userImg/avatar.png" class="avatar img-circle img-thumbnail" alt="avatar">
          <h1>{!! $user->name !!}</h1>
          <hr>
          <input type="file" class="text-center center-block file-upload">
        </div></hr><br>
        
         <!--  <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
                <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
        -->
      </div><!--/col-3-->
      <div class="col-sm-9">
        <ul class="nav nav-tabs">
          <li> <a href="trang-chu">Home</a></li>
          <li class="active"><a data-toggle="tab" href="#user">User</a></li>
          <li><a data-toggle="tab" href="#khachhang">Thông Tin Cá Nhân</a></li>
        </ul>


          <div class="tab-content">
            <div class="tab-pane active" id="user">
                <h2></h2>
                <hr>
                <form class="form" action="" method="get" id="registrationForm">
                    <div class="form-group">

                      <div class="col-xs-6">
                        <label for="last_name"><h4>Tên Tài Khoản</h4></label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="{!! $user->name !!}" title="enter your last name if any.">
                      </div>
                    </div>
                    <div class="form-group">

                      <div class="col-xs-6">
                        <label for="password"><h4>Mật Khẩu</h4></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="" title="enter your password." value="{!! $user->password !!}">
                      </div>
                    </div>
                    <div class="form-group">

                      <div class="col-xs-6">
                        <label for="last_name"><h4>Email</h4></label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="{!! $user->email !!}" title="enter your last name if any.">
                      </div>
                    </div>
                    <div class="form-group">
                     <div class="col-xs-12">
                      <br>
                      <button class="btn btn-lg btn-success" type="text"><i class="glyphicon glyphicon-ok-sign"></i> Lưu</button>
                    </div>
                    </div>
                </form>
            </div><!--/tab-pane-->
            <div class="tab-pane" id="khachhang">

              <hr>
              <form class="form" action="##" method="post" id="registrationForm">

                <div class="form-group">

                  <div class="col-xs-6">
                    <label for="phone"><h4>Họ Tên</h4></label>
                    <input type="text" class="form-control" name="hoten" id="hoten" placeholder="" title="enter your phone number if any." value="{!! $khachhang->tenkh !!}">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-xs-6">
                   <label for="mobile"><h4>Địa Chỉ</h4></label>
                   <input type="text" class="form-control" name="diachi" id="diachi" placeholder="" title="enter your mobile number if any." value="{!! $khachhang->diachi !!}">
                 </div>
               </div>

                <div class="form-group">

                    <div class="col-xs-6">
                      <label for="password"><h4>Số Điện Thoại</h4></label>
                      <input type="test" class="form-control" name="sdt" id="sdt" placeholder="" title="enter your password." value="{!! $khachhang->sdt !!}">
                    </div>
                </div>
              </form>
            </div>
          </div><!--/tab-pane-->
      </div><!--/tab-content-->
</div>

</body>

</html>