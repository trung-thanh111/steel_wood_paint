<header class="hp-header @yield('header-class')" id="hp-header">
    <div class="hp-header-top">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-collapse uk-flex-middle">
                <!-- Desktop View -->
                <div class="uk-width-large-1-4 uk-visible-large">
                    {{-- <div class="hp-logo">
                        <a href="/">Sơn Cửa</a>
                    </div> --}}
                </div>

                <div class="uk-width-large-2-4 uk-visible-large">
                    <div class="hp-header-nav">
                        <nav class="uk-navbar">
                            <ul class="uk-navbar-nav uk-flex-center" style="margin: 0 auto; display: flex;">
                                <li><a href="#home">Trang chủ</a></li>
                                <li><a href="#intro">Giới thiệu</a></li>
                                <li><a href="#services">Dịch vụ</a></li>
                                <li><a href="#wood-painting">Sơn cửa gỗ</a></li>
                                <li><a href="#iron-painting">Sơn cửa sắt</a></li>
                                <li><a href="#contact">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="uk-width-large-1-4 uk-visible-large uk-text-right">
                    <div class="hp-contact-info">
                        <a href="tel:{{ $system['contact_hotline'] ?? '09XX XXX XXX' }}"
                            style="font-weight: 700; font-size: 18px; color: var(--color-primary); text-decoration: none;">
                            {{ $system['contact_hotline'] ?? '09XX XXX XXX' }}
                        </a>
                    </div>
                </div>

                <!-- Mobile View -->
                <div class="uk-width-1-1 uk-hidden-large">
                    <div class="hp-mobile-header uk-flex uk-flex-middle uk-flex-between">
                        <div class="hp-logo">
                            {{-- <a href="/"
                                style="font-family: var(--font-heading); font-size: 20px; font-weight: 700; color: var(--color-primary); text-decoration: none;">Sơn
                                Cửa</a> --}}
                        </div>

                        <div class="hp-mobile-nav uk-flex uk-flex-middle">
                            <a href="#offcanvas-mobile" class="hp-mobile-toggle" data-uk-offcanvas>
                                <span class="hp-burger-line"></span>
                                <span class="hp-burger-line"></span>
                                <span class="hp-burger-line"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

@include('frontend.component.sidebar')
