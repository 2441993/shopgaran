<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Gà Chiên Siêu Ngon Khổng Lồ</title>

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

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="trang-chu"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            @if(Auth::check())
                <ul>
                    <li><a href="gio-hang"><i class="fa fa-shopping-bag"></i> <span>{!!$Quantity!!}</span></a></li>
                </ul>
                <div class="header__cart__price">item: <span>{!!number_format($Total)!!} VND</span></div>
            @else
                <ul>
                    <li><a href="gio-hang"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                </ul>
                <div class="header__cart__price">item: <span>0</span></div>
            @endif
        </div>
        <div class="humberger__menu__widget">
            @if(Auth::check())
            <div class="header__top__right__language">
                <div><a href="#" style="color: black"><i class="fa fa-user"></i> <div>{!! Auth::user()->name !!}</div></a></div>
                <span class="arrow_carrot-down"></span>
                <ul style="margin-top: 5px">
                    <li ><a href="dang-xuat">logout</a></li>
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
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> shopgaran@gmail.com</li>
                <li>Miễn Phí vận chuyển nếu đơn hàng trên 200k</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
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
                                <ul style="margin-top: 5px">
                                    <li ><a href="dang-xuat">logout</a></li>
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
                            <li><a href="trang-chu">trang chủ</a></li>
                            <li><a href="lien-he">liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="gio-hang"><i class="fa fa-shopping-bag"></i> <span>{!!$Quantity!!}</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>{!!number_format($Total)!!} VND</span></div>
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
                                <li><a href="san-pham-theo-loai/{!!$item->manhom!!}">{!! $item->tennhom !!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form class="search__form" action="tim-kiem">
                                <input type="text" placeholder="Tìm Kiếm ?" name="txttimkiem">
                                <button type="submit" class="site-btn">Tìm Kiếm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0387170320</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="public/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Giỏ Hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad" id="giohang">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(Session::has('flag'))
                    <div class="alert alert-{!!Session::get('flag')!!}"> 
                        {!!Session::get('message')!!}
                    </div>
                    @endif
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product"  style="width: 400px">Sản Phẩm</th>
                                    <th style="width: 200px">Giá</th>
                                    <th>Số Lượng</th>
                                    <th style="width: 200px">Tổng Tiền</th>
                                    <th style="width: 100px"></th>
                                </tr>
                            </thead>
                            <form action="" method="post">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <tbody>
                                    @foreach($Content as $item)
                                    <tr class="load">
                                        <td class="shoping__cart__item">
                                            <img src="public/img/shop/{!! $item['attributes']['hinh']!!}" alt="" style="width: 150px; height: 100px">
                                            <h5>{{$item->name}}</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            {{number_format($item->price)}} VND
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="{{ $item->quantity }}" class="qty" id="{{ $item->id }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total" >
                                            {{number_format($item->price * $item->quantity)}} VND
                                        </td>
                                        <td class="shoping__cart__item__close" >
                                            <a href="{!!URL('delete-item-cart',[$item -> id])!!}" style="color: black; margin-right: 10px"><i class="fa fa-trash"></i></a>  
                                            <a href="#giohang" name="qty" style="color: black"><i class="fa fa-refresh"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="shoping__checkout">
                        <h5>TỔNG TIỀN</h5>
                        <ul>
                            <li>Tổng <span>{!! number_format($Total) !!} VND </span></li>
                        </ul>
                        <a href="thanh-toan" class="primary-btn">THANH TOÁN</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="trang-chu"><img src="public/img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>TPHCM</li>
                            <li>Số Điện Thoại: 0387170320</li>
                            <li>Email: shopgaran@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="public/img/payment-item.png" alt=""></div>
                    </div>
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