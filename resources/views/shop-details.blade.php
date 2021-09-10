<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | sản phẩm</title>
    <base href="{{asset(' ')}}"/>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Literata" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{URL::to('public/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('public/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>
-->

<!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            @if(Auth::check())
            <ul>
                <li><a href="gio-hang"><i class="fa fa-shopping-bag"></i> <span>{!!$Quantity!!}</span></a></li>
            </ul>

            <div class="header__cart__price">item:<span>{!!number_format($Total)!!} VND</span></div>
            @else
                <ul>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>00.00</span></div>
            @endif
        </div>
        <div class="humberger__menu__widget">
            @if(Auth::check())
            <div class="header__top__right__language">
                <div><a href="#" style="color: black"><i class="fa fa-user"></i> <div>{!! Auth::user()->name !!}</div></a></div>
                <span class="arrow_carrot-down"></span>
                <ul style="margin-top: 5px" style="width: 200px;">
                    <li><a href="thong-tin-ca-nhan">Thông Tin</a></li>
                    <li><a href="dang-xuat">Logout</a></li>
                </ul>
            </div>
            @else
            <div class="header__top__right__auth">
                <a href="login"><i class="fa fa-user"></i>Login</a>
            </div>
            @endif
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="trang-chu">Trang Chủ</a></li>
                <li><a href="lien-he">Liên Hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> shopgaran@gmail.com</li>
                <li>Miễn phí vận chuyển nếu đơn hàng trên 200k</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> shopgaran@gmail.com</li>
                                <li>Miễn phí vận chuyển nếu đơn hàng trên 200k</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            @if(Auth::check())
                                <div class="header__top__right__language">
                                    <div><a href="#" style="color: black"><i class="fa fa-user"></i> <div>{!! Auth::user()->name !!}</div></a></div>
                                    <span class="arrow_carrot-down"></span>
                                    <ul style="margin-top: 5px" style="width: 200px;">
                                        <li><a href="thong-tin-ca-nhan">Thông Tin</a></li>
                                        <li><a href="dang-xuat">Logout</a></li>
                                    </ul>
                                </div>
                            @else
                                <div class="header__top__right__auth">
                                    <a href="login"><i class="fa fa-user"></i>Login</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="trang-chu"><img src="public/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="trang-chu">Trang Chủ</a></li>
                            <li><a href="lien-he">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                        @if(Auth::check())
                        <div class="header__cart">
                            <ul>
                                <li><a href="gio-hang"><i class="fa fa-shopping-bag"></i> <span>{!!$Quantity!!}</span></a></li>
                            </ul>
                            
                            <div class="header__cart__price">item:<span>{!!number_format($Total)!!} VND</span></div>
                        @else
                            <div class="header__cart">
                                <ul>
                                    <li><a href="gio-hang"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                                </ul>
                                <div class="header__cart__price">item: <span>0 VND</span></div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Menu</span>
                    </div>
                    <ul>
                        @foreach($loaisanpham as $item)
                        <li><a href="#">{!! $item->tennhom !!}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form  class="search__form" action="tim-kiem">
                            <input type="text" placeholder="Tìm Kiếm ?" name="txttimkiem">
                            <button type="submit" class="site-btn">Tìm Kiếm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{URL::to('public/img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Chi Tiết Sản Phẩm</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        @foreach($ctsp as $item)
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                        src="public/img/shop/{!!$item->hinhsp!!}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <form action="{!!URL('shopping_cart',[$item -> masp])!!}" method="post">
                    {!! csrf_field() !!}
                    <div class="product__details__text">
                        <h3>{!! $item->tensp !!}</h3>
                        @if($item->KhuyenMai)
                            <div class="product__details__price" style="text-decoration-line:line-through; color: black">
                                {!!number_format($item->dongia)!!} VND
                            </div>
                            <div class="product__details__price">
                                {!!number_format(($item -> dongia) - ($item -> dongia * (int)$item-> KhuyenMai / 100) ,0,",",",")!!} VND
                            </div>
                        @else
                        <div class="product__details__price">
                            {!!number_format($item->dongia)!!} VND
                        </div>
                        @endif
                        <ul>
                            <li><b>Khuyến Mãi</b><span>
                                @if($item->KhuyenMai)
                                {!!$item->KhuyenMai!!}
                                @else
                                Không
                                @endif
                            </span></li>
                            <li><b>số lượng tồn</b> <span id="slton">{!! $item->slton !!}</span></li>
                        </ul>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1" id="txtslmua" name="txtslmua">
                                </div>
                            </div>
                        </div>
                        <input type="submit" id="addtocard" class="primary-btn" value="Thêm Vào Giỏ Hàng">
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- Product Details Section End -->
<!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Sản Phẩm</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($sp_theoloai as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="public/img/shop/{!!$item->hinhsp!!}">
                        <ul class="featured__item__pic__hover">
                            <li><a href="san-pham/{!! $item->manhom !!}/{!! $item->masp !!}">Xem Chi tiết</a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="san-pham/{!! $item->manhom !!}/{!! $item->masp !!}">{!!$item->tensp!!}</a></h6>
                        <h5>{!! number_format($item->dongia)!!} VND</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div style="position: relative; left: 40%;">
        {!!$sp_theoloai->links()!!}
    </div>
</section>
<!-- Related Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="public/img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Địa Chỉ: TPHCM</li>
                        <li>Số Điện Thoại: 0387170320</li>
                        <li>Email:shopgaran@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
            </div>
            <div class="col-lg-4 col-md-12">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Js Plugins -->
  <script src="{{URL::to('public/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{URL::to('public/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('public/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{URL::to('public/js/jquery-ui.min.js')}}"></script>
  <script src="{{URL::to('public/js/jquery.slicknav.js')}}"></script>
  <script src="{{URL::to('public/js/mixitup.min.js')}}"></script>
  <script src="{{URL::to('public/js/owl.carousel.min.js')}}"></script>
  <script src="{{URL::to('public/js/main.js')}}"></script>


</body>

</html>