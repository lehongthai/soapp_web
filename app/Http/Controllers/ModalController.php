<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth, DB;
use Illuminate\Http\Request;
use App\Modal;
class ModalController extends Controller {

	public function getList()
	{
		$data = Modal::get()->toArray();
		return view('admin.modal.list', compact('data'));
	}

	public function getAdd()
	{
		return view('admin.modal.add');
	}

	public function postAdd(Request $request)
	{

		$modal = new Modal;
		$modal->title = $request->txtTitle;

		if (isset($request->properties) && $request->properties != NULL) {
			$modal->active = implode(',', $request->properties);
		}

		$modal->intro = $request->txtIntro;
		$modal->content = $request->txtContent;

		if($modal->save()){
			return redirect()->route('admin.modal.list');
		}
	}

	
	public function getEdit($id=0)
	{
		$modal = Modal::find($id);
		if (isset($modal) && $modal != null && isset($modal)) {
			$data = $modal->toArray();
			return view('admin.modal.edit', compact('data'));
		}
		$notic = ['level' => 'danger', 'flash_message' => 'Không có thông tin'];
		return redirect()->route('admin.modal.list')->with($notic);
	}
	public function postEdit(Request $request)
	{

		$id = $request->id;
		
		$modal = Modal::find($id);
		if ($modal) {
			$modal->title = $request->txtTitle;
			if (isset($request->properties) && $request->properties != NULL) {
				$modal->active = implode(',', $request->properties);
			}
			$modal->intro = $request->txtIntro;
			$modal->content = $request->txtContent;
	
			if($modal->save()){
				$message = ['level' => 'success', 'flash_message' => 'Cập nhật thành công  '];
			}else{
				$message = ['level' => 'danger', 'flash_message' => 'Cập nhật thất bại  '];
			}
		}else{
			$message = ['level' => 'warning', 'flash_message' => 'Không có thông tin'];
		}
		
		return redirect()->route('admin.modal.list')->with($message);
	}

	public function getDelete($id=0)
	{
		$modal = Modal::find($id);
		if (isset($modal) && $modal && $modal != null) {
			if ($modal->delete()) {
				$message = ['level' => 'success', 'flash_message' => 'Xóa Thành Công <b>'. $modal->toArray()['title'].'</b>'];
			}else{
				$message = ['level' => 'danger', 'flash_message' => 'Xóa Không Thành Công <b>'. $modal->toArray()['title'] .'</b>'];
			}
		}else{
			$message = ['level' => 'danger', 'flash_message' => 'Không có thông tin'];
		}
		return redirect()->route('admin.modal.list')->with($message);
	}

	/*Edit Nhanh*/
	public function postAction(Request $request)
	{
		if ($request->action == 'edit') 
		{
			$modal = Modal::find($request->id);
			if ($modal) {
				$modal->active = $request->active;
				if($modal->save()){
					$response = array(
					  'code' => 'success'
					);
				}else{
					$response = array(
					  'code' => 'fail'
					);
				}
			}
		}
		echo json_encode($response);
	}

}
