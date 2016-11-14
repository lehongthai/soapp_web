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

    <div class="col-md-12" style="padding:5px 20px;">

      <span class="fbtracker-checkout"></span>
      <a href="{{url('')}}/cart"><h1><span class="btn-back">Quay về giỏ hàng</span>  Mỹ phẩm Karadium chính hãng</h1></a>


        <div class="col-4 step1">
          <h2>Thông tin giao hàng</h2>




          <div class="line"></div>
          <div class="form-info">

            <label class="color-blue">Vui lòng điền thông tin</label>


            <form accept-charset="UTF-8" name="myForm" onsubmit="return validateForm()" action="{{url('')}}/create-order" class="new_order" id="forminfo" method="post" novalidate="novalidate">    
              {{ csrf_field() }}    

              <div class="form-group">

              </div>

              <div class="form-group">
                <input placeholder="Họ và tên" class="formcontrol" id="billing_address_full_name" name="name" size="30" type="text">
                <p>Họ và tên</p>
              </div>



              <div class="form-group">
                <input placeholder="Số điện thoại" maxlength="11" id="billing_address_phone" class="formcontrol" name="phone" size="30" title="Nhập số điện thoại" pattern="^\d{8,11}" type="tel" value="" required="" aria-required="true">
                <p>Số điện thoại</p>
              </div>


              <div class="form-group">
                <input placeholder="Email" id="order_email" name="email" class="formcontrol" size="30" type="email" value="">
                <p>Email</p>
              </div>


              <div class="form-group">
                <input placeholder="Địa chỉ" id="billing_address_address1" class="formcontrol" name="address" size="30" type="text" value="">
                <p>Địa chỉ</p>
              </div>

              <input name="is_show_shipping_address" type="hidden" value="true">
              <input type="checkbox" style="display:none" name="billing_address[billing_is_shipping]" value="true" checked="checked" id="shipping-toggle" tabindex="12">

              <div class="form-group ctrl-city">
                <div class="custom-dropdown">
                  <select id="billing_address_province" onchange="selectTinh(this.value)" name="tinh" class="formcontrol" required="" aria-required="true">
                    <option value="null" selected="">Vui lòng chọn tỉnh/thành phố.</option>

                    <option value="Tp.Hà Nội">Tp.Hà Nội</option>
                    <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                    <option value="Tp.Cần Thơ">Tp.Cần Thơ</option>
                    <option value="Tp.Đà Nẵng">Tp.Đà Nẵng</option>
                    <option value="Tp.Hải Phòng">Tp.Hải Phòng</option>
                    <option value="An Giang">An Giang</option>
                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                    <option value="Bắc Giang">Bắc Giang</option>
                    <option value="Bắc Kạn">Bắc Kạn</option>
                    <option value="Bạc Liêu">Bạc Liêu</option>
                    <option value="Bắc Ninh">Bắc Ninh</option>
                    <option value="Bến Tre">Bến Tre</option>
                    <option value="Bình Định">Bình Định</option>
                    <option value="Bình Dương">Bình Dương</option>
                    <option value="Bình Phước">Bình Phước</option>
                    <option value="Bình Thuận">Bình Thuận</option>
                    <option value="Bình Thuận">Bình Thuận</option>
                    <option value="Cà Mau">Cà Mau</option>
                    <option value="Cao Bằng">Cao Bằng</option>
                    <option value="Đắk Lắk">Đắk Lắk</option>
                    <option value="Đắk Nông">Đắk Nông</option>
                    <option value="Điện Biên">Điện Biên</option>
                    <option value="Đồng Nai">Đồng Nai</option>
                    <option value="Đồng Tháp">Đồng Tháp</option>
                    <option value="Gia Lai">Gia Lai</option>
                    <option value="Hà Giang">Hà Giang</option>
                    <option value="Hà Nam">Hà Nam</option>
                    <option value="Hà Tĩnh">Hà Tĩnh</option>
                    <option value="Hải Dương">Hải Dương</option>
                    <option value="Hậu Giang">Hậu Giang</option>
                    <option value="Hòa Bình">Hòa Bình</option>
                    <option value="Hưng Yên">Hưng Yên</option>
                    <option value="Khánh Hòa">Khánh Hòa</option>
                    <option value="Kiên Giang">Kiên Giang</option>
                    <option value="Kon Tum">Kon Tum</option>
                    <option value="Lai Châu">Lai Châu</option>
                    <option value="Lâm Đồng">Lâm Đồng</option>
                    <option value="Lạng Sơn">Lạng Sơn</option>
                    <option value="Lào Cai">Lào Cai</option>
                    <option value="Long An">Long An</option>
                    <option value="Nam Định">Nam Định</option>
                    <option value="Nghệ An">Nghệ An</option>
                    <option value="Ninh Bình">Ninh Bình</option>
                    <option value="Ninh Thuận">Ninh Thuận</option>
                    <option value="Phú Thọ">Phú Thọ</option>
                    <option value="Phú Yên">Phú Yên</option>
                    <option value="Quảng Bình">Quảng Bình</option>
                    <option value="Quảng Ngãi">Quảng Ngãi</option>
                    <option value="Quảng Ninh">Quảng Ninh</option>
                    <option value="Quảng Trị">Quảng Trị</option>
                    <option value="Sóc Trăng">Sóc Trăng</option>
                    <option value="Sơn La">Sơn La</option>
                    <option value="Tây Ninh">Tây Ninh</option>
                    <option value="Thái Bình">Thái Bình</option>
                    <option value="Thái Nguyên">Thái Nguyên</option>
                    <option value="Thanh Hóa">Thanh Hóa</option>
                    <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                    <option value="Tiền Giang">Tiền Giang</option>
                    <option value="Trà Vinh">Trà Vinh</option>
                    <option value="Tuyên Quang">Tuyên Quang</option>
                    <option value="Vĩnh Long">Vĩnh Long</option>
                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                    <option value="Yên Bái">Yên Bái</option>
                  </select>
                </div>
              </div>

              <div class="form-group ctrl-district hidden" id="shipping_district_container">
                <div class="custom-dropdown">
                  <select id="shipping_district" name="shipping_district" class="formcontrol"></select>
                </div>
              </div>

              <div class="form-group">                   
                <textarea id="billing_note" placeholder="Ghi chú đơn hàng" name="note" rows="3" class="formcontrol ordernote"></textarea>
                <p>Ghi chú đơn hàng</p>
              </div>
              <div class="error summary">
                (<span class="color-red ">*</span>)Vui lòng nhập đủ thông tin</div> 
              </div>
              <div class="listerror">

              </div>
            </div>
            <div accept-charset="UTF-8" id="purchase-form" method="post">   
              <input type="hidden" name="ship">  


              <div class="col-4">
                <!-- Vận chuyển & Thanh Toán -->
                <div class="ctrl-shipping">
                  <h3 class="h-shipping ">Vận chuyển</h3>
                  <div class="form-group ">
                    <div class="custom-dropdown"><select class="drop_shipping" name="shipping_rate"></select></div>
                  </div>
                </div>

                <h3>Thanh toán</h3>
                <div class="shiping-ajax">


                  <label class="lb-method">
                    <input class="input-method" type="radio" checked="checked" name="gateway" value="0">
                    <span class="label-radio"> Thanh toán khi giao hàng (COD)</span>
                  </label>
                  <span class="desc" style="display: block;"></span>



                  <label class="lb-method">
                    <input class="input-method" type="radio" name="gateway" value="1">
                    <span class="label-radio"> Chuyển khoản qua ngân hàng</span>
                  </label>
                  <span class="desc"></span>


                </div>


              </div>
              <div class="box-btn-checkout-first">
                <button type="submit" class="btn-checkout btn-checkout-first">Đặt hàng</button></div>
                <div class="col-4">
                  <div class="box-cart">
                    <h2>Đơn hàng</h2>
                    (<span>2</span> sản phẩm)
                    <div class="cart-items">
                      <?php $total = 0;?>
                      @foreach ($contents as $content)
                      <div class="list_item cart-item">
                        <span>{{$content->qty}} x</span>                        
                        <span> {{$content->name}}</span>
                        <span class="price">{{number_format($content->subtotal, 0, ",", "." )}} vn₫</span>
                        <p class="variant-title">#1 {{$content->options->color}}</p>
                      </div> 
                      <?php $total = $total + $content->subtotal;?>
                      @endforeach

                    </div>                
                    <div class="total-price">
                    Tạm tính   <label> {{number_format($total, 0, ",", ".")}} vn₫</label>
                    </div>
                    <div class="shiping-price">
                      Phí vận chuyển   <label><div id="ship" style="float:left"></div><div style="float:left"> vnđ</div></label>
                    </div>                
                    <div class="coupon"><a class="remove-coupon">Xóa</a> <span></span> <label></label></div>
                    <div class="use-coupon">
                      <div class="form-group">
                        <input type="hidden" id="discount-apply" name="discount-apply">
                        <input name="discount.code" class="couponcode" placeholder="Nhập mã giảm giá">
                        <a class="btn-submit-coupon">Sử dụng</a>
                        <a class="continue-coupon ">Tiếp tục sử dụng</a>
                        <a class="cancel-coupon">Hủy</a>
                      </div>
                    </div>               
                    <div class="total-checkout">
                      Tổng cộng <span id="total"> {{number_format($total, 0, ",", ".")}} vn₫</span>
                    </div>
                  </div>
                  <button type="submit" class="btn-checkout">Đặt hàng</button>

                </div>
              </div>
            </form>



          </div>

          <div id="Loading" style="display: none; top: 106px;">
            <div id="Loading_1" class="Loading"></div>
            <div id="Loading_2" class="Loading"></div>
            <div id="Loading_3" class="Loading"></div>
            <div id="Loading_4" class="Loading"></div>
            <div id="Loading_5" class="Loading"></div>
            <div id="Loading_6" class="Loading"></div>
            <div id="Loading_7" class="Loading"></div>
            <div id="Loading_8" class="Loading"></div>
          </div> 

        </div>     
        
        <!-- //container -->
        <script type="text/javascript">
          function validateForm() {
            var x = document.forms["myForm"]["phone"].value;
            if (x == null || x == "") {
              alert("Vui lòng nhập thông tin!");
              return false;
            }

            var y = document.forms["myForm"]["tinh"].value;
            if (y == "null" || y == "") {
              alert("Vui lòng nhập thông tin!");
              return false;
            }
          }
        </script>
        <script type="text/javascript">
          function selectTinh(tinh) {
            var total = {{$total}};
            if(tinh=="TP Hồ Chí Minh")
            {
              document.getElementById('ship').innerHTML = "15.000";
              total = total + 15000;
              document.getElementsByName("ship")[0].value = "15.000";
            }else{
              document.getElementById('ship').innerHTML = "25.000";
              total = total + 25000;
              document.getElementsByName("ship")[0].value = "25";
            }
            total = total.toLocaleString('de-DE', {minimumFractionDigits: 0});
            document.getElementById('total').innerHTML = total+" vn₫";
          }
        </script>
        @stop