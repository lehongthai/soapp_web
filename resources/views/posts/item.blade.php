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

        <div class="single-post nobottommargin">

          <!-- Single Post
          ============================================= -->
          <div class="entry clearfix">

            <!-- Entry Title
            ============================================= -->
            <div class="entry-title">
              <h1{!! $post->title !!}</h1>
            </div><!-- .entry-title end -->

            <!-- Entry Meta
            ============================================= -->
            <ul class="entry-meta clearfix">
              <li><i class="icon-calendar3"></i>{{$post->created_at}}</li>
              <li><i class="icon-user"></i> Admin</li>

              <li><i class="icon-folder-open"></i> 
              @foreach($myTags as $tag)
              <a href="{{url('')}}/tag={{$tag->name}}">{{$tag->name}}</a>, 
              @endforeach
              </li>
              
            </ul><!-- .entry-meta end -->

            <!-- Entry Content
            ============================================= -->
            <div class="entry-content notopmargin">
              <h2>{!! $post->intro !!}</h2>
              <?php echo($post->content) ?>

              <!-- Post Single - Content End -->


            </div>
            <!-- Tag Cloud
            ============================================= -->

            <div class="tagcloud clearfix bottommargin">

              @foreach($myTags as $tag)
              <a href="{{url('')}}/tag={{$tag->name}}">{{$tag->name}}</a> 
              @endforeach


            </div><!-- .tagcloud end -->


            <div class="clear"></div>

              <!-- Post Single - Share
              ============================================= -->
              <div class="si-share noborder clearfix">
              <div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>

<div class="fb-comments" data-href="http://dochoitinhducshop.com/" data-numposts="5"></div>
            </div><!-- .entry end -->


          <!-- Comments
          ============================================= -->
          
        </div>
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
              $sql = 'SELECT * FROM posts WHERE cate_id = "1" ORDER BY id DESC LIMIT 5';
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

             <div class="fb-page" data-href="{{$shop->facebook}}" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ngocnguu205/" class="fb-xfbml-parse-ignore"><a href="{{$shop->facebook}}">Đồ chơi tình dục shop</a></blockquote></div>



            
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