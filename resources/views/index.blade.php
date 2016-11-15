@extends('layouts.extend')

@section('slider')
<?php 
    $domain = URL('').'/';
    $banner = DB::table('images')->get();
?>

<style type="text/css">
    .product-cart a {
        padding: 5px 4px;
    }
    .hot_product .product .product-price{
        font-size: 13px;
    }
    .product-desc{
        padding: 11px 0;
    }
</style>
<div class='container slide_wrapper' style='margin-top: 20px;'>
    <!-- left menu -->
    <div class="panel-group left_menu col-md-3 hidden-xs hidden-sm" id='left_menu' style="z-index: 1000 !important">
        <div class="panel-heading">
            <h4 class="panel-title">
                <i class='icon-line-menu'></i> Danh mục sản phẩm
            </h4>
        </div>
 
        <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body">
                <ul class='nav nav-pills nav-stacked'>
                 <?php 

                 foreach ($catalog as $ca) {
                    if($ca->parent_id == 0){
                        echo "<li class=' menu'><a class='menu' href='".$domain."catalog={$ca->alias}'><img src='".$ca->image_link."' alt='".$ca->name."'/>{$ca->name}<i class='icon-angle-right arrow'></i></a><ul class='submenu'>";
                        $i=0;
                        foreach($catalog as $sub_ca)
                        {
                            if($i==0)
                            {
                                echo "<div class='submenu_padding'>";
                                $i=1;
                            }
                            if($sub_ca->parent_id == $ca->id)
                            {
                                $i++;
                                echo "<li class=''><a class='sub-menu' href='".$domain."navigation&slug={$sub_ca->alias}'><div>{$sub_ca->name}</div></a></li>"; 
                            }
                            if($i==8)
                            {
                                echo "</div>";
                                $i=0;
                            }
                            
                        }

                    }
                    echo "</ul></li>";
                }

                ?>
            </ul>
        </div>
    </div>
</div>

<!-- end left menu -->
<div class='col-md-9 col-md-push-3 slider_wrap'>
    <!-- Slider -->
    <ul class="main-nav clearfix hidden-xs">
        <li><a href="{{url('')}}/sam-pham-do-choi-tinh-duc-moi">Hàng mới 2016</a><span class="icon-hot"></span></li>
        <li><a href="{{url('')}}/bai-viet">Kiến thức giới tính</a><span class="icon-new"></span></li>
    </ul>

    <section id="slider" class="revslider-wrap ohidden clearfix hidden-xs">

                        <!--
#################################
- THEMEPUNCH BANNER -
#################################
-->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE  -->





            <li data-transition="random" data-slotamount="7" data-link="#" data-title="">



                <img src="{{url('')}}/public/assets/slideshow_24565.png?1476608156115" alt='slide_link_2' style='opacity: 0;'>



                <div class="tp-caption customin lfl ltr tp-resizeme revo-slider-caps-text uppercase" data-x="center" data-y="center" data-customin="x:-300px;y:0px;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:0% 0%;" data-speed="700" data-start="1000" data-easing="easeOutBack" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="easeOutBack" style=" color: #fff; font-size: 50px"></div>
            </li>





        </ul>
    </div>
</div>

<script type="text/javascript">
    jQuery(document)
    .ready(function () {
        if ($(window)
            .width() > 767) {
            jQuery('.tp-banner')
        .show()
        .revolution({
            dottedOverlay: "none"
            , delay: 5000
            , startwidth: 1140
            , startheight: 550
            , hideThumbs: 200,

            thumbWidth: 100
            , thumbHeight: 50
            , thumbAmount: 5,

            navigationType: "none"
            , navigationArrows: "solo"
            , navigationStyle: "preview2",

            touchenabled: "on"
            , onHoverStop: "on",

            swipe_velocity: 0.7
            , swipe_min_touches: 1
            , swipe_max_touches: 1
            , drag_block_vertical: false,

            parallax: "mouse"
            , parallaxBgFreeze: "on"
            , parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

            keyboardNavigation: "off",

            navigationHAlign: "center"
            , navigationVAlign: "bottom"
            , navigationHOffset: 0
            , navigationVOffset: 20,

            soloArrowLeftHalign: "left"
            , soloArrowLeftValign: "center"
            , soloArrowLeftHOffset: 20
            , soloArrowLeftVOffset: 0,

            soloArrowRightHalign: "right"
            , soloArrowRightValign: "center"
            , soloArrowRightHOffset: 20
            , soloArrowRightVOffset: 0,

            shadow: 0
            , fullWidth: "on"
            , fullScreen: "off",

            spinner: "spinner4",

            stopLoop: "off"
            , stopAfterLoops: -1
            , stopAtSlide: -1,

            shuffle: "off",

            autoHeight: "on"
            , forceFullWidth: "off",



            hideThumbsOnMobile: "off"
            , hideNavDelayOnMobile: 1500
            , hideBulletsOnMobile: "off"
            , hideArrowsOnMobile: "off"
            , hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0
            , hideCaptionAtLimit: 0
            , hideAllCaptionAtLilmit: 0
            , startWithSlide: 0
            , fullScreenOffsetContainer: ".header"
        });

    }


    }); //ready

</script>

                            <!-- END REVOLUTION SLIDER -->

                        </section>

                        <!-- end slider -->
                    </div>
                    <div class='clear'></div>

                    <div class="section nobottommargin get_in_touch">
                        <div class="row clearfix">
                            <div class="col-md-3 nobottommargin">
                                <a href="#">
                                    <img src="{{$banner[5]->image_link}}" width="100%"/>
                                </a>
                            </div>
                            <div class="col-md-3 nobottommargin">
                                <a href="#">
                                    <img src="{{$banner[6]->image_link}}" width="100%"/>
                                </a>
                            </div>
                            <div class="col-md-3 nobottommargin">
                                <a href="#">
                                    <img src="{{$banner[7]->image_link}}" width="100%"/>
                                </a>
                            </div>
                            <div class="col-md-3 nobottommargin col_last">
                                <a href="#">
                                    <img src="{{$banner[8]->image_link}}" width="100%"/>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class='hidden-sm hidden-xs'>

                        <div class="col-md-12 noleftpadding banner-img bottom-margin">
                            <a class='banner-link' href="{{url('')}}">
                                <div class='banner-content-wrapper'>
                                    <h2 class='banner-title'><strong><font color="white">KHUYẾN MÃI ĐẶC BIỆT KHI ĐẶT ONLINE GÓI GEL TITAN DEVELOPPE SEX</font></strong></h2>

                                    <div class='banner-content'>
                                        <p><span style='font-size: 16px'>Lần đầu tiên có mặt tại Việt Nam ưu đãi từ <strong style='font-weight: 700; font-size: 30px; color:yellow;'> 450.000Đ đến 1.020.000Đ</strong> cho 5.000 khách hàng đầu tiên đặt hàng </span></p>
                                    </div>
                                </div>
                                <img data-src="//bizweb.dktcdn.net/100/086/968/themes/111253/assets/banner-gif.gif?1476608156115" alt="">
                            </a>
                        </div>

                    </div>

                    <div class='hidden-md hidden-lg'>

                    </div>
                    <div class='hot_product_wrapper col-md-12'>
                        <div class='fancy-title title-border hot_product_title'>
                            <h3>
                                SẢN PHẨM MỚI
                            </h3>
                        </div>
                        <div id='hot_product' class="owl-carousel image-carousel hot_product">
                            @foreach($newPro as $prod)
                            <div class="product">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">

                                            <img alt='{{$prod->name}}' data-srcset="{{$prod->image_link}}" src="{{$prod->image_link}}" />

                                        </a>

                                        <a href="vien-dan-kim-loai-rung-amore-nalone-dc019.html">

                                            <img alt='Viên đạn kim loại rung Amore Nalone - DC019' data-srcset="{{$prod->image_link}}" src="{{$prod->image_link}}" />
                                        </a>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title">
                                            <h3><a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">{{$prod->name}}</a></h3>
                                        </div>
                                        <div class="product-price">
                                            <ins> {{number_format($prod->price, 0,",",".")}}₫ </ins>
                                        </div>
                                        <div class="product-cart">
                                            <a href="{{url('')}}/add-to-cart&id={{$prod->id}}&soluong=1" class="product_quick_addz" title='Mua ngay'> Mua ngay</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <script type="text/javascript">
                        jQuery(document)
                        .ready(function ($) {

                            var ocClients = $("#hot_product");

                            ocClients.owlCarousel({
                                items: 6
                                , margin: 0
                                , loop: true
                                , nav: true
                                , navText: ['<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>']
                                , autoplay: true
                                , dots: false
                                , autoplayHoverPause: true
                                , responsive: {
                                    0: {
                                        items: 2
                                    }
                                    , 480: {
                                        items: 2
                                    }
                                    , 768: {
                                        items: 2
                                    }
                                    , 992: {
                                        items: 4
                                    }
                                    , 1200: {
                                        items: 6
                                    }
                                }
                            });

                        });

                    </script>
                </div>


                @stop

                @section('content')

                <section id="content">

                    <div class="content-wrap">

                        <div class="container clearfix">
                            <!-- banner -->

                            <!-- end banner -->
                            <div class="banner-center">
                                <a href="#">
                                    <img src="{{url('')}}/public/assets/banner_center34565.gif?1476608156115" width="100%" />
                                </a>
                            </div>
                            <div class="clear"></div>
                            <div class="index_group_product tabs topmargin-lg clearfix" id="tab-3">
                                <div class='index_group_title'>
                                    <a class='index_group_btn hidden-lg hidden-sm hidden-md'>ĐỒ CHƠI CAO CẤP <i class='icon-sort-down'></i>
                                    </a>
                                    <ul class="tab-nav tab_nav_mb clearfix">
                                        <li><a href="#tabs-1"><span> ĐỒ CHƠI CAO CẤP</span></a></li>
                                        <li><a href="#tabs-2"><span> ĐỒ CHƠI TÌNH DỤC NAM</span></a></li>
                                        <li><a href="#tabs-3"><span> ĐỒ CHƠI TÌNH DỤC NỮ</span></a></li>
                                        <li><a href="#tabs-4"><span> BAO CAO SU</span></a></li>
                                        <li><a href="#tabs-5"><span> TĂNG CƯỜNG SINH LÝ </span></a></li>
                                    </ul>
                                </div>

                                <div class="tab-container">

                                    <div class="tab-content clearfix index_group" id="tabs-1">
                                        <div id="shop" class="clearfix">
                                        <?php
                                            $sql = 'SELECT id FROM cates WHERE parent_id = "29"';
                                            $children = DB::select($sql);
                                            $array = array();
                                            foreach ($children as $cate) {
                                                array_push($array, $cate->id);
                                            }
                                            $tab = DB::table('products')->whereIn('cate_id', $array)->get();
                                        ?>
                                        @foreach($tab as $prod)
                                            <div class="product col-md-2 clearfix">
                                                <div class="product-image">
                                                    <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}"><img src="{{$prod->image_link}}" alt="{{$prod->name}}"></a>

                                                    <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}"><img src="{{$prod->image_link}}" alt="{{$prod->name}}"></a>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-title">
                                                        <h3><a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">{{$prod->name}}</a></h3>
                                                    </div>
                                                    <div class="product-price">
                                                        <ins>{{number_format($prod->price, 0,",",".")}} </ins>

                                                    </div>
                                                    <div class="product-cart">
                                                        <a href="{{url('')}}/add-to-cart&id={{$prod->id}}&soluong=1" class="product_quick_addz" title='Mua ngay'> Mua ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>


                                    <div class="tab-content clearfix index_group" id="tabs-2">
                                        <div id="shop" class="clearfix">
                                        <?php
                                            $sql = 'SELECT id FROM cates WHERE parent_id = "30"';
                                            $children = DB::select($sql);
                                            $array = array();
                                            foreach ($children as $cate) {
                                                array_push($array, $cate->id);
                                            }
                                            $tab = DB::table('products')->whereIn('cate_id', $array)->get();
                                        ?>
                                        @foreach($tab as $prod)
                                            <div class="product col-md-2 clearfix">
                                                <div class="product-image">
                                                    <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}"><img src="{{$prod->image_link}}" alt="{{$prod->name}}"></a>

                                                    <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}"><img src="{{$prod->image_link}}" alt="{{$prod->name}}"></a>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-title">
                                                        <h3><a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">{{$prod->name}}</a></h3>
                                                    </div>
                                                    <div class="product-price">
                                                        <ins>{{number_format($prod->price, 0,",",".")}} </ins>

                                                    </div>
                                                    <div class="product-cart">
                                                        <a href="{{url('')}}/add-to-cart&id={{$prod->id}}&soluong=1" class="product_quick_addz" title='Mua ngay'> Mua ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>


                                    <div class="tab-content clearfix index_group" id="tabs-3">
                                        <div id="shop" class="clearfix">
                                        <?php
                                            $sql = 'SELECT id FROM cates WHERE parent_id = "31"';
                                            $children = DB::select($sql);
                                            $array = array();
                                            foreach ($children as $cate) {
                                                array_push($array, $cate->id);
                                            }
                                            $tab = DB::table('products')->whereIn('cate_id', $array)->get();
                                        ?>
                                        @foreach($tab as $prod)
                                            <div class="product col-md-2 clearfix">
                                                <div class="product-image">
                                                    <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}"><img src="{{$prod->image_link}}" alt="{{$prod->name}}"></a>

                                                    <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}"><img src="{{$prod->image_link}}" alt="{{$prod->name}}"></a>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-title">
                                                        <h3><a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">{{$prod->name}}</a></h3>
                                                    </div>
                                                    <div class="product-price">
                                                        <ins>{{number_format($prod->price, 0,",",".")}} </ins>

                                                    </div>
                                                    <div class="product-cart">
                                                        <a href="{{url('')}}/add-to-cart&id={{$prod->id}}&soluong=1" class="product_quick_addz" title='Mua ngay'> Mua ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>


                                    <div class="tab-content clearfix index_group" id="tabs-4">
                                        <div id="shop" class="clearfix">
                                        <?php
                                            $sql = 'SELECT id FROM cates WHERE parent_id = "33"';
                                            $children = DB::select($sql);
                                            $array = array();
                                            foreach ($children as $cate) {
                                                array_push($array, $cate->id);
                                            }
                                            $tab = DB::table('products')->whereIn('cate_id', $array)->get();
                                        ?>
                                        @foreach($tab as $prod)
                                            <div class="product col-md-2 clearfix">
                                                <div class="product-image">
                                                    <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}"><img src="{{$prod->image_link}}" alt="{{$prod->name}}"></a>

                                                    <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}"><img src="{{$prod->image_link}}" alt="{{$prod->name}}"></a>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-title">
                                                        <h3><a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">{{$prod->name}}</a></h3>
                                                    </div>
                                                    <div class="product-price">
                                                        <ins>{{number_format($prod->price, 0,",",".")}} </ins>

                                                    </div>
                                                    <div class="product-cart">
                                                        <a href="{{url('')}}/add-to-cart&id={{$prod->id}}&soluong=1" class="product_quick_addz" title='Mua ngay'> Mua ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-content clearfix index_group" id="tabs-5">
                                        <div id="shop" class="clearfix">
                                        <?php
                                            $sql = 'SELECT id FROM cates WHERE parent_id = "34"';
                                            $children = DB::select($sql);
                                            $array = array();
                                            foreach ($children as $cate) {
                                                array_push($array, $cate->id);
                                            }
                                            $tab = DB::table('products')->whereIn('cate_id', $array)->get();
                                        ?>
                                        @foreach($tab as $prod)
                                            <div class="product col-md-2 clearfix">
                                                <div class="product-image">
                                                    <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}"><img src="{{$prod->image_link}}" alt="{{$prod->name}}"></a>

                                                    <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}"><img src="{{$prod->image_link}}" alt="{{$prod->name}}"></a>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-title">
                                                        <h3><a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">{{$prod->name}}</a></h3>
                                                    </div>
                                                    <div class="product-price">
                                                        <ins>{{number_format($prod->price, 0,",",".")}} </ins>

                                                    </div>
                                                    <div class="product-cart">
                                                        <a href="{{url('')}}/add-to-cart&id={{$prod->id}}&soluong=1" class="product_quick_addz" title='Mua ngay'> Mua ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>

                                    </div>

                                </div>
                            </div>
                            <div class="banner-center" style="padding: 0 55px">
                                <a href="#">
                                    <img src="{{url('')}}/public/assets/banner_center14565.png?1476608156115" width="100%" />
                                </a>
                            </div>

                            <div class='hot_product_wrapper col-md-12' style="padding: 0 55px">
                                <div class='fancy-title title-border hot_product_title'>
                                    <h3>
                                        SẢN PHẨM BÁN CHẠY
                                    </h3>
                                </div>
                                <div id='best_seller' class="owl-carousel image-carousel hot_product">
                                 @foreach($bestPro as $prod)
                            <div class="product">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">

                                            <img alt='{{$prod->name}}' data-srcset="{{$prod->image_link}}" />

                                        </a>

                                        <a href="vien-dan-kim-loai-rung-amore-nalone-dc019.html">

                                            <img alt='Viên đạn kim loại rung Amore Nalone - DC019' data-srcset="{{$prod->image_link}}" />
                                        </a>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title">
                                            <h3><a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">{{$prod->name}}</a></h3>
                                        </div>
                                        <div class="product-price">
                                            <ins> {{number_format($prod->price, 0,",",".")}}₫ </ins>
                                        </div>
                                        <div class="product-cart">
                                            <a href="{{url('')}}/add-to-cart&id={{$prod->id}}&soluong=1" class="product_quick_addz" title='Mua ngay'> Mua ngay</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            @endforeach
                                </div>
                            </div>

                            <script type="text/javascript">
                                jQuery(document)
                                .ready(function ($) {

                                    var ocClients = $("#best_seller");

                                    ocClients.owlCarousel({
                                        items: 6
                                        , margin: 0
                                        , loop: true
                                        , nav: true
                                        , navText: ['<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>']
                                        , autoplay: true
                                        , dots: false
                                        , autoplayHoverPause: true
                                        , responsive: {
                                            0: {
                                                items: 2
                                            }
                                            , 480: {
                                                items: 2
                                            }
                                            , 768: {
                                                items: 2
                                            }
                                            , 992: {
                                                items: 4
                                            }
                                            , 1200: {
                                                items: 6
                                            }
                                        }
                                    });

                                });

                            </script>

                            <div class="banner-center" style="padding: 0 55px">
                                <a href="#">
                                    <img src="{{url('')}}/public/assets/banner_center24565.png?1476608156115" width="100%" />
                                </a>
                            </div>

                            <div class='hot_product_wrapper col-md-12' style="padding: 0 55px">
                                <div class='fancy-title title-border hot_product_title'>
                                    <h3>
                                        CHỐNG XUẤT TINH SỚM
                                    </h3>
                                </div>
                                <div id='best_seller2' class="owl-carousel image-carousel hot_product">
                                    <?php
                                            $sql = 'SELECT id FROM cates WHERE parent_id = "31"';
                                            $children = DB::select($sql);
                                            $array = array();
                                            foreach ($children as $cate) {
                                                array_push($array, $cate->id);
                                            }
                                            $tab = DB::table('products')->whereIn('cate_id', $array)->get();
                                        ?>
                                @foreach($tab as $prod)
                                    <div class="product">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">

                                                    <img alt='{{$prod->alt}}' data-srcset="{{$prod->image_link}}" />


                                                </a>

                                                <a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">

                                                    <img alt='{{$prod->alt}}' data-srcset="{{$prod->image_link}}" />


                                                </a>


                                            </div>
                                            <div class="product-desc center">
                                                <div class="product-title">
                                                    <h3><a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">Kem bôi kéo dài thời gian quan hệ Emla 5% - XTS08A</a></h3>
                                                </div>
                                                <div class="product-price">
                                                    <ins> {{number_format($prod->price, 0,",",".")}}₫ </ins>

                                                </div>
                                                <div class="product-cart">
                                                    <a href="{{url('')}}/add-to-cart&id={{$prod->id}}&soluong=1" class="product_quick_addz" title='Mua ngay'> Mua ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>

                            <script type="text/javascript">
                                jQuery(document)
                                .ready(function ($) {

                                    var ocClients = $("#best_seller2");

                                    ocClients.owlCarousel({
                                        items: 6
                                        , margin: 0
                                        , loop: true
                                        , nav: true
                                        , navText: ['<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>']
                                        , autoplay: true
                                        , dots: false
                                        , autoplayHoverPause: true
                                        , responsive: {
                                            0: {
                                                items: 2
                                            }
                                            , 480: {
                                                items: 2
                                            }
                                            , 768: {
                                                items: 2
                                            }
                                            , 992: {
                                                items: 4
                                            }
                                            , 1200: {
                                                items: 6
                                            }
                                        }
                                    });

                                });

                            </script>


                            <div class="clear"></div>

                            <div class="fancy-title title-border title-center topmargin-sm">
                                <h4>THƯƠNG HIỆU NỔI TIẾNG</h4>
                            </div>

                            <div id="oc-clients-full" class="owl-carousel image-carousel">





                                <!--<div class="oc-item" ><a href="{{url('')}}baile-hongkong"><img src="//bizweb.dktcdn.net/100/086/968/themes/111253/assets/popular_brand_img_1.png?1476608156115" alt=""></a></div>-->
                                <a href="baile-hongkong.html"><img src="{{url('')}}/public/assets/popular_brand_img_14565.png?1476608156115" alt=""></a>





                                <!--<div class="oc-item" ><a href="{{url('')}}chisa-hongkong"><img src="//bizweb.dktcdn.net/100/086/968/themes/111253/assets/popular_brand_img_2.png?1476608156115" alt=""></a></div>-->
                                <a href="chisa-hongkong.html"><img src="{{url('')}}/public/assets/popular_brand_img_24565.png?1476608156115" alt=""></a>





                                <!--<div class="oc-item" ><a href="{{url('')}}durex"><img src="//bizweb.dktcdn.net/100/086/968/themes/111253/assets/popular_brand_img_3.png?1476608156115" alt=""></a></div>-->
                                <a href="durex.html"><img src="{{url('')}}/public/assets/popular_brand_img_34565.png?1476608156115" alt=""></a>





                                <!--<div class="oc-item" ><a href="{{url('')}}fleshlight-usa"><img src="//bizweb.dktcdn.net/100/086/968/themes/111253/assets/popular_brand_img_4.png?1476608156115" alt=""></a></div>-->
                                <a href="fleshlight-usa.html"><img src="{{url('')}}/public/assets/popular_brand_img_44565.png?1476608156115" alt=""></a>





                                <!--<div class="oc-item" ><a href="{{url('')}}fun-germany"><img src="//bizweb.dktcdn.net/100/086/968/themes/111253/assets/popular_brand_img_5.png?1476608156115" alt=""></a></div>-->
                                <a href="fun-germany.html"><img src="{{url('')}}/public/assets/popular_brand_img_54565.png?1476608156115" alt=""></a>





                                <!--<div class="oc-item" ><a href="{{url('')}}lelo-thuy-dien"><img src="//bizweb.dktcdn.net/100/086/968/themes/111253/assets/popular_brand_img_6.png?1476608156115" alt=""></a></div>-->
                                <a href="lelo-thuy-dien.html"><img src="{{url('')}}/public/assets/popular_brand_img_64565.png?1476608156115" alt=""></a>





                                <!--<div class="oc-item" ><a href="{{url('')}}loveaider-hongkong"><img src="//bizweb.dktcdn.net/100/086/968/themes/111253/assets/popular_brand_img_7.png?1476608156115" alt=""></a></div>-->
                                <a href="loveaider-hongkong.html"><img src="{{url('')}}/public/assets/popular_brand_img_74565.png?1476608156115" alt=""></a>





                                <!--<div class="oc-item" ><a href="{{url('')}}nalone-japan"><img src="//bizweb.dktcdn.net/100/086/968/themes/111253/assets/popular_brand_img_8.png?1476608156115" alt=""></a></div>-->
                                <a href="nalone-japan.html"><img src="{{url('')}}/public/assets/popular_brand_img_84565.png?1476608156115" alt=""></a>





                                <!--<div class="oc-item" ><a href="{{url('')}}picobong-thuy-dien"><img src="//bizweb.dktcdn.net/100/086/968/themes/111253/assets/popular_brand_img_9.png?1476608156115" alt=""></a></div>-->
                                <a href="picobong-thuy-dien.html"><img src="{{url('')}}/public/assets/popular_brand_img_94565.png?1476608156115" alt=""></a>





                                <!--<div class="oc-item" ><a href="{{url('')}}tenga-japan"><img src="//bizweb.dktcdn.net/100/086/968/themes/111253/assets/popular_brand_img_10.png?1476608156115" alt=""></a></div>-->
                                <a href="tenga-japan.html"><img src="{{url('')}}/public/assets/popular_brand_img_104565.png?1476608156115" alt=""></a>


                            </div>

                            <script type="text/javascript">
                                jQuery(document)
                                .ready(function ($) {

                                    var ocClients = $("#oc-clients-full");

                                    ocClients.owlCarousel({
                                        items: 6
                                        , margin: 30
                                        , loop: true
                                        , nav: true
                                        , navText: ['<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>']
                                        , autoplay: true
                                        , dots: false
                                        , autoplayHoverPause: true
                                        , responsive: {
                                            0: {
                                                items: 2
                                            }
                                            , 480: {
                                                items: 3
                                            }
                                            , 768: {
                                                items: 4
                                            }
                                            , 992: {
                                                items: 5
                                            }
                                            , 1200: {
                                                items: 6
                                            }
                                        }
                                    });

                                });

                            </script>

                        </div>


                        <div class="section notopborder nobottomborder nomargin nopadding nobg footer-stick advertisement">
                            <div class="container clearfix">

                                <div class="col_half nobottommargin">
                                    <a href='gel-titan-developpe-sex.html'><img data-src="//bizweb.dktcdn.net/100/086/968/themes/111253/assets/main_img.png?1476608156115" alt="Image" class="nobottommargin"></a>
                                </div>
                                <div class="col_half nobottommargin col_last">

                                    <div class="heading-block topmargin-lg">
                                        <h3><strong>TƯNG BỪNG MUA SẮM !</strong></h3>
                                        <span>Đăng kí để nhận ưu đãi lên đến 15% hôm nay!</span>
                                    </div>

                                    <p> Đừng bỏ lỡ cơ hội mua hàng để được <strong>ƯU ĐÃI </strong>lên đến 33% duy nhất trong năm nay! <strong>SEXTOY GIÁ GỐC </strong>luôn cam kết đem đến cho khách hàng thân yêu những sản phẩm tốt nhất, chất lượng tuyệt vời nhất và giá cả hợp lý nhất. Hãy ghé thăm website : <a href="index.html" target="_blank"><strong>SEXTOY GIÁ GỐC</strong></a> để thoả sức mua sắm..!</p>

                                    <div id="widget-subscribe-form3-result" data-notify-type="success" data-notify-msg=""></div>
                                    <form accept-charset="UTF-8" id="widget-subscribe-form3" action="{{url('')}}" role="form" method="get">
                                        <div class="input-group" style="max-width:400px;">
                                            <span class="input-group-addon"><i class="icon-email2"></i></span>
                                            <input name="form_type" type="hidden" value="customer">
                                            <input name="utf8" type="hidden" value="✓">
                                            <input type="hidden" id="contact_tags" name="contact[tags]" value="khách hàng tiềm năng,Bản tin">
                                            <input type="hidden" id="newsletter-first-name" name="contact[first_name]" value="(Người đăng ký)">
                                            <input type="hidden" id="newsletter-last-name" name="contact[last_name]" value="Bản tin">
                                            <input type="email" name="contact[email]" id='newsletter-email-2' class="form-control required email" placeholder="Nhập email của bạn">
                                            <span class="input-group-btn">
                                                <button class="btn btn-danger btnSignup-2" type="submit">Đăng ký</button>
                                            </span>
                                        </div>
                                    </form>
                                    <script>
                                        $('.btnSignup-2')
                                        .click(function (e) {
                                            var regex = /\S+@\S+\.\S+/;
                                            var $arrEmail = $('#newsletter-email-2')
                                            .val()
                                            .split('@');
                                            //alert($arrEmail[1]);
                                            $('#newsletter-last-name')
                                            .val($arrEmail[0]);
                                            if ($arrEmail[1].indexOf('.') > -1) {
                                                alert('Đăng ký nhận email thành công');
                                            } else {
                                                alert('Vui lòng nhập đúng địa chỉ email');
                                                e.preventDefault();
                                            }
                                        });
                                    </script>
                                    <script>
                                    </script>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>

                @stop