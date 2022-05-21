@extends('layouts')
@section('content')

<banner-component></banner-component>

<section class="dtr-section dtr-pt-150 dtr-pb-100">
    <div class="container">

        <!-- heading starts -->
        <div class="dtr-styled-heading text-center">
            <h2>Khách hàng là Thượng đế?</h2>
            <p>VÂNG! Với đội ngũ Nhân viên trẻ trung, nhiệt huyết, năng động &amp; sáng tạo kết hợp với các Chuyên gia giàu kinh nghiệm
                trong lĩnh vực CNTT.
            </p>
            <p>
                <span> IT-Global</span> nỗ lực mang đến cho Khách hàng các giải pháp <span>hiệu quả</span> với chi phí
                <span>tiết kiệm</span> và hỗ trợ một cách nhanh chóng trong thời đại công nghệ số.
            </p>
        </div>
        <!-- heading ends -->

        <!--== row starts ==-->
        <div class="row dtr-pt-10">

            <!-- column 1 starts -->
            <div class="col-12 col-md-4 dtr-img-feature"> <span class="dtr-img-feature-img"><span
                        class="dtr-img-feature-circle bg-light-red"></span><i class="icon-thumbs-up2 color-red"></i></span>
                <h4 class="dtr-img-feature-heading">Chất lượng</h4>
                <p>Ứng dụng các công nghệ tiên tiến. Quy trình kiểm tra chất lượng sản phẩm chặt chẽ trước khi bàn giao.</p>
            </div>
            <!-- column 1 ends -->

            <!-- column 2 starts -->
            <div class="col-12 col-md-4 dtr-img-feature"> <span class="dtr-img-feature-img"><span
                        class="dtr-img-feature-circle bg-light-red"></span><i class="icon-laptop color-red"></i></span>
                <h4 class="dtr-img-feature-heading">Toàn diện</h4>
                <p>Triển khai ứng dụng phần mềm đa ngành nghề, lĩnh vực. Đáp ứng mọi nhu cầu ứng dụng công nghệ của doanh nghiệp.</p>
            </div>
            <!-- column 2 ends -->

            <!-- column 3 starts -->
            <div class="col-12 col-md-4 dtr-img-feature"> <span class="dtr-img-feature-img"><span
                        class="dtr-img-feature-circle bg-light-red"></span><i class="icon-star2 color-red"></i></span>
                <h4 class="dtr-img-feature-heading">Chuyên nghiệp</h4>
                <p>Đội ngũ tư vấn, thiết kế năng động, sáng tạo và nhiệt huyết. Dịch vụ bảo trì và hỗ trợ khách hàng 24/7.</p>
            </div>
            <!-- column 3 ends -->

        </div>
        <!--== row ends ==-->

    </div>
</section>

<section class="dtr-sticky-tabs-wrapper">

    <!-- wrapping div for top shape image - easy to change color / no need to edit image - refer help doc -->
    <div class="dtr-top-shape-img" style="background-image: url(public/main/img/inner-nav-bg.svg);">

        <!-- tabs nav start -->
        <div class="dtr-sticky-tabs-nav">
            <div class="container">
                <nav class="dtr-scrollspy-tabs">
                    <ul class="dtr-scrollspy nav justify-content-center dtr-sticky-tabs">
                        <li class="nav-item"> <a class="nav-link" href="#tab1"><i class="icon-file-text"></i>Thiết kế website</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#tab2"><i class="icon-user2"></i>Lập trình ứng dụng di động</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#tab3"><i class="icon-layers"></i>Tư vấn - Thiết kế phần mềm</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- tabs nav ends -->

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
                            <div class="col-12 col-md-6 small-device-space">
                                <!-- Heading -->
                                <h2>Thiết kế website</h2>
                                <div class="dtr-pl-50">
                                    <!-- Text -->
                                    <p>Thiết kế webiste đa ngành nghề, lĩnh vực.</p>
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
                            <div class="col-12 col-md-6 small-device-space">
                                <!-- Heading -->
                                <h2>Lập trình ứng dụng di động</h2>
                                <div class="dtr-pl-50">
                                    <!-- Text -->
                                    <p>Phát triển các ứng dụng điện thoại hoạt động tối ưu trên các thiết bị di động</p>
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
                            <div class="col-12 col-md-6 small-device-space">
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
    </div>
</section>

<feedback-component></feedback-component>

@endsection
