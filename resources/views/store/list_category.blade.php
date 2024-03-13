@extends('index')
@section('content')
<!-- Sản phẩm -->
<form action="{{ route(STORE_LIST_CATEGORY) }}" method="get">
    <input type="hidden" name="product-special" value="{{ app('request')->input('product-special') ?? '' }}">
    <input type="hidden" name="product-type" value="{{ app('request')->input('product-type') ?? '' }}">
    <input type="hidden" name="price-type" value="{{ app('request')->input('price-type') ?? '' }}">
    <input type="hidden" name="sort" value="{{ app('request')->input('sort') ?? '' }}">
    <div class="container option">
        <div class="row mt-5">
            <div class="col-md-3 mt-5">
                <div class="dropdown-danhsach">
                    <h3>TRẠNG THÁI</h3>
                    <ul class="dropdown-content" style="list-style-type: inherit;">
                        @foreach($specials as $row)
                            <li class="special-type" data-special="{{ $row->id }}" style="{{ $row->id == app('request')->input('product-special') ? 'background-color:lightgray' : ''  }}">{{ $row->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <hr>
                <div class="dropdown-danhsach">
                    <h3>DÒNG SẢN PHẨM</h3>
                    <ul class="dropdown-content" style="list-style-type: inherit;">
                        @foreach($productType as $row)
                            <li class="product-type" data-type="{{ $row->id }}" style="{{ $row->id == app('request')->input('product-type') ? 'background-color:lightgray' : ''  }}">{{ $row->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <hr>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
{{--                        <img src="" class="img-thumbnail">--}}
                    </div>
                </div>
                <div class="row">
                    <div class="search-bar col-12">
                        <div>
                            Tăng dần <input type="radio" class="sort" value="1" {{ app('request')->input('sort') == '1' ? 'checked' : '' }}>
                            Giảm dần <input type="radio" class="sort" value="0" {{ app('request')->input('sort') == '0' ? 'checked' : '' }}>
                        </div>
                        <form>
                            <input type="search" name="name" placeholder="Nhập tên sản phẩm">
                            <input type="submit" class="btn btn-success">
                        </form>
                    </div>
                </div>
                <div class="row mt-5">
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="border-product">
                                <img class="img-thumbnail" src="{{ asset('images/' . $product->component->first()->image ?? null) }}">
                                <div class="pt-3"><strong>{{ $product->name }}</strong></div>
                                <p>While/Black</p>
                                <div>
                                    <strong>
                                        {{ number_format($product->component->first()->price, 0, '.', '.') ?? null }} VND
                                    </strong>
                                </div>
                                <a href="{{ route(STORE_CART_DETAIL, $product->id) }}" class="btn btn-danger">Mua ngay</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@section('script')
    <script type="text/javascript">
        function submitForm() {
            $('form').submit();
        }

        $(document).on('click', '.special-type', function () {
            $(".special-type").css('background-color', 'white');
            $(this).css('background-color', 'lightgray');

            let special = $(this).data('special');
            $('input[name="product-special"]').val(special);
            submitForm()
        })

        $(document).on('click', '.product-type', function () {
            $(".product-type").css('background-color', 'white');
            $(this).css('background-color', 'lightgray');

            let productType = $(this).data('type');
            $('input[name="product-type"]').val(productType);
            submitForm()
        })

        $(document).on('click', '.price-type', function () {
            $(".price-type").css('background-color', 'white');
            $(this).css('background-color', 'lightgray');

            let priceType = $(this).data('price');
            $('input[name="price-type"]').val(priceType);
            submitForm()
        })

        $(document).on('click', '.sort', function () {
            $(this).attr('checked');

            $('input[name="sort"]').val($(this).val());
            submitForm()
        })
    </script>
@endsection
