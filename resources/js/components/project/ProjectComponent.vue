<template>
    <div class="row">
        <div class="col-md-12">
            <VueSlickCarousel
                :arrows="true"
                :autoplay="true"
                :speed="3000"
                :autoplaySpeed="2000"
                :infinite="true"
                :slidesToShow="4"
                :slidesToScroll="1"
            >
                <div class="card">
                    <img class="card-img-top" :src="`https://thuexemiennam.com/public/admin/images/logo/logo.png`" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">Thuê xe miền nam</h5>
                        <p class="card-text">
                            Thuexemiennam là đơn vị tiên phong cung cấp các dịch vụ thuê xe mang lại trải nghiệm tốt nhất cho khách hàng khi
                            ngồi trên xe.
                        </p>
                        <div class="text-center">
                            <a href="https://thuexemiennam.com/" class="btn btn-primary" target="_blank">Xem chi tiết &#8594;</a>
                        </div>
                    </div>
                </div>
            </VueSlickCarousel>
        </div>
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
.card {
    padding: 10px;
}
</style>
