
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <ul class="sidebar-menu">
            <li class="@yield('dashboard')"><a class="nav-link" href="{{route('dashboard')}}"><i
                            class="bx bxs-dashboard"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>
                <li class="nav-item dropdown @yield('order_active')">
                    <a href="javaScript:void(0)" class="nav-link has-dropdown" data-toggle="dropdown">
                        <i class="bx bx-trending-up"></i>
                        <span>{{ __('Product') }}</span>
                    </a>
                    <ul class="dropdown-menu">

                            <li class="@yield('orders')"><a class="nav-link"
                                                            href="{{route('product.form')}}">Add New Products</a></li>

                                <li class="@yield('admins')"><a class="nav-link"
                                                                href="">{{ __('Admin Orders') }}</a>
                                </li>
                                <li class="@yield('seller-orders')"><a class="nav-link"
                                                                       href="">{{ __('Seller Orders') }}</a>
                                </li>

                    </ul>
                </li>
            @if(hasPermission("category_read"))
            <li class="@yield('dashboard')"><a class="nav-link" href="{{route('categories')}}"><i
                            class="bx bxs-dashboard"></i>
                    <span>{{ __('Category') }}</span></a>
            </li>
            @endif
            @if(hasPermission("order_read"))
            <li class="@yield('dashboard')"><a class="nav-link" href="#"><i
                        class="bx bxs-dashboard"></i>
                    <span>{{ __('Order') }}</span></a>
            </li>
            @endif

            <li class="@yield('dashboard')"><a class="nav-link" href="#"><i
                        class="bx bxs-dashboard"></i>
                    <span>{{ __('pos') }}</span></a>
            </li>

            @if(hasPermission("customer_create"))
            <li class="@yield('dashboard')"><a class="nav-link" href="{{route('permission')}}"><i
                class="bx bxs-dashboard"></i>
        <span>{{ __('Permission') }}</span></a>
            </li>
            <li class="@yield('dashboard')"><a class="nav-link" href="{{route('roleIndex')}}"><i
                        class="bx bxs-dashboard"></i>
                    <span>{{ __('Role') }}</span></a>
            </li>
            <li class="@yield('dashboard')"><a class="nav-link" href="{{route('userIndex')}}"><i
                        class="bx bxs-dashboard"></i>
                    <span>{{ __('User') }}</span></a>
            </li>
            @endif

            <li class="@yield('dashboard')"><a class="nav-link" href="{{route('logout')}}"><i
                        class="bx bxs-dashboard"></i>
                    <span>{{ __('Logout') }}</span></a>
            </li>
        </ul>


{{--        <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">--}}
{{--            <i class="bx bx-log-out"></i> {{ __('Logout') }}--}}
{{--        </a>--}}
    </aside>
</div>
