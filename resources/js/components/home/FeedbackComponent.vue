<template>
    <div>
        <section class="dtr-section dtr-py-100 dtr-section-with-bg" style="background-image: url(public/main/img/section-bg-img2.jpg)">
            <!-- blue overlay -->
            <div class="dtr-overlay dtr-overlay-grey"></div>
            <div class="container dtr-overlay-content">
                <!--===== row 1 starts =====-->
                <div class="row d-flex align-items-center">
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-6">
                        <img :src="`public/main/img/testimonial-graphics.png`" alt="image" style="border-radius: 100%" />
                    </div>
                    <!-- column 1 ends -->

                    <!-- column 2 starts -->
                    <div class="col-12 col-md-6">
                        <h2 class="color-white text-center">Tâm tư Khách hàng</h2>
                        <div class="dtr-px-30 dtr-pt-20">
                            <VueSlickCarousel
                                :arrows="false"
                                :dots="true"
                                :autoplay="true"
                                :speed="3000"
                                :autoplaySpeed="2000"
                                :infinite="true"
                                :slidesToShow="1"
                                :slidesToScroll="1"
                            >
                                <div class="dtr-testimonial slick-slide mt-3">
                                    <div class="dtr-testimonial-content clearfix">
                                        <!-- client info -->
                                        <div class="dtr-client-info clearfix">
                                            <div class="dtr-testimonial-user">
                                                <span class="dtr-testimonial-icon"></span>
                                                <img :src="`public/main/img/user-1.jpg`" alt="image" />
                                            </div>
                                            <div class="dtr-testimonial-user-info">
                                                <h6 class="dtr-client-name">N.D.Tuyến</h6>
                                                <span class="dtr-client-job color-white-muted">CTO, Vano</span>
                                            </div>
                                        </div>
                                        <!-- client info ends -->
                                        <p>
                                            “There are many variations of passages of Lorem Ipsum available in some form by injected humour.
                                            There are many variations of passages of lorem ipsum available.”
                                        </p>
                                        <p class="dtr-testimonial-tagline bg-white text-center">
                                            <a href="#" class="color-blue" tabindex="-1"
                                                ><i class="icon-facebook"></i>facebook.com/chris_kram</a
                                            >
                                        </p>
                                    </div>
                                </div>
                                <div class="dtr-testimonial slick-slide mt-3">
                                    <div class="dtr-testimonial-content clearfix">
                                        <!-- client info -->
                                        <div class="dtr-client-info clearfix">
                                            <div class="dtr-testimonial-user">
                                                <span class="dtr-testimonial-icon"></span>
                                                <img :src="`public/main/img/user-2.jpg`" alt="image" />
                                            </div>
                                            <div class="dtr-testimonial-user-info">
                                                <h6 class="dtr-client-name">Roslyn Tryniski</h6>
                                                <span class="dtr-client-job color-white-muted">Entrepreneur, Denmark</span>
                                            </div>
                                        </div>
                                        <!-- client info ends -->
                                        <p>
                                            “There are many variations of passages of Lorem Ipsum available in some form by injected humour.
                                            There are many variations of passages of lorem ipsum available.”
                                        </p>
                                        <p class="dtr-testimonial-tagline bg-white color-blue">
                                            <i class="icon-twitter"></i>twitter.com/roslyn_tryniski
                                        </p>
                                    </div>
                                </div>
                                <div class="dtr-testimonial slick-slide mt-3">
                                    <div class="dtr-testimonial-content clearfix">
                                        <!-- client info -->
                                        <div class="dtr-client-info clearfix">
                                            <div class="dtr-testimonial-user">
                                                <span class="dtr-testimonial-icon"></span>
                                                <img :src="`public/main/img/user-3.jpg`" alt="image" />
                                            </div>
                                            <div class="dtr-testimonial-user-info">
                                                <h6 class="dtr-client-name">Tyrese Harper</h6>
                                                <span class="dtr-client-job color-white-muted">CTO, Bigacme</span>
                                            </div>
                                        </div>
                                        <!-- client info ends -->
                                        <p>
                                            “There are many variations of passages of Lorem Ipsum available in some form by injected humour.
                                            There are many variations of passages of lorem ipsum available.”
                                        </p>
                                        <p class="dtr-testimonial-tagline bg-white color-blue">
                                            <i class="icon-instagram"></i>instagram.com/tyrese.harper
                                        </p>
                                    </div>
                                </div>
                                <div class="dtr-testimonial slick-slide mt-3">
                                    <div class="dtr-testimonial-content clearfix">
                                        <!-- client info -->
                                        <div class="dtr-client-info clearfix">
                                            <div class="dtr-testimonial-user">
                                                <span class="dtr-testimonial-icon"></span>
                                                <img :src="`public/main/img/user-6.jpg`" alt="image" />
                                            </div>
                                            <div class="dtr-testimonial-user-info">
                                                <h6 class="dtr-client-name">Christina Brown</h6>
                                                <span class="dtr-client-job color-white-muted">Project Lead</span>
                                            </div>
                                        </div>
                                        <!-- client info ends -->
                                        <p>
                                            “There are many variations of passages of Lorem Ipsum available in some form by injected humour.
                                            There are many variations of passages of lorem ipsum available.”
                                        </p>
                                        <p class="dtr-testimonial-tagline bg-white color-blue">
                                            <i class="icon-telegram-plane"></i>https://t.me/s/christina_b
                                        </p>
                                    </div>
                                </div>
                                <div class="dtr-testimonial slick-slide mt-3">
                                    <div class="dtr-testimonial-content clearfix">
                                        <!-- client info -->
                                        <div class="dtr-client-info clearfix">
                                            <div class="dtr-testimonial-user">
                                                <span class="dtr-testimonial-icon"></span
                                                ><img :src="`public/main/img/user-7.jpg`" alt="image" />
                                            </div>
                                            <div class="dtr-testimonial-user-info">
                                                <h6 class="dtr-client-name">Ryan Crawford</h6>
                                                <span class="dtr-client-job color-white-muted">Data Analyst</span>
                                            </div>
                                        </div>
                                        <!-- client info ends -->
                                        <p>
                                            “There are many variations of passages of Lorem Ipsum available in some form by injected humour.
                                            There are many variations of passages of lorem ipsum available.”
                                        </p>
                                        <p class="dtr-testimonial-tagline bg-white color-blue">
                                            <i class="icon-pinterest"></i>pinterest.com/ryanC
                                        </p>
                                    </div>
                                </div>
                            </VueSlickCarousel>
                        </div>
                    </div>
                    <!-- column 2 ends -->
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'
export default {
    components: { VueSlickCarousel }
}
</script>

<style scoped>
p {
    color: black;
}

.dtr-client-name {
    margin-bottom: 10px;
}
</style>
