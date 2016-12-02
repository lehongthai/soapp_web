@extends('layouts.admin')

@section('body_right')
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <td style="display: none"></td>
                <td style="display: none"></td>
                <th style="width: 8%">Ảnh</th>
                <th>Tiêu Đề</th>
                <th>Danh Mục</th>
                <th>Vị Trí</th>
                <th>Lượt Xem</th>
                <th>Edit</th>
                <th>Delete</th>   
            </tr>
        </thead>
        <tbody>
        @if(isset($data) && $data != NULL)
        @foreach($data as $index => $item)
            <tr class="odd gradeX" align="center">
                <td style="display: none">{!! $item['id'] !!}</td>
                <td style="display: none">{!! csrf_token() !!}</td>
                <td><img src="{!! $item['image_thumbnail'] !!}" class="img-responsive"></td>
                <td>{!! $item['title'] !!}</td>
                <td>{!! $item['cName'] !!}</td>
                 <td>{!! $item['orders'] !!}</td>
                <td>{!! $item['views'] !!}</td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.post.getEdit', $item['id']) !!}">Edit</a></td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm_delete('Bạn chắc chắn xóa !')" href="{!! URL::route('admin.post.getDelete', $item['id']) !!}"> Delete</a></td>
            </tr>
        @endforeach()
        @endif
        </tbody>
    </table>

<script>
$('#dataTables-example').Tabledit({
    url: '{!! url('admin/post/action') !!}',
    deleteButton: false,
    columns: {
        identifier: [0, 'id'],
        editable: [[1, '_token'], [5, 'txtOrder']]
    },
    action: 'Sửa Nhanh',
    onDraw: function() {
    },

    onSuccess: function(data, textStatus, jqXHR) {
        window.location.href="{!! url('admin/post/list') !!}";
    },
    onFail: function(jqXHR, textStatus, errorThrown) {
        $(function() {
        $('#dialog-message').empty();
          $('#dialog-message').append(jqXHR['responseJSON']['code']);
          $( "#dialog-message" ).dialog({
                modal: true,
                buttons: [
                          {
                              text: "OK",
                              click: function() {                     
                                  $(this).dialog("close"); 
                                  var row_fail = $('.danger').index();
                                  $('.tabledit-edit-button')[row_fail].click();
                                  $('input[name="'+ jqXHR['responseJSON']['position_error'] +'"]').focus();
                              }
                          }
                        ]
          });
        });
        },
    onAlways: function() {
    },
    onAjax: function(action, serialize) {
    }
});
</script>
@endsection