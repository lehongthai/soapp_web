<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
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
				$message = ['level' => 'success', 'flash_message' => 'Xóa thành công khách hàng <b>'.$customer->fullname.'</b>'];
			}else{
				$message = ['level' => 'danger', 'flash_message' => 'Xóa không thành công khách hàng <b>'.$customer->fullname.'</b>'];
			}
		}else{
			$message = ['level' => 'danger', 'flash_message' => 'Không có thông tin'];
		}

		return redirect()->route('admin.customer.list')->with($message);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function getActive($id = 0)
	{
		$customer = Customer::find($id);
		if (isset($customer) && $customer != NULL) {
			$customer->active = 0;
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

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
