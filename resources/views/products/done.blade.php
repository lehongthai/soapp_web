@extends('layouts.master')
@section('head')
<link rel="stylesheet" type="text/css" href="{{url('')}}/public/css/cart.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="{!! url('public/admin') !!}/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{url('')}}/public/css/check_out.css">  <link rel="stylesheet" type="text/css" href="{{url('')}}/public/css/check_out.css">

@stop

@section('name')
Giỏ hàng
@stop

@section('content')

        
            <!-- <div id="content"> -->
  <a href="{{url('')}}" style="margin-top:35px;">
    <h1 style="color:#0065BF">
      
      <span class="btn-back">Về trang chủ</span> Đặt hàng thành công
      
    </h1>
  </a>
  <div class=" clearfix"> 
          <!-- start step3 -->
          <span class="fbtracker-checkout-complete"></span>
          <div class="checkout-complete col-12 ">
            <div class="box-complete" style="padding-top: 3px;">
              <h3>Mã đơn hàng của bạn: <strong>#{{$user['phone']}}</strong></h3>
              <label>Bạn vừa mua:</label>
              <div class="cart-items">
              <?php $total = 0;?>
                @foreach ($contents as $con)
                <div class="cart-item">
                                    
                                    
                  <img alt="HDT_03 Áo len thừng" style="vertical-align:middle" class="image_thumb" src="{{$con->options->img}}">
                  <b>{{$con->qty}} x</b>
                  <span> {{$con->name}}</span>                  
                </div> 
                <?php $total = $total + $con->subtotal;?>
                @endforeach          
                <div class="payment_methol">
                  <p>
                    <b>Giá trị đơn hàng:</b>
                    <span>{{number_format($total,0, ",", ".")}} vn₫</span>
                  </p>
                                    
                  
                  
                  <p>
                    <b>Phí vận chuyển:</b>
                    <span>{{number_format($user['ship'],0, ",", ".")}} vn₫</span>
                  </p>
                                    
                  <p>
                    <b>Tổng cộng:</b>
                    <?php $total = $total + $user['ship'];?>
                    <span class="totalpayment"> {{number_format($total,0, ",", ".")}} vn₫</span>
                  </p>
                  <p>
                    <b>Phương thức thanh toán:</b>
                    <span><?php 
                    if ($user['gateway']=='0') {
                      echo 'Thanh toán khi giao hàng (COD)';
                    }else{
                      echo "Thanh toán chuyển khoản ngân hàng";
                    }
                    ?></span>
                  </p>
                  <p>
                    
                  </p>
                </div>
              </div>
              
              <div><!-- Google Code for Successful checkout Page -->
</div>
              
              
              <p>Cảm ơn bạn đã sử dụng: <a class="linkshopname" href="{{url('')}}">"dochoitinhducshop.com."</a></p>
              
            </div>
          </div>
          <!-- /end step3 -->
          
        </div>  
        
        <!-- //container -->


@stop