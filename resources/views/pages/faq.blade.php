@extends('layouts')
@section('content')
<section id="about" class="dtr-section dtr-pt-100 dtr-pb-150" style="margin-top: 90px">
    <!-- blue overlay -->
    <div class="container color-dark">

        <!-- row starts -->
        <div class="row">

            <!-- column 1 starts -->
            <div class="col-12 col-md-6 col-lg-5">
                <h2>FAQs</h2>
                <p>IT-Global xin phép giải đáp một số thắc mắc chung của Quý khách.</p>

                <!--== accordion starts ==-->
                <div class="dtr-mt-30">
                    <div class="dtr-accordion accordion" id="accord-index1">

                        <!-- accordion tab 1 starts -->
                        <div class="card">
                            <div class="card-header" id="accord-index1-heading1">
                                <h4>
                                    <button class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#accord-index1-collapse1" aria-expanded="false" aria-controls="accord-index1-collapse1">Quy trình
                                        phát triển phần mềm tại IT-Global?</button>
                                </h4>
                            </div>
                            <div id="accord-index1-collapse1" class="collapse" aria-labelledby="accord-index1-heading1" data-parent="#accord-index1"
                                style="">
                                <div class="card-body">
                                    1. Lấy yêu cầu từ khách hàng<br>
                                    2. Phân tích - thiết kế hệ thống<br>
                                    3. Nhận phản hồi từ khách hàng<br>
                                    4. Phát triển hệ thống<br>
                                    5. Nhận phản hồi từ khách hàng<br>
                                    6. Hoàn thiện hệ thống<br>
                                    7. Bảo trì hệ thống.
                                </div>
                            </div>
                        </div>
                        <!-- accordion tab 1 ends -->

                        <!-- accordion tab 2 starts -->
                        <div class="card">
                            <div class="card-header" id="accord-index1-heading2">
                                <h4>
                                    <button class="dtr-btn accordion-btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#accord-index1-collapse2" aria-expanded="false" aria-controls="accord-index1-collapse2">Các công
                                        nghệ được IT-Global sử dụng?</button>
                                </h4>
                            </div>
                            <div id="accord-index1-collapse2" class="collapse" aria-labelledby="accord-index1-heading2" data-parent="#accord-index1"
                                style="">
                                <div class="card-body">
                                    1. Thiết kế web: HTML, JS, CSS, Laravel, NodeJS, ReactJS, VueJS, AngularJS...<br>
                                    2. Lập trình ứng dụng di động: Java, React Native, Fluter...<br>
                                    3. Lập trình phần mềm ứng dụng Desktop: .Net Framework<br>
                                </div>
                            </div>
                        </div>
                        <!-- accordion tab 2 ends -->

                    </div>
                </div>
                <!--== accordion ends ==-->

                <p class="color-dark dtr-mt-40">"Chúng tôi luôn nỗ lực hết sức để mang lại những trải nghiệm hoàn hảo, hiệu quả trong công việc cho
                    Khách hàng với một chi phí tối ưu."</p>

                <!-- author box starts -->
                <div class="dtr-author-box dtr-mt-20"> <img src="{{ asset('public/main/img/user.jpg') }}" width="60" height="60" alt="image"
                        class="dtr-author-img border-red">
                    <div class="dtr-author-content">
                        <h6 class="color-blue">Nguyễn Minh Tân</h6>
                        <p class="color-dark">Founder, CEO</p>
                    </div>
                </div>
                <!-- author box ends -->

            </div>
            <!-- column 1 ends -->

            <!-- column 2 starts -->
            <div class="col-12 col-md-6 col-lg-6 offset-lg-1 small-device-space">
                <img src="{{ asset('public/main/img/about-img.jpg') }}" alt="image" style="border-radius: 10px">
            </div>
            <!-- column 2 ends -->

        </div>
        <!-- row ends -->

    </div>
</section>
@endsection
