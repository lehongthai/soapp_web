<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en-US">
    <!--<![endif]-->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="csrf-token" content="{{ Session::token() }}"> 
    <!-- /Added by HTTrack -->
    <head>
        <?php 
    	$domain = URL('').'/';
        $shop = DB::table('shop')->first();
        $banner = DB::table('images')->get();
    	$seo = DB::table('abouts')->first();
        ?>
    <link rel="shortcut icon" href="{{$banner[3]->image_link}}" type="image/png" />
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ Session::token() }}"> 
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
    <title>
        {{$seo->title}}
    </title>
    
    <meta name="description" content="{{$seo->meta_desc}}" />
    

    <!-- Product meta ================================================== -->
    


  <meta property="og:type" content="website" />
  <meta property="og:title" content="{{$seo->title}}" />
  
    <meta property="og:image" content="{{$banner[2]->image_link}}" />


<meta name="keywords" content="{{$seo->meta_key}}">

<meta property="og:url" content="{{url('')}}" />
<meta property="og:site_name" content="{{url('')}}" />
        <link rel="canonical" href="{{url('')}}" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
        <style>
            .revo-slider-emphasis-text {
                font-size: 58px;
                font-weight: 700;
                letter-spacing: 1px;
                font-family: 'Raleway', sans-serif;
                padding: 15px 20px;
                border-top: 2px solid #FFF;
                border-bottom: 2px solid #FFF;
            }
            
            .revo-slider-desc-text {
                font-size: 20px;
                font-family: 'Lato', sans-serif;
                width: 650px;
                text-align: center;
                line-height: 1.5;
            }
            
            .revo-slider-caps-text {
                font-size: 16px;
                font-weight: 400;
                letter-spacing: 3px;
                font-family: 'Raleway', sans-serif;
            }

        </style>
        <noscript><iframe height='0' width='0' style='display:none;visibility:hidden' src='visit/record9155.html?p=%2f&amp;r=&amp;s=fm3h2n5qifbkc0jzbfwisw1l'></iframe></noscript>
        <script type='text/javascript'>
            (function () {
                var log = document.createElement('script');
                log.type = 'text/javascript';
                log.async = true;
                log.src = '{{url('')}}/public/assets/86968e034.js?lang=vi';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(log, s);
            })();

        </script>
        <!-- Google Tag Manager -->
        <noscript>
            	<iframe src='http://www.googletagmanager.com/ns.html?id=GTM-MS77Z9' height='0' width='0' style='display:none;visibility:hidden'></iframe>
            </noscript>
        <!-- End Google Tag Manager -->

        

        <!-- END Fonts -->
        <link href='{{url('')}}/public/assets/bootstrap4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <link href='{{url('')}}/public/assets/style4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <link href='{{url('')}}/public/assets/dark4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <link href='{{url('')}}/public/assets/font-icons4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <link href='{{url('')}}/public/assets/animate4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <link href='{{url('')}}/public/assets/magnific-popup4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <link href='{{url('')}}/public/assets/font_default4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <link href='{{url('')}}/public/assets/responsive4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <!-- pwg slider -->
        <link href='{{url('')}}/public/assets/pgwslideshow.min4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <!-- Egany custom style -->
        <link href='{{url('')}}/public/assets/custom_style4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <!-- BEGIN fancy box -->
        <link href='{{url('')}}/public/assets/jquery.fancybox4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <!-- END fancy box -->
        <!-- responsive menu -->
        <link href='{{url('')}}/public/assets/mobile_menu_style4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <!-- end responsive menu -->
        <!-- pwg slider -->
        <link href='{{url('')}}/public/assets/pgwslideshow.min4565.css?1476608156115' rel='stylesheet' type='text/css' />
        

        <script src='{{url('')}}/public/assets/jquery4565.js?1476608156115' type='text/javascript'></script>
        <script src='{{url('')}}/public/assets/jquery.lazyloadxt4565.js?1476608156115' type='text/javascript'></script>
        <script src='{{url('')}}/public/assets/jquery.lazyloadxt.srcset4565.js?1476608156115' type='text/javascript'></script>



        <script src='{{url('')}}/public/assets/plugins4565.js?1476608156115' type='text/javascript'></script>


        <!-- Bizweb plugins END -->

        <!-- shop-asset -->

        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script src='{{url('')}}/public/assets/jquery.themepunch.tools.min4565.js?1476608156115' type='text/javascript'></script>
        <script src='{{url('')}}/public/assets/jquery.themepunch.revolution.min4565.js?1476608156115' type='text/javascript'></script>

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link href='{{url('')}}/public/assets/settings4565.css?1476608156115' rel='stylesheet' type='text/css' />


        <script src='{{url('')}}/public/assets/pgwslideshow.min4565.js?1476608156115' type='text/javascript'></script>
        <!-- BEGIN products scripts -->

        <script async src="{{url('')}}/public/assets/fly-to-cart-aothun4565.js?1476608156115"></script>
        <!-- END products scripts -->

        <!-- START fancy box -->

        <script async src="{{url('')}}/public/assets/jquery.fancybox.pack4565.js?1476608156115"></script>
        <!-- END fancy box -->

        <script src='{{url('')}}/public/assets/pgwslideshow.min4565.js?1476608156115' type='text/javascript'></script>
        
        <link href='{{url('')}}/public/assets/cf-stylesheet4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <link href='{{url('')}}/public/assets/bw-statistics-style4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <link href='{{url('')}}/public/assets/tkn-style4565.css?1476608156115' rel='stylesheet' type='text/css' />
        <link href='{{url('')}}/public/assets/font-awesome.min.css' rel='stylesheet'>
        <script src='{{url('')}}/public/assets/tkn-util4565.js?1476608156115' type='text/javascript'></script>
        <style type="text/css">
            .container{
                width: 100% !important;
                padding: 0 55px !important;
            }
            @media only screen and (max-width: 768px){
                .container{
                    padding: 0 0 !important;
                }
            }
        </style>
    </head> 

    <body class="stretched no-transition">
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="{{url('')}}/public/assets/addthis_widget.js#pubid=ra-56fb54ea6647f103"></script>

        <div class='body_overlay'></div>
        <!-- mobile menu -->
        <!-- /#sidebar-wrapper -->
        <a href="#menu-toggle" class="btn btn-default hidden-lg hidden-md" id="menu-toggle"><i class='icon-reorder'></i></a>
        <!-- Page Content -->
        <div id="menu_xs" class='hidden-lg hidden-md'>
            <!-- Sidebar -->
            <ul class="sidebar-nav">
                <!-- Top Search
		============================================= -->
                <div id="top-search-sm">
                    <h3>Danh mục sản phẩm</h3>
                </div>
                <!-- #top-search end -->
                <?php 
                     foreach ($catalog as $ca) {
                        if($ca->parent_id == 0){
                            echo "<li class=''><a class='menu' href='".$domain."catalog&slug={$ca->alias}'>{$ca->name}<span>+</span></a><ul>";
                            foreach ($catalog as $sub_ca) {
                                if($sub_ca->parent_id == $ca->id)
                                {
                                    echo "<li class=''><a class='sub-menu' href='".$domain."navigation&slug={$sub_ca->alias}'><div>{$sub_ca->name}</div></a></li>";
                                }
                            }
                        }
                    }
                        echo "</ul></li>";

                ?>
            </ul>
            <!-- /#page-content-wrapper -->
        </div>

        <script>
            //responsive menu
            $("#menu-toggle, .body_overlay")
                .click(function (e) {
                    e.preventDefault();
                    var $show_menu = $('#menu_xs, #menu-toggle, .body_overlay');
                    $show_menu.toggleClass("toggled");
                });
            $('#menu_xs ul a span')
                .click(function (e) {
                    e.preventDefault();
                    $(this)
                        .parent()
                        .next()
                        .toggle(200);
                    if ($(this)
                        .text() == '+')
                        $(this)
                        .text('-');
                    else
                        $(this)
                        .text('+');
                })

            //end responsive menu

        </script>
        <!-- end mobile menu -->
        
        <!-- Document Wrapper
	============================================= -->
        <div id="wrapper" class="clearfix">
            <!-- style="animation-duration: 1.5s; opacity: 1;"-->


            <script>
                /*** left menu ***/
                $(window)
                    .load(function () {
                        $(this)
                            .scroll(function () {
                                var height = $(window)
                                    .scrollTop();
                                if (height >= 200) {
                                    $('.left_menu')
                                        .addClass('left_menu_sticker');
                                } else {
                                    $('.left_menu')
                                        .removeClass('left_menu_sticker');
                                }
                            });
                    });
                /*** end left menu ***/

            </script>



            <!-- Top Bar
		============================================= -->
            <div id="top-bar" class="">
                <div class="container clearfix">
                    <div class="col_half nobottommargin hidden-xs hidden-sm">
                        <p class="nobottommargin">
                            <strong><i class='icon-phone3'></i>{{$shop->tel}} </strong>
                            <strong><i class='icon-email3'></i> {{$shop->email}} </strong>
                        </p>
                    </div>

                    <div class="col_half col_last fright nobottommargin top_link_wrapper">

                        <!-- Top Links
			============================================= -->
                        <div class="top-links">
                            <ul>

                                <li><a href="{{url('')}}">Trang chủ</a></li>

                                <li><a href="{{url('')}}/gioi-thieu">Giới thiệu</a></li>

                                <li><a href="{{url('')}}/bai-viet">Bí kíp phòng the</a></li>

                                <li><a href="{{url('')}}/gioi-thieu-san-pham">Giới thiệu sản phẩm</a></li>
                                @if(Auth::check())
                                <li><a href="{{url('')}}/admin">Quản trị</a></li>
                                <li><a href="{{url('')}}/logout">Đăng xuất</a></li>
                                @else
                                <li><a href="{{url('')}}/login">Đăng nhập</a></li>
                                @endif

                            </ul>
                        </div>
                        <!-- .top-links end -->

                    </div>

                </div>

            </div>
            <!-- #top-bar end -->

            <!-- Header
		============================================= -->
            <header id="header">

                <div id="header-wrap">

                    <div class="container clearfix">

                        <!--<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>-->

                        <!-- Logo
			============================================= -->

                        <div id="logo" class='col-md-3'>

                            <a href="{{url('')}}" class="standard-logo" data-dark-logo="{{$banner[2]->image_link}}"><img src="{{$banner[2]->image_link}}" alt="TRUNG TÂM BÁN BUÔN BÁN LẺ ĐỒ CHƠI TÌNH DỤC - SEXTOY"></a>
                            <a href="{{url('')}}" class="retina-logo" data-dark-logo="{{$banner[2]->image_link}}"><img src="{{$banner[2]->image_link}}" alt="TRUNG TÂM BÁN BUÔN BÁN LẺ ĐỒ CHƠI TÌNH DỤC - SEXTOY"></a>
                        </div>
                        <!-- #logo end -->




                        <h1 style='display:none'>đồ chơi tình dục shop! giao hàng sex toy trên toàn quốc, sextoy tphcm, sextoy hcm, kín đáo, uy tín, lịch sự, đặt hàng sextoy rung ngay hôm nay 0983.408.068</h1>


                        <!-- Top Search
			============================================= -->





                        <div class='body_overlay'></div>
                        <!-- mobile menu -->
                        <!-- /#sidebar-wrapper -->
                        <a href="#menu-toggle" class="btn btn-default hidden-lg hidden-md" id="menu-toggle"><i class='icon-reorder'></i></a>
                        <!-- Page Content -->
                        <div id="menu_xs" class='hidden-lg hidden-md'>
                            <!-- Sidebar -->
                            <ul class="sidebar-nav">
                                <!-- Top Search
		============================================= -->
                                <div id="top-search-sm">
                                    <h3>Danh mục sản phẩm</h3>
                                </div>
                                <!-- #top-search end -->
                                <?php 
                                     foreach ($catalog as $ca) {
                                        if($ca->parent_id == 0)
                                        {
                                            echo "<li class=''><a class='menu' href='".$domain."catalog&slug={$ca->alias}'>{$ca->name}<span>+</span></a><ul>";
                                            foreach($catalog as $sub_ca)
                                            {
                                                if($sub_ca->parent_id == $ca->id)
                                                {
                                                    echo "<li class=''><a class='sub-menu' href='".$domain."navigation&slug={$sub_ca->alias}'><div>{$sub_ca->name}</div></a></li>"; 
                                                }
                                                
                                            }
                                        }
                                        
                                        
                                        echo "</ul></li>";
                                    }

                                ?>
                            </ul>
                            <!-- /#page-content-wrapper -->
                        </div>

                        <script>
                            //responsive menu
                            $("#menu-toggle, .body_overlay")
                                .click(function (e) {
                                    e.preventDefault();
                                    var $show_menu = $('#menu_xs, #menu-toggle, .body_overlay');
                                    $show_menu.toggleClass("toggled");
                                });
                            $('#menu_xs ul a span')
                                .click(function (e) {
                                    e.preventDefault();
                                    $(this)
                                        .parent()
                                        .next()
                                        .toggle(200);
                                    if ($(this)
                                        .text() == '+')
                                        $(this)
                                        .text('-');
                                    else
                                        $(this)
                                        .text('+');
                                })

                            //end responsive menu

                        </script>
                        <!-- end mobile menu -->

                        <!-- Top Search
			============================================= -->
                        <div class='top_search col-md-9'>
                            <form action="{{url('')}}/search" method='post' class='col-md-9 form-inline col-sm-12 col-xs-12'>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" name="query" class="form-control col-md-8 search_input" placeholder="Quý khách muốn tìm sp gì?">
                                <button type="submit" class='button'>Tìm kiếm</button>
                                <ul class="header-tag clearfix hidden-sm hidden-xs">
                                    <li class="border-none"><strong>Xu hướng tìm kiếm:</strong></li>
                                    <li><a href="{{url('')}}/navigation&slug=gel-titan-developpe-sex">Gel titan </a></li>
                                    <li><a href="{{url('')}}/catalog=bao-cao-su">Bao cao su</a></li>
                                    <li><a href="{{url('')}}/navigation&slug=am-dao-gia-den-pin">âm đạo giả đèn pin</a></li>
                                    <li class="border-none"><a href="{{url('')}}/navigation&slug=duong-vat-gia-cam-tay">dương vật giả cầm tay</a></li>
                                </ul>
                            </form>
                            <div class="kmhot hidden-xs hidden-sm">
                                <a href="#">Khuyến mãi hot</a>
                            </div>
                            <div class="col-md-3 top-hotline-block hidden-xs hidden-sm">
                                <div class="header-hotline">
                                    <p><img src="{{$banner[4]->image_link}}" /></p>
                                </div>
                            </div>
                        </div>
                        

                    </div>

                </div>

            </header>
            <!-- #header end -->

            <!-- Content
		============================================= -->
            @yield('slider')
            <!-- content -->
                @yield('content')
            <!-- end content -->

            

            <!-- #content end -->

            <!-- Footer
		============================================= -->

            <link href='{{url('')}}/public/assets/is-keywords-module4565.css?1476608156115' rel='stylesheet' type='text/css' />
            <div class="is-keywords-module"></div>
            <footer id="footer">
            
                <div class="container">

                    <!-- Footer Widgets
		============================================= -->
                    <div class="footer-widgets-wrap clearfix" style="width: 100%; padding: 20px 55px">

                        <div class="col_two_third">

                            <div class="col_one_third prefooter_one">

                                <div class="widget clearfix">

                                    <h4>Trụ sở chính</h4>
                                    <p>Chúng tôi tin chất lượng là<br /> dịch vụ tốt nhất để khẳng định.</p>

                                    <strong>Địa chỉ:</strong> {{$shop->location}}<br />
                                    <strong>Tel: <font color="red">{{$shop->tel}}</font></strong> <br />
                                    <strong>Tel: <font color="blue">{{$shop->phone}}</font></strong>  <br />
                                    <strong>Email:: <font color="purple">{{$shop->email}}</font></strong>  


                                </div>

                            </div>

                            <div class="col_one_third prefooter_one">

                                <div class="widget widget_links clearfix">

                                    <h4>Thông tin</h4>

                                    <ul>

                                        <?php 
                                            $thongTin = DB::table('posts')->where('cate_id', 2)->inRandomOrder()->take(6)->get();
                                        ?>
                                        @foreach($thongTin as $tin)
                                        <li><a href="{{url('')}}/post={{$tin->title}}&id={{$tin->id}}">{{$tin->title}}</a></li>
                                        @endforeach


                                    </ul>

                                </div>
                                <div class='marginbottom hidden-lg hidden-md hidden-sm'>

                                </div>
                            </div>

                            <div class="col_one_third col_last prefooter_one">

                                <div class="widget clearfix">
                                    <h4>Bài viết mới nhất</h4>

                                    <div id="post-list-footer">
                                        <?php 
                                            $baiViet = DB::table('posts')->where('cate_id', 1)->inRandomOrder()->take(3)->get();
                                        ?>
                                        @foreach($baiViet as $tin)
                                        <div class="spost clearfix">
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="{{url('')}}/post={{$tin->title}}&id={{$tin->id}}">{{$tin->title}}</a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                    <li>{{$tin->created_at}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class='marginbottom hidden-lg hidden-md hidden-sm'>

                                </div>
                            </div>

                        </div>

                        <div class="col_one_third col_last">

                            <div class="widget clearfix" style="margin-bottom: -20px;">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="counter counter-small"><span data-from="80" data-to="10253" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                        <!--<div class="counter counter-small">10253</div>-->

                                        <h5 class="nobottommargin" style='font-weight:bold;'>Sản phẩm</h5>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="counter counter-small"><span data-from="100" data-to="83544" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                        <!--<div class="counter counter-small">83544</div>-->
                                        <h5 class="nobottommargin" style='font-weight:bold;'>Khách hàng</h5>
                                    </div>

                                </div>

                            </div>

                            <div class="widget subscribe-widget clearfix">
                                <h5 style='font-weight:bold; font-size:15px;'>Đăng kí email để nhận ngay ưu đãi lớn !</h5>
                                <div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
                                <form accept-charset="UTF-8" id="widget-subscribe-form" role="form" class="nobottommargin">
                                    <div class="input-group divcenter">
                                        <span class="input-group-addon"><i class="icon-email2"></i></span>
                                        <input name="form_type" type="hidden" value="customer">
                                        <input name="utf8" type="hidden" value="✓">
                                        <input type="email" name="contact" id='newsletter-email-3' class="form-control required email" placeholder="Nhập email của bạn">
                                        <span class="input-group-btn">
								<button class="btn btn-success btnSignup-2" type="button">Đăng ký</button>
							</span>
                                    </div>
                                </form>
                            </div>
                            


                            <div class="widget clearfix" style="margin-bottom: -20px; margin-top: 20px;">
                                <div class="row">



                                    <div class="col-md-6 clearfix bottommargin-sm prefooter-socials col-xs-6">
                                        <a href="{{$shop->facebook}}" class="social-icon si-dark si-colored nobottommargin" style="margin-right: 10px;">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="{{$shop->facebook}}"><small style="display: block; margin-top: 3px;"><strong>đồ chơi tình dục shop</strong></small></a>
                                        <!--<strong>Like us</strong><br>on Facebook</small></a>-->
                                    </div>



                                    <div class="col-md-6 clearfix prefooter-socials col-xs-6">
                                        <a href="#" class="social-icon si-dark si-colored nobottommargin" style="margin-right: 10px;">
                                            <i class="icon-youtube"></i>
                                            <i class="icon-youtube"></i>
                                        </a>
                                        <a href="#"><small style="display: block; margin-top: 3px;"><strong> đồ chơi tình dục shop</strong></small></a>
                                        <!--<strong>Subscribe</strong><br>to RSS Feeds</small></a>-->
                                    </div>



                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- .footer-widgets-wrap end -->
                </div>

                <!-- Copyrights
	============================================= -->
                <div id="copyrights">

                    <div class="container clearfix">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                © 2016 Copyright. All rights reserved <a href="#" target="_blank">đồ chơi tình dục shop</a>
                                <br>
                                <div class="copyright-links">

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div id="bw-statistics"></div>
                            </div>
                            <div class="col-md-5 col-sm5 col-xs-12 footer-bottom-right" style="text-align: right;">
                                <div class="fright clearfix">
                                    <div style='float:right;'>


                                        <a href="{{$shop->facebook}}" class="social-icon si-small si-borderless si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>



                                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>



                                        <a href="#" class="social-icon si-small si-borderless si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>



                                        <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                            <i class="icon-pinterest"></i>
                                            <i class="icon-pinterest"></i>
                                        </a>



                                        <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                            <i class="icon-vimeo"></i>
                                            <i class="icon-vimeo"></i>
                                        </a>



                                        <a href="#" class="social-icon si-small si-borderless si-github">
                                            <i class="icon-github"></i>
                                            <i class="icon-github"></i>
                                        </a>



                                        <a href="http://yahoo.com/" class="social-icon si-small si-borderless si-yahoo">
                                            <i class="icon-yahoo"></i>
                                            <i class="icon-yahoo"></i>
                                        </a>



                                        <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                            <i class="icon-linkedin"></i>
                                            <i class="icon-linkedin"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="clear"></div>

                                Đồ chơi tình dục shop - {{$shop->location}} | <br /> Email: {{$shop->email}} | Hotline: {{$shop->tel}}
                            </div>
                        </div>
                    </div>

                </div>
                <!-- #copyrights end -->

            </footer>
            <!-- #footer end -->

        </div>
        <!-- #wrapper end -->

        <!-- Go To Top
	============================================= -->

        <!-- Footer Scripts
	============================================= -->
        <script src='{{url('')}}/public/assets/functions4565.js?1476608156115' type='text/javascript'></script>

        <!-- quick add cart -->
        <div id='product-pop-up' style="display:none;" class="single-product shop-quick-view-ajax clearfix">

            <div class="ajax-modal-title">
                <a href='#'>
                    <h2>Pink Printed Dress</h2>
                </a>
            </div>

            <div class="product-page product modal-padding clearfix">
                <div class="col_half nobottommargin">
                    <div class="product-image">
                        <div class="product-main-image">
                            <ul class="pgwSlideshow">

                            </ul>
                        </div>

                        <div class="sale-flash">Sale!</div>
                    </div>
                </div>
                <div class="col_half nobottommargin col_last product-desc">
                    <div class="product-price"><del>$39.99</del> <ins>$24.99</ins></div>

                    <div class="clear"></div>
                    <div class="line"></div>
                    <!-- variants -->
                    <div class="product-page-options ">
                        <div class="sizePicker">
                            <label class="control-label options-title">Kích thước:</label>
                            <div class='options-selection'>
                                <select class="form-control input-sm size"></select>
                            </div>
                        </div>
                        <div class="sizePicker">
                            <label class="control-label options-title">Màu sắc:</label>
                            <div class='options-selection'>
                                <select class="form-control input-sm color" style='color:#555!important;'></select>
                            </div>
                        </div>
                        <div class="sizePicker">
                            <label class="control-label options-title">Chất liệu:</label>
                            <div class='options-selection'>
                                <select class="form-control input-sm material"></select>
                            </div>
                        </div>
                    </div>
                    <!-- end variant -->
                    <!-- Product Single - Quantity & Cart Button
			============================================= -->
                    <form id='ProductDetailsFormQV' class="cart nobottommargin clearfix">
                        <div class="quantity product-quantity clearfix col-md-12" style='margin-bottom: 20px;'>
                            <input type="button" value="-" class="minus">
                            <input type="text" class='qty' id='product_quantity' readonly step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="4" />
                            <input type="button" value="+" class="plus">
                        </div>
                        <script>


                        </script>
                        <div class="hidden" style="">
                            <select id="product-select-qw" name="variantId">  
					</select>

                            <input type="hidden" class="unit_price_not_formated" value="">
                            <input type="hidden" class="product_url" value="">
                            <input type="hidden" class="product_title_hd" value="">
                            <input type="hidden" class="product_img_small" value="">
                        </div>
                        <a class='button view_detail' href='#'>Xem chi tiết</a>
                        <button type="submit" id='addtocartQV' class="add-to-cart button nomargin">Add to cart</button>
                    </form>
                    <!-- Product Single - Quantity & Cart Button End -->

                    <div class="clear"></div>
                    <div class="line"></div>
                    <p class="description">Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
                </div>
            </div>
        </div>
        
        <script>
            /*$(document).ready(function() {
                                            		$('.pgwSlideshow').pgwSlideshow();
                                            	});*/

        </script>
        <div id="product-quick-add" style="display: none; width: 700px;">
            <div class="product-page ">
                <div class="row">
                    <form id="ProductDetailsForm_QuickAdd">

                        <div class="hidden" style="">
                            <select id="product-select-qa" name="variantId">  
					</select>

                            <input type="hidden" class="unit_price_not_formated">
                            <!-- </input> -->
                            <input type="hidden" class="product_url" value="">
                            <!--</input>-->
                            <input type="hidden" class="product_title_hd" value="">
                            <!--</input>-->
                            <input type="hidden" class="product_img_small" value="">
                            <!--</input>-->
                        </div>

                        <input id="product-quantity" name="quantity" type="text" value="1" readonly class="form-control input-sm quantity">

                        <button id="addtocartQA" class="btn btn-primary" type="submit">Thêm vào giỏ</button>
                    </form>
                </div>
                <!-- END: row -->
            </div>
        </div>

        <script>
            var currentIMG = '';
            jQuery(".product_quick_add")
                .each(function () {
                    $(this)
                        .on('click', function (event) {
                            event.preventDefault();

                            // quick add 
                            currentIMG = $(this)
                                .parents('.product , .product-item')
                                .find('.product-image img');
                            quickAddProduct($(this)
                                .attr('href')); // make-up "#product-quick-add" 

                        });
                });

            var callBackQuickAdd = function (variant, selector) {
                // console.log('callBackQV  is functioning...'); 

                var $tagPrice = '#product-quick-add .price strong';
                var $tagPriceCompare = '#product-quick-add .price em span';
                var $tagProductSection = '#ProductDetailsForm_QuickAdd';
                update_variant(variant, $tagPrice, $tagPriceCompare, '#addtocartQA', $tagProductSection);
            }
            var quickAddProduct = function (purl) {

                // if ($(window).width() < 680) { window.location = purl; return false; }
                // modal = $('#quick-view-modal'); modal.modal('show');
                $.ajax({
                    url: purl + '.js'
                    , async: false
                    , success: function (product) {
                            //make-up "#product-quick-add"   
                            // assign hidden values 
                            $('#product-quick-add .product_title_hd')
                                .val(product.name);
                            $('#product-quick-add .product_url')
                                .val(purl);
                            $('#product-quick-add .product_img_small')
                                .val(product.featured_image); // AAA!!!  

                            //render selections (NOT formatted yet)
                            $('select#product-select-qa')
                                .html('');
                            $('.selector-wrapper')
                                .remove(); // remove all selectors by  Haravan.OptionSelectors  
                            // var $arrSize = [];
                            // var $arrColor = []; 
                            $.each(product.variants, function (i, v) {
                                $('select#product-select-qa')
                                    .append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
                            });

                            new Bizweb.OptionSelectors("product-select-qa", {
                                product: product
                                , onVariantSelected: callBackQuickAdd
                            });

                            // select default variants   
                            var $size = $("#product-select-qa-option-0 option:first")
                                .attr('selected', 'selected');
                            var $color = $("#product-select-qa-option-1 option:first")
                                .attr('selected', 'selected');
                            var $material = $("#product-select-qa-option-2 option:first")
                                .attr('selected', 'selected');
                            var $tagSelectOption0 = '#product-select-qa-option-0';
                            var $tagSelectOption1 = '#product-select-qa-option-1';
                            var $tagSelectOption2 = '#product-select-qa-option-2';
                            refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1, $color, $tagSelectOption2, $material);

                            //auto add current variant... 
                            // $('#ProductDetailsForm_QuickAdd').submit(); 
                            $("#addtocartQA")
                                .click();

                        } //end: success 
                });

                //$('.modal-backdrop').css('opacity', '0');
                return false;
            }


            jQuery(document)
                .ready(function ($) {
                    //add to cart for QuickView
                    $("#addtocartQA")
                        .on('click', function (e) { //.click(function(e){ // 

                            e.preventDefault();
                            addItem('ProductDetailsForm_QuickAdd', currentIMG);

                        });
                });
            /*** end quick add cart ***/

        </script>
        <div class="navibar-right hidden-xs">
            <ul>
                <li class="nav-gio-hang top-cart-block" id="top-cart">
                    <a href="{{url('')}}/cart" id="top-cart-trigger">
				<img src="{{url('')}}/public/assets/icon-gio-hang4565.png?1476608156115" alt='Giỏ hàng'>
				Giỏ hàng
				<span class='top_cart_qty'></span>
			</a>
                    <a href="{{url('')}}/cart" class="right_cart"></a>
                </li>
                <li class="nav-tai-khoan" id="tai-khoan-nav">
                    <a href="{{url('')}}/login"><span class="icon-tai-khoan"></span>Đăng nhập</a>
                </li>
                <li class="nav-ho-tro" id="ho-tro-nav">
                    <a href="#"><span class="icon-ho-tro"></span>Hỗ trợ</a>
                    <div class="ho-tro-dt" id="ho-tro-show">
                        <div class="nav-r-title">Điện thoại hỗ trợ</div>
                        <div class="nav-ht-social">
                            <a href="#"><img src="{{url('')}}/public/assets/nav-fb-icon4565.jpg?1476608156115"></a>&nbsp;
                            <a href="#"><img src="{{url('')}}/public/assets/nav-zalo-icon4565.jpg?1476608156115"></a>&nbsp;
                            <a href="#"><img src="{{url('')}}/public/assets/nav-viber-icon4565.jpg?1476608156115"></a>
                        </div>
                        <p class="nav-r-hotline">Hotline: <br>{{$shop->phone}}</p>
                        <p>Từ 7:00 đến 22:00 các ngày trong tuần.</p>
                        <p>Ngoài giờ đó các bạn có thể email tới {{$shop->email}}</p>
                    </div>
                </li>
                <li class="top">
                    <div id="topback"><i class="icon-angle-up"></i></div>
                </li>
            </ul>
        </div>

        <script type="text/javascript">
            $(document)
                .ready(function () {
                    $(window)
                        .scroll(function () {
                            if ($(window)
                                .scrollTop() != 0) {
                                $('#topback')
                                    .fadeIn();

                            } else {

                                $('#topback')
                                    .fadeOut();

                            }

                        });

                    $('#topback')
                        .click(function () {
                            $('html, body')
                                .animate({
                                    scrollTop: 0
                                }, 500);

                        });

                });

        </script>
        <style type="text/css">
            #topback {
                display: block !important;
                cursor: pointer;
                z-index: 9999;
                color: #fff;
                font-size: 20px;
            }

        </style>
        <!-- end quick add cart -->
        <!-- <script src='{{url('')}}/public/assets/layout4565.js?1476608156115' type='text/javascript'></script> -->
        <!-- <script src='{{url('')}}/public/assets/footer_scripts4565.js?1476608156115' type='text/javascript'></script> -->
        <div id="facebook-inbox">
            <button class="facebook-inbox-tab" style="display: block; ">
		<span class="facebook-inbox-tab-title">chat với chúng tôi</span>
	</button>

            <div id="facebook-inbox-frame">
                <div id="fb-root">&nbsp;</div>
                <div class="fb-page" data-adapt-container-width="true" data-hide-cover="false" data-href="" data-show-facepile="true" data-small-header="true" data-width="250" data-height="350" data-tabs="messages">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite=""><a href="#">Chat với chúng tôi</a></blockquote>
                    </div>
                </div>
            </div>
        </div>

        <style>
            #facebook-inbox {
                position: fixed;
                bottom: 0px;
                z-index: 110000;
                text-align: center;
                display: none;
            }
            
            .facebook-inbox-tab-icon {
                float: left;
            }
            
            .facebook-inbox-tab-title {
                float: left;
                margin-left: 10px;
                line-height: 25px;
            }
            
            #facebook-inbox-frame {
                display: none;
                width: 100%;
                min-height: 200px;
                overflow: hidden;
                position: relative;
                background-color: #f5f5f5;
            }
            
            #fb-root {
                height: 0px;
            }
            
            .facebook-inbox-tab {
                top: 0px;
                bottom: 0px;
                margin: -40px 0px 0px 0px;
                position: relative;
                height: 40px;
                width: 250px;
                border: 1px solid;
                border-radius: 0px 0px 0px 0px;
                text-align: center;
                background-color: #19a3dd;
                color: #ffffff;
            }

        </style>
        <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <style>#cfacebook{position:fixed;bottom:0px;left:100px;z-index:999999999999999;width:250px;height:auto;box-shadow:6px 6px 6px 10px rgba(0,0,0,0.2);border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}#cfacebook .fchat{float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}#cfacebook .fchat .fb-page{margin-top:-130px;float:left;}#cfacebook a.chat_fb{float:left;padding:0 25px;width:250px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:12px;font-size:18px;}#cfacebook a.chat_fb:hover{color:yellow;text-decoration:none;}</style>
  <script>
  jQuery(document).ready(function () {
  jQuery(".chat_fb").click(function() {
jQuery('.fchat').toggle('slow');
  });
  });
  </script>
  <div id="cfacebook">
  <a href="javascript:;" class="chat_fb" onclick="return:false;"> <img src="{{url('')}}/public/assets/fb-icon-1.png" alt="Facebook Chat" /> Chat với chúng tôi!</a>
  <div class="fchat">
  <div class="fb-page" data-tabs="messages" data-href="{{$shop->facebook}}" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
  </div>
  </div>
        <style type="text/css">
            .heading-block:after {
                border-top: 0px;
            }
        </style>
        <!-- open popup -->
        <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="heading-block topmargin-lg">
                                        <h3><strong>TƯNG BỪNG MUA SẮM !</strong></h3>
                                        <span>Đăng kí để nhận ưu đãi lên đến 5% hôm nay!</span>
                                    </div>
      </div>
      <div class="modal-body">
        <div class="control-group">
         <div class="row">
           <div class="col-md-12">
             <div class="container clearfix">

                                <div style="margin-right: 4%; margin-bottom: 50px; float: left; width: 48%;">
                                    <img src="http://dochoitinhducshop.com/main_img.jpg" alt="Image" >
                                </div>
                                <div class="col_half nobottommargin col_last" style="padding-top: 20px">
                                    <p> Đừng bỏ lỡ cơ hội mua hàng để được <strong>ƯU ĐÃI </strong> đến 5% duy nhất trong năm nay! <strong>SEXTOY GIÁ GỐC </strong>luôn cam kết đem đến cho khách hàng thân yêu những sản phẩm tốt nhất, chất lượng tuyệt vời nhất và giá cả hợp lý nhất. Hãy ghé thăm website : <a href="index.html" target="_blank"><strong>SEXTOY GIÁ GỐC</strong></a> để thoả sức mua sắm..!</p>

                                    <div id="widget-subscribe-form3-result" data-notify-type="success" data-notify-msg=""></div>
                                    <form accept-charset="UTF-8" id="widget-subscribe-form3" role="form" >
                                        <div class="input-group" style="max-width:400px;">
                                            <span class="input-group-addon"><i class="icon-email2"></i></span>
                                            <input name="form_type" type="hidden" value="customer">
                                            <input name="utf8" type="hidden" value="✓">
                                            <input type="email" name="contact" id='newsletter-email-1' class="form-control required email" placeholder="Nhập email của bạn">
                                            <span class="input-group-btn">
                                                <button class="btn btn-danger btnSignup-2" type="button" onclick="getMail();" data-toggle="modal" data-target="#myModal">Đăng ký</button>
                                            </span>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
           </div>
         </div>
         
        <br/>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Đăng ký email để nhận khuyến mãi thành công!</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
var isAdd = 0;
@if(session()->has('isAdd'))
isAdd = 1;
@endif
if(isAdd==0)
{
    setTimeout(function() {
        $('#myModal').modal();
    }, 10000);
}
</script>
<script>
    $('.btnSignup-2')
    .click(function (e) {
        var email = $('#newsletter-email-1').val();
        if(email == ""){
            email = $('#newsletter-email-2').val();
        }
        if(email == ""){
            email = $('#newsletter-email-3').val();
        }
        $.get('get-mail='+email, function(data){
            if(data=='1')
            {
              $('#myModal2').modal();
            }
          });
    });
</script>
    </body>

    <!-- Mirrored from sextoygiagoc.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Oct 2016 13:38:29 GMT -->

</html>
