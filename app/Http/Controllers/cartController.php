<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail, Session;
use App\User;
use DB;
use Cart;
use App\Customer;
use App\ProductBuy;

class cartController extends Controller
{

    public function addToCart($id, $soluong)
    {
        $product = DB::table('products')->where('id', $id)->first();
        $image = $product->image_thumb;
        $s = str_replace(".", "", $product->price);
        Cart::add(array('id'=>$id, 'name'=>$product->name, 'qty'=>$soluong, 'price'=>$s, 'options'=>['img' => $image]));
        return redirect('cart');
    }

    public function cart()
    {
        $catalog = DB::table('cates')->get();
        return view('products.cart', ['catalog'=>$catalog]);
    }

    public function dataCart()
    {
        $content = Cart::content();
        return json_encode($content);
    }

    public function removeCart($id)
    {
        Cart::remove($id);
        return '1';
    }

    public function updateCart($sl, $rowid)
    {
        Cart::update($rowid, $sl);
        return '1';
    }

    public function destroyCart()
    {
        Cart::destroy();
    }

    public function checkout()
    {
        $catalog = DB::table('cates')->get();
        $contents = Cart::content();
        return view('products.checkout', ['contents'=>$contents, 'catalog'=>$catalog]);
    }

    public function createOrder(Request $data)
    {
        $catalog = DB::table('cates')->get();
        $contents = Cart::content();
        $customer = new Customer();

        $customer->fullname = $user['name'] = $data->name;
        $customer->phone = $user['phone'] = $data->phone;
        $customer->code = '#' . $customer->phone;
        $customer->email = $user['email'] = $data->email;
        $customer->address = $user['address'] = $data->address;
        $customer->noite = $user['note'] = $data->note;
        $customer->city = $user['tinh'] = $data->tinh;
        $user['gateway'] = $data->gateway;
        $customer->ship = $user['ship'] = $data->ship."000";
        
        $total = 0;
        foreach ($contents as $val) {
            $total = $total + $val->subtotal;
        }

        $customer->price = $total;
        $customer->active = md5(uniqid());
        $customer->viewed = 0;

        $productArr = array();

        foreach ($contents as $cart) {
            array_push($productArr, ['product' => $cart->id, 'qty' => $cart->qty]);
        }
        $customer->product = json_encode($productArr);
        if ($customer->save()) {
            $id = $customer->id;
            $data = array(
            'contents'=>$contents, 'user'=>$user, 'ids' => $id
            );
            
            Mail::send('emails.welcome', $data, function ($message) {
                $message->from('teamchich26@gmail.com', 'Đơn hàng mới');
                $message->to('teamchich26@gmail.com')->subject('Đơn hàng mới');
            });
            return view('products.done', ['contents'=>$contents, 'user'=>$user, 'catalog'=>$catalog]);
        }  
        
    }


    /*Confirm Cart*/
    public function getConfirmShoppingCart($id)
    {
        $customer = Customer::find($id);
        if ($customer) {
            $customer->active = 1;
            if ($customer->save()) {
                $message = ['level' => 'success', 'info' => 'Thông báo :', 'flash_message' => 'Đơn đặt hàng của bạn đã được lưu'];
                $shoppingCart = Cart::content();
                foreach ($shoppingCart as $cart) {
                    $productBuy = new ProductBuy();
                    $productBuy->product_id = $cart->id;
                    $productBuy->quantity = $cart->qty;
                    $productBuy->buy_day = date("Y-m-d");
                    $productBuy->save();
                }
                Cart::destroy();
                Session::set('code_customer', $customer->code);
            }
            $message = ['level' => 'danger', 'info' => 'Thông báo :', 'flash_message' => 'Có lỗi khi xác nhận đơn hàng, vui lòng check mail'];
        }else{
            $message = ['level' => 'danger', 'info' => 'Thông báo :', 'flash_message' => 'Có lỗi khi xác nhận đơn hàng, vui lòng check mail'];
        }
        echo "<script>
            alert('Xác nhận đơn hàng thành công, Cảm ơn bạn đã tin tưởng shop !!');
            window.location = '".url('/')."'
        </script>";
    }

    public function mail()
    {
        $data = array(
        'name' => "Learning Laravel",
        );

        Mail::send('emails.welcome', $data, function ($message) {

            $message->from('teamchich26@gmail.com', 'Learning Laravel');

            $message->to('teamchich26@gmail.com')->subject('Learning Laravel test email');

        });

        return "Your email has been sent successfully";
    }

    public function soHuu($id, $soluong, $color)
    {
        $product = DB::table('product')->where('id', $id)->first();
        Cart::add(array('id'=>$id, 'name'=>$product->name, 'qty'=>$soluong, 'price'=>$product->price, 'options'=>['img' => $product->link, 'color'=>$color]));
        return redirect('thanh-toan');
    }


    function detectMobile()
    {
        $useragent=$_SERVER['HTTP_USER_AGENT'];
        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
            return true;
        } else {
            return false;
        }
    }
}

