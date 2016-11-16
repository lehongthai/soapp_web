<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\About;
use App\Shop;
use DB;
class customerController extends Controller {

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


}
