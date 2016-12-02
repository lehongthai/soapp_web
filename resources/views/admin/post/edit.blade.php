@extends('layouts.admin')
@section('body_right')

    <div class="col-lg-11" style="padding-bottom:120px">
        <form action="{!! route('admin.post.getEdit') !!}" method="POST">
        <div class="pull-right">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Lưu Lại</button>
            <button type="button" class="btn btn-primary" onclick="window.location='{!! url('admin/post/list') !!}'"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Cancel</button>
        </div>
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <input type="hidden" name="id" value="{!! $data['id'] !!}">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Tổng Quan</a></li>
    <li><a data-toggle="tab" href="#menu11">Seo</a></li>
    <li><a data-toggle="tab" href="#menu12">Thuộc Tính</a></li>
</ul>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="form-group">
                <label>Tiêu đề</label>
                <input class="form-control" name="txtTitle" placeholder="Vui lòng nhập tiêu đề" value="{!! old('txtTitle', $data['title']) !!}" />
                <div style="color:red">{!! $errors->first('txtTitle') !!}</div>
            </div>
            <div class="form-group">
                <label>Danh Mục Bài Viết</label>
                <select class="form-control" name="cate_id">
                    <option value="0">Vui Lòng Chọn</option>
                    @foreach($parent as $catePost)
                    <option value="{!! $catePost['id'] !!}" @if(old('cate_id') == $catePost['id'] || $data['cate_id'] == $catePost['id']) selected  @endif>{!! $catePost['name'] !!}</option>
                    @endforeach
                </select>
                <div style="color:red">{!! $errors->first('cate_id') !!}</div>
            </div>
            <div class="form-group">
                <label>Ảnh hiển thị</label>
                <div class="col-xs-12 thumbnail">
                    <img src="{!! old('image_link', $data['image_link']) !!}" id="image_link">
                    <hr>
                <input class="form-control" name="txtAltImage" placeholder="Chú thích ảnh" value="{!! old('txtAltImage', $data['alt']) !!}"  />
                </div>
                <input type="hidden" name="image_link" id="link_avatar" value="{!! old('image_link', $data['image_link']) !!}" >
                <button type="button" class="btn btn-large btn-block btn-default" onclick="BrowseServer();">Chọn Ảnh</button>
                <div style="color:red">{!! $errors->first('image_link') !!}</div>
            </div>
            
            <div class="form-group">
                <label>Giới thiệu</label>
                <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro', $data['intro']) !!}</textarea>
                <div style="color:red">{!! $errors->first('txtIntro') !!}</div>
            </div>
            
            <div class="form-group">
                <label>Nội Dung</label>
                <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent', $data['content']) !!}</textarea>
                <script type="text/javascript">ckeditor('txtContent')</script>
            </div>
        </div>
        <div id="menu11" class="tab-pane fade">
            <div class="form-group">
                <label>Keywords</label>
                <input class="form-control" name="txtKeyword" placeholder="Vui lòng nhập Keywords" value="{!! old('txtKeyword', $data['keywords']) !!}" />
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription', $data['description']) !!}</textarea>
            </div>
            <div class="form-group">
            <label>Url</label>
            <input class="form-control" name="txtUrl" placeholder="Đường Dẫn" value="{!! old('txtUrl', $data['alias']) !!}" />
            <div style="color:red">{!! $errors->first('txtUrl') !!}</div>
        </div>
        </div>
        <div id="menu12" class="tab-pane fade">
            <div class="form-group">
            <label>Thứ tự</label>
            <input class="form-control" name="txtOrder" placeholder="Thứ Tự" value="{!! old('txtOrder', $data['orders']) !!}" />
            <div style="color:red">{!! $errors->first('txtOrder') !!}</div>
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
            <label>Thuộc Tính</label>
            <?php $properties = explode(',', $data['properties']); ?>
            <div class="checkbox">
                <label>
                    <input name="properties[]" type="checkbox" value="1" @if(in_array(1, $properties)) checked @endif >
                    Mới
                </label>
                <label>
                    <input  name="properties[]" type="checkbox" value="2" @if(in_array(2, $properties)) checked @endif >
                    Nổi Bật
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>Lượt Xem</label>
            <input class="form-control" name="txtViews" placeholder="Lượt Xem" value="{!! old('txtViews', $data['views']) !!}" />
            <div style="color:red">{!! $errors->first('txtViews') !!}</div>
        </div>
         {{-- <div class="form-group">
            <label>Chọn Nhóm</label>
            <select id="example-getting-started" multiple="multiple">
                <option value="cheese">Cheese</option>
                <option value="tomatoes">Tomatoes</option>
                <option value="mozarella">Mozzarella</option>
            </select>
        </div> --}}
        </div>
    </div>
    <button type="submit" class="btn btn-default">Cập Nhật</button>
    <button type="button" class="btn btn-default" onclick="window.location='{!! url('admin/post/list') !!}'">Cancel</button>
</div>
            
            
        <form>
    </div>
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
      document.getElementById( 'image_link' ).src = document.getElementById( 'link_avatar' ).value;
    }

    
</script>
<script src="{!! url('public/admin') !!}/js/bootstrap-multiselect.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example-getting-started').multiselect();
    });
</script>
@endsection()
