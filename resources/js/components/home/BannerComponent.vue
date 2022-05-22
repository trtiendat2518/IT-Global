<template>
    <div>
        <section class="dtr-section dtr-section-with-bg dtr-hero-section-top-padding bg-grey-custom">
            <div class="dtr-bottom-shape-img" style="background-image: url(public/main/img/test.svg)">
                <div class="container">
                    <!--===== row 1 starts =====-->
                    <div class="row d-flex align-items-center dtr-pb-100">
                        <div class="col-md-12">
                            <h1 class="color-white">Xây dựng - Thiết kế - Lập trình Webiste &amp; Ứng dụng di động</h1>
                            <p class="text-white">
                                Điều đặc biệt nhất khi thiết kế website ở <strong>IT-Global</strong> là bạn không cần phải lo lắng về trình
                                độ kỹ thuật, thẩm mỹ thiết kế hay hậu mãi, bảo trì, bảo hành, bảo mật… Tất cả những gì bạn cần chuẩn bị một
                                ý tưởng rõ ràng để cùng chúng tôi trao đổi tư vấn cho bạn..
                            </p>
                        </div>

                        <!-- <div class="col-md-6">
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
                        </div> -->
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
