<!doctype html>
<html lang="en">

@include('layouts.simple.header')

<body>
@include('layouts.simple.menu')

    <main class="main__content_wrapper">
        <!-- Start slider section -->
        <section class="hero__slider--section">
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__2--bg">
                            <div class="container">
                                <div class="hero__slider--items__inner two">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-5 col-lg-6 col-md-6">
                                            <div class="slider__content2">
                                                <span class="slider__content2--subtitle">Banner1</span>
                                                <h2 class="slider__content2--maintitle h1">Advertise</h2>   
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-6">
                                            <div class="hero__slider--layer text-right">
                                                <img class="slider__layer--img" src="assets/img/slider/home2-slider1-layer.png" alt="slider-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__2--bg">
                            <div class="container">
                                <div class="hero__slider--items__inner two">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-5 col-lg-6 col-md-6">
                                            <div class="slider__content2">
                                                <span class="slider__content2--subtitle">Banner2</span>
                                                <h2 class="slider__content2--maintitle h1">Advertise</h2>   
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-6">
                                            <div class="hero__slider--layer text-right">
                                                <img class="slider__layer--img home2__slider--layer__img2" src="assets/img/slider/home2-slider2-layer.png" alt="slider-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__2--bg">
                            <div class="container">
                                <div class="hero__slider--items__inner two">
                                    <div class="row  align-items-center">
                                        <div class="col-xl-5 col-lg-6 col-md-6">
                                            <div class="slider__content2">
                                                <span class="slider__content2--subtitle">Banner3</span>
                                                <h2 class="slider__content2--maintitle h1">Advertise</h2>   
                                              
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-6">
                                            <div class="hero__slider--layer text-right">
                                                <img class="slider__layer--img" src="assets/img/slider/home2-slider3-layer.png" alt="slider-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__pagination swiper-pagination"></div>
            </div>
        </section>
        <!-- End slider section -->

        <!-- Start banner section -->
        <section class="banner__section section--padding">
            <div class="container">
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb--n30">
                    <div class="col mb-30">
                        <div class="banner__items position__relative">
                            <iframe width="370" height="264" src="https://www.youtube.com/embed/GMluxVJLciU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col mb-30">
                        <div class="banner__items position__relative">
                            <iframe width="370" height="264" src="https://www.youtube.com/embed/O6rhADfktiQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col mb-30">
                        <div class="banner__items position__relative">
                            <iframe width="370" height="264" src="https://www.youtube.com/embed/-BmnoerSTVQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->
      

        <!-- Start product section -->
        <section class="product__section section--padding pt-0">
            <div class="container">
                <div class="product__section--topbar d-flex justify-content-between align-items-center mb-50">
                    <div class="section__heading">
                        <h2 class="section__heading--maintitle">Career Sector</h2>
                    </div>                
                </div>

                <div class="tab_content">
                    <div id="product_all" class="tab_pane active show">
                        <div class="product__section--inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">

                 <!--------------WorkBlock---------------->
                 @foreach ($worker_home as $row)
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="#">
                                                <img class="product__items--img 
                                                product__primary--img" src="
                                                {{ asset($row->name_img) }}
                                                " alt="product-img">
                                            </a>
                                           
                                        </div>
                                        <div class="product__items--content         product__items2--content text-center">
                                            <a class="add__to--cart__btn" href="#">{{$row->name_career_en}}</a>
                                            <h3 class="product__items--content__title h4"><a href="#">{{$row->name_career_arabic}}</a></h3>
                                            <div class="product__items--price">
                                                <span class="current__price">(30)</span>            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                 <!--------------EndWorkBlock---------------->
                                                           
                             
                            </div>
                        </div>
                    </div>
                    
                   
            </div>
        </section>
        <!-- End product section -->

<div class="p-5"></div>

    </main>

@include('layouts.simple.footer') 
@include('layouts.simple.script')  
  
</body>
</html>