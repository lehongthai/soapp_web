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
              <h1>Giới thiệu</h1>
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
                <span>Chia sẻ:</span>
                <div class="socical-wrapper">
                  <ul class="social-icons">
                    <!-- check null: == nill -->

                    <div class="item"> 
                      <div class="fb-like fix_top fb_iframe_widget" data-href="" data-layout="button" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=263266547210244&amp;container_width=0&amp;href=http%3A%2F%2Fsextoygiagoc.com%2Floi-ich-cua-sex-doi-voi-suc-khoe-nam-nu&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 94px; height: 20px;"><iframe name="f28a583400e7464" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=263266547210244&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FfTmIQU3LxvB.js%3Fversion%3D42%23cb%3Df1f9c898ff11de4%26domain%3Dsextoygiagoc.com%26origin%3Dhttp%253A%252F%252Fsextoygiagoc.com%252Ff27c4a0746c194%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fsextoygiagoc.com%2Floi-ich-cua-sex-doi-voi-suc-khoe-nam-nu&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 94px; height: 20px;" class=""></iframe></span></div>
                    </div>   
                    


                    <div class="item ">
                      <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 32px; height: 20px;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1479007083678" name="I0_1479007083678" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;annotation=none&amp;origin=http%3A%2F%2Fsextoygiagoc.com&amp;url=http%3A%2F%2Fsextoygiagoc.com%2Floi-ich-cua-sex-doi-voi-suc-khoe-nam-nu&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.9-gFNOTX9I8.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCO3YHsvPGj0w3a0BpGlL9WOctzc4A#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1479007083678&amp;parent=http%3A%2F%2Fsextoygiagoc.com&amp;pfname=&amp;rpctoken=17835461" data-gapiattached="true" title="+1"></iframe></div>
                    </div> 
                    


                    <div class="item ">
                      <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="http://platform.twitter.com/widgets/tweet_button.2dbd32894063b53338de1c1d4a747ea9.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fsextoygiagoc.com%2Floi-ich-cua-sex-doi-voi-suc-khoe-nam-nu&amp;size=m&amp;text=L%E1%BB%A3i%20%C3%ADch%20c%E1%BB%A7a%20sex%20%C4%91%E1%BB%91i%20v%E1%BB%9Bi%20s%E1%BB%A9c%20kh%E1%BB%8Fe%20nam%2C%20n%E1%BB%AF%2C%20sextoygiagoc.com%20%E2%80%93%20SEXTOYGIAGOC.COM&amp;time=1479007083581&amp;type=share&amp;url=http%3A%2F%2Fsextoygiagoc.com%2Floi-ich-cua-sex-doi-voi-suc-khoe-nam-nu" style="position: static; visibility: visible; width: 60px; height: 20px;"></iframe>
                      <script src="//platform.twitter.com/widgets.js"></script>  
                    </div> 
                    


                    <div class="item ">
                      <span class="PIN_1479007084885_button_pin" data-pin-log="button_pinit_bookmarklet" data-pin-href="https://www.pinterest.com/pin/create/button/"></span>
                      
                    </div> 
                    


                    <div class="item ">
                      <a class="evernote fix_top" target="_blank" href="http://www.evernote.com/clip.action?url=&amp;title" count-layout="horizontal">Note it!</a> 
                    </div>  
                    


                    <div class="item ">
                      <iframe frameborder="0" height="20px" scrolling="no" seamless="seamless" src="https://embed.tumblr.com/widgets/share/button?canonicalUrl=http%3A%2F%2Fsextoygiagoc.com%2Floi-ich-cua-sex-doi-voi-suc-khoe-nam-nu&amp;" style="visibility: visible;" width="55px"></iframe>
                      <script id="tumblr-js" async="" src="https://assets.tumblr.com/share-button.js"></script>
                    </div> 
                    

                    <!-- old style: <li><a class="facebook" data-original-title="facebook" href="#"></a></li>   ...twitter,googleplus,evernote,tumblr -->

                    <script>
                      (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = '//apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                      })();
                    </script> 
                  </ul>
                </div>
              </div><!-- Post Single - Share End -->
            </div><!-- .entry end -->


          <!-- Comments
          ============================================= -->
          
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
              <li><a href="{{url('')}}/post={{$ca->alias}}&id={{$ca->id}}">{{$ca->title}}</a></li>
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
                  <a href="{{url('')}}/post={{$new->alias}}&id={{$new->id}}" class="nobg a-circle"><img class="img-circle-custom" src="{{$new->image_link}}" alt="{{$new->alt}}"></a>
                </div>
                <div class="entry-c">
                  <div class="entry-title">
                    <h4><a href="{{url('')}}/post={{$new->alias}}&id={{$new->id}}">{{$new->title}}</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li><a href="{{url('')}}/post={{$new->alias}}&id={{$new->id}}"><i class="icon-comments-alt"></i> bình luận</a></li>
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