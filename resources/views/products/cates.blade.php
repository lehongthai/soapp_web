@extends('layouts.master')

@section('name')
Danh mục
@stop

@section('content')

			<!-- Post Content
			============================================= -->
			<div class="postcontent nobottommargin col_last" style="width: 810px">
				<div class="collection-name">
					Tăng cường sinh lý
				</div>
				<!-- Shop
				============================================= -->
				<div id="shop" class="product-3 clearfix">
					<div class="row sort-wrapper">
</div>
<div id="grid_pagination">
@foreach($product as $prod)
	<div class="col-md-3 col-sm-4 col-xs-6">
		<div class="product-item ">
			<div class="product-image">
				<a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">

					<img alt="{{$prod->alt}}" data-srcset="{{$prod->image_link}}, {{$prod->alt}}" src="{{$prod->image_link}}" class="">
				</a>
			</div>
			<div class="product-desc center">
				<div class="product-title"><h3><a href="{{url('')}}/product={{$prod->alias}}&id={{$prod->id}}">{{$prod->name}}</a></h3></div>
				<div class="product-price">
					<ins> {{number_format($prod->price, 0,",",".")}}đ </ins>
				</div>
				<div class="product-cart">
					<a href="{{url('')}}/addCart&id={{$prod->id}}" class="product_quick_add" title="Mua ngay"> Mua ngay</a>
				</div>
			</div>
		</div>
	</div>
@endforeach

	<script>
		jQuery(document).ready(function(){ 
			Layout.init(); 
		}); 
	</script>

	<!-- <div class="pagination_wrapper">
		<ul class="pagination">




			<li class="active"><a href="#" style="pointer-events:none">1</a></li>




		</ul>	
	</div> -->

</div>
</div><!-- #shop end -->

</div><!-- .postcontent end -->
			<!-- Sidebar
			============================================= -->
			<div class="sidebar nobottommargin  left-sidebar hidden-sm hidden-xs" style="width: 210px">
				<div class="sidebar-widgets-wrap">
					<!-- begin: filters -->
					<!-- end: filters -->
					<!-- categories -->



					<!-- <div class="widget widget_links clearfix" id="collection-sub">
						<h4>Danh mục sản phẩm</h4>
						<ul class="sidebar_menu">


							<li class="level0 active"><a href="gel-titan-developpe-sex.html">GEL TITAN SỈ VÀ LẺ</a>
								<i class="icon-angle-down"></i>
								<ul class="sidebar_submenu">

									<li class="level1">
										<a href="gel-titan-developpe-sex.html">Gel titan Developpe sex</a>
									</li>

									<li class="level1">
										<a href="cham-soc-sac-dep.html">Chăm sóc sắc đẹp</a>
									</li>

								</ul>
							</li>

						</ul>
					</div> -->


					<!-- end categories -->

					<!-- recent product -->

					<div class="widget clearfix">

						<h4><a href="sextoy-cho-nu.html">Sản phẩm bán chạy</a></h4>
						<div id="post-list-footer">
						@foreach($bestPro as $best)
						
							<div class="spost clearfix">
								<div class="entry-image">
									<a href="{{url('')}}/product={{$best->alias}}&id={{$best->id}}"><img src="{{$best->image_link}}" alt="{{$best->name}}"></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{url('')}}/product={{$best->alias}}&id={{$best->id}}">{{$best->name}}</a></h4>
									</div>
									<ul class="entry-meta">
										<li class="color">
											<ins>{{number_format($best->price, 0,",",".")}}₫</ins>

										</li>
										
									</ul>
								</div>
							</div>
						@endforeach

						</div>
					</div>

					<!-- end recent product -->


					<!-- most popular -->

					<div class="widget clearfix">

						<h4><a href="gel-titan-developpe-sex.html">Sản phẩm nổi bật</a></h4>
						<div id="Popular-item">

						@foreach($newPro as $best)
						
							<div class="spost clearfix">
								<div class="entry-image">
									<a href="{{url('')}}/product={{$best->alias}}&id={{$best->id}}"><img src="{{$best->image_link}}" alt="{{$best->name}}"></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{url('')}}/product={{$best->alias}}&id={{$best->id}}">{{$best->name}}</a></h4>
									</div>
									<ul class="entry-meta">
										<li class="color">
											<ins>{{number_format($best->price, 0,",",".")}}₫</ins>

										</li>
										
									</ul>
								</div>
							</div>
						@endforeach

						</div>
					</div>

					<!-- end most popular -->

					<!-- recent view -->

					

					<script>
						var $strHTML = get_viewed_items_html('');    
						$('.widget .widget-last-view').html($strHTML);   

					</script>

					<!-- end recent view -->
					
				</div>
			</div>
			<!-- .sidebar end -->

			@stop
