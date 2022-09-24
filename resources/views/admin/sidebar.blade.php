{{--@include('admin.product.dashboard')--}}
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Admin Management</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Cửa hàng
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Request::url() == route(ADMIN_PRODUCT_INDEX) ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route(ADMIN_PRODUCT_INDEX) }}">
                    <i class="align-middle" data-feather="shopping-bag"></i>
                    <span class="align-middle">Sản phẩm</span>
                </a>
                <ul class="sidebar-nav" style="color: white;margin-left: 30px">
                    <li class="sidebar-item {{ Request::url() == route(ADMIN_PRODUCT_TYPE_INDEX) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route(ADMIN_PRODUCT_TYPE_INDEX) }}">
                            <i class="align-middle" data-feather="circle"></i>
                            <span class="align-middle">Thương hiệu</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::url() == route(ADMIN_PRODUCT_COLOR_INDEX) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route(ADMIN_PRODUCT_COLOR_INDEX) }}">
                            <i class="align-middle" data-feather="circle"></i>
                            <span class="align-middle">Màu sắc</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::url() == route(ADMIN_PRODUCT_SPECIAL_INDEX) ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route(ADMIN_PRODUCT_SPECIAL_INDEX) }}">
                            <i class="align-middle" data-feather="circle"></i>
                            <span class="align-middle">Đặc biệt</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-header">
                Khách hàng
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-profile.html">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>

            <li class="sidebar-header">
                Hoá đơn
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="charts-chartjs.html">
                    <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Charts</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="maps-google.html">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
