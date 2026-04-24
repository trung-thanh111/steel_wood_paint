<footer id="contact" class="hp-footer">
    <div class="uk-container uk-container-center">
        <div class="uk-grid uk-grid-large" data-uk-grid-margin>
            <div class="uk-width-large-1-2 uk-width-medium-1-1"
                data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:100}">
                <div class="hp-footer-info-wrap">
                    <!-- Chính sách Section -->
                    <div class="footer-policy-section" style="margin-bottom: 40px;">
                        <div class="uk-flex uk-flex-middle uk-margin-bottom">
                            <div class="policy-icon"
                                style="width: 45px; height: 45px; background: #cc0000; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                <i class="fa fa-check" style="color: #000; font-size: 24px; font-weight: 900;"></i>
                            </div>
                            <h3 style="color: #fff; margin: 0; font-size: 28px; font-weight: 700;">Chính sách</h3>
                        </div>
                        <div style="color: #fff; line-height: 1.8; font-size: 16px;">
                            {!! $system['contact_policy'] ??
                                '<ul style="list-style: none; padding: 0;"><li>Chỉ 30 phút chúng tôi sẽ có mặt, khảo sát và tư vấn miễn phí cho khách hàng</li><li>Cam kết phục vụ 24/24 không kể thứ 7, chủ nhật, hay ngày lễ</li><li>Tư vấn, báo giá miễn phí.</li></ul>' !!}
                        </div>
                    </div>

                    <!-- VỀ CHÚNG TÔI Section -->
                    <div class="footer-about-section" style="margin-bottom: 40px;">
                        <h3
                            style="color: #fff; font-size: 24px; font-weight: 700; margin-bottom: 20px; text-transform: uppercase;">
                            VỀ CHÚNG TÔI</h3>
                        <p style="color: #fff; line-height: 1.6; margin-bottom: 25px; font-size: 16px;">
                            {{ $system['about_description'] ?? 'Chuyên thi công sơn cửa gỗ, sơn cửa sắt, thợ sơn dầu, sơn Pu, thợ phun sơn đồ gỗ cũ tại Hà Nội. Nhận sơn sửa cửa gỗ, sơn cửa sắt giả gỗ, sơn bàn ghế, tủ bếp, tủ quần áo, giường, đồ gỗ mỹ nghệ cao cấp, chuyển đổi màu sơn theo yêu cầu khách hàng.' }}
                        </p>

                        <div class="branch-list" style="color: #fff; line-height: 1.8; font-size: 16px;">
                            @php
                                $branches = [
                                    ['name' => 'Cơ sở 1', 'addr' => 'Định Công - Quận Hoàng Mai - HN'],
                                    ['name' => 'Cơ sở 2', 'addr' => 'Quận Cầu Giấy - HN'],
                                    ['name' => 'Cơ sở 3', 'addr' => 'Quận Ba Đình - HN'],
                                    ['name' => 'Cơ sở 4', 'addr' => 'Quận Đống Đa - HN'],
                                    ['name' => 'Cơ sở 5', 'addr' => 'Quận Tây Hồ - HN'],
                                    ['name' => 'Cơ sở 6', 'addr' => 'Quận Hà Đông - HN'],
                                    ['name' => 'Cơ sở 7', 'addr' => 'Quận Thanh Xuân - HN'],
                                    ['name' => 'Cơ sở 8', 'addr' => 'Quận Long Biên - HN'],
                                ];
                            @endphp
                            <ul style="list-style: none; padding: 0;">
                                @foreach($branches as $branch)
                                <li style="margin-bottom: 12px; display: flex; align-items: baseline;">
                                    <i class="fa fa-chevron-right" style="color: #ff9800; font-size: 12px; margin-right: 15px;"></i>
                                    <span style="color: #fff; font-weight: 700; font-size: 16px;">{{ $branch['name'] }}: <span style="color: #ff9800; font-weight: 400;">{{ $branch['addr'] }}</span></span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- LIÊN HỆ Section -->
                    <div class="footer-contact-info-section">
                        <h3
                            style="color: #fff; font-size: 24px; font-weight: 700; margin-bottom: 20px; text-transform: uppercase;">
                            LIÊN HỆ VỚI CHÚNG TÔI</h3>
                        <div style="color: #fff; line-height: 2.2; font-size: 16px;">
                            <div style="font-weight: 700;">Website: <span
                                    style="color: #ff9800; font-weight: 400;">{{ $system['contact_website'] ?? 'http://www.sonsuacuagodosat.com' }}</span>
                            </div>
                            <div style="font-weight: 700;">Hotline: <span
                                    style="color: #ff9800; font-weight: 400;">{{ $system['contact_hotline'] ?? '0913 358 593' }}</span>
                            </div>
                            <div style="font-weight: 700;">Email: <span
                                    style="color: #ff9800; font-weight: 400;">{{ $system['contact_email'] ?? 'nvphongsonsuacua@gmail.com' }}</span>
                            </div>
                        </div>
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
