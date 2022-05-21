<div class="dtr-responsive-header fixed-top" style="">
    <div class="container">

        <a href="https://trieudo.net"><img src="{{ asset('public/main/img/logo-dark.png') }}" alt="logo"></a>

        <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span
                    class="dtr-hamburger-lines"></span></span></button>
    </div>
    <div class="dtr-responsive-header-menu">
        <div class="slicknav_menu">
            <ul class="slicknav_nav slicknav_hidden dtr-scrollspy" style="touch-action: pan-y; display: none;" aria-hidden="true" role="menu">
                <li> <a class="nav-link" href="https://trieudo.net" role="menuitem" tabindex="-1">Trang chủ</a> </li>
                <li> <a class="nav-link " href="https://trieudo.net/dich-vu" role="menuitem" tabindex="-1">Dịch vụ</a> </li>
                <li> <a class="nav-link " href="https://trieudo.net/du-an" role="menuitem" tabindex="-1">Dự án thành công</a> </li>
                <li> <a class="nav-link " href="https://trieudo.net/hoi-dap" role="menuitem" tabindex="-1">Hỏi đáp</a> </li>
            </ul>
        </div>
    </div>
</div>

<header id="dtr-header-global" class="fixed-top trans-header">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">

            <div class="dtr-header-left">

                <a class="logo-default dtr-scroll-link" href="https://trieudo.net"><img src="{{ asset('public/main/img/logo-light.png') }}"
                        alt="logo"></a>

                <a class="logo-alt dtr-scroll-link" href="https://trieudo.net"><img src="{{ asset('public/main/img/logo-dark.png') }}" alt="logo"></a>
            </div>

            <div class="dtr-header-right ml-auto">
                <div class="main-navigation dtr-menu-light">
                    <ul class="sf-menu dtr-nav light-nav-on-load dark-nav-on-scroll sf-js-enabled sf-arrows dtr-menu-light"
                        style="touch-action: pan-y;">
                        <li> <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">TRANG CHỦ</a> </li>
                        <li> <a class="nav-link {{ Request::is('ve-chung-toi') ? 'active' : '' }}" href="{{ url('/ve-chung-toi') }}">GIỚI THIỆU</a>
                        </li>
                        {{-- <li> <a class="nav-link " href="https://trieudo.net/dich-vu">DỊCH VỤ</a> </li> --}}
                        <li> <a class="nav-link {{ Request::is('du-an') ? 'active' : '' }}" href="{{ url('/du-an') }}">DỰ ÁN THÀNH CÔNG</a> </li>
                        <li> <a class="nav-link {{ Request::is('hoi-dap') ? 'active' : '' }}" href="{{ url('/hoi-dap') }}">HỎI ĐÁP</a> </li>
                    </ul>
                </div>
            </div>

            <a href="{{ url('/lien-he') }}" class="dtr-btn btn-red dtr-btn-right-icon dtr-ml-30">LIÊN HỆ<i class="icon-send"></i></a>

        </div>
    </div>
</header>
