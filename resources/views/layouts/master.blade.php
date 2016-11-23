<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <?php 
        $domain = URL('').'/';
        $shop = DB::table('shop')->first();
        $banner = DB::table('images')->get();
        $seo = DB::table('abouts')->first();
        header('X-Frame-Options: GOFORIT'); 
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

  <meta property="og:url" content="{{url('')}}" />
<meta property="og:site_name" content="{{url('')}}" />
<meta property="fb:app_id" content="1820603798154432"/>
<meta property="fb:admins" content="100002730776444">
<meta property="og:url" content="{{url('')}}" />
<meta property="og:title" content="{{$seo->title}}" />
<meta property="og:type" content="Website" />
<meta property="og:description" content="{{$seo->meta_desc}}" />
<meta property="og:image" content="{{$banner[2]->image_link}}" />


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
        padding: 0 59px !important;
    }
    @media only screen and (max-width: 768px){
        .container{
            padding: 0 13px !important;
        }
    }
</style>
@yield('head')
</head>

<body class="stretched no-transition" >
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87937506-1', 'auto');
  ga('send', 'pageview');

</script> 
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1820603798154432',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="{{url('')}}/public/assets/addthis_widget.js#pubid=ra-56fb54ea6647f103"></script>
    
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
        </div><!-- #top-search end -->
        
        <?php 
             foreach ($catalog as $ca) {
                if($ca->parent_id == 0)
                {
                    echo "<li class=''><a class='menu' href='".$domain."phan-loai/{$ca->alias}'>{$ca->name}<span>+</span></a><ul>";
                    foreach($catalog as $sub_ca)
                    {
                        if($sub_ca->parent_id == $ca->id)
                        {
                            echo "<li class=''><a class='sub-menu' href='".$domain."loai/{$sub_ca->alias}'><div>{$sub_ca->name}</div></a></li>"; 
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
$("#menu-toggle, .body_overlay").click(function(e) {
    e.preventDefault();
    var $show_menu = $('#menu_xs, #menu-toggle, .body_overlay');
    $show_menu.toggleClass("toggled");
});
$('#menu_xs ul a span').click(function(e) {
    e.preventDefault();
    $(this).parent().next().toggle(200);
    if($(this).text() == '+')
        $(this).text('-');
    else 
        $(this).text('+');
})

//end responsive menu 
</script>
<!-- end mobile menu -->
    <script>
    //get_viewed_items_html...  
    function get_viewed_items_html($current_product)
    {
        // saving current viewed-item 
        var jsonProducts = sessionStorage.getItem('products_viewed'); 
        var arrPro = {}; 
        if( jsonProducts != null  ) 
            arrPro = JSON.parse( jsonProducts );  
        else
        {
            sessionStorage.removeItem('products_viewed'); 
            sessionStorage.removeItem('products_viewed_indexing'); // must-have this LOC 
        }

        // var $current_product = {}; // $current_product object, ko phải string...   
        if($current_product != null && arrPro[$current_product.id] == null) // null / undefined 
        { 
            arrPro[$current_product.id] = $current_product;   
            sessionStorage.setItem('products_viewed', JSON.stringify( arrPro ));  // 


            // saving current index 
            var jsonProIndex = sessionStorage.getItem('products_viewed_indexing'); 

            var arrProIndex = []; 
            if( jsonProIndex != null )  
                arrProIndex = JSON.parse( jsonProIndex );  
            arrProIndex.push($current_product.id);  
            sessionStorage.setItem('products_viewed_indexing', JSON.stringify( arrProIndex ));  // 

        }

        var jsonProIndex = sessionStorage.getItem('products_viewed_indexing'); 
        var jsonProducts = sessionStorage.getItem('products_viewed'); 
        var arrProIndex = []; 
        var $strHTML = ''; 
        var $countViewedItem = 0; 
        var $intMaxViewedItems = ''; 
        if($intMaxViewedItems == '')
            $intMaxViewedItems = 3; 
        else 
            $intMaxViewedItems = parseInt($intMaxViewedItems); 
        if(jsonProIndex != null & jsonProducts != null & $current_product != null )
        {
            //parse indexing, products...  
            arrProIndex = JSON.parse(jsonProIndex);   
            arrPro = JSON.parse( jsonProducts );   

            // assign count_items = 0;
            for (i=0; i<arrProIndex.length; i++ )
            {

                $strProID = arrProIndex[i];  
                if( $current_product.id != $strProID && $strProID != null && $countViewedItem < $intMaxViewedItems)
                { 

                    var product_viewed = arrPro[$strProID]; 
                    //console.log(product_viewed);
                    var price = Bizweb.formatMoney(product_viewed.price, "₫") + '</b>';
                    var compare_price = Bizweb.formatMoney(product_viewed.compare_at_price, "₫") + '</b>'; 
                    var old_price = '';
                    if (product_viewed.price < product_viewed.compare_at_price) {
                        old_price = '<del>'+compare_price+'</del>';
                    }
                    // for (img_idx ; i<product_viewed.images.length; img_idx++) 

                    $bo_found = true;  
                    //product_viewed['images'][0]; 
                    //==JSON.parse(localStorage.getItem('products_viewed'))['1000302443']['images'][0]      
                    $strHTML += '<div class="spost clearfix"> <div class="entry-image">'
                        +'<a href="'+ product_viewed.alias + '" title="'+ product_viewed.name + '">'  
                        +' <img' 
                        + ' u="image" '
                        +' src="'+ product_viewed['images'][0].src + '"'
                        +' alt="'+ product_viewed.name + '"'
                        + ' data-big="'+ product_viewed['images'][0] + '"'
                        +' data-title="'+ product_viewed.name + '"'
                        +' data-description="'+ product_viewed.name + '"'
                    // +'data_shape_color_code="'+ str_shape_color + '"' 
                    // +'data_shape_code="'+ arrName[0] + '"' 
                    // +'data_color_code="'+ arrName[1] + '" 
                        +'/>' 
                        +'</a>'
                        +'</div>'
                        +'<div class="entry-c">'
                        +'<div class="entry-title">'
                        +'<h4><a href="'+ product_viewed.alias +'">'+ product_viewed.name +'</a></h4>'
                        +'</div>'
                        +'<ul class="entry-meta"><li class="color">'+ old_price +'<ins> '+price+'</ins></li></ul>'

                        +'</div></div>'

                    // console.log($strHTML);

                    $countViewedItem = $countViewedItem + 1; 

                } //  
            } // endfor: arrProIndex   
        } // endif: jsonProIndex

        return $strHTML; 
    }// get_vied_items_html


    /*** add to cart ***/

    // <<<<<< product BEGIN  
    function refreshProductSelections($tagSelectOption0, $option0, $tagSelectOption1 , $option1, $tagSelectOption2, $option2) 
    {
        if($option0 != null && $option0 != '')
        {   
            //change option 0  
            $($tagSelectOption0 + ' option[value="'+$option0+'"]').prop('selected', true); // option-0 => Shape...  okok 
            $($tagSelectOption0).change(); 
        }


        if($option1 != null && $option1 != '')
        { 
            //change option 1  
            $($tagSelectOption1 + ' option[value="'+$option1+'"]').prop('selected', true); // option-1 => Color...  okok 
            $($tagSelectOption1).change();  
        }
        if($option2 != null && $option2 != '')
        { 
            //change option 2
            $($tagSelectOption2 + ' option[value="'+$option2+'"]').prop('selected', true); // option-1 => Color...  okok 
            $($tagSelectOption2).change();  
        }
    }

    function update_variant(variant, $tagPrice, $tagPriceCompare, $tagAddToCart, $tagProductSection) 
    {
        //console.log(Bizweb.formatMoney(variant.price, "₫"));
        var $unit_price = 0; 
        var $unit_price_compare = 0; 
        if(variant != null && variant.available==true )
        { 
            $unit_price = variant.price;
            //console.log(Bizweb.formatMoney(variant.price, "₫"));
            if(variant.price < variant.compare_at_price){
                $unit_price_compare = variant.compare_at_price;  

                //show onsale label
                $($tagProductSection).find('.sticker-sale').removeClass('hidden');  
            } else{

                //hide onsale label... nono: find matching ids: ('[id^="ProductDetails"]')  
                $($tagProductSection).find('.sticker-sale').addClass('hidden');  
            }

            $($tagAddToCart).html('Thêm vào giỏ'); 
            $($tagAddToCart).removeAttr('disabled');  
        }   
        else{

            $($tagAddToCart).html('Hết hàng'); 
            $($tagAddToCart).prop('disabled', true); 
        }

        var $strUnitPrice = Bizweb.formatMoney($unit_price,"₫");  // ''  shop.money_format
        //console.log($strUnitPrice);
        var $strUnitPriceCompare = Bizweb.formatMoney($unit_price_compare,"₫");  // ''  shop.money_format
        $($tagPrice).html($strUnitPrice); 
        if($unit_price_compare > 0)
        {
            $($tagPriceCompare).html($strUnitPriceCompare);   
        }
        else 
            $($tagPriceCompare).html('');   

        $($tagProductSection).find('.unit_price_not_formated').val($unit_price);    
        // update_total();
    }

    //ajax: add to cart 
    function addItem(form_id, fly_img) {

        $.ajax({
            type: 'POST',
            url: '/cart/add.js',
            dataType: 'json',
            async: false,
            data: $('#'+form_id).serialize(),
            success: onSuccess(fly_img, '#'+form_id),
            error: onError,
            cache: false
        });
    }

    onSuccess = function(fly_img, form_id) {
        flyToElement($(fly_img), $('.top-cart-block')); 

        //update top cart: qty, total price
        var $product_page = $(form_id).parents('[class^="product-page"]'); 
        var quantity = parseInt($product_page.find('[name="quantity"]').val(), 10) || 1;
        var $item_qty_new = 0; 
        var $item_price_new = 0; 
        var $item_price_increase = 0; 
        var $boUpdated = false; 

        //insert "no_item" html  
        if($('.top-cart-block .top-cart-content .top-cart-item').size() <= 0) 
        {
            $('.top-cart-block .top-cart-content').html(top_cart_no_item);  
        } 
        //update items 
        $('.top-cart-block .top-cart-content .top-cart-item').each(function(){
            if($(this).find('.item_id').val() == $product_page.find('[name="variantId"]').val() ){
                $item_qty_new = parseInt($(this).find('.item_qty').val()) + quantity ;
                $item_price_single = parseFloat($(this).find('.item_unit_price_not_formated').val());
                $item_price_new = $item_qty_new * $item_price_single;   

                $item_price_increase = quantity * parseFloat($(this).find('.item_unit_price_not_formated').val());   
                $(this).find('.item_qty').val($item_qty_new);  // !!!
                $(this).find('.top-cart-item-quantity').html('x ' + $item_qty_new); 
                $(this).find('.top-cart-item-price').html(Bizweb.formatMoney($item_price_new,"₫"));  // ''  shop.money_format
                $boUpdated = true; // updated item 
            } 
        });

        if($boUpdated == false){ // current item is not existed!!!  
            var $proURL = $product_page.find('.product_url').val();
            var $proTitle = $product_page.find('.product_title_hd').val();
            var $proUnitPrice = parseFloat($product_page.find('.unit_price_not_formated').val());
            var $strNewItem = '<div class="top-cart-item clearfix">'
            + ' <input type="hidden" class="item_id" value="'+ $product_page.find('[name="variantId"]').val() +'"></input>'  
            + ' <input type="hidden" class="item_qty" value="'+ quantity +'"></input>' 
            + ' <input type="hidden" class="item_unit_price_not_formated" value="'+ $proUnitPrice +'"></input>' 

            + '<div class="top-cart-item-image">'
            + ' <a href="'+ $proURL +'"><img src="'+ $product_page.find('.product_img_small').val() +'" alt="'+ $proTitle +'" ></a>'
            + '</div>'
            + '<div class="top-cart-item-desc">'
            //+ ' <span class="cart-content-count">x'+ quantity +'</span>'
            + '<a href="'+ $proURL +'">' + $proTitle + '</a>'
            + '<span class="top-cart-item-price">'+ Bizweb.formatMoney(($proUnitPrice * quantity),"₫") + '</span>' 
            + '<span class="top-cart-item-quantity">x '+ quantity +'</span>'
            + ' </div>'
            + '</div>';
            $('.top-cart-block .top-cart-content .top-cart-items').append($strNewItem); 
            $item_price_increase = $proUnitPrice * quantity; 

        }  
        //check is emptiness...   
        check_topcart_empty();  

        //update total 
        var $quantity_new = parseInt($('.top-cart-block #top-cart-trigger span').text()) + quantity;  
        var $price_new = parseFloat($('.top-cart-block .top_cart_total_price_not_format').val()) + $item_price_increase;  
        $('.top-cart-block .top_cart_total_price_not_format').val($price_new);  // !!!
        $('.top-cart-block #top-cart-trigger span').html($quantity_new); 
        $('.top-cart-block .top-checkout-price').html(Bizweb.formatMoney($price_new,"₫"));
        $('.cart_total').html(Bizweb.formatMoney($price_new,"₫"));

    };

    var onError = function() {
    }

    var top_cart_empty = '<div> Chưa có sản phẩm trong giỏ!</div>';  
    var top_cart_no_item = ''; 
    function check_topcart_empty(){  

        //Bạn chưa mua sản phẩm nào! 
        if($('.top-cart-block .top-cart-content .top-cart-item').size() <= 0) 
        {       
            top_cart_no_item = $('.top-cart-block .top-cart-content').html();   
            $('.top-cart-block .top-cart-content').html(top_cart_empty); 
            $('.top-cart-block .top-cart-content').css('width', '200px'); 
        }
        else{
            //remove width, okok!!! 
            $('.top-cart-block .top-cart-content').css('width', '');
        }
    }
    jQuery(document).ready(function($){

        //select first size&color. 
        //second item: $($("#colorPicker option").get(1))...  
        $("#sizePicker option:first").attr('selected', 'selected'); 
        $("#colorPicker option:first").attr('selected', 'selected'); 

        // function: choose size  
        $('#option-0 select').change(function(){
            var $size = $(this).val(); 
            var $color = $('#option-1 select').val();
            var $material   = $('#option-2 select').val();
            var $tagSelectOption0 = '#product-select-option-0'; 
            var $tagSelectOption1 = '#product-select-option-1'; 
            var $tagSelectOption2 = '#product-select-option-2'; 

            refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2 , $material);
        });

        // function: choose color  
        $('#option-1 select').change(function(){
            var $size = $('#option-0 select').val(); 
            var $color = $(this).val();
            var $material   = $('#option-2 select').val();  
            var $tagSelectOption0 = '#product-select-option-0'; 
            var $tagSelectOption1 = '#product-select-option-1'; 
            var $tagSelectOption2 = '#product-select-option-2'; 

            refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2 , $material);
        });

        // function: choose material
        $('#option-2 select').change(function(){
            var $size = $('#option-0 select').val(); 
            var $color = $('#option-1 select').val();
            var $material = $(this).val();  
            var $tagSelectOption0 = '#product-select-option-0'; 
            var $tagSelectOption1 = '#product-select-option-1'; 
            var $tagSelectOption2 = '#product-select-option-2';

            refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2 , $material);
        });


        //second item: $($("#colorPicker option").get(1))...  
        $("#option-0 select option:first").attr('selected', 'selected'); 
        $("#option-1 select option:first").attr('selected', 'selected'); 
        $("#option-2 select option:first").attr('selected', 'selected'); 
        var $size = $("#option-0 select option:first").val(); 
        var $color = $("#option-1 select option:first").val();
        var $material   = $("#option-2 select option:first").val();
        var $tagSelectOption0 = '#product-select-option-0'; 
        var $tagSelectOption1 = '#product-select-option-1'; 
        var $tagSelectOption2 = '#product-select-option-2'; 

        refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2 , $material);


        //add to cart 
        $("#addtocart").on('click', function(e) {  //.click(function(e){ // 
            e.preventDefault();
            addItem('ProductDetailsForm', '.product-main-image .slider-wrap img');

        }); 

        //add to cart for QuickView
        $("#addtocartQV").on('click', function(e) {  //.click(function(e){ // 

            e.preventDefault();
            addItem('ProductDetailsFormQV', '#product-pop-up .product-main-image img');

        }); 

        //check empty for top-cart... 
        check_topcart_empty(); 

        //change qty... 
        $('.product-quantity input.quantity').on('change', function(){
            var $qty = parseInt($(this).val()); 
            if($qty <= 0){
                $(this).parents('[class^="product-page"]').find('[id^="addtocart"]').addClass('disabled'); 
            }
            else{
                $(this).parents('[class^="product-page"]').find('[id^="addtocart"]').removeClass('disabled'); 
            }
        });

    });
    // >>>>>> product END
</script>
    <!-- Document Wrapper
============================================= -->
    <div id="wrapper" class="clearfix"> <!-- style="animation-duration: 1.5s; opacity: 1;"-->

<div class="panel-group left_menu col-md-3 hidden-xs hidden-sm" id='left_menu'>
    <div class="panel-heading">
        <h4 class="panel-title">
            <i class='icon-line-menu' ></i> Danh mục sản phẩm
        </h4>
    </div>

    <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
            <ul class='nav nav-pills nav-stacked'>
                
                 <?php 

                 foreach ($catalog as $ca) {
                    if($ca->parent_id == 0){
                        echo "<li class=' menu'><a class='menu' href='".$domain."phan-loai/{$ca->alias}'><img src='".$ca->image_link."' alt='".$ca->name."'/>{$ca->name}<i class='icon-angle-right arrow'></i></a><ul class='submenu'>";
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
                                echo "<li class=''><a class='sub-menu' href='".$domain."loai/{$sub_ca->alias}'><div>{$sub_ca->name}</div></a></li>"; 
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

<script>
    $(document).ready(function() {
        $('.left_menu').addClass('left_menu_sticker');
    });
</script>

        <script>
            $(window).load(function() {
                $('.left_menu').addClass('left_menu_sticker');
            });
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

                <a href="{{url('')}}" class="standard-logo" data-dark-logo="{{$banner[2]->image_link}}"><img src="{{$banner[2]->image_link}}" alt="Giới thiệu sản phẩm"></a>
                <a href="{{url('')}}" class="retina-logo" data-dark-logo="{{$banner[2]->image_link}}"><img src="{{$banner[2]->image_link}}" alt="Giới thiệu sản phẩm"></a>
            </div><!-- #logo end -->
            

            
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
        </div><!-- #top-search end -->
        
        <?php 
             foreach ($catalog as $ca) {
                if($ca->parent_id == 0)
                {
                    echo "<li class=''><a class='menu' href='".$domain."phan-loai/{$ca->alias}'>{$ca->name}<span>+</span></a><ul>";
                    foreach($catalog as $sub_ca)
                    {
                        if($sub_ca->parent_id == $ca->id)
                        {
                            echo "<li class=''><a class='sub-menu' href='".$domain."loai/{$sub_ca->alias}'><div>{$sub_ca->name}</div></a></li>"; 
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
$("#menu-toggle, .body_overlay").click(function(e) {
    e.preventDefault();
    var $show_menu = $('#menu_xs, #menu-toggle, .body_overlay');
    $show_menu.toggleClass("toggled");
});
$('#menu_xs ul a span').click(function(e) {
    e.preventDefault();
    $(this).parent().next().toggle(200);
    if($(this).text() == '+')
        $(this).text('-');
    else 
        $(this).text('+');
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
                                    <li><a href="{{url('')}}/loai/gel-titan-developpe-sex">Gel titan </a></li>
                                    <li><a href="{{url('')}}/phan-loai/bao-cao-su">Bao cao su</a></li>
                                    <li><a href="{{url('')}}/loai/am-dao-gia-den-pin">âm đạo giả đèn pin</a></li>
                                    <li class="border-none"><a href="{{url('')}}/loai/duong-vat-gia-cam-tay">dương vật giả cầm tay</a></li>
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
<!-- #top-search end -->
<!-- top link trigger --->
<div class="hidden-lg hidden-md mobile_cart">
    <div class="top-cart-block" id="top-cart">
        <a href="cart.html" rel="nofollow" id="top-cart-trigger">
            <img src="{{url('')}}/public/assets/icon-gio-hang4565.png?1476608156115" alt='Giỏ hàng'>
            <span class='top_cart_qty'>0</span>
        </a>
        <a href="cart.html" class="right_cart_mobile"></a>
    </div>
</div>
<a href='#' id='top_link_trigger' class='hidden-lg hidden-md'><i class='icon-ellipsis-vertical'></i></a>
<!-- end top link trigger --->
<script>
    $("#sidebar-wrapper ul li a span").click(function( event ) {
        event.preventDefault();
        var li = $(this).parents('li');
        li.children('ul').toggle('slow');
    });
</script>
            <!-- #primary-menu end -->

        </div>

    </div>

</header>        
        <!-- #header end -->

        <!-- Content
============================================= -->
        <!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <ol class="breadcrumb col-md-12 col-sm-12 hidden-xs">
            <li><a href="{{url('')}}">Trang chủ</a></li>
            
            <li class='active'>@yield('name')</li>
            
        </ol>
    </div>
</section>
<!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">
<style>
.content-wrap ul {
    margin-left: 30px;
}
</style>
        <div class="container clearfix">
            <!-- content -->
            @yield('content')
            <!-- end content -->
        </div>

    </div>

</section><!-- #content end -->

        <!-- #content end -->

        <!-- Footer
============================================= -->
        
<link href='{{url('')}}/public/assets/is-keywords-module4565.css?1476608156115' rel='stylesheet' type='text/css' />
<div class="is-keywords-module"></div>
<footer id="footer">
    
    <div class="container">

        <!-- Footer Widgets
============================================= -->
        <div class="footer-widgets-wrap clearfix">

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
                            <li><a href="{{url('')}}/post={{$tin->title}}id{{$tin->id}}">{{$tin->title}}</a></li>
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
                                        <h4><a href="{{url('')}}/post={{$tin->title}}id{{$tin->id}}">{{$tin->title}}</a></h4>
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
                            <input type="hidden" id="contact_tags" name="contact[tags]" value="khách hàng tiềm năng,Bản tin">
                            <input type="hidden" id="newsletter-first-name" name="contact[first_name]" value="(Người đăng ký)">
                            <input type="hidden" id="newsletter-last-name" name="contact[last_name]" value="Bản tin"> 
                            <input type="email" id='newsletter-email-3' name="contact[email]" class="form-control required email" placeholder="Nhập email của bạn">
                            <!--<input type="text" id="newsletter-email" name="contact[email]" placeholder="nhập email của bạn.." class="form-control">-->                                    
                            <span class="input-group-btn">
                                <button class="btn btn-success btnSignup-3" type="button">Đăng ký</button>
                            </span>
                        </div>
                    </form>
                </div>
                <script>
                   
                </script>
                

                <div class="widget clearfix" style="margin-bottom: -20px; margin-top: 20px;">
                    <div class="row">


                        
                        <div class="col-md-6 clearfix bottommargin-sm prefooter-socials col-xs-6">
                            <a href="{{$shop->facebook}}" class="social-icon si-dark si-colored nobottommargin" style="margin-right: 10px;">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="{{$shop->facebook}}"><small style="display: block; margin-top: 3px;"><strong>sextoy giá gốc</strong></small></a><!--<strong>Like us</strong><br>on Facebook</small></a>-->
                        </div>
                        

                        
                        <div class="col-md-6 clearfix prefooter-socials col-xs-6">
                            <a href="   " class="social-icon si-dark si-colored nobottommargin" style="margin-right: 10px;">
                                <i class="icon-youtube"></i>
                                <i class="icon-youtube"></i>
                            </a>
                            <a href="#"><small style="display: block; margin-top: 3px;"><strong> sextoy giá gốc</strong></small></a><!--<strong>Subscribe</strong><br>to RSS Feeds</small></a>-->
                        </div>
                        


                    </div>

                </div>

            </div>

        </div><!-- .footer-widgets-wrap end -->
    </div>
    
    <!-- Copyrights
============================================= -->
    <div id="copyrights">

        <div class="container clearfix">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    © 2014 Copyright. All rights reserved <a href="{{$shop->facebook}}" target="_blank">Do choi tinh duc</a>
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
                            

                            
                            <a href="https://twitter.com" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>
                            

                            
                            <a href="https://plus.google.com" class="social-icon si-small si-borderless si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>
                            

                            
                            <a href="https://www.pinterest.com" class="social-icon si-small si-borderless si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>
                            

                            
                            <a href="https://vimeo.com" class="social-icon si-small si-borderless si-vimeo">
                                <i class="icon-vimeo"></i>
                                <i class="icon-vimeo"></i>
                            </a>
                            

                            
                            <a href="http://git.com/" class="social-icon si-small si-borderless si-github">
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

    </div><!-- #copyrights end -->

</footer>
        <!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
============================================= -->

    <!-- Footer Scripts
============================================= -->
    <script src='{{url('')}}/public/assets/functions4565.js?1476608156115' type='text/javascript'></script>

    <!-- quick add cart -->
    <div id='product-pop-up' style="display:none;" class="single-product shop-quick-view-ajax clearfix">

    <div class="ajax-modal-title">
        <a href='#'><h2>Pink Printed Dress</h2></a>
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
                    <input type="text" class='qty' id='product_quantity' readonly step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                    <input type="button" value="+" class="plus">
                </div>
                <script>


                </script>
                <div class="hidden" style="">  
                    <select id="product-select-qw" name="variantId" >  
                    </select>

                    <input type="hidden" class="unit_price_not_formated"  value="" >
                    <input type="hidden" class="product_url" value="">
                    <input type="hidden" class="product_title_hd" value="">
                    <input type="hidden" class="product_img_small" value="">
                </div> 
                <a class='button view_detail' href='#'>Xem chi tiết</a>
                <button type="submit" id='addtocartQV' class="add-to-cart button nomargin">Add to cart</button>
            </form><!-- Product Single - Quantity & Cart Button End -->

            <div class="clear"></div>
            <div class="line"></div>
            <p class="description">Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
        </div>
    </div>
</div>
<script>
    var callBackQV = function(variant, selector) {  
        // console.log('callBackQV  is functioning...'); 

        var $tagPrice = '#product-pop-up .product-price ins';
        var $tagPriceCompare = '#product-pop-up .product-price del';
        var $tagProductSection = '#ProductDetailsFormQV'; 
        update_variant(variant, $tagPrice, $tagPriceCompare, '#addtocartQV', $tagProductSection);   

        /*begin variant image*/
        if (variant && variant.featured_image) {
            var newImage = variant.featured_image;
            //console.log(newImage);
            $("#product-pop-up .ps-list img[src='" + newImage.src + "']").click();
        }
        /*end of variant image*/
    }

    /*
   *  strip_html_js
   * 
   * ref: http://stackoverflow.com/questions/822452/strip-html-from-text-javascript
   * author phong.nguyen 20150806
   */ 
    function strip_html_js(html)
    {
        var tmp = document.createElement("DIV");
        tmp.innerHTML = html;
        return tmp.textContent || tmp.innerText || "";
    }

    var quickViewProduct = function (purl) {

        // if ($(window).width() < 680) { window.location = purl; return false; }
        // modal = $('#quick-view-modal'); modal.modal('show');
        $.ajax({
            url: purl + '.js',
            async: false,
            success: function (product) { 
                //console.log(product);
                //console.log('quick view...asd01'); 
                //make-up "product-pop-up"   

                //
                if (product.images.length == 0) {
                    $('#product-pop-up .product-main-image img').attr('src', '../bizweb.dktcdn.net/100/015/148/files/no-image1edde.jpg?v=1443674742687');  
                }  
                else{
                    var html = '';
                    $('#product-pop-up .product-main-image .pgwSlideshow').remove();
                    html = '<ul class="pgwSlideshow">';
                    $.each(product.images, function (i, v) {
                        html += '<li><img src="'+ v +'" data-large-src="'+ v +'"></li>';
                    });
                    html+='</ul>';
                    $('#product-pop-up .product-main-image').html(html);
                    var iflag = 0;
                    $('#product-pop-up .product-main-image img').load(function () {
                        iflag++;
                        if (iflag == $('#product-pop-up .product-main-image img').length) {

                            $('.pgwSlideshow').pgwSlideshow();
                        }
                    });

                }//end images length


                // render basic info. main img, desc, qty, ... 
                var $strDesc = strip_html_js(product.content);
                var $strPrice = Bizweb.formatMoney(product.price, '₫'); 
                var $strComparePrice = Bizweb.formatMoney(product.compare_at_price, "₫") ;
                $('#product-pop-up .description').html($strDesc.split(" ").splice(0,50).join(" ") + ' ...');   // truncate 250 words 
                $('#product-pop-up .ajax-modal-title a, #product-pop-up .view_detail').attr('href',purl);
                $('#product-pop-up .ajax-modal-title h2').html(product.name);
                $('#product-pop-up .product-price ins').html($strPrice);
                if (product.price < product.compare_at_price) {
                    $('#product-pop-up .product-price del').html($strComparePrice);
                }
                else {
                    $('#product-pop-up .product-price del').html('');
                    $('#product-pop-up .sale-flash').hide();
                }
                $('#product-pop-up .qty').val(1);
                var quantity = parseInt($('#ProductDetailsFormQV .product-quantity input.qty').val());
                $('#ProductDetailsFormQV .minus').click(function() {
                    if (quantity > 0) {
                        if (quantity == 1) {
                            $('#addtocartQV').attr('disabled','disabled');
                        }
                        quantity -= 1;

                    }
                    else {
                        quantity = 0;
                    }
                    $('#ProductDetailsFormQV .product-quantity input.qty').val(quantity);
                });
                $('#ProductDetailsFormQV .plus').click(function() {
                    $('#addtocartQV').removeAttr('disabled');
                    if (quantity < 100) {
                        quantity += 1;
                    }
                    else {
                        quantity = 100;
                    }
                    $('#ProductDetailsFormQV .product-quantity input.qty').val(quantity);
                });
                $('#product-pop-up .more_details').attr('href', product.url);    
                // assign hidden values 
                $('#product-pop-up .unit_price_not_formated').val(product.price);
                $('#product-pop-up .product_title_hd').val(product.name);  
                $('#product-pop-up .product_url').val(product.url);
                $('#product-pop-up .product_img_small').val(product.featured_image);  // AAA!!! 

                //render variant size/color   
                // $('#product-pop-up .price strong').html(product.title);    

                //render selections (NOT formatted yet)
                $('select#product-select-qw').html(''); 
                $('.product-page-options select.size').html(''); 
                $('.product-page-options select.color').html('');
                $('.product-page-options select.material').html('');
                $('.selector-wrapper').remove(); // remove all selectors by  Haravan.OptionSelectors 
                var $arrSize = [];
                var $arrColor = [];
                var $arrMaterial = [];
                $.each(product.variants, function (i, v) {
                    //console.log(v);
                    $('select#product-select-qw').append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
                    //console.log($arrSize.indexOf(v.option1) <= -1);
                    if($arrSize.indexOf(v.option1) <= -1 ) 
                    {
                        $('#product-pop-up select.size').append("<option >" + v.option1 + "</option>"); 
                        $arrSize.push(v.option1);  
                    }

                    if($arrColor.indexOf(v.option2) <= -1 ) 
                    {
                        $('#product-pop-up select.color').append("<option >" + v.option2 + "</option>"); 
                        $arrColor.push(v.option2);  
                    }

                    if($arrMaterial.indexOf(v.option3) <= -1 ) 
                    {
                        $('#product-pop-up select.material').append("<option >" + v.option3 + "</option>"); 
                        $arrMaterial.push(v.option3);  
                    }
                }); 

                //phong.nguyen 20150806: show label options 1,2,...
                $($('#product-pop-up .product-page-options label')[0]).html(product.options[0].name);   

                var $option1_label = $('#product-pop-up .product-page-options label')[1]; 
                var $option1_item = $('#product-pop-up .product-page-options .sizePicker')[1]; 
                var $option2_label = $('#product-pop-up .product-page-options label')[2]; 
                var $option2_item = $('#product-pop-up .product-page-options .sizePicker')[2];  
                if(product.options.length >= 2)
                { 
                    $($option1_label).html(product.options[1].name);  
                    $($option1_item).removeClass('hidden');
                    if (product.options.length >= 3)  {
                        $($option2_label).html(product.options[2].name);  
                        $($option2_item).removeClass('hidden');
                    }
                    else {
                        $($option2_item).addClass('hidden');
                    }
                }         
                else {
                    $($option1_item).addClass('hidden');
                    $($option2_item).addClass('hidden');
                }


                //show/hide for any/1 variant  
                //console.log(product.variants);
                if (product.variants.length <= 1 && product.variants[0].title.indexOf('Default') != -1) {
                    // callBackQV(product.variants[0], null);  
                    $('#product-pop-up .product-page-options').addClass('hidden');  
                } 
                else { 
                    // // debugger...   
                    $('#product-pop-up .product-page-options').removeClass('hidden');  

                }

                //call back function for variants 
                new Bizweb.OptionSelectors("product-select-qw", { product: product, onVariantSelected: callBackQV });   


                // function: choose size  
                $('#product-pop-up select.size').change(function(){
                    var $size = $(this).val(); 
                    var $color = $('#product-pop-up select.color').val();
                    var $material = $('#product-pop-up select.material').val();
                    var $tagSelectOption0 = '#product-select-qw-option-0'; 
                    var $tagSelectOption1 = '#product-select-qw-option-1';
                    var $tagSelectOption2 = '#product-select-qw-option-2';

                    refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2, $material);
                });

                // function: choose color  
                $('#product-pop-up select.color').change(function(){
                    var $size = $('#product-pop-up select.size').val(); 
                    var $color = $(this).val();   
                    var $material = $('#product-pop-up select.material').val(); 
                    var $tagSelectOption0 = '#product-select-qw-option-0'; 
                    var $tagSelectOption1 = '#product-select-qw-option-1';
                    var $tagSelectOption2 = '#product-select-qw-option-2'; 

                    refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2, $material);
                });

                // function: choose material  
                $('#product-pop-up select.material').change(function(){
                    var $size = $('#product-pop-up select.size').val(); 
                    var $color = $('#product-pop-up select.color').val();   
                    var $material = $(this).val(); 
                    var $tagSelectOption0 = '#product-select-qw-option-0'; 
                    var $tagSelectOption1 = '#product-select-qw-option-1';
                    var $tagSelectOption2 = '#product-select-qw-option-2'; 

                    refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2, $material);
                });


                //second item: $($("#colorPicker option").get(1))...  
                $("#product-pop-up select.size option:first").attr('selected', 'selected'); 
                $("#product-pop-up select.color option:first").attr('selected', 'selected');
                $("#product-pop-up select.material option:first").attr('selected', 'selected');  
                var $size = $("#product-pop-up select.size option:first").val(); 
                var $color = $("#product-pop-up select.color option:first").val();
                var $material = $("#product-pop-up select.material option:first").val();
                var $tagSelectOption0 = '#product-select-qw-option-0'; 
                var $tagSelectOption1 = '#product-select-qw-option-1';
                var $tagSelectOption2 = '#product-select-qw-option-2';

                refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color, $tagSelectOption2 , $material);


            }//end: success 
        });

        //$('.modal-backdrop').css('opacity', '0');
        return false;
    }
</script>
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
                    <select id="product-select-qa" name="variantId" >  
                    </select>

                    <input type="hidden" class="unit_price_not_formated"><!-- </input> -->
                    <input type="hidden" class="product_url" value=""> <!--</input>-->
                    <input type="hidden" class="product_title_hd" value=""> <!--</input>-->
                    <input type="hidden" class="product_img_small" value=""> <!--</input>-->
                </div> 

                <input id="product-quantity" name="quantity" type="text" value="1" readonly class="form-control input-sm quantity">

                <button id="addtocartQA" class="btn btn-primary" type="submit">Thêm vào giỏ</button>
            </form>
        </div>  <!-- END: row -->
    </div>
</div>


    <div class="navibar-right hidden-xs">
    <ul>
        <li class="nav-gio-hang top-cart-block" id="top-cart">
            <a href="cart.html" id="top-cart-trigger">
                <img src="{{url('')}}/public/assets/icon-gio-hang4565.png?1476608156115" alt='Giỏ hàng'>
                Giỏ hàng
                <span class='top_cart_qty'></span>
            </a>
            <a href="{{url('')}}/cart" class="right_cart"></a>
        </li>
        <li class="nav-tai-khoan" id="tai-khoan-nav">
            <a href="{{url('')}}/login"><span class="icon-tai-khoan"></span>Tài khoản</a>                  
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
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(window).scrollTop() != 0) {
                $('#topback').fadeIn();

            } else {

                $('#topback').fadeOut();

            }

        });

        $('#topback').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 500);

        });

    });

</script>
<style type="text/css">
    #topback {
        display:block !important;
        cursor: pointer;
        z-index: 9999;
        color: #fff;
        font-size: 20px;
    }
</style>
    <!-- end quick add cart -->
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
    $('.btnSignup-3')
    .click(function (e) {
        var email = $('#newsletter-email-3').val();
        $.get('get-mail='+email, function(data){
            if(data=='1')
            {
              $('#myModal2').modal();
            }
          });
    });
</script>
<style type="text/css">
    #callPhone{
        position: fixed;
        bottom: 0px;
        left: 3px;
        z-index: 110000;
    }
</style>
<div id="callPhone" class="hidden-lg hidden-md">
    <a href="tel:{{$shop->tel}}"><img src="https://cdn2.iconfinder.com/data/icons/ios-7-style-metro-ui-icons/512/MetroUI_Phone.png" style="width: 60px"></a>
</div>
</body>


</html>