@extends('layouts.admin')
@section('body_right')
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <td style="display: none"></td>
                <td style="display: none"></td>
                <th>STT</th>
                <th>Tên</th>
                <th>Danh Mục</th>
                <th>Vị Trí</th>
                <th>Giá</th>
                <th>Ngày</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @if($data && $data != NULL)
        @foreach($data as $index => $product)
            <tr class="odd gradeX" align="center">
                <td style="display: none">{!! $product['id']; !!}</td>
                <td style="display: none">{!! csrf_token() !!}</td>
                <td>{!! $index + 1 !!}</td>
                <td>{!! $product['pName'] !!}</td>
                <td>{!! $product['cName'] !!}</td>
                <td>{!! $product['orders'] !!}</td>
                <td><?php echo number_format($product['price']); ?></td>
                <td><?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($product['created_at']))->diffForHumans();?></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('admin.product.getEdit', $product['id']) !!}">Edit</a></td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm_delete('Bạn chắc chắn xóa !')" href="{!! route('admin.product.getDelete', $product['id']) !!}"> Delete</a></td>
            </tr>
        @endforeach()
        @endif
        </tbody>
    </table>

<script>
$('#dataTables-example').Tabledit({
    url: '{!! url('admin/product/action') !!}',
    deleteButton: false,
    columns: {
        identifier: [0, 'id'],
        editable: [[1, '_token'], [5, 'txtOrder']]
    },
    action: 'Sửa Nhanh',
    onDraw: function() {
    },

    onSuccess: function(data, textStatus, jqXHR) {
        window.location.href="{!! url('admin/product/list') !!}";
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