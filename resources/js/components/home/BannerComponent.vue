<template>
    <div>
        <section
            class="dtr-section dtr-section-with-bg dtr-hero-section-top-padding bg-grey-custom"
            style="background-image: url(public/main/img/white-shape-bg.png)"
        >
            <div class="dtr-bottom-shape-img" style="background-image: url(public/main/img/hero-bottom.svg)">
                <div class="container">
                    <!--===== row 1 starts =====-->
                    <div class="row d-flex align-items-center dtr-pb-100">
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6">
                            <!-- intro text -->
                            <h1 class="color-white">Thiết kế - Lập trình Webiste &amp; Ứng dụng di động</h1>
                            <p class="color-white-muted">
                                <strong>IT-Global</strong> cung cấp các giải pháp Ứng dụng webiste và Ứng dụng di động trên nhiều nền tảng
                                công nghệ, ngôn ngữ lập trình và thân thiện với nhiều thiết bị.
                            </p>
                            <!-- button -->
                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6 small-device-space">
                            <VueSlickCarousel
                                :arrows="true"
                                :autoplay="true"
                                :speed="3000"
                                :autoplaySpeed="2000"
                                :infinite="true"
                                :slidesToShow="1"
                                :slidesToScroll="1"
                            >
                                <div class="slick-slide">
                                    <img class="banner-img" :src="`public/main/img/blogpost-img1.jpg`" alt="image" />
                                </div>
                                <div class="slick-slide">
                                    <img class="banner-img" :src="`public/main/img/blogpost-img2.jpg`" alt="image" />
                                </div>
                                <div class="slick-slide slick-current slick-active">
                                    <img class="banner-img" :src="`public/main/img/blogpost-img3.jpg`" alt="image" />
                                </div>
                            </VueSlickCarousel>
                            <!--=== img slider - 1col starts ===-->
                            <!-- <div class="dtr-slick-slider dtr-img-slider-1col dtr-rounded-img slick-initialized slick-slider">
                                <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                                <div class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 1440px">
                                        <div
                                            class="slick-slide"
                                            data-slick-index="0"
                                            aria-hidden="true"
                                            style="
                                                width: 450px;
                                                position: relative;
                                                left: 0px;
                                                top: 0px;
                                                z-index: 998;
                                                opacity: 0;
                                                transition: opacity 1500ms ease 0s;
                                            "
                                            tabindex="-1"
                                        >
                                            <img :src="`public/main/img/blogpost-img1.jpg`" alt="image" />
                                        </div>
                                        <div
                                            class="slick-slide"
                                            data-slick-index="1"
                                            aria-hidden="true"
                                            style="
                                                width: 450px;
                                                position: relative;
                                                left: -480px;
                                                top: 0px;
                                                z-index: 998;
                                                opacity: 0;
                                                transition: opacity 1500ms ease 0s;
                                            "
                                            tabindex="-1"
                                        >
                                            <img :src="`public/main/img/blogpost-img2.jpg`" alt="image" />
                                        </div>
                                        <div
                                            class="slick-slide slick-current slick-active"
                                            data-slick-index="2"
                                            aria-hidden="false"
                                            style="width: 450px; position: relative; left: -960px; top: 0px; z-index: 999; opacity: 1"
                                            tabindex="0"
                                        >
                                            <img :src="`public/main/img/blogpost-img3.jpg`" alt="image" />
                                        </div>
                                    </div>
                                </div>

                                <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                            </div> -->
                            <!--=== img slider - 1col ends ===-->
                        </div>
                        <!-- column 2 ends -->
                    </div>
                    <!--===== row 1 ends =====-->
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
.banner-img {
    border-radius: 10px;
}
</style>
