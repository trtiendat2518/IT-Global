@extends('layouts')
@section('content')

<banner-component></banner-component>

<section class="dtr-section dtr-pt-150 dtr-pb-100">
    <div class="container">
        <!-- heading starts -->
        <div class="dtr-styled-heading text-center">
            <h2>Nguyên Tắc Làm Việc Của Chúng Tôi</h2>
            <p>Chúng tôi chuyên hỗ trợ tư vấn, thiết kế và xây dựng thương hiệu cho các doanh nghiệp, giúp doanh nghiệp sở hữu những thương hiệu
                độc
                quyền và thu hút khách hàng. <span> IT-Global</span> nỗ lực mang đến cho Khách hàng các giải pháp <span>hiệu quả</span> với chi
                phí
                <span>tiết kiệm</span> và hỗ trợ một cách nhanh chóng trong thời đại công nghệ số.
            </p>
        </div>
        <!-- heading ends -->

        <!--== row starts ==-->
        <div class="row dtr-pt-10">

            <!-- column 1 starts -->
            <div class="col-12 col-md-4 dtr-img-feature"> <span class="dtr-img-feature-img"><span
                        class="dtr-img-feature-circle bg-light-grey"></span><i class="icon-shield-alt color-red"></i></span>
                <h4 class="dtr-img-feature-heading">SỬ DỤNG CÔNG NGHỆ VÀ NGÔN NGỮ MẠNH MẼ</h4>
                <p>Ứng dụng các công nghệ tiên tiến. Quy trình kiểm tra chất lượng sản phẩm chặt chẽ trước khi bàn giao.</p>
            </div>
            <!-- column 1 ends -->

            <!-- column 2 starts -->
            <div class="col-12 col-md-4 dtr-img-feature"> <span class="dtr-img-feature-img"><span
                        class="dtr-img-feature-circle bg-light-grey"></span><i class="icon-mobile-alt color-red"></i></span>
                <h4 class="dtr-img-feature-heading">HIỂN THỊ TỐT TRÊN MỌI THIẾT BỊ DI ĐỘNG</h4>
                <p>Xu hướng khách hàng sử dụng di động ngày càng nhiều và website học trực tuyến luôn được khách hàng tận dụng để học trong thời
                    gian
                    di chuyển vì vậy đây là tính năng cần được tối ưu ngay từ đầu.</p>
            </div>
            <!-- column 2 ends -->

            <!-- column 3 starts -->
            <div class="col-12 col-md-4 dtr-img-feature"> <span class="dtr-img-feature-img"><span
                        class="dtr-img-feature-circle bg-light-grey"></span><i class="icon-star2 color-red"></i></span>
                <h4 class="dtr-img-feature-heading">GIAO DIỆN ĐƯỢC THIẾT KẾ RIÊNG VÀ ĐỘC QUYỀN</h4>
                <p>Chúng tôi biết được mỗi trung tâm là một style khác nhau vì vậy website cũng vậy chúng tôi không thể sử dụng chung một giao
                    diện
                    cho nhiều website khác nhau.</p>
            </div>
            <!-- column 3 ends -->
        </div>
        <!--== row ends ==-->
    </div>
</section>

<section class="dtr-sticky-tabs-wrapper bg-light-grey">
    <!-- wrapping div for top shape image - easy to change color / no need to edit image - refer help doc -->
    <div data-target=".dtr-scrollspy-tabs">
        <!-- tab 1 starts -->
        <section id="tab1" class="dtr-sticky-tabs-section">
            <div class="dtr-sticky-tabs-content">
                <div class="container">
                    <div class="row">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6"> <img src="{{ asset('public/main/img/service-img1.png') }}" alt="image"
                                style="border-radius: 10px"> </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6 small-device-space" style="background-color: #fff; border-radius: 10px; padding: 20px">
                            <!-- Heading -->
                            <h2>Thiết kế website</h2>
                            <div class="dtr-pl-50">
                                <!-- Text -->
                                <p>IT-Global với đội ngũ lập trình viên chất lượng và chuyên môn hóa cao, là địa chỉ tin cậy cho anh chị em các ngành
                                    nghề như Marketing, Quảng Cáo hay Thiết kế website, lập trình phần mềm… muốn out source các mảng khác nhau.</p>
                                <ul class="dtr-icon-list dtr-mt-30">
                                    <li><i class="icon-check-circle color-red"></i>Giao diện đẹp, hiện đại</li>
                                    <li><i class="icon-check-circle color-red"></i>Thân thiện với các loại thiết bị</li>
                                    <li><i class="icon-check-circle color-red"></i>Đảm bảo các tiêu chuẩn SEO</li>
                                    <li><i class="icon-check-circle color-red"></i>Bảo mật dữ liệu khách hàng</li>
                                    <li><i class="icon-check-circle color-red"></i>Dễ dàng mở rộng, nâng cấp theo yêu cầu của khách
                                        hàng</li>
                                </ul>
                                <!-- button -->
                                {{-- <a href="#contact" class="dtr-btn btn-red dtr-scroll-link dtr-mt-30">Khám phá thêm</a> --}}
                            </div>
                        </div>
                        <!-- column 2 ends -->

                    </div>
                </div>
            </div>
        </section>
        <!-- tab 1 ends -->

        <!-- tab 2 starts -->
        <section id="tab2" class="dtr-sticky-tabs-section">
            <div class="dtr-sticky-tabs-content">
                <div class="container">
                    <div class="row">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6 small-device-space" style="background-color: #fff; border-radius: 10px; padding: 20px">
                            <!-- Heading -->
                            <h2>Lập trình ứng dụng di động</h2>
                            <div class="dtr-pl-50">
                                <!-- Text -->
                                <p>Lập trình ứng dung IOS/Android theo các công nghệ di động mới nhất từng thời điểm. Đáp ứng được những yêu cầu kĩ
                                    thuật cao cấp mà website bị giới hạn. Việc sở hữu một ứng dụng smartphone hoàn chỉnh giúp doanh nghiệp chiếm được
                                    nhiều thiện cảm trong mắt khách hàng</p>
                                <ul class="dtr-icon-list dtr-mt-30">
                                    <li><i class="icon-check-circle color-red"></i>Hoạt động trên các hệ điều hành di động (Android,
                                        iOS)</li>
                                    <li><i class="icon-check-circle color-red"></i>Giao diện chuyên nghiệp, dễ tương tác</li>
                                    <li><i class="icon-check-circle color-red"></i>Hoạt động mượt mà trên hầu hết các smartphone
                                    </li>
                                </ul>
                                <!-- button -->
                                {{-- <a href="#contact" class="dtr-btn btn-red dtr-scroll-link dtr-mt-30">Khám phá thêm</a> --}}
                            </div>
                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6"> <img src="{{ asset('public/main/img/service-img2.png') }}" alt="image"
                                style="border-radius: 10px"> </div>
                        <!-- column 2 ends -->

                    </div>
                </div>
            </div>
        </section>
        <!-- tab 2 ends -->

        <!-- tab 3 starts -->
        <section id="tab3" class="dtr-sticky-tabs-section">
            <div class="dtr-sticky-tabs-content">
                <div class="container">
                    <div class="row">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6"> <img src="{{ asset('public/main/img/service-img3.png') }}" alt="image"
                                style="border-radius: 10px"> </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6 small-device-space" style="background-color: #fff; border-radius: 10px; padding: 20px">
                            <!-- Heading -->
                            <h2>Tư vấn - Thiết kế phần mềm</h2>
                            <div class="dtr-pl-50">
                                <!-- Text -->
                                <p>Tư vấn và thiết kế phần mềm chuyên biệt phục vụ nhu cầu kinh doanh và quản lý của doanh nghiệp</p>
                                <ul class="dtr-icon-list dtr-mt-30">
                                    <li><i class="icon-check-circle color-red"></i>Đa nền tảng: Desktop, Web app, Mobile app</li>
                                    <li><i class="icon-check-circle color-red"></i>Tư vấn miễn phí cho khách hàng</li>
                                    <li><i class="icon-check-circle color-red"></i>Tối ưu chi phí</li>
                                    <li><i class="icon-check-circle color-red"></i>Nâng cao hiệu năng xử lý nghiệp vụ</li>
                                    <li><i class="icon-check-circle color-red"></i>Dễ dàng mở rộng, nâng cấp theo yêu cầu của khách
                                        hàng</li>
                                </ul>
                                <!-- button -->
                                {{-- <a href="#contact" class="dtr-btn btn-red dtr-scroll-link dtr-mt-30">Khám phá thêm</a> --}}
                            </div>
                        </div>
                        <!-- column 2 ends -->

                    </div>
                </div>
            </div>
        </section>
        <!-- tab 3 ends -->

    </div>
</section>

<feedback-component></feedback-component>

@endsection
