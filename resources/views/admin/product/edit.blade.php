@extends('layouts.admin')
@section('body_right')
<form action="{{url('')}}/admin/product/edit" method="POST" enctype="multipart/form-data">
<div class="pull-right">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Lưu Lại</button>
            <button type="button" class="btn btn-primary" onclick="window.location='{!! url('admin/product/list') !!}'"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Cancel</button>
        </div>
<input type="hidden" name="id" class="form-control" value="{!! $data['id'] !!}">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Tổng Quan</a></li>
    <li><a data-toggle="tab" href="#menu11">Nội Dung</a></li>
    <li><a data-toggle="tab" href="#menu12">Seo</a></li>
    <li><a data-toggle="tab" href="#menu2">Thuộc Tính</a></li>
    <li><a data-toggle="tab" href="#menu3">Ảnh Chi Tiết</a></li>
  </ul>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="form-group">
        <label>Danh Mục Sản Phẩm</label>
            <select class="form-control" name="cate_id">
                <option value="0">Vui Lòng Chọn</option>
                <?php cate_parent($parent, 0, '--', old('cate_id', $data['cate_id'])); ?>
            </select>
            <div style="color:red">{!! $errors->first('cate_id') !!}</div>
        </div>
        <div class="form-group">
            <label>Tên Sản Phẩm <span style="color:red">*</span></label>
            <input class="form-control" name="txtName" placeholder="Tên Sản Phẩm" value="{!! old('txtName', $data['name']) !!}" />
            <div style="color:red">{!! $errors->first('txtName') !!}</div>
        </div>
           <div class="form-group">
            <label>Hãng Sản Xuất</label>
            <?php $manufacturers = explode(',', $data['make']); ?>
                <select multiple id="manufacturer_select" style="width:100%" name="txtMake[]">
                    @foreach($listManufacturer as $key => $manufacturer)
                    @foreach($manufacturers as $val)
                        <option value="{!! $key !!}" @if(old('txtMake') == $key ||  $val == $key) selected='selected' @endif >{!! $manufacturer !!}</option>
                    @endforeach
                    @endforeach
                </select>
        </div>
        <div class="form-group" style='margin-left:-12px'>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <label>Giá <span style="color:red">*</span></label>
                <input class="form-control" name="txtPrice" placeholder="Giá" value="{!! old('txtPrice', $data['price']) !!}" />
                <div style="color:red">{!! $errors->first('txtPrice') !!}</div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <label>Giá Cũ</label>
                <input class="form-control" name="txtPriceOld" placeholder="Giá cũ" value="{!! old('txtPriceOld', $data['price_old']) !!}" />
                <div style="color:red">{!! $errors->first('txtPriceOld') !!}</div>
            </div>
        </div>          
       
        <div class="form-group">
            <label for="product_select">Chọn thẻ</label><br>
            <?php $tags = explode(',', $data['tags']); ?>
            <select multiple id="product_select" style="width:100%" name="tags[]">
                @foreach($listTags as $key => $tag)
                    <option value="{!! $key !!}" @if(old('tags') == $key ||  in_array($key, $tags)) selected='selected' @endif >{!! $tag !!}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Ảnh Chính</label>
            <div class="col-xs-12 thumbnail">
                <img src="{!! old('fImages',$data['image_link']) !!}" alt="" id="avatar">
                <hr>
            <input class="form-control" name="txtAltImage" placeholder="Chú thích ảnh" value="{!! old('txtAltImage', $data['alt']) !!}"  />
            </div>
            <input type="hidden" name="fImages" id="link_avatar" value="{!! old('fImages', $data['image_link']) !!}" >
            <button type="button" class="btn btn-large btn-block btn-default" onclick="BrowseServer();">Chọn Ảnh</button>
            <div style="color:red">{!! $errors->first('fImages') !!}</div>
        </div>
      </div>
    <div id="menu11" class="tab-pane fade">
          <div class="form-group">
            <label>Giới Thiệu</label>
            <textarea class="form-control" rows="2" name="txtIntro">{!! old('txtIntro', $data['intro']) !!}</textarea>
             <script type="text/javascript">ckeditor('txtIntro')</script>                   
        </div>
        <div class="form-group">
            <label>Nội Dung</label>
            <textarea class="form-control" rows="5" name="txtContent">{!! old('txtContent', $data['content']) !!}</textarea>
            <script type="text/javascript">ckeditor('txtContent')</script>
        </div>
      </div>
    <div id="menu12" class="tab-pane fade">
    <div class="form-group">
            <label>Keywords</label>
            <input class="form-control" name="txtKeywords" placeholder="Keywords" value="{!! old('txtKeywords', $data['keywords']) !!}" />
            <div style="color:red">{!! $errors->first('txtKeywords') !!}</div>
        </div>
      <div class="form-group">
            <label>Description</label>
                <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription', $data['description']) !!}</textarea>
                <div style="color:red">{!! $errors->first('txtDescription') !!}</div>
        </div>
        <div class="form-group">
            <label>Url</label>
            <input class="form-control" name="txtUrl" placeholder="Đường Dẫn" value="{!! old('txtUrl', $data['alias']) !!}" />
            <div style="color:red">{!! $errors->first('txtUrl') !!}</div>
        </div>
      </div>
    <div id="menu2" class="tab-pane fade">
    <div class="form-group">
            <label>Thứ tự</label>
            <input class="form-control" name="txtOrder" placeholder="Thứ Tự" value="{!! old('txtOrder', $data['orders']) !!}" />
            <div style="color:red">{!! $errors->first('txtOrder') !!}</div>
        </div>
      <div class="form-group">
            <label>Thuộc Tính</label>
            <?php $properties = explode(',', $data['properties']); ?>
            <div class="checkbox">
                <label>
                    <input name="properties[]" type="checkbox" value="1" @if(in_array(1, $properties)) checked=  @endif>
                    Mới
                </label>
                <label>
                    <input  name="properties[]" type="checkbox" value="2" @if(in_array(2, $properties)) checked=  @endif>
                    Hot
                </label>
                <label>
                    <input  name="properties[]" type="checkbox" value="3" @if(in_array(3, $properties)) checked=  @endif>
                    Giảm Giá
                </label>
            </div>
            
        </div>
        <div class="form-group">
            <label for="js-example-basic-multiple">Sản Phẩm Liên Quan </label><br>

            <?php $products = explode(',', $data['related']); ?>
            <select multiple id="js-example-basic-multiple" style="width:100%" name="related_product[]">
                @foreach($listProduct as $k => $product)
                    <option value="{!! $k !!}" @if(old('related_product') == $k ||  in_array($k, $products)) selected='selected' @endif >{!! $product !!}</option>
                @endforeach
            </select>
            <div style="color:red">{!! $errors->first('related_product') !!}</div>
        </div>
    </div>
    <div id="menu3" class="tab-pane fade">
    <div class="col-lg-6" style="padding-top:22px" id="addImage">
        <button style="margin-bottom:10px" type="button" class="btn btn-success">Thêm ảnh chi tiết</button>
                        @foreach($imgDetail as $key => $img)
                        <div class="col-xs-12 thumbnail" id="thumb{!! $img['id'] !!}">
                            <img src="{!! old('detailImg[]', $img['image']) !!}" id="imgDetail{!! $key+1 !!}" idHinh = {!! $img['id'] !!} style="width:50%;height:50%">
                            <input class="form-control" name="txtAltImageDetail[]" placeholder="Chú thích ảnh" value="{!! old('txtAltImageDetail[]', $img['alt']) !!}"  />
                           <!--  <a href="javascript:void(0)" id="delImg" type="button" class="btn btn-danger btn-circle icon_del"><i class="fa fa-times"></i></a> -->
                            <button style="margin-top:5px" type="button" class="btn btn-large btn-block btn-default" onclick="BrowseServerDetail{!! $key+1 !!}();">Chọn Ảnh</button>
                        </div>
                        <input type="hidden" name="idDetail[]" value="{!! $img['id'] !!}">
                        <input type="hidden" name="detailImg[]" id="detailImg{!! $key+1 !!}" class="form-control" value="{!! old('detailImg[]') !!}">
                        @endforeach
                        @for($i=count($imgDetail); $i < 4; $i++)
                        <div class="col-xs-12 thumbnail">
                            <img src="{!! old('detailImg[]') !!}" id="imgDetail{!! $i+1 !!}" style="width:50%;height:50%">
                            <input class="form-control" name="txtAltImageDetail[]" placeholder="Chú thích ảnh" value="{!! old('txtAltImageDetail[]') !!}"  />
                            <button style="margin-top:5px" type="button" class="btn btn-large btn-block btn-default" onclick="BrowseServerDetail{!! $i+1 !!}();">Chọn Ảnh</button>
                        </div>
                        <input type="hidden" name="detailImg[]" id="detailImg{!! $i+1 !!}" class="form-control" value="{!! old('detailImg[]') !!}">
                        @endfor
                        
        </div>
      </div>
  </div>
    <div class="col-lg-9" style="padding-bottom:120px">
        <input type="hidden" name="_token" id="input" class="form-control" value="{!! csrf_token() !!}">
                        
</div>
       
</div> 
    <form>

<script type="text/javascript">
    function BrowseServer()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';    // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileField;
        finder.popup();
    }

    // This is a sample function which is called when a file is selected in CKFinder.
    function SetFileField( fileUrl )
    {
      document.getElementById( 'link_avatar' ).value = fileUrl;
      document.getElementById( 'avatar' ).src = document.getElementById( 'link_avatar' ).value;
    }

    function BrowseServerDetail()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';    // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileFieldDetail;
        finder.popup();
    }
    function SetFileFieldDetail( fileUrl )
    {
      document.getElementById( 'detailImg' ).value = fileUrl;
      document.getElementById( 'imgDetail' ).src = document.getElementById( 'detailImg' ).value;
    }

    function BrowseServerDetail1()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';    // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileFieldDetail1;
        finder.popup();
    }
    function SetFileFieldDetail1( fileUrl )
    {
      document.getElementById( 'detailImg1' ).value = fileUrl;
      document.getElementById( 'imgDetail1' ).src = document.getElementById( 'detailImg1' ).value;
    }
    function BrowseServerDetail2()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';    // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileFieldDetail2;
        finder.popup();
    }
    function SetFileFieldDetail2( fileUrl )
    {
      document.getElementById( 'detailImg2' ).value = fileUrl;
      document.getElementById( 'imgDetail2' ).src = document.getElementById( 'detailImg2' ).value;
    }
    function BrowseServerDetail3()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';    // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileFieldDetail3;
        finder.popup();
    }
    function SetFileFieldDetail3( fileUrl )
    {
      document.getElementById( 'detailImg3' ).value = fileUrl;
      document.getElementById( 'imgDetail3' ).src = document.getElementById( 'detailImg3' ).value;
    }

    function BrowseServerDetail4()
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        var finder = new CKFinder();
        finder.basePath = '../';    // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = SetFileFieldDetail4;
        finder.popup();
    }
    function SetFileFieldDetail4( fileUrl )
    {
      document.getElementById( 'detailImg4' ).value = fileUrl;
      document.getElementById( 'imgDetail4' ).src = document.getElementById( 'detailImg4' ).value;
    }

    </script>
@endsection