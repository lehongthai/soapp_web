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
                                                                    <img src="{{$img->image}}" alt="$img->alt">
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

                                                <ins>  {{$product->price}}₫</ins>
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

                                                    <option value="4675264" class="">Default Title - {{$product->price}}₫</option>   
                                                    
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

                                            
                                            <a type="button" id='addcart' class="add-to-cart add-cart button margin-left" href="{{url('')}}/add-to-cart&id={{$product->id}}&soluong=1">Mua ngay</a>
                                            <button type="button" id='addtocart' class="add-to-cart button margin-left" onclick="addToCart()">Thêm vào giỏ</button>
                                            

                                <script type="text/javascript">
                                function addToCart(){
                                    var soluong = $('#ProductDetailsForm .product-quantity input.qty').val();
                                    var url = '{{url('')}}/add-to-cart&id={{$product->id}}&soluong=';
                                    var url = url + soluong;
                                        window.location.href = url;
                                    }
                                </script>


                                            <div class="clear"></div>
                                            <div class="line"></div>

                                            <!-- Product Single - Meta
                                            ============================================= -->
                                            <!-- Product Single - Meta End -->
                                            <div class="boxgoilai">
                                                <!--<div data-app='bizweb_form' data-form-id='1784'></div>--><span>Hotline:</span> 0983 408 068 hoặc 0904 90 82 81
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
                                                        <div class="fb-comments" data-href="http://sextoygiagoc.com/den-pin-gan-tuong-baile-young-cyclone-ad22e" data-numposts="5" width="100%" data-colorscheme="light"></div>
                                                        <!-- script comment fb -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-group hidden-lg hidden-sm hidden-md" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style='width: 100%; display: block;'>
                                                                <i class="icon-align-justify2"></i><span class=""> Mô tả</span>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="pd_description_content panel-body">
                                                            <p style="text-align: center;"><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;"><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_23.jpg" /></span></span></p>

                                                            <h3><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;"><strong>Giới thiệu SP:</strong></span></span></h3>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;"><strong>Tính năng:</strong>&nbsp;giúp nam giới tự sướng, thủ dâm, tập to dương vật</span></span></p>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;"><strong>Chất liệu:&nbsp;</strong>nhựa ABS, TPE cao cấp, phần lõi trong là Silicone siêu mềm, đạt chuẩn RoHS, tuyệt đối an toàn với người dùng</span></span></p>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;"><strong>Chức năng:</strong>&nbsp;30 cấp độ rung, đế xoay 180º</span></span></p>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;"><strong>Nguồn cấp:</strong>&nbsp;4 pin AAA</span></span></p>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;"><strong>Trọng lượng:</strong>&nbsp;732g</span></span></p>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;"><strong>Hãng sản xuất:</strong>&nbsp;<a href="http://sextoygiagoc.com/baile-hongkong" target="_blank">Baile</a></span></span></p>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;"><strong>Xuất xứ và nhập khẩu:</strong>&nbsp;Hongkong</span></span></p>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;"><strong>{{$product->name}}</strong>&nbsp;giúp nam giới giải tỏa sịnh lý, tự sướng với nhiều tốc độ khác nhau, nhiều tư thế khác nhau nhờ đế gắn tường có góc xoay rộng và có thể gắn ở&nbsp;bất cứ bề mặt phẳng nào như mặt bàn, tường nhà tắm, sàn nhà, bàn bếp, đầu giường....tạo cho chàng cảm giác như đang được ân ái với nàng. Ngoài ra, nếu bạn không thích sử dụng đế gắn tường thì có thể dùng tay và điều khiển theo ý muốn của mình 1 cách dễ dàng.</span></span></p>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;">Với phần miệng&nbsp;<a href="http://sextoygiagoc.com/am-dao-gia-den-pin" target="_blank">đèn pin</a>&nbsp;được mô phỏng âm đạo phụ nữ càng làm tăng thêm sự ham muốn, kích thích cho các chàng. Ngoài chức năng giải tỏa sinh lý,&nbsp;<strong>{{$product->name}}</strong>&nbsp;còn giúp các chàng luyện tập cải thiện kích thước cậu nhỏ, <a href="http://sextoygiagoc.com/xuat-tinh-som" target="_blank">chống&nbsp;xuất tinh sớm</a>&nbsp;và giúp chàng lấy lại phong độ, sự tự tin khi gần gũi bạn tình.</span></span></p>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;">Chỉ với 1 nút điều chỉnh nhưng lại có tới 30 cấp độ rung giúp chàng thỏa sức lựa chọn, trải nghiệm những cảm giác khác nhau. Đặc biệt, phần đế xoay có thể xoay với góc 180º nên bạn có thể sáng tạo nhiều tư thế độc đáo, mới lạ, mang lại những cảm giác đê mê mà trước giờ chưa từng được trải qua.</span></span></p>

                                                            <p style="text-align: center;"><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;"><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_13.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_14.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_12.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_21.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_19.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_1.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/tb2spxfbvxxxxapxpxxxxxxxxxx___2033600088.gif" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_2.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_18.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_6.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_20.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_4.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_11.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_22.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_15.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_8.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_17.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_16.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_9.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_5.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_7.jpg" /><img alt="{{$product->name}}" src="http://media.bizwebmedia.net/sites/73280/data/Upload/2015/8/may_bu_mut_duong_vat_tu_dong_10.jpg" /></span></span></p>

                                                            <h3><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;"><strong>Hướng dẫn sử dụng:</strong></span></span></h3>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;">Vệ sinh sản phẩm bằng nước muối loãng hoặc cồn y tế, đặc biệt là phần lõi âm đạo, nhưng tránh để nước tiếp xúc với phần mạch điện</span></span></p>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;">Lắp 4 pin AAA theo đúng chiều qui định</span></span></p>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;">Có thể sử dụng thêm&nbsp;<a href="http://sextoygiagoc.com/bao-cao-su" target="_blank"><strong>bao cao su</strong></a>&nbsp;để dễ dàng vệ sinh (tránh xuất tinh vào bên trong), dùng&nbsp;<a href="http://sextoygiagoc.com/gel-dau-boi-tron" target="_blank"><strong>gel bôi trơn</strong></a>&nbsp;để cảm nhận sự trơn tru, mượt mà như khi quan hệ với nàng.</span></span></p>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;">Gắn sản phẩm lên bề mặt phẳng nào mình thích hoặc sử dụng bằng tay. Bật nguồn và điều chỉnh chế độ rung mình thích và tận hưởng theo cách của riêng mình</span></span></p>

                                                            <p><span style="font-size:14px;"><span style="font-family:tahoma,geneva,sans-serif;">Sau khi sử dụng, tháo&nbsp;pin, rửa&nbsp;sạch, lau khô và đóng gói, bảo quản cho lần sử dụng sau.</span></span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading " id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a style='width: 100%; display:block;' class="collapsed" data-toggle="collapse" href="#collapseTwo" >
                                                                <i class="icon-info-sign"></i><span class=""> Bình luận</span>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse in " role="tabpanel">
                                                        <div class="panel-body">
                                                            <div id="fb-root"></div>                    
                                                            <div class="fb-comments" data-href="http://sextoygiagoc.com/den-pin-gan-tuong-baile-young-cyclone-ad22e" data-numposts="5" width="100%" data-colorscheme="light"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <script type="text/javascript">
    // fb SDK v2.0 
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "http://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>



<div class="line"></div>
<div class="col_one_third nobottommargin">
    <a href="http://sextoygiagoc.com/" title="" class="hidden-xs" target='_blank'><img class="image_fade" src="http://bizweb.dktcdn.net/100/086/968/themes/111253/assets/sp_policies_img.jpg?1476608156115" alt=""></a>
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
            <h3>HOTLINE: 0983 408 068</h3>
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
                        <a href="{{url('')}}/product={{$new->alias}}&id={{$new->id}}"><img src="{{$new->image_link}}" alt="{{$new->alt}}"></a>

                        <a href="{{url('')}}/product={{$new->alias}}&id={{$new->id}}"><img src="@if(isset($image->image)) {{$image->image}} @endif" alt="@if(isset($image->alt)) {{$image->alt}} @endif"></a>


                    </div>
                    <div class="product-desc center">
                        <div class="product-title"><h3><a href="{{url('')}}/product={{$new->alias}}">Bao Đôn dên siêu dày-tăng thêm 3cm Lovetoy - DD08L</a></h3></div>
                        <div class="product-price">
                            <ins>520.000₫</ins>

                        </div>
                        <div class="product-cart">
                            <a href="{{url('')}}/product={{$new->alias}}" class="product_quick_add add-to-cart" onclick="instantBuy()" title='Mua ngay'> Mua ngay</a>
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



        <div class="oc-item">
            <div class="product iproduct clearfix">
                <div class="product-image">
                    <a href="http://sextoygiagoc.com/bo-3-vong-silicone-titan-deo-duong-vat-dc21l"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/vong-silicone-deo-duong-vat-titan-baile-16.jpg?v=1477844976377" alt="Bộ 3 vòng Silicone Titan đeo dương vật Baile - DC21L"></a>

                    <a href="http://sextoygiagoc.com/bo-3-vong-silicone-titan-deo-duong-vat-dc21l"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/vong-silicone-deo-duong-vat-titan-baile-10.jpg?v=1477844976377" alt="Bộ 3 vòng Silicone Titan đeo dương vật Baile - DC21L"></a>


                </div>
                <div class="product-desc center">
                    <div class="product-title"><h3><a href="http://sextoygiagoc.com/bo-3-vong-silicone-titan-deo-duong-vat-dc21l">Bộ 3 vòng Silicone Titan đeo dương vật Baile - DC21L</a></h3></div>
                    <div class="product-price">
                        <ins>250.000₫</ins>

                    </div>
                    <div class="product-cart">
                        <a href="http://sextoygiagoc.com/bo-3-vong-silicone-titan-deo-duong-vat-dc21l" class="product_quick_add add-to-cart" onclick="instantBuy()" title='Mua ngay'> Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="oc-item">
            <div class="product iproduct clearfix">
                <div class="product-image">
                    <a href="http://sextoygiagoc.com/may-thu-dam-tu-dong-leten-ultimate-piston-a380-ad48"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/may-thu-dam-cao-cap-tu-dong-leten-a380-19.jpg?v=1476895898760" alt="Máy thủ dâm tự động Leten Ultimate Piston A380 - AD48"></a>

                    <a href="http://sextoygiagoc.com/may-thu-dam-tu-dong-leten-ultimate-piston-a380-ad48"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/may-thu-dam-cao-cap-tu-dong-leten-a380-2.jpg?v=1476895932163" alt="Máy thủ dâm tự động Leten Ultimate Piston A380 - AD48"></a>


                </div>
                <div class="product-desc center">
                    <div class="product-title"><h3><a href="http://sextoygiagoc.com/may-thu-dam-tu-dong-leten-ultimate-piston-a380-ad48">Máy thủ dâm tự động Leten Ultimate Piston A380 - AD48</a></h3></div>
                    <div class="product-price">
                        <ins>2.950.000₫</ins>

                    </div>
                    <div class="product-cart">
                        <a href="http://sextoygiagoc.com/may-thu-dam-tu-dong-leten-ultimate-piston-a380-ad48" class="product_quick_add add-to-cart" onclick="instantBuy()" title='Mua ngay'> Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="oc-item">
            <div class="product iproduct clearfix">
                <div class="product-image">
                    <a href="http://sextoygiagoc.com/den-pin-thu-dam-tu-dong-cao-cap-bkk-ad47"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/may-thu-dam-cao-cap-tu-dong-bkk-3.jpg?v=1476635518590" alt="Đèn pin thủ dâm tự động cao cấp BKK - AD47"></a>

                    <a href="http://sextoygiagoc.com/den-pin-thu-dam-tu-dong-cao-cap-bkk-ad47"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/may-thu-dam-cao-cap-tu-dong-bkk-6.jpg?v=1476635518590" alt="Đèn pin thủ dâm tự động cao cấp BKK - AD47"></a>


                </div>
                <div class="product-desc center">
                    <div class="product-title"><h3><a href="http://sextoygiagoc.com/den-pin-thu-dam-tu-dong-cao-cap-bkk-ad47">Đèn pin thủ dâm tự động cao cấp BKK - AD47</a></h3></div>
                    <div class="product-price">
                        <ins>3.500.000₫</ins>

                    </div>
                    <div class="product-cart">
                        <a href="http://sextoygiagoc.com/den-pin-thu-dam-tu-dong-cao-cap-bkk-ad47" class="product_quick_add add-to-cart" onclick="instantBuy()" title='Mua ngay'> Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="oc-item">
            <div class="product iproduct clearfix">
                <div class="product-image">
                    <a href="http://sextoygiagoc.com/bup-be-bom-hoi-sieu-kute-bb003"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/bup-be-bom-hoi-sieu-kute-4.jpg?v=1472803662693" alt="Búp bê bơm hơi siêu Kute - BB003"></a>

                    <a href="http://sextoygiagoc.com/bup-be-bom-hoi-sieu-kute-bb003"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/bup-be-bom-hoi-sieu-kute-6.jpg?v=1472803662693" alt="Búp bê bơm hơi siêu Kute - BB003"></a>


                </div>
                <div class="product-desc center">
                    <div class="product-title"><h3><a href="http://sextoygiagoc.com/bup-be-bom-hoi-sieu-kute-bb003">Búp bê bơm hơi siêu Kute - BB003</a></h3></div>
                    <div class="product-price">
                        <ins>3.500.000₫</ins>

                    </div>
                    <div class="product-cart">
                        <a href="http://sextoygiagoc.com/bup-be-bom-hoi-sieu-kute-bb003" class="product_quick_add add-to-cart" onclick="instantBuy()" title='Mua ngay'> Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="oc-item">
            <div class="product iproduct clearfix">
                <div class="product-image">
                    <a href="http://sextoygiagoc.com/may-thu-dam-tu-dong-cao-cap-ailighter-ad46"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/may-thu-dam-tu-dong-cao-cap-ailighter-21.jpg?v=1472021729870" alt="Máy thủ dâm tự động cao cấp Ailighter - AD46"></a>

                    <a href="http://sextoygiagoc.com/may-thu-dam-tu-dong-cao-cap-ailighter-ad46"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/may-thu-dam-tu-dong-cao-cap-ailighter-16.jpg?v=1472021729870" alt="Máy thủ dâm tự động cao cấp Ailighter - AD46"></a>


                </div>
                <div class="product-desc center">
                    <div class="product-title"><h3><a href="http://sextoygiagoc.com/may-thu-dam-tu-dong-cao-cap-ailighter-ad46">Máy thủ dâm tự động cao cấp Ailighter - AD46</a></h3></div>
                    <div class="product-price">
                        <ins>1.450.000₫</ins>

                    </div>
                    <div class="product-cart">
                        <a href="http://sextoygiagoc.com/may-thu-dam-tu-dong-cao-cap-ailighter-ad46" class="product_quick_add add-to-cart" onclick="instantBuy()" title='Mua ngay'> Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="oc-item">
            <div class="product iproduct clearfix">
                <div class="product-image">
                    <a href="http://sextoygiagoc.com/am-dao-gan-tuong-co-rung-crazy-bull-delia-baile-ad45a"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/am-dao-gia-den-pin-12-che-do-rung-crazy-bull-delia-baile-15.jpg?v=1471708683503" alt="Âm đạo gắn tường có rung Crazy Bull Delia-Baile - AD45A"></a>

                    <a href="http://sextoygiagoc.com/am-dao-gan-tuong-co-rung-crazy-bull-delia-baile-ad45a"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/am-dao-gia-den-pin-12-che-do-rung-crazy-bull-delia-baile-1.jpg?v=1471708799863" alt="Âm đạo gắn tường có rung Crazy Bull Delia-Baile - AD45A"></a>


                </div>
                <div class="product-desc center">
                    <div class="product-title"><h3><a href="http://sextoygiagoc.com/am-dao-gan-tuong-co-rung-crazy-bull-delia-baile-ad45a">Âm đạo gắn tường có rung Crazy Bull Delia-Baile - AD45A</a></h3></div>
                    <div class="product-price">
                        <ins>850.000₫</ins>

                    </div>
                    <div class="product-cart">
                        <a href="http://sextoygiagoc.com/am-dao-gan-tuong-co-rung-crazy-bull-delia-baile-ad45a" class="product_quick_add add-to-cart" onclick="instantBuy()" title='Mua ngay'> Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="oc-item">
            <div class="product iproduct clearfix">
                <div class="product-image">
                    <a href="http://sextoygiagoc.com/may-tap-to-duong-vat-tu-dong-penis-pump-evo-dc016"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/may-tap-to-duong-vat-evo-8.jpg?v=1470560611417" alt="Máy tập to dương vật tự động Penis Pump Evo - DC016"></a>

                    <a href="http://sextoygiagoc.com/may-tap-to-duong-vat-tu-dong-penis-pump-evo-dc016"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/may-tap-to-duong-vat-evo-11.jpg?v=1470560611417" alt="Máy tập to dương vật tự động Penis Pump Evo - DC016"></a>


                </div>
                <div class="product-desc center">
                    <div class="product-title"><h3><a href="http://sextoygiagoc.com/may-tap-to-duong-vat-tu-dong-penis-pump-evo-dc016">Máy tập to dương vật tự động Penis Pump Evo - DC016</a></h3></div>
                    <div class="product-price">
                        <ins>2.450.000₫</ins>

                    </div>
                    <div class="product-cart">
                        <a href="http://sextoygiagoc.com/may-tap-to-duong-vat-tu-dong-penis-pump-evo-dc016" class="product_quick_add add-to-cart" onclick="instantBuy()" title='Mua ngay'> Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="oc-item">
            <div class="product iproduct clearfix">
                <div class="product-image">
                    <a href="http://sextoygiagoc.com/am-dao-cam-tay-asia-pussy-evo-ad008"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/am-dao-gia-cam-tay-cao-cap-asia-pussy-evo-6.jpg?v=1470648895973" alt="Âm đạo cầm tay Asia Pussy Evo - AD008"></a>

                    <a href="http://sextoygiagoc.com/am-dao-cam-tay-asia-pussy-evo-ad008"><img src="http://bizweb.dktcdn.net/thumb/grande/100/086/968/products/am-dao-gia-cam-tay-cao-cap-asia-pussy-evo-2.jpg?v=1470648895973" alt="Âm đạo cầm tay Asia Pussy Evo - AD008"></a>


                </div>
                <div class="product-desc center">
                    <div class="product-title"><h3><a href="http://sextoygiagoc.com/am-dao-cam-tay-asia-pussy-evo-ad008">Âm đạo cầm tay Asia Pussy Evo - AD008</a></h3></div>
                    <div class="product-price">
                        <ins>550.000₫</ins>

                    </div>
                    <div class="product-cart">
                        <a href="http://sextoygiagoc.com/am-dao-cam-tay-asia-pussy-evo-ad008" class="product_quick_add add-to-cart" onclick="instantBuy()" title='Mua ngay'> Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>

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