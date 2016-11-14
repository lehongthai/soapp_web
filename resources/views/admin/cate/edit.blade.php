@extends('layouts.admin')
@section('body_right')
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{!! route('admin.cate.getEdit') !!}" method="POST">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <input type="hidden" name="id" value="{!! $data['id'] !!}">
                            <div class="form-group">
                                <label>Chọn Danh Mục Cha</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Vui Lòng Chọn</option>
                                    <?php cate_parent($parent, 0, '--', $data['parent_id']) ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên Danh Mục</label>
                                <input class="form-control" name="txtCateName" placeholder="Tên Danh Mục" value="{!! old('txtCateName', $data['name']) !!}" />
                                <div style="color:red">{!! $errors->first('txtCateName') !!}</div>
                            </div>
                            <div class="form-group">
                                <label>Ảnh hiển thị</label>
                                <div class="col-xs-12 thumbnail">
                                    <img src="{!! old('image_link', $data['image_link']) !!}" id="image_link">
                                    <hr>
                                    <input class="form-control" name="txtAltImage" placeholder="Chú thích ảnh" value="{!! old('txtAltImage', $data['alt']) !!}"  />
                                    <br/>
                                    <input type="hidden" name="image_link" id="link_avatar" value="{!! old('image_link', $data['image_link']) !!}" >
                                <button type="button" class="btn btn-large btn-block btn-default" onclick="BrowseServer();">Chọn Ảnh</button>
                                <div style="color:red">{!! $errors->first('image_link') !!}</div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label>Vị Trí</label>
                                <input class="form-control" name="txtOrder" placeholder="Vị Trí" value="{!! old('txtOrder', $data['order']) !!}" />
                            </div>
                            <!-- <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" name="txtKeywords" placeholder="Keywords" value="{!! old('txtKeywords', $data['keywords']) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription', $data['description']) !!}</textarea>
                            </div> -->
                            
                            <button type="submit" class="btn btn-default">Category Edit</button>
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
              document.getElementById( 'image_link' ).src = document.getElementById( 'link_avatar' ).value;
            }
        </script>
@endsection()            