@extends('frontend.homepage.layout')
@section('content')
    <!-- Section: Home (Hero) -->
    <section id="home" class="hp-hero">
        <div class="hp-hero-slide"
            style="background-image: url('{{ asset('frontend/resources/img/landing/banner_cua.png') }}')">
            <div class="hp-hero-overlay"></div>
            <div class="uk-container uk-container-center hp-hero-content">
                <h1 class="hp-hero-title animated fadeInUp">
                    Dịch vụ Sơn Cửa Sắt - Cửa Gỗ Chuyên Nghiệp
                </h1>
                <p class="hp-hero-desc animated fadeInUp">
                    Mang lại vẻ đẹp hoàn mỹ và sự bền bỉ cho ngôi nhà của bạn với đội ngũ thợ lành nghề, tận tâm.
                </p>
                <div class="hp-hero-btns animated fadeInUp">
                    <a href="#contact" class="hp-btn hp-btn-primary">
                        Nhận tư vấn ngay
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Giới thiệu & Quy trình -->
    <section id="intro" class="hp-section bg-white">
        <div class="uk-container uk-container-center">
            <div class="hp-section-header uk-text-center" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300}">
                <span class="hp-section-num">01</span>
                <div class="hp-title-serif">Giới thiệu & Quy trình</div>
                <h2 class="hp-subtitle-dark">Về chúng tôi</h2>
                <p class="hp-text-desc" style="max-width: 800px; margin: 0 auto 50px;">
                    Chúng tôi tự hào là đơn vị hàng đầu trong lĩnh vực sơn sửa, làm mới các loại cửa sắt, cửa gỗ. Với nhiều
                    năm kinh nghiệm, chúng tôi cam kết mang đến chất lượng dịch vụ cao nhất thông qua quy trình làm việc
                    chuyên nghiệp, minh bạch.
                </p>
            </div>

            <div class="uk-grid uk-grid-large" data-uk-grid-margin>
                <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-text-center">
                    <div class="hp-process-item">
                        <i class="fa fa-comments-o"
                            style="font-size: 40px; color: var(--color-primary); margin-bottom: 20px;"></i>
                        <h4 style="margin-bottom: 10px;">1. Khảo sát</h4>
                        <p style="font-size: 14px;">Lắng nghe nhu cầu và khảo sát hiện trạng tận nơi.</p>
                    </div>
                </div>
                <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-text-center">
                    <div class="hp-process-item">
                        <i class="fa fa-file-text-o"
                            style="font-size: 40px; color: var(--color-primary); margin-bottom: 20px;"></i>
                        <h4 style="margin-bottom: 10px;">2. Báo giá</h4>
                        <p style="font-size: 14px;">Gửi báo giá chi tiết, minh bạch, cam kết không phát sinh.</p>
                    </div>
                </div>
                <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-text-center">
                    <div class="hp-process-item">
                        <i class="fa fa-paint-brush"
                            style="font-size: 40px; color: var(--color-primary); margin-bottom: 20px;"></i>
                        <h4 style="margin-bottom: 10px;">3. Thi công</h4>
                        <p style="font-size: 14px;">Đội ngũ thợ tay nghề cao thực hiện tỉ mỉ từng chi tiết.</p>
                    </div>
                </div>
                <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-text-center">
                    <div class="hp-process-item">
                        <i class="fa fa-check-circle-o"
                            style="font-size: 40px; color: var(--color-primary); margin-bottom: 20px;"></i>
                        <h4 style="margin-bottom: 10px;">4. Bàn giao</h4>
                        <p style="font-size: 14px;">Nghiệm thu công trình và cam kết bảo hành dài hạn.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="services" class="hp-section-services">
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-large-1-2 service-col">
                <div class="service-item"
                    style="background-image: url('{{ asset('frontend/resources/img/landing/wood.png') }}')">
                    <div class="service-overlay"></div>
                    <div class="service-content uk-text-center">
                        <h3 class="service-title">Sơn Cửa Gỗ</h3>
                        <p class="service-desc"
                            style="color: #eee; margin-bottom: 30px; max-width: 400px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                            Khôi phục vẻ đẹp tự nhiên, bảo vệ bề mặt gỗ bền lâu với quy trình sơn PU, sơn dầu chuyên nghiệp,
                            giữ nguyên vân gỗ sang trọng.
                        </p>
                        <a href="#wood-painting" class="hp-btn hp-btn-outline-white">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="uk-width-large-1-2 service-col">
                <div class="service-item"
                    style="background-image: url('{{ asset('frontend/resources/img/landing/iron.png') }}')">
                    <div class="service-overlay"></div>
                    <div class="service-content uk-text-center">
                        <h3 class="service-title">Sơn Cửa Sắt</h3>
                        <p class="service-desc"
                            style="color: #eee; margin-bottom: 30px; max-width: 400px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                            Ngăn ngừa rỉ sét triệt để, tăng tính thẩm mỹ với các loại sơn tĩnh điện, sơn epoxy cao cấp,
                            chống chịu thời tiết khắc nghiệt.
                        </p>
                        <a href="#iron-painting" class="hp-btn hp-btn-outline-white">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Album Sơn cửa gỗ -->
    <section id="wood-painting" class="hp-section bg-off-white">
        <div class="uk-container uk-container-center">
            <div class="hp-section-header uk-text-center">
                <span class="hp-section-num">02</span>
                <div class="hp-title-serif">Album dự án</div>
                <h2 class="hp-subtitle-dark">Sơn Cửa Gỗ</h2>
            </div>

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                @if (isset($woodGallery) && !empty($woodGallery->album))
                    @foreach ($woodGallery->album as $key => $image)
                        <div class="uk-width-large-1-4 uk-width-medium-1-2">
                            <a href="{{ asset($image) }}" class="hp-gallery-item" data-fancybox="wood-gallery">
                                <div class="hp-card-img">
                                    <img src="{{ asset($image) }}" alt="Dự án sơn cửa gỗ {{ $key + 1 }}">
                                    <div class="hp-gallery-overlay">
                                        <i class="fa fa-expand"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <div class="uk-width-1-1 uk-text-center">Đang cập nhật hình ảnh dự án...</div>
                @endif
            </div>
        </div>
    </section>

    <!-- Section: Album Sơn cửa sắt -->
    <section id="iron-painting" class="hp-section bg-white">
        <div class="uk-container uk-container-center">
            <div class="hp-section-header uk-text-center">
                <span class="hp-section-num">03</span>
                <div class="hp-title-serif">Album dự án</div>
                <h2 class="hp-subtitle-dark">Sơn Cửa Sắt</h2>
            </div>

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                @if (isset($ironGallery) && !empty($ironGallery->album))
                    @foreach ($ironGallery->album as $key => $image)
                        <div class="uk-width-large-1-4 uk-width-medium-1-2">
                            <a href="{{ asset($image) }}" class="hp-gallery-item" data-fancybox="iron-gallery">
                                <div class="hp-card-img">
                                    <img src="{{ asset($image) }}" alt="Dự án sơn cửa sắt {{ $key + 1 }}">
                                    <div class="hp-gallery-overlay">
                                        <i class="fa fa-expand"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <div class="uk-width-1-1 uk-text-center">Đang cập nhật hình ảnh dự án...</div>
                @endif
            </div>
        </div>
    </section>
@endsection
