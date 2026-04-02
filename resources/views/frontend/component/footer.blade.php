<footer id="contact" class="hp-footer">
    <div class="uk-container uk-container-center">
        <div class="uk-grid uk-grid-large" data-uk-grid-margin>
            <div class="uk-width-large-1-2 uk-width-medium-1-1"
                data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:100}">
                <div class="hp-footer-info-wrap">
                    <div class="hp-footer-logo" style="margin-bottom: 25px;">
                        <a href="/"
                            style="font-family: var(--font-heading); font-size: 28px; font-weight: 700; color: var(--color-white); text-decoration: none; letter-spacing: 2px; text-transform: uppercase;">
                            Sơn cửa chuyên nghiệp
                        </a>
                    </div>
                    <p class="hp-footer-desc"
                        style="max-width: 500px; margin-bottom: 20px; opacity: 0.8; line-height: 1.8;">
                        {{ $system['homepage_description'] ?? 'Dịch vụ sơn cửa gỗ, cửa sắt chuyên nghiệp. Chúng tôi cam kết mang lại chất lượng dịch vụ cao nhất, màu sơn bền đẹp và quy trình làm việc minh bạch cho mọi công trình.' }}
                    </p>
                    <p>Sơn cửa gỗ, cửa sắt cũ Hà Đông</p>
                    <p>Sơn cửa gỗ, cửa sắt cũ Hoàng Mai</p>
                    <p>Sơn cửa gỗ, cửa sắt cũ Thanh Xuân</p>
                    <p>Sơn cửa gỗ, cửa sắt cũ Cầu Giấy</p>
                    <p>Sơn cửa gỗ, cửa sắt cũ Long Biên</p>
                    <p>Sơn cửa gỗ, cửa sắt cũ Ba Đình</p>
                    <p>Sơn cửa gỗ, cửa sắt cũ Đống Đa</p>
                    <p>Sơn cửa gỗ, cửa sắt cũ Hai Bà Trưng</p>
                    <p>Sơn cửa gỗ, cửa sắt cũ Hoàn Kiếm</p>
                    <p>Sơn cửa gỗ, cửa sắt cũ Tây Hồ</p>
                    <div class="hp-footer-contact-item uk-flex uk-flex-middle hp-gap-15" style="margin-bottom: 30px;">
                        <i class="fa fa-phone" style="color: var(--color-primary); font-size: 20px; width: 20px;"></i>
                        <span
                            style="opacity: 0.9; font-weight: 700; font-size: 18px; color: var(--color-white);">{{ $system['contact_hotline'] ?? '09XX XXX XXX' }}</span>
                    </div>
                </div>
            </div>
            <div class="uk-width-large-1-2 uk-width-medium-1-1"
                data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:300}">
                <div class="hp-footer-form-container">
                    <h4 class="hp-footer-title"
                        style="margin-bottom: 25px; color: var(--color-white); font-size: 20px; text-transform: uppercase; letter-spacing: 1px;">
                        Yêu cầu tư vấn</h4>
                    <form id="footer-contact-form" class="hp-footer-form" action="{{ route('visit-request.store') }}"
                        method="POST">
                        @csrf
                        {{-- Hidden field to support legacy property requirement if necessary --}}
                        <input type="hidden" name="property_id" value="1">

                        <div class="uk-grid uk-grid-small">
                            <div class="uk-width-large-1-2 uk-width-medium-1-1 uk-margin-bottom">
                                <input type="text" name="full_name" placeholder="Họ và tên *" required
                                    class="hp-footer-input">
                            </div>
                            <div class="uk-width-large-1-2 uk-width-medium-1-1 uk-margin-bottom">
                                <input type="text" name="phone" placeholder="Số điện thoại *" required
                                    class="hp-footer-input">
                            </div>
                            <div class="uk-width-1-1 uk-margin-bottom">
                                <select name="service_type" class="hp-footer-input hp-footer-select">
                                    <option value="" disabled selected>Chọn dịch vụ quan tâm</option>
                                    <option value="Sơn cửa gỗ">Sơn cửa gỗ</option>
                                    <option value="Sơn cửa sắt">Sơn cửa sắt</option>
                                    <option value="Cả hai dịch vụ">Cả hai dịch vụ</option>
                                </select>
                            </div>
                            <div class="uk-width-1-1 uk-margin-bottom">
                                <textarea name="message" placeholder="Lời nhắn của bạn..." rows="4" class="hp-footer-input"></textarea>
                            </div>
                            <div class="uk-width-1-1">
                                <button type="submit" class="hp-btn hp-btn-primary"
                                    style="width: 100%; padding: 15px; font-weight: 700; text-transform: uppercase;">
                                    Gửi yêu cầu ngay
                                </button>
                            </div>
                        </div>
                        <div class="form-status uk-margin-top" style="display: none;"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

@include('frontend.component.floating-social')
