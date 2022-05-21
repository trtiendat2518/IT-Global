@extends('layouts')
@section('content')
<div id="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.568297149225!2d106.72630632197323!3d10.844311967568432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527da35fb7ee7%3A0xcd9e712802c306fa!2zMiDEkMaw4budbmcgNDAsIEhp4buHcCBCw6xuaCBDaMOhbmgsIFRo4bunIMSQ4bupYywgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1653119126136!5m2!1svi!2s"
        width="100%" height="450" frameborder="0" style="border:0; margin-top: 130px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <section class="dtr-section dtr-section-with-bg bg-grey-custom color-white" style="background-image: url(public/main/img/white-shape-bg.png);">

        <!-- wrapping div for top shape image - easy to change color / no need to edit image - refer help doc -->
        <div class="dtr-py-100 dtr-top-shape-img" style="background-image: url(public/main/img/contact-section-top.svg);">
            <div class="container">

                <!--== row starts ==-->
                <div class="row">

                    <!-- column 1 starts -->
                    <div class="col-12 col-md-8">

                        <!-- heading starts -->
                        <div class="dtr-styled-heading">
                            <h2>Hãy liên hệ với IT-Global</h2>
                            <p class="color-white-muted">Mọi thắc mắc, ý kiến hoặc đóng góp cho IT-Global, Quý khách Vui lòng điền vào Form bên dưới.
                                IT-Global xin chân thành cám ơn!</p>
                        </div>
                        <!-- heading ends -->

                        <!-- form starts -->
                        <div class="dtr-form dtr-form-styled dtr-form-dark-bg">
                            <form id="contactform" method="post" action="php/contact-form.php" novalidate="novalidate">
                                <fieldset>

                                    <!-- form two columns start -->
                                    <div class="dtr-form-row dtr-form-row-2col clearfix">
                                        <div class="dtr-form-column">
                                            <p class="dtr-form-field"> <span class="dtr-form-subtext">Tên khách hàng</span>
                                                <input name="name" type="text" placeholder="Họ &amp; tên">
                                            </p>
                                        </div>
                                        <div class="dtr-form-column">
                                            <p class="dtr-form-field"> <span class="dtr-form-subtext">Email</span>
                                                <input name="email" class="required email" type="text" placeholder="email@example.com">
                                            </p>
                                        </div>
                                    </div>
                                    <!-- form two columns ends -->
                                    <p class="dtr-form-field"> <span class="dtr-form-subtext">Nội dung</span>
                                        <textarea rows="6" name="message" id="message" class="required"
                                            placeholder="Thắc mắc, ý kiến hoặc đóng góp cho IT-Global..."></textarea>
                                    </p>
                                    <p class="text-center">
                                        <button class="dtr-btn btn-red w-100" type="submit"> Gửi đến IT-Global <i
                                                class="icon-arrow-right-circle dtr-ml-10"></i> </button>
                                    </p>
                                    <div id="result"></div>
                                </fieldset>
                            </form>
                        </div>
                        <!-- form ends -->

                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4">
                        <div class="dtr-pl-50">
                            <img src="{{ asset('public/main/img/contact.jpg') }}" alt="image" class="small-device-space"
                                style="border-radius: 10px; margin-bottom: 30px">

                            <!-- contact box starts -->
                            <div class="dtr-contact-box"> <i class="icon-telegram-plane"></i>
                                <div class="dtr-contact-box-content color-white"> <span class="dtr-contact-box-title color-white-muted">Email</span>
                                    info@it-global.net</div>
                            </div>
                            <!-- contact box ends -->

                            <!-- contact box starts -->
                            <div class="dtr-contact-box dtr-mt-20"> <i class="icon-whatsapp"></i>
                                <div class="dtr-contact-box-content color-white"> <span class="dtr-contact-box-title color-white-muted">Hotline</span>
                                    +84 987.613.161</div>
                            </div>
                            <!-- contact box ends -->
                        </div>
                    </div>
                    <!-- column 2 ends -->

                </div>
                <!--== row ends ==-->

            </div>
        </div>
    </section>
</div>
@endsection
