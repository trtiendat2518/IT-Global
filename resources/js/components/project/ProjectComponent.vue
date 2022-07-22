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
                :responsive="responsive"
            >
                <div class="box-cards">
                    <div class="card">
                        <div class="card-img-top">
                            <img :src="`https://thuexemiennam.com/public/admin/images/logo/logo.png`" alt="Card image cap" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Thuê xe miền nam</h5>
                            <p class="card-text">
                                Thuexemiennam là đơn vị tiên phong cung cấp các dịch vụ thuê xe mang lại trải nghiệm tốt nhất cho khách hàng
                                khi ngồi trên xe.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <a href="https://cameraphuongnghi.com/" class="btn btn-primary" target="_blank">Xem chi tiết &#8594;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-card">
                    <div class="card">
                        <div class="card-img-top">
                            <img class="img-top" :src="`https://cameraphuongnghi.com/public/images/logo.jpg`" alt="Card image cap" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Camera Phương Nghi</h5>
                            <p class="card-text">
                                Các sản phẩm và giải pháp của Camera Phuowng Nghi thì việc giám sát của quý khách giờ đây sẽ không chỉ dừng
                                lại ở giám sát nội bộ, giám sát trong phạm vi hẹp mà còn có thể giám sát từ xa.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <a href="https://cameraphuongnghi.com/" class="btn btn-primary" target="_blank">Xem chi tiết &#8594;</a>
                            </div>
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
    components: { VueSlickCarousel },
    data() {
        return {
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        initialSlide: 2
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        initialSlide: 2
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        }
    }
}
</script>

<style scoped>
.card {
    padding: 5px;
    height: auto;
}
.box-card {
    padding-left: 10px;
    padding-right: 10px;
}
.card-img-top {
    height: 100px;
}
.card-body {
    height: 300px;
}
.card-footer {
    background-color: #fff;
    border-top: none;
}
.img-top {
    display: block;
    margin-top: 50px;
    width: 100%;
}

@media only screen and (min-width: 300px) {
    .card-img-top {
        height: 120px;
    }
    .card-body {
        margin-top: 20px;
        height: 250px;
    }
    .card-footer {
        background-color: #fff;
        border-top: none;
    }
    .img-top {
        display: block;
        margin-top: 60px;
    }
}

@media only screen and (min-width: 400px) {
    .card-img-top {
        height: 100px;
    }
    .card-body {
        margin-top: 0px;
        height: 300px;
    }
    .card-footer {
        background-color: #fff;
        border-top: none;
    }
    .img-top {
        display: block;
        margin-top: 50px;
    }
}
</style>
