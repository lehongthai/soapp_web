@extends('layouts.master')

@section('name')
Giới thiệu
@stop

@section('content')

<div class="container clearfix">
<div class="row">
			<!-- Post Content
			============================================= -->
			<div class="nobottommargin clearfix col-md-9">

				<div id="posts" class="small-thumbs">

					<!-- single article -->
					@foreach($posts as $post)
					<div class="entry clearfix">
						<div class="entry-image">
							<a href="{{url('')}}/bai-viet/{{$post->alias}}id{{$post->id}}" data-lightbox="image"><img class="image_fade" src="{{$post->image_link}}" alt="{{$post->alt}}"></a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h2><a href="{{url('')}}/bai-viet/{{$post->alias}}id{{$post->id}}">{{$post->title}}</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3">{{$post->created_at}}</i></li>
								<li><i class="icon-user"></i>Admin</li>
								<?php 
									$myTagsId = explode(",", $post->tags);
									$myTags = DB::table('tags')->whereIn('id', $myTagsId)->get();
								?>
								<li><i class="icon-folder-open"></i> 
								@foreach($myTags as $tag)
								<a href="{{url('')}}/tag={{$tag->name}}">{{$tag->name}}</a> 
								@endforeach
								</li>
								<!--<li><a href="#"><i class="icon-camera-retro"></i></a></li>-->
							</ul>
							<div class="entry-content">
								<!-- a -->
								   {{$post->intro}}<a href="{{url('')}}/bai-viet/{{$post->alias}}id{{$post->id}}" class="more-link">Xem tiếp</a>
							</div>
						</div>
					</div>
					@endforeach
					
					<!-- end single article -->
				</div>

			</div><!-- .postcontent end -->

			<!-- Sidebar
			============================================= -->
			<div class="nobottommargin col_last clearfix col-md-3">
				<div class="sidebar-widgets-wrap">

					<!-- categories -->

					<div class="widget widget_links clearfix">
						<h4>Danh mục</h4>
						<?php
						$catePost = DB::table('posts')->where('cate_id', 2)->get();
						?>
						<ul>
						@foreach($catePost as $ca)
							<li><a href="{{url('')}}/bai-viet/{{$ca->alias}}id{{$ca->id}}">{{$ca->title}}</a></li>
						@endforeach
						</ul>
					</div>

					<!-- end categories -->

					<!-- recent article -->

					<div class="widget clearfix">
						<h4 style="margin-bottom:10px;"><a href="">Bài viết mới nhất</a></h4>

						<div class="tab-container">
						<?php 
							$sql = 'SELECT * FROM posts WHERE cate_id = "1" ORDER BY id DESC LIMIT 3';
							$newPosts = DB::select($sql);
						?>
						@foreach($newPosts as $new)
							<div class="spost clearfix">
								<div class="entry-image">
									<a href="{{url('')}}/bai-viet/{{$new->alias}}id{{$new->id}}" class="nobg a-circle"><img class="img-circle-custom" src="{{$new->image_link}}" alt="{{$new->alt}}"></a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h4><a href="{{url('')}}/bai-viet/{{$new->alias}}id{{$new->id}}">{{$new->title}}</a></h4>
									</div>
									<ul class="entry-meta">
										<li><a href="{{url('')}}/bai-viet/{{$new->alias}}id{{$new->id}}"><i class="icon-comments-alt"></i> bình luận</a></li>
									</ul>
								</div>
							</div>
						@endforeach
						</div>
					</div>




					<div class="widget clearfix" style="overflow:hidden;">
						<h4>Facebook</h4>





						<?php
							$shop = DB::table('shop')->first();
						?>

						<div class="fb-like-box small--hide fb_iframe_widget" data-href="{{$shop->facebook}}" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=263266547210244&amp;color_scheme=light&amp;container_width=240&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fbaocaosu.sextoy&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false"><span style="vertical-align: bottom; width: 300px; height: 214px;"><iframe name="f1e9f89028dc2b8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="https://www.facebook.com/v2.0/plugins/like_box.php?app_id=263266547210244&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FfTmIQU3LxvB.js%3Fversion%3D42%23cb%3Df61ccc03b8b404%26domain%3Dsextoygiagoc.com%26origin%3Dhttp%253A%252F%252Fsextoygiagoc.com%252Ff27c4a0746c194%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=240&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fbaocaosu.sextoy&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false" style="border: none; visibility: visible; width: 300px; height: 214px;" class=""></iframe></span></div> 



						<script>
							(function(d, s, id) {
								var js, fjs = d.getElementsByTagName(s)[0];
								if (d.getElementById(id)) return;
								js = d.createElement(s); js.id = id;
								js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=263266547210244&version=v2.0";
								fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));
						</script>
					</div>



					<div class="widget clearfix">
					<?php 
						$tags = DB::table('tags')->get();
					?>
						<h4>Tags</h4>
						<div class="tagcloud">
						@foreach($tags as $cc)
							<a href="{{url('')}}/tag={{$cc->name}}">{{$cc->name}}</a>
						@endforeach
						</div>
					</div>


				</div>

			</div>
			<!-- .sidebar end -->
</div>
		</div>


		@stop