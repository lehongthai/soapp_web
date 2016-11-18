<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\About;
use App\Shop;
use App\Customer;
use DB;
class customerController extends Controller {

	public function getList()
	{
		$listCustomer = Customer::orderBy('id', 'ASC')->get();
		return view('admin.customer.list', compact('listCustomer'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getDelete($id = 0)
	{
		$customer = Customer::find($id);
		if (isset($customer) && $customer != NULL) {
			if ($customer->delete()) {
				$message = ['level' => 'success', 'flash_message' => 'Xóa thành công khách hàng <b>'.$customer->lastname.'</b>'];
			}else{
				$message = ['level' => 'danger', 'flash_message' => 'Xóa không thành công khách hàng <b>'.$customer->lastname.'</b>'];
			}
		}else{
			$message = ['level' => 'danger', 'flash_message' => 'Không có thông tin'];
		}

		return redirect()->route('admin.customer.list')->with($message);
	}

	public function getView($id = 0)
	{
		$customer = Customer::find($id);
		if (isset($customer) && $customer != NULL) {
			$customer->viewed = 1;
			if ($customer->save()) {
				$message = ['level' => 'success', 'flash_message' => 'Kích hoạt thành công khách hàng <b>'.$customer->fullname.'</b>'];
			}else{
				$message = ['level' => 'danger', 'flash_message' => 'Kích hoạt không thành công khách hàng <b>'.$customer->fullname.'</b>'];
			}
		}else{
			$message = ['level' => 'danger', 'flash_message' => 'Không có thông tin'];
		}

		return redirect()->route('admin.customer.list')->with($message);
	}


	public function getListEmail()
	{
		$data = DB::table('customer_email')->get();
		return view('admin.customer.listEmail', compact('data'));
	}

	public function getDeleteEmail($id)
	{
		$check = DB::table('customer_email')->where('id', $id)->delete();	
		if($check){
			$notic = "Xóa thành công!";
		}else{

			echo "<script type = 'text/javascript'>
				alert('Sorry ! You can not delete this category');
				window.location= '";
			echo route('admin.customer.getEmail');

			echo "'
			</script>";
		}
		
		return redirect()->route('admin.customer.getEmail')->with($notic);
	}

	public function getActive($id = 0)
	{
		$customer = Customer::find($id);
		if (isset($customer) && $customer != NULL) {
			$customer->active = 0;
			if ($customer->save()) {
				$message = ['level' => 'success', 'flash_message' => 'Kích hoạt thành công khách hàng <b>'.$customer->lastname.'</b>'];
			}else{
				$message = ['level' => 'danger', 'flash_message' => 'Kích hoạt không thành công khách hàng <b>'.$customer->lastname.'</b>'];
			}
		}else{
			$message = ['level' => 'danger', 'flash_message' => 'Không có thông tin'];
		}

		return redirect()->route('admin.customer.list')->with($message);
	}
}
