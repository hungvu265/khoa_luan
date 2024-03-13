<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <meta http-equiv="Content-Security-Policy" content="default-src 'self'">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/css.css') }}">
    <script src="{{ mix('/js/cart.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rating.css') }}">
    <link href='https://css.gg/shopping-cart.css' rel='stylesheet'>
    <link href='https://css.gg/arrow-up-r.css' rel='stylesheet'>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')

    <style>
        #helper a {
            text-decoration: none;
            color: white;
            padding: 5px;
            border: 2px solid;
            background-color: gray;
            display: block;
        }

        #helper div {
            margin-bottom: 0;
            width: 100%;
        }

        #helper a:hover {
            background-color: firebrick;
        }

        *:focus {
            outline: none;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<div  style="background-color: black; width: 100%">
    <img style="width: 100%" src="{{ asset('images/logo_banner_image.jpg') }}">
</div>
<nav class="navbar navbar-expand-md navbar-dark bg-pink" style="background-color: black;">
{{--    <a href="{{ route(STORE) }}" class="navbar-brand">GOLDEN STORE</a>--}}
    <button class="navbar-toggler mr-5" data-toggle="collapse" data-target="#ResponsiveNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="ResponsiveNavbar">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a href="{{ route(STORE) }}" class="nav-link active">TRANG CHỦ</a>
            </li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">SẢN PHẨM</a>
                <div class="dropdown-menu mt-2 bg-pink dropdown-nav" style="width: 200px !important;
    					height: auto !important;">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="product-type">

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="{{ route(STORE_CART) }}" class="nav-link">GIỎ HÀNG</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">THÔNG TIN</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">LIÊN HỆ</a>
            </li>
            @if(Auth::guard('web')->check())
            <li class="nav-item" style="position: relative">
                <a class="nav-link login info-user">{{ Auth::guard('web')->user()->name }}</a>
                <div class="dropdown-info-user mt-2 bg-pink">
                    <a href="{{ route(STORE_CUSTOMER_INFO) }}" class="dropdown-item">Thông tin</a>
                    <a href="{{ route(STORE_CUSTOMER_BILL) }}" class="dropdown-item">Hóa đơn</a>
                    <a href="{{ route(STORE_LOGOUT) }}" class="dropdown-item">Đăng xuất</a>
                </div>
            </li>
            @else
                <li class="nav-item">
                    <a href="{{ route(STORE_LOGIN) }}" class="nav-link">ĐĂNG NHẬP</a>
                </li>
            @endif
        </ul>
    </div>
</nav>

<!-- Content -->
@yield('content')

<!-- Taskbar left -->
@if(Request::url() != route(STORE_CART))
    <div class="taskbar-left">
        <div class="giohang">
            <button class="btn"><i class="gg-shopping-cart"></i></button>
            <div class="dropdown-giohang">
                <div id="scroll-giohang">

                </div>
{{--                <div class="row mt-2">--}}
{{--                    <div class="col-md-12" id="tong-giohang">--}}
{{--                        <b>Tổng:</b>--}}
{{--                        <p>VND</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route(STORE_CART) }}" class="btn btn-danger w-75">Thanh toán</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endif

<!-- Footer -->
<div class="container-flude bg-dark">
    <div class="container">
        <div class="row mt-5 bg-dark text-white px-3 py-5"  id="footer">
            <div class="col-md-3 col-sm-6">
                <div>
                    <h6 class="mb-4">HỆ THỐNG CỬA HÀNG</h6>
                    <div>Địa chỉ: 78/1 Nguyễn Thiện Kế, Sơn Trà, Đà Nẵng , Việt Nam</div>
                    <div>Số điện thoại: 0876722439</div>
                    <div>Website:<a href=""> goldensoftware.vn</a></div>
                </div>
            </div>
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div>--}}
{{--                    <h6 class="mb-4">HỖ TRỢ</h6>--}}
{{--                    <div><a href="">Hướng dẫn chọn cỡ giày</a></div>--}}
{{--                    <div><a href="">Chính sách đổi trả/ hoàn tiền</a></div>--}}
{{--                    <div><a href="">Chính sách bảo mật thông tin</a></div>--}}
{{--                    <div><a href="">Chính sách bảo hành</a></div>--}}
{{--                    <div><a href="">Hường dẫn mua hàng</a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-sm-6">--}}
{{--                <div>--}}
{{--                    <h6 class="mb-4">LIÊN HỆ VỚI SHOP</h6>--}}
{{--                    <div><a href="">Hướng dẫn đặt hàng</a></div>--}}
{{--                    <div><a href="">Thông tin thanh toán</a></div>--}}
{{--                    <div><a href="">Chính sách giao hàng và nhận hàng</a></div>--}}
{{--                    <div><a href="">Liên hệ</a></div>--}}
{{--                    <div><a href="">Sơ đồ website</a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-md-3 col-sm-6">
                <div>
                    <h6 class="mb-4">CONTACT US</h6>
                    <div>Zalo:<a href=""> 0876722439</a></div>
                    <div>Email:<a href=""> goldenstoresoftware@gmail.com</a></div>
                    <div>Fanpage:<a href=""> https://www.facebook.com/Goldensoftwarevn/</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scroll-top-->
<div id="scroll-top">
    <i class="gg-arrow-up-r" style="cursor: pointer;"></i>
</div>

<!-- Thêm vào giỏ -->
<div id="add-cart-effect">
    <p>Đã thêm vào giỏ</p>
</div>

{{-- Thanh công cụ trợ giúp --}}
{{--<div style="position: absolute;display: none" id="helper">--}}
{{--    <div><a href="{{ route(STORE) }}">Trang chủ</a></div>--}}
{{--    <div><a href="{{ route(STORE_CART) }}">Giỏ hàng</a></div>--}}
{{--    <div><a href="{{ route(STORE_CUSTOMER_INFO) }}">Thông tin cá nhân</a></div>--}}
{{--</div>--}}

<script src="{{ mix('/js/store.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type: "get",
            url: "/store/product-type",
            success: function (e) {
                var html = '';
                $.each(e.types, function (key, value) {
                    html += '<a href="http://127.0.0.1:8000/store/cart/list-category?product-type='+ value.id +'" class="dropdown-item">'+ value.name +'</a>'
                })

                $('#product-type').html(html);
            }
        });

        $('.info-user').click(function () {
            if ($('.dropdown-info-user').css('display') == 'none') {
                $('.dropdown-info-user').css('display', 'block');
            } else {
                $('.dropdown-info-user').css('display', 'none');
            }
        });

        $('#summernote').summernote({
            placeholder: 'Bình luận',
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        $(window).scroll(function(event) {
            var pos = $('html, body').scrollTop();
            if(pos >= 500){
                $("#scroll-top").css('opacity', '1');
                $(".taskbar-left").css('opacity', '1');
            }
            else{
                $("#scroll-top").css('opacity', '0');
                $(".taskbar-left").css('opacity', '0');
            }
        });

        $(".giohang").click(function(event) {
            var check = $(".dropdown-giohang").css('display');
            if(check == 'block'){
                $(".dropdown-giohang").css('display', 'none');
            }
            else{
                $(".dropdown-giohang").css('display', 'block');
            }
        });

        $("#scroll-top").click(function(event) {
            $("html, body").animate({ scrollTop:0 }, 1400);
        });
    });
</script>
@yield('script')
</body>
</html>
