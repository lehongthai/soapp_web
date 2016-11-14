@extends('layouts.admin')

@section('body_right')
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="{!! route('admin.image.getEdit') !!}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <input type="hidden" name="id" value="{!! $data['id'] !!}">
        @if($data['name'] == 'bannerBelow')
            <div class="form-group">
                <label>Chú Thích</label>
                <input class="form-control" name="txtText" placeholder="Nhập chú thích" value="{!! old('txtText', $data['text']) !!}" />
            </div>
        @endif()
            <div class="form-group">
                <label>Ảnh</label>
                <div class="col-xs-12 thumbnail">
                    <img src="{!! old('images', $data['image_link']) !!}" id="avatar">
                    <hr>
                    <input class="form-control" name="txtAltImage" placeholder="Chú thích ảnh" value="{!! old('txtAltImage', $data['alt']) !!}"  />
                </div>
                <input type="hidden" name="images" id="link_avatar" value="{!! old('images', $data['image_link']) !!}" >
                <button type="button" class="btn btn-large btn-block btn-default" onclick="BrowseServer();">Chọn Ảnh</button>
                <div style="color:red">{!! $errors->first('images') !!}</div>
            </div>
            <button type="submit" class="btn btn-default">Cập Nhật</button>
            <button type="reset" class="btn btn-default">Reset</button>
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
      document.getElementById( 'avatar' ).src = document.getElementById( 'link_avatar' ).value;
    }
</script>
@endsection()            