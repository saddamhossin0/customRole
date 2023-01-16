<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="bx bx-menu"></i></a>
            </li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
        {{--  <a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">

                @if(Sentinel::getUser()->images && array_key_exists('image_40x40',Sentinel::getUser()->images) && @is_file_exists(Sentinel::getUser()->images['image_40x40']))

                    <img alt="{{Sentinel::getUser()->first_name}}"
                         src="{{static_asset(Sentinel::getUser()->images['image_40x40'])}}" class="rounded-circle mr-1">
                @else
                    <img alt="{{Sentinel::getUser()->first_name}}"
                         src="{{asset('public/assets/images/user40x40.jpg')}}" class="rounded-circle mr-1">
                @endif
                <div class="d-sm-none d-lg-inline-block">{{Sentinel::getUser()->first_name }}</div>
            </a>  --}}
            <div class="dropdown-menu dropdown-menu-right">
                {{--            @if(@Sentinel::getUser()->lastLogin())--}}
                {{--                <div class="dropdown-title">{{ __('Logged in :minutes',['minutes' => \Carbon\Carbon::parse(Sentinel::getUser()->lastLogin())->diffForHumans()])}}</div>--}}
                {{--            @endif--}}
                <a href=""
                   class="dropdown-item has-icon">
                    <i class="bx bx-user"></i> {{ __('Profile') }}
                </a>
                <a href=""
                   class="dropdown-item has-icon">
                    <i class='bx bx-file'></i>{{ __('Login Activities') }}
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                    <i class="bx bx-log-out"></i> {{ __('Logout') }}
                </a>
            </div>
        </li>
    </ul>

</nav>
