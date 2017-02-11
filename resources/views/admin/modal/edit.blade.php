@extends('layouts.admin')
@section('body_right')

    <div class="col-lg-11" style="padding-bottom:120px">
        <form action="{!! route('admin.modal.getEdit') !!}" method="POST">
        <div class="pull-right">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Lưu Lại</button>
            <button type="button" class="btn btn-primary" onclick="window.location='{!! url('admin/modal/list') !!}'"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span> Cancel</button>
        </div>
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <input type="hidden" name="id" value="{!! $data['id'] !!}">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Tổng Quan</a></li>
</ul>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="form-group">
                <label>Tiêu đề</label>
                <input class="form-control" name="txtTitle" onkeyup="return locdau()" id="txtTitle" placeholder="Vui lòng nhập tiêu đề" value="{!! old('txtTitle', $data['title']) !!}" />
                <div style="color:red">{!! $errors->first('txtTitle') !!}</div>
            </div>
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
            <div class="form-group">
            <label>Thuộc Tính</label>
            <?php $properties = explode(',', $data['active']); ?>
            <div class="checkbox">
                <label>
                    <input name="properties[]" type="checkbox" value="1" @if(in_array(1, $properties)) checked @endif >
                    Kích hoạt
                </label>
                <label>
                    <input  name="properties[]" type="checkbox" value="2" @if(in_array(2, $properties)) checked @endif >
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
<script src="{!! url('public/admin') !!}/js/bootstrap-multiselect.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example-getting-started').multiselect();
    });
</script>
<script type="text/javascript">

    function locdau(){
    //code by Minit - www.canthoit.info - 13-05-2009
    var str = (document.getElementById("txtTitle").value);
    str= str.toLowerCase();
    str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
    str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
    str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
    str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
    str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
    str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
    str= str.replace(/đ/g,"d");
    str= str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,"-");
    str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
    str= str.replace(/^\-+|\-+$/g,"");//cắt bỏ ký tự - ở đầu và cuối chuỗi

    document.getElementById("txtUrl").value = str;

}
</script>
@endsection()
