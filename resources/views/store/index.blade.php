@extends('index')
@section('content')
<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  style="background-color: #E3E1D9;">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="width: 70%; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('images/logo_banner_1.jpg') }}" class="d-block " alt="anh">
        </div>
        <div class="carousel-item">
            <img  style="width: 70%; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('images/logo_banner_2.jpg') }}" class="d-block" alt="anh">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Main Content-->
@if(isset($specials))
@foreach($specials as $special)
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="title-product">{{ $special->name }}</h2>
            </div>
        </div>
        <div class="row mt-3">
            @foreach($special->product as $key => $row)
                @if($key <= 3)
                    <div class="col-md-3">
                        <div style="width: 200px">
                            <div style="width: 200px; height: 200px; border-radius: 50%; border: 2px solid; background-image: url('{{asset('images/' . $row->component->first()->image)}}'); background-position: center; background-size: cover;background-repeat: no-repeat;" onclick="redirectLink('http://127.0.0.1:8000/store/cart/list-category?product-type=1')"></div>
                            <h3 class="text-center mt-3" style="font-family: Oswald, Oswald, sans-serif;color: #63584c">Adobe</h3>
                        </div>
{{--                        <div class="border-product">--}}
{{--                            <input type="hidden" name="product_id" value="{{ $row->id }}">--}}
{{--                            <img src="{{ asset('images/' . $row->component->first()->image) }}"--}}
{{--                                class="img-thumbnail">--}}
{{--                            <div class="pt-3 name"><strong>{{ $row->name }}</strong></div>--}}
{{--                            <p>While/Black</p>--}}
{{--                            <div>--}}
{{--                                <strong class="price">--}}
{{--                                    {{ number_format($row->component->first()->price) }} VNĐ--}}
{{--                                </strong>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route(STORE_CART_DETAIL, $row->id) }}" class="btn btn-danger">Mua ngay</a>--}}
{{--                        </div>--}}
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endforeach
@endif

<hr>

<!-- Sản phẩm mới -->
<div class="mt-5">
    <div class="row">
        <div class="col-6" style="padding-left: 50px">
            <img style="width: 100%" src="{{ asset('images/image_footer.jpg') }}" class="img-fluid">
        </div>
        <div class="col-6" style="display: flex;align-items: center;justify-content: center;">
            <div>
                <h3 style="font-family: Oswald, Oswald, sans-serif;color: #63584c;font-size: 38px;font-weight: 400">ĐĂNG KÝ NHẬN SÁCH </h3>
                <form action="" method="post" style="display: flex;box-shadow: 0 10px 15px #cdcdcd;position: relative;border-radius: 30px;overflow: hidden;margin: 0">
                    <input style="margin: 0; border: none; width: 100%; font-weight: 300; height: 50px; font-size: 16px; padding-left: 30px"
                        type="email" value="" placeholder="Email của bạn" name="EMAIL" id="mail" aria-label="general.newsletter_form.newsletter_email">
                    <button style="position: absolute; right: 0; top: 0; height: 50px; background-color: #d4651f; color: #FFFFFF; font-size: 16px; text-transform: uppercase"
                        class="btn subscribe" name="subscribe" id="subscribe">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        function showCart(data) {
            var row = '';
            var sort = [];
            $.each(data, function (index, value) {
                sort.push(value);
            });
            sort.sort(function (a, b) {
                return a.time - b.time;
            });
            $.each(sort, function (index, val) {
                row += '<div class="row">' + '<input type="hidden" name="product_id" value="' + val.id + '">' + '<div class="col-md-5">' + '<img src="' + 'http://127.0.0.1:8000/images/' + val.img + '">' + '</div>' + '<div class="col-md-7">' + '<strong>' + val.name + '</strong>' + '<div class="product-giohang">' + '<div>' + '<p>Giá: </p>' + '<p>' + val.price + '</p>' + '</div>' + '<div>' + '<p>Số lượng: </p>' + '<p>' + val.amount + '</p>' + '</div>' + '</div>' + '</div>' + '<hr>' + '</div>';
            });
            return row;
        }

        function redirectLink(url) {
            window.location.href = url
        }

        $(document).ready(function () {
            $.ajax({
                type: "get",
                url: "/store/cart/cart-session",
                success: function success(e) {
                    $('#scroll-giohang').append(showCart(e));
                }
            });
        })
    </script>
@endsection


