<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Image;
class ImageController extends Controller {

	public function getBannerAbove()
	{
		$data = Image::select('id', 'image_thumb', 'name')->where('name', 'bannerAbove')->first();
		return view('admin.images.list', compact('data'));
	}
	public function getBannerBelow()
	{
		$data = Image::select('id', 'image_thumb', 'name', 'text')->where('name', 'bannerBelow')->first();
		return view('admin.images.list', compact('data'));
	}
	public function getIcon()
	{
		$data = Image::select('id', 'image_thumb', 'name')->where('name', 'icon')->first();
		return view('admin.images.list', compact('data'));
	}
	public function getLogo()
	{
		$data = Image::select('id', 'image_thumb', 'name')->where('name', 'logo')->first();
		return view('admin.images.list', compact('data'));
	}

	

	public function getEdit($id=0)
	{
		$images = Image::find($id);
		if (isset($images) && $images != null && isset($id)) {
			$data = $images->toArray();
			return view('admin.images.edit', compact('data'));
		}

		$notic = ['level' => 'danger', 'flash_message' => 'Không có thông tin'];
		return redirect()->route('admin.image.getBannerBelow')->with($notic);
	}
	public function postEdit(Request $request)
	{

		$id = $request->id;
		$images = Image::find($id);

		if ($images) {
			$image_arr = explode('/', $request->images);
			$count = count($image_arr);	
			if (isset($request->txtText) && $request->txtText != NULL) {
				$images->text = $request->txtText;
			}

			$images->alt = $request->txtAltImage;
			$images->image_link = $request->images;
			$images->image_thumb = url('/').'/public/upload/_thumbs/Files/'.$image_arr[$count-1];
			if($images->save()){
				$message = ['level' => 'success', 'flash_message' => 'Cập nhật thành công'];
			}else{
				$message = ['level' => 'danger', 'flash_message' => 'Cập nhật thất bại'];
			}
		}else{
			$message = ['level' => 'warning', 'flash_message' => 'Không có thông tin'];
		}
		if ($images->name == 'bannerBelow') {
			return redirect()->route('admin.image.getBannerBelow')->with($message);
		}elseif ($images->name == 'bannerAbove') {
			return redirect()->route('admin.image.getBannerAbove')->with($message);
		}elseif ($images->name == 'icon') {
			return redirect()->route('admin.image.getIcon')->with($message);
		}elseif ($images->name == 'logo') {
			return redirect()->route('admin.image.getLogo')->with($message);
		}
		
	}

}
