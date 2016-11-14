<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Đơn hàng mới!</h2>

<div>
    <h3>Thông tin khách hàng</h3>
    <div>
      <p><b>Tên khách hàng:</b> {{$user['name']}}</p>
      <p><b>Số điện thoại:</b> {{$user['phone']}}</p>
      <p><b>Email:</b> {{$user['email']}}</p>
      <p><b>Địa chỉ:</b> {{$user['address']}}</p>
      <p><b>Tỉnh/TP:</b> {{$user['tinh']}}</p>
      <p><b>Ghi chú:</b> {{$user['note']}}</p>
      <p><b>Thanh toán:</b> {{$user['gateway']}}</p>
    </div>
    <hr/>
    <h3>Chi tiết đơn hàng</h3>
    <table width="100%">
    <thead>
      <tr>
        <th class="col-md-2">Hình ảnh</th>
        <th class="col-md-2">Tên sản phẩm</th>
        <th class="col-md-1">Màu sắc</th>
        <th class="col-md-1">Giá</th>
        <th class="col-md-1">Số lượng</th>
        <th class="col-md-1">Thành tiền</th>
      </tr>
    </thead>
    <tbody>
    <?php $total = 0;?>
      @foreach($contents as $con)
      <tr>
        <th><img src="{{$con->options->img}}" width="150"></th>
        <th>{{$con->name}}</th>
        <th>{{$con->color}}</th>
        <th>{{number_format($con->price, 3)}} vnđ</th>
        <th>{{$con->qty}}</th>
        <th>{{number_format($con->subtotal, 3)}} vnđ</th>
        <?php $total = $total + $con->subtotal;?>
        </tr>
      @endforeach
    </tbody>
    <tfoot>
    <tr>
      <th colspan="2"></th>
      <th colspan="2">Phí ship: </th>
      <th colspan="2"> {{number_format($user['ship'],3)}} vn₫</th>
    </tr>
    <tr>
    <?php $total = $total + $user['ship'];?>
      <th colspan="2"></th>
      <th colspan="2">Tổng tiền: </th>
      <th colspan="2"> {{number_format($total,3)}} vn₫</th>
    </tr>
    </tfoot>
  </table>
</div>

</body>
</html>