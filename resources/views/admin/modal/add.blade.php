@extends('layouts.admin')
@section('body_right')

    <div class="col-lg-11" style="padding-bottom:120px">
        <form action="{!! route('admin.modal.getAdd') !!}" method="POST">
        <div class="pull-right">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Lưu Lại</button>
            <button type="button" class="btn btn-primary" onclick="window.location='{!! url('admin/modal/list') !!}'"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Cancel</button>
        </div>
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Tổng Quan</a></li>
</ul>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="form-group">
                <label>Tiêu đề</label>
                <input class="form-control" id="txtTitle" onkeyup="return locdau()" name="txtTitle" placeholder="Vui lòng nhập tiêu đề" value="{!! old('txtTitle') !!}" />
                <div style="color:red">{!! $errors->first('txtTitle') !!}</div>
            </div>
            <div class="form-group">
                <label>Giới thiệu</label>
                <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro') !!}</textarea>
                <div style="color:red">{!! $errors->first('txtIntro') !!}</div>
            </div>
            
            
            
            <div class="form-group">
                <label>Nội Dung</label>
                <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent') !!}</textarea>
                <script type="text/javascript">ckeditor('txtContent')</script>
            </div>
            <div class="form-group">
            <label>Trạng thái</label>
            <div class="checkbox">
                <label>
                    <input name="properties[]" type="checkbox" value="1" @if(old('properties') && in_array(1, old('properties'))) selected='selected' @endif >
                    Kích hoạt
                </label>
                <label>
                    <input  name="properties[]" type="checkbox" value="2" @if(old('properties') && in_array(2, old('properties'))) selected='selected' @endif >
                    Không kích hoạt
                </label>
            </div>
        </div>
        </div>
    </div>
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
@endsection()
