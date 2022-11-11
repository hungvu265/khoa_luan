@extends('index')
@section('content')
<!-- Sản phẩm -->
<form action="{{ route(STORE_LIST_CATEGORY) }}" method="get">
    <input type="hidden" name="product-special" value="{{ app('request')->input('product-special') ?? '' }}">
    <input type="hidden" name="product-type" value="{{ app('request')->input('product-type') ?? '' }}">
    <input type="hidden" name="price-type" value="{{ app('request')->input('price-type') ?? '' }}">
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
                <div class="dropdown-danhsach">
                    <h3>GIÁ</h3>
                    <ul class="dropdown-content" style="list-style-type: inherit;">
                        <li class="price-type" data-price="1" style="{{ app('request')->input('price-type') == '1' ? 'background-color:lightgray' : '' }}">< 5000</li>
                        <li class="price-type" data-price="2" style="{{ app('request')->input('price-type') == '2' ? 'background-color:lightgray' : '' }}">5000 - 10000</li>
                        <li class="price-type" data-price="3" style="{{ app('request')->input('price-type') == '3' ? 'background-color:lightgray' : '' }}">> 10000</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <img src="https://rsggroup.com/wp-content/uploads/2020/03/bg-3-980x325.jpg" class="img-thumbnail">
                    </div>
                </div>
                <div class="row">
                    <div class="search-bar col-12">
                        <div>
                            Tăng dần <input type="radio" name="gia" class="sort">
                            Giảm dần <input type="radio" name="gia"  class="sort">
                        </div>
                        <form>
                            <input type="search" name="" placeholder="Nhập tên sản phẩm">
                            <input type="submit" name="" class="btn btn-success">
                        </form>
                    </div>
                </div>
                <div class="row mt-5">
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="border-product">
                                <img src="{{ $product->component->first()->image ?? null }}">
                                <div class="pt-3"><strong>{{ $product->name }}</strong></div>
                                <p>While/Black</p>
                                <div><strong>{{ $product->component->first()->price ?? null }}</strong></div>
                                <button class="btn btn-danger">Mua ngay</button>
                                <div class="add-cart">
                                    <button class="btn btn-success">Thêm vào giỏ</button>
                                </div>
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
    </script>
@endsection
