@extends('layouts.master')
@section('head')
<link rel="stylesheet" type="text/css" href="{{url('')}}/public/css/cart.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="{!! url('public/admin') !!}/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

@stop

@section('name')
Giỏ hàng
@stop

@section('content')

        <!-- container -->
        <style type="text/css">
            table, td, img {
              text-align: center !important;
            }
            
            .page-heading {
                color: #444444;
                font-size: 18px;
                line-height: 30px;  
                text-transform: uppercase;
                text-shadow: 1px 1px #fff;
                font-family: inherit;
                font-weight: 700;
            }
        </style>

        <div class="container">
        <div class="row">
        <div class="col-md-12" style="padding:5px 20px;">
            <div class="loxo"></div>
            <h1 id="cart_title" class="page-heading">Giỏ hàng</h1>
            <div class="taberna-line">
                <span class="line-inner bg-color"></span>
            </div>
            <table id="cart_summary" class="table table-bordered stock-management-on" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th class="col-md-1"> STT</th>
                                <th class="col-md-1">Hình ảnh</th>
                                <th class="col-md-2">Tên sản phẩm</th>
                                <th class="col-md-1">Giá</th>
                                <th class="col-md-1">Số lượng</th>
                                <th class="col-md-2">Thành tiền</th>
                                <th class="col-md-1">Thao tác</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th colspan="2">Tổng tiền: </th>
                              <th colspan="2"><div id="total">0 vnđ</div></th>
                            </tfoot>
                          </table>
              <div class="buttons cart_navigation clearfix">
                <button onclick="window.location.href = '{{url('')}}/thanh-toan'" type="submit" id="checkout" class="button-default" name="checkout" value="" style="width:50%;padding: 15px;">Thanh toán</button>
                <button type="submit" id="update-cart" onclick="location.reload();" class="button-default" name="update" value="" style="width:50%; padding: 15px;">Cập nhật</button>
              </div>

        </div>
        <div class="col-md-12">
          <div class="footer-commit" style="margin-top:56px">
        <ul>
          
          <li>
            <div class="fc-item">
              <div class="img-support">
                <img src="{{url('')}}/public/cart/hotro_img_1.png?v=73" alt="">
              </div>
              <div class="fc-title">ĐẢM BẢO CHẤT LƯỢNG TUYỆT ĐỐI AUTHENTIC 100%</div>
            </div>
          </li>
          
          
          <li>
            <div class="fc-item">
              <div class="img-support">
                <img src="{{url('')}}/public/cart/hotro_img_2.png?v=73" alt="commit">
              </div>
              <div class="fc-title">HOÀN TRẢ GẤP 10 LẦN NẾU FAKE</div>
            </div>
          </li>
          
          
          <li>
            <div class="fc-item">
              <div class="img-support">
                <img src="{{url('')}}/public/cart/hotro_img_3.png?v=73" alt="commit">
              </div>
              <div class="fc-title">BÁN ĐÚNG GIÁ NIÊM YẾT</div>
            </div>
          </li>
          
          
          <li>
            <div class="fc-item">
              <div class="img-support">
                <img src="{{url('')}}/public/cart/hotro_img_4.png?v=73" alt="commit">
              </div>
              <div class="fc-title">SHIP HÀNG TOÀN QUỐC</div>
            </div>
          </li>
          
          
          <li>
            <div class="fc-item">
              <div class="img-support">
                <img src="{{url('')}}/public/cart/hotro_img_5.png?v=73" alt="commit">
              </div>
              <div class="fc-title">HỖ TRỢ THANH TOÁN KHI NHẬN HÀNG</div>
            </div>
          </li>
          
          
          <li>
            <div class="fc-item">
              <div class="img-support">
                <img src="{{url('')}}/public/cart/hotro_img_6.png?v=73" alt="commit">
              </div>
              <div class="fc-title">TẶNG QUÀ KHÁCH GẮN BÓ</div>
            </div>
          </li>
          
        </ul>
      </div>
        </div>
        </div>
        </div>     
        
        <!-- //container -->
<script src="{!! url('public/admin') !!}/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="{!! url('public/admin') !!}/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
  var idz;

  var t = $('#cart_summary').DataTable({
    bFilter: false, bInfo: false, "bLengthChange": false, "bPaginate": false, "aaSorting": []
  });
  load(); 
  function load()
  {
    t.clear().draw();
    $.getJSON('data-cart', function(mydata) {
      if (mydata) {
        var dem = 1;
        var myArray = [];
        var total = 0; 
        $.each(mydata, function(index, data) {
          myArray.push([ dem, '<div style="width:150px" ><img src="'+data.options.img+'" /></div>', data.name, formatPrice(data.price) + ' vnđ', '<input type="text" onchange="updateCart(this.value,\''+data.rowId+'\')" value="'+data.qty+'" style="width:35%;text-align: center !important;">', formatPrice(data.price*data.qty) + ' vnđ', '<button onclick="xoa(\''+data.rowId+'\')" class="btn btn-danger" style="color:#FFF;" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-trash"></span></button>']);
          dem++;
          total = total + data.price*data.qty;
        });
        t.rows.add(myArray).draw();
        total = total + ' vnđ';
        total = formatPrice(total);
        document.getElementById('total').innerHTML = total;
      } else {
        alert("Error!");
      };
    });
  }

  function formatPrice(nStr)
  {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
      x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2;
  }

  function sua(dem, id, link, images)
  {
    var demz = parseInt(dem);
    demz = demz + 1;
    demz = demz%10;
    var ten = document.getElementById("example").rows[demz].cells[1].innerHTML;
    var ma = document.getElementById("example").rows[demz].cells[2].innerHTML;
    var gia = document.getElementById("example").rows[demz].cells[3].innerHTML;
    var giacu = document.getElementById("example").rows[demz].cells[4].innerHTML;
    giacu = giacu.replace(/<br\s*[\/]?>/gi, "\n");
    var kichthuoc = document.getElementById("example").rows[demz].cells[5].innerHTML;
    var mota = document.getElementById("example").rows[demz].cells[6].innerHTML;
    document.getElementById('name').value = ten;
    document.getElementById('price').value = ma;
    document.getElementById('describe').value = gia;
    document.getElementById('describe2').value = giacu;
    document.getElementById('color').value = kichthuoc;
    document.getElementById('catalogid').value = mota;
    document.getElementById('link').value = link;
    document.getElementById('images').value = images;
    idz = id;
  }

  function postyt()
  {
    var data = {
     '_token': $('meta[name=csrf-token]').attr('content'),
     task: 'comment_insert',
     id: idz,
     name: $('#name').val(),
     price: $('#price').val(),
     describe: $('#describe').val(),
     color: $('#color').val(),
     catalogid: $('#catalogid').val(),
     images: $('#images').val(),
     link:$('#link').val(),
     describe2:$('#describe2').val()
   };
   console.log(data);
   $.post('edit-product', data, function(data) {
    if(data==1)
    {
      if(data=='1')
      {
        load();
      }
    }
  });
 }

function updateCart(value, rowid) {
    var url = '{{url('')}}';
    var url = url + '/updateCart&soluong=' + value + '&rowid=' + rowid;
    $.get(url, function(data){
    if(data=='1')
    {
      load();
    }
  });
 }

 function xoa(id){
  $.get('removeCart&id='+id, function(data){
    if(data=='1')
    {
      load();
    }
  })
 }

 
</script>
@stop