@php
    $offcanvasGalleryImages = [
        'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?q=80&w=800&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1505330622279-bf7d7fc918f4?q=80&w=800&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1510133769068-ad0a02cb4860?q=80&w=800&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1562259949-e8e7689d7828?q=80&w=800&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1595844730298-b9f1ff9b5993?q=80&w=800&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=800&auto=format&fit=crop',
    ];
@endphp

<div id="offcanvas-desktop" class="uk-offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar hp-offcanvas-bar">
        <a class="uk-offcanvas-close hp-offcanvas-close">
            <i class="fa fa-times"></i>
        </a>

        <div class="hp-offcanvas-logo" style="margin-bottom: 30px;">
            <a href="/"
                style="font-family: var(--font-heading); font-size: 24px; font-weight: 700; color: var(--color-primary); text-decoration: none;">
                HOMEPARK
            </a>
        </div>

        <div class="hp-offcanvas-desc">
            Chúng tôi là đơn vị chuyên nghiệp trong lĩnh vực sơn sửa cửa gỗ, cửa sắt. Với đội ngũ thợ lành nghề, chúng
            tôi cam kết mang lại diện mạo hoàn hảo nhất cho ngôi nhà của bạn.
        </div>

        <div class="hp-offcanvas-gallery">
            @foreach ($offcanvasGalleryImages as $img)
                <img src="{{ $img }}" alt="Gallery Image">
            @endforeach
        </div>

        <div class="hp-offcanvas-contact">
            <div style="font-size: 14px; margin-bottom: 8px; line-height: 1.5;"><strong>Địa chỉ:</strong>
                {{ $system['contact_address'] ?? '742 Evergreen Terrace, Quận 7, TP. HCM' }}</div>
            <a href="tel:{{ $system['contact_hotline'] ?? '09XX XXX XXX' }}" style="font-size: 18px; font-weight: 700;">
                {{ $system['contact_hotline'] ?? '09XX XXX XXX' }}
            </a>
        </div>

        <div class="hp-offcanvas-social">
            @if (!empty($system['social_facebook']))
                <a href="{{ $system['social_facebook'] }}"><i class="fa fa-facebook"></i></a>
            @endif
            @if (!empty($system['social_instagram']))
                <a href="{{ $system['social_instagram'] }}"><i class="fa fa-instagram"></i></a>
            @endif
            @if (!empty($system['social_youtube']))
                <a href="{{ $system['social_youtube'] }}"><i class="fa fa-youtube"></i></a>
            @endif
        </div>

        <div style="margin-top: auto; font-size: 11px; opacity: 0.5;">
            {{ $system['homepage_copyright'] ?? '© ' . date('Y') . ' Hompark.' }}
        </div>
    </div>
</div>


<div id="offcanvas-mobile" class="uk-offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar hp-offcanvas-bar">
        <a class="uk-offcanvas-close hp-offcanvas-close">
            <i class="fa fa-times"></i>
        </a>

        <div class="hp-offcanvas-logo" style="margin-bottom: 30px;">
            <a href="/"
                style="font-family: var(--font-heading); font-size: 12px; font-weight: 500; color: var(--color-primary); text-decoration: none;">
                SONCUAGOCUASATCUHANOI.COM
            </a>
        </div>

        <nav class="hp-offcanvas-nav uk-margin-large-bottom">
            <ul class="uk-nav uk-nav-offcanvas">
                <li><a href="#home">Trang chủ</a></li>
                <li><a href="#intro">Giới thiệu</a></li>
                <li><a href="#services">Dịch vụ</a></li>
                <li><a href="#wood-painting">Sơn cửa gỗ</a></li>
                <li><a href="#iron-painting">Sơn cửa sắt</a></li>
                <li><a href="#contact">Liên hệ</a></li>
            </ul>
        </nav>

        <div class="hp-offcanvas-contact hp-border-top uk-padding-top">
            <div
                style="font-family: var(--font-accent); font-size: 11px; font-weight: 700; color: var(--color-primary); margin-bottom: 15px; text-transform: uppercase; letter-spacing: 2px;">
                Liên hệ
            </div>
            <a href="tel:{{ $system['contact_hotline'] ?? '09XX XXX XXX' }}"
                style="font-size: 18px; font-weight: 700; margin-bottom: 5px;">
                {{ $system['contact_hotline'] ?? '09XX XXX XXX' }}
            </a>
        </div>

        <div class="hp-offcanvas-social uk-margin-top">
            @if (!empty($system['social_facebook']))
                <a href="{{ $system['social_facebook'] }}"><i class="fa fa-facebook"></i></a>
            @endif
            @if (!empty($system['social_instagram']))
                <a href="{{ $system['social_instagram'] }}"><i class="fa fa-instagram"></i></a>
            @endif
            @if (!empty($system['social_youtube']))
                <a href="{{ $system['social_youtube'] }}"><i class="fa fa-youtube-play"></i></a>
            @endif
        </div>

        <div style="margin-top: auto; font-size: 11px; opacity: 0.5; padding-top: 20px;">
            {{ $system['homepage_copyright'] ?? '© ' . date('Y') . ' Hompark.' }}
        </div>
    </div>
</div>
