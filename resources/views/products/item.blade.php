@extends('layouts.master')

@section('name')
Sản phẩm
@stop

@section('content')

<div class="row">
    <div class=" nobotto<mmargin clearfix col-md-12 col-sm-12 col-xs-12">
        <div class='product-page'>
            <div class="single-product">
                <!--<form method="post" id="ProductDetailsForm" action="/???" crossorigin="anonymous">-->
                <form action="#" method="post" enctype="multipart/form-data" id="ProductDetailsForm">
                    <div class="product">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                            <!-- Product Single - Gallery
                                            ============================================= -->
                                            <div class="product-image product-main-image">
                                                <div class="fslider" data-animation="fade" data-thumbs="true" data-arrows="false">
                                                    <div class="flexslider">
                                                        <div class="slider-wrap" data-lightbox="gallery">
                                                        <div class="slide" data-thumb="{{$product->image_link}}">
                                                                <a href="{{$product->image_link}}" title="" data-lightbox="gallery-item">
                                                                    <img src="{{$product->image_link}}" alt="$product->alt">
                                                                </a>
                                                            </div>
                                                        <?php
                                                        $images = DB::table('product_images')->where('product_id', $product->id)->get(); 
                                                        ?>
                                                        @foreach($images as $img)
                                                            <div class="slide" data-thumb="{{$img->image}}">
                                                                <a href="{{$img->image}}" title="" data-lightbox="gallery-item">
                                                                    <img src="{{$img->image}}" alt="{{$img->alt}}">
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div><!-- Product Single - Gallery End -->

                                        </div>
                                        <div class="col-md-5 col-sm-6 col-xs-12 product-desc-details">
                                            <!-- Product Single - Price
                                            ============================================= -->
                                            <div class="product-name">
                                                <h1>{{$product->name}}</h1>
                                                
                                                <p>
                                                    <!-- <span style="margin-right:15px;">Loại: <a href='' title=''></a></span> -->
                                                    <span>Nhà sản xuất: <a href='#' title=''></a></span>
                                                    
                                                </p>
                                            </div>
                                            <div class="product-price">

                                                <ins>  {{number_format($product->price, 0,",",".")}}₫</ins>
                                            </div><!-- Product Single - Price End -->
                                            <div class="quantity product-quantity clearfix ">
                                                <label class="control-label options-title">Số lượng: </label>
                                                <input type="button" value="-" class="minus" style="height: 30px; line-height: 30px;">
                                                <input type="text" id='product_quantity' readonly step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" style="width: 40px; height: 30px" />
                                                <input type="button" value="+" class="plus" style="height: 30px; line-height: 30px;">
                                            </div>
                                            <div class="product-page-options  hidden ">


                                                <div class="sizePicker" id = 'option-0'>
                                                    <label class="control-label options-title">Title:</label>
                                                    <div class='options-selection'>
                                                        <select class="form-control input-sm">
                                                            <option data_size_code="defaulttitle" data_color_code="defaulttitle"  class="" value="Default Title" >
                                                                Default Title
                                                            </option> 
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hidden" style="">  
                                                <select id="product-select" name="variantId" > 

                                                    <option value="4675264" class="">Default Title - {{number_format($product->price, 0,",",".")}}₫</option>   
                                                    
                                                </select>
                                            </div> 
                                            <!-- variants -->


                                            <!-- Product Single - Rating
                                            ============================================= -->

                                            <div class="clear"></div>
                                            <div class="line"></div>
                                            <div class="product-sum">
                                            <?php 
                                                echo $product->intro;
                                            ?>
                                            </div>
                                            <!-- Product Single - Quantity & Cart Button
                                            ============================================= -->
                                            <input type="hidden" class='unit_price_not_formated' value="1680000.0000" />
                                            <input type="hidden" class="product_url" value="/den-pin-gan-tuong-baile-young-cyclone-ad22e"/>
                                            <input type="hidden" class="product_title_hd" value="{{$product->name}}"/>
                                            <input type="hidden" class="product_img_small" value="{{$product->image_link}}"/>


                                            <!-- end variant -->
                                            <!-- <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>-->

                                            <script>
                                                var quantity = parseInt($('#ProductDetailsForm .product-quantity input.qty').val());

                                                $('#ProductDetailsForm .minus').click(function() {
                                                    if (quantity > 0) {
                                                        if (quantity == 1) {
                                                            $('#addtocart').attr('disabled','disabled');
                                                        }
                                                        quantity -= 1;
                                                    }
                                                    else {
                                                        quantity = 0;
                                                    }
                                                    $('#ProductDetailsForm .product-quantity input.qty').val(quantity);
                                                });
                                                $('#ProductDetailsForm  .plus').click(function() {
                                                    $('#addtocart').removeAttr('disabled');
                                                    if (quantity < 100) {
                                                        quantity += 1;
                                                    }
                                                    else {
                                                        quantity = 100;
                                                    }
                                                    $('#ProductDetailsForm .product-quantity input.qty').val(quantity);
                                                });

                                            </script>

                                            
                                            <a type="button" id='addcart' class="add-to-cart add-cart button margin-left" href="{{url('')}}/add-to-cartid{{$product->id}}&soluong=1">Mua ngay</a>
                                            <button type="button" id='addtocart' class="add-to-cart button margin-left" onclick="addToCart()">Thêm vào giỏ</button>
                                            

                                <script type="text/javascript">
                                function addToCart(){
                                    var soluong = $('#ProductDetailsForm .product-quantity input.qty').val();
                                    var url = '{{url('')}}/add-to-cartid{{$product->id}}&soluong=';
                                    var url = url + soluong;
                                        window.location.href = url;
                                    }
                                </script>
                                    <?php 
                                        $shop = DB::table('shop')->first();
                                    ?>

                                            <div class="clear"></div>
                                            <div class="line"></div>

                                            <!-- Product Single - Meta
                                            ============================================= -->
                                            <!-- Product Single - Meta End -->
                                            <div class="boxgoilai">
                                                <!--<div data-app='bizweb_form' data-form-id='1784'></div>--><span>Hotline:</span> {{$shop->tel}} hoặc {{$shop->phone}}
                                            </div>
                                            
                                            <!-- Product Single - Share
                                            ============================================= -->
                                            <div class="si-share noborder clearfix">
                                                <span>Chia sẻ:</span>
                                                <div class='socical-wrapper'>


                                                    <ul class="social-icons">
                                                        <!-- check null: == nill -->

                                                        <div class="item"> 
                                                            <div class="fb-like fix_top" data-href="/den-pin-gan-tuong-baile-young-cyclone-ad22e" data-layout="button" data-action="like" data-show-faces="true" data-share="true" style='margin-right: 5px;'></div>
                                                        </div>   
                                                        <div class="fb-send" data-href="/den-pin-gan-tuong-baile-young-cyclone-ad22e"></div>
                                                        
                                                        <!-- old style: <li><a class="facebook" data-original-title="facebook" href="#"></a></li>   ...twitter,googleplus,evernote,tumblr -->

                                                        <script>
                                                            (function() {
                                                                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                                                po.src = 'http://apis.google.com/js/plusone.js';
                                                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                                            })();
                                                        </script> 

                                                        <!-- <div id="fb-root"></div> -->
                                                        <script>
                                                            // // fb SDK v2.4  
                                                            // (function(d, s, id) {
                                                            // var js, fjs = d.getElementsByTagName(s)[0];
                                                            // if (d.getElementById(id)) return;
                                                            // js = d.createElement(s); js.id = id;
                                                            // js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4";
                                                            // fjs.parentNode.insertBefore(js, fjs);
                                                            // }(document, 'script', 'facebook-jssdk'));
                                                        </script> 

                                                    </ul>
                                                </div>
                                            </div><!-- Product Single - Share End -->

                                        </div>
                                        <div class="col-md-3 hidden-sm hidden-xs">
                                            <div class="right sp-dt-bot-right ctsp-thongdiep">                  
                                                <div class="ctsp-giaohang">
                                                    <i class="bg-gh"></i>
                                                    <p>Giao hàng toàn Quốc</p>
                                                </div>
                                                <div class="ctsp-doihang">
                                                    <i class="bg-dh"></i>
                                                    <p>Đổi hàng 24h miễn phí</p>
                                                </div>
                                                <div class="ctsp-chinhhang">
                                                    <i class="bg-ch"></i>
                                                    <p>Đảm bảo hàng chính hãng</p>
                                                </div>
                                                <div class="note-ship">
                                                    <span class="money-icon"></span>Quý khách có thể "Thanh toán khi nhận hàng"
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="col-md-9 col-sm-8 col-xs-12 nobottommargin border-right">

                                            <div class="tabs clearfix nobottommargin hidden-xs" id="tab-1">

                                                <ul class="tab-nav clearfix">
                                                    <li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="hidden-xs"> Mô tả</span></a></li>
                                                    <li class=''><a href="#tabs-2"><i class="icon-info-sign"></i><span class="hidden-xs"> Bình luận</span></a></li>
                                                </ul>

                                                <div class="tab-container">
                                                    <div class="pd_description_content tab-content clearfix" id="tabs-1">
                                                        <?php 
                                                            echo $product->content;
                                                        ?>
                                                    </div>
                                                    <div class="tab-content clearfix" id="tabs-2">

                                                        <div id="fb-root"></div>                    
                                                        <div class="fb-comments" data-href="{{url('')}}/den-pin-gan-tuong-baile-young-cyclone-ad22e" data-numposts="5" width="100%" data-colorscheme="light"></div>
                                                        <!-- script comment fb -->
                                                    </div>
                                                </div>
                                            </div>

                                            



<div class="line"></div>
<div class="col_one_third nobottommargin">
    <a href="{{url('')}}/" title="" class="hidden-xs" target='_blank'><img class="image_fade" src="http://bizweb.dktcdn.net/100/086/968/themes/111253/assets/sp_policies_img.jpg?1476608156115" alt=""></a>
</div>

<div class="col_two_third col_last nobottommargin">

    <div class="col_half">

        <div class="feature-box fbox-plain fbox-dark fbox-small">
            <div class="fbox-icon">
                <i class="icon-plane"></i>
            </div>
            <h3>Miễn phí vẫn chuyển</h3>
            <p class="notopmargin">Nhận hàng trong vòng 3 ngày & hoàn toàn miễn phí vận chuyển với đơn hàng từ 1.200.000đ trở lên</p>
        </div>

    </div>

    <div class="col_half col_last">

        <div class="feature-box fbox-plain fbox-dark fbox-small">
            <div class="fbox-icon">
                <i class="icon-gift"></i>
            </div>
            <h3>Quà tặng</h3>
            <p class="notopmargin">Nhiều quà tặng và ưu đãi hấp dẫn khi mua hàng từ 2.000.000đ trở lên.</p>
        </div>

    </div>

    <div class="col_half nobottommargin">

        <div class="feature-box fbox-plain fbox-dark fbox-small">
            <div class="fbox-icon">
                <i class="icon-undo"></i>
            </div>
            <h3>Đổi trả hàng</h3>
            <p class="notopmargin">Đổi trả trong vòng 24h nếu không đúng với sản phẩm mà quý khách đã đặt</p>
        </div>

    </div>

    <div class="col_half col_last nobottommargin">

        <div class="feature-box fbox-plain fbox-dark fbox-small">
            <div class="fbox-icon">
                <i class="icon-phone3"></i>
            </div>
            <h3>HOTLINE: {{$shop->tel}}</h3>
            <p class="notopmargin">Dịch vụ chăm sóc khách hàng sẵn sàng hỗ trợ bạn 24/7</p>
        </div>

    </div>

</div>

</div>
<div class="col-md-3 col-sm-4 col-xs-12">
    <div class="col_full nobottommargin">
        <div class='fancy-title title-border hot_product_title'>
            <h3>
                Sản phẩm mới
            </h3>
        </div>
        <div class="product-sidebar">
        <?php
            $sql = 'SELECT * FROM products ORDER BY id DESC LIMIT 5';
            $newPro = DB::select($sql);
        ?>
            @foreach($newPro as $new)
            <?php
                $image = DB::table('product_images')->where('product_id', $new->id)->first(); 
            ?>
            <div class="oc-item">
                <div class="product iproduct clearfix">
                    <div class="product-image">
                        <a href="{{url('')}}/san-pham/{{$new->alias}}id{{$new->id}}"><img src="{{$new->image_link}}" alt="{{$new->alt}}"></a>

                        <a href="{{url('')}}/san-pham/{{$new->alias}}id{{$new->id}}"><img src="@if(isset($image->image)) {{$image->image}} @endif" alt="@if(isset($image->alt)) {{$image->alt}} @endif"></a>


                    </div>
                    <div class="product-desc center">
                        <div class="product-title"><h3><a href="{{url('')}}/san-pham/{{$new->alias}}id{{$new->id}}">{{$new->name}}</a></h3></div>
                        <div class="product-price">
                            <ins>{{number_format($new->price, 0,",",".")}}₫</ins>

                        </div>
                        <div class="product-cart">
                            <a href="{{url('')}}/san-pham/{{$new->alias}}" class="product_quick_add add-to-cart" title='Mua ngay'> Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="clear"></div><div class="line"></div>

<!-- related products -->

<div class="col_full nobottommargin" id='product-related-products'>
    <div class='fancy-title title-border hot_product_title'>
        <h3>
            Sản phẩm cùng loại
        </h3>
    </div>
    <div id="oc-product" class="owl-carousel product-carousel">

    <?php
        $cungloai = DB::table('products')->where('cate_id', $product->cate_id)->get();
    ?>
    @foreach($cungloai as $prod)

        <div class="oc-item">
            <div class="product iproduct clearfix">
                <div class="product-image">
                    <a href="{{url('')}}/san-pham/{{$prod->alias}}id{{$prod->id}}"><img src="{{$prod->image_link}}" alt="{{$prod->alt}}"></a>

                    <a href="{{url('')}}/san-pham/{{$prod->alias}}id{{$prod->id}}"><img src="{{$prod->image_link}}" alt="{{$prod->alt}}"></a>


                </div>
                <div class="product-desc center">
                    <div class="product-title"><h3><a href="{{url('')}}/san-pham/{{$prod->alias}}id{{$prod->id}}">{{$prod->alt}}</a></h3></div>
                    <div class="product-price">
                        <ins>{{number_format($prod->price, 0,",",".")}}₫</ins>

                    </div>
                    <div class="product-cart">
                        <a href="{{url('')}}/add-to-cartid{{$prod->id}}&soluong=1" class="product_quick_add add-to-cart" title='Mua ngay'> Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

        

    </div>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var ocProduct = $("#oc-product");
            ocProduct.owlCarousel({
                items: 6,
                nav: false,
                navText : ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                autoplayHoverPause: true,
                autoPlay:4000,
                dots: false,
                responsive:{
                    0:{ items:2 },
                    480:{ items:2 },
                    768:{ items:2 },
                    992:{ items:4 },
                    1200:{ items:6 }
                } 
            });
        });
    </script>
</div>

<!-- end related products -->

</div>

</div>
@stop