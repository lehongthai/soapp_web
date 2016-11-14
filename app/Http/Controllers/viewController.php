<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;

class viewController extends Controller
{
    function index() {
		$catalog = DB::table('cates')->get();
		$sql = 'SELECT * FROM products ORDER BY id DESC LIMIT 8';
		$newPro = DB::select($sql);
		$sql = 'SELECT * FROM products ORDER BY RAND() LIMIT 8';
		$bestPro = DB::select($sql);
		$prod = DB::table('products')->get();
		
	    return view('index', ['catalog'=>$catalog, 'newPro'=>$newPro, 'bestPro'=>$bestPro, 'prod'=>$prod]);
	}

	function showCatalog($slug) {
		$catalog = DB::table('cates')->get();
		$ca_id = 0;
		foreach ($catalog as $ca) {
			if($ca->alias === $slug)
			{
				$ca_id = $ca->id;
			}
		}
		$sql = 'SELECT id FROM cates WHERE parent_id = "'.$ca_id.'"';
        $children = DB::select($sql);
        $array = array();
        foreach ($children as $cate) {
            array_push($array, $cate->id);
        }
        $products = DB::table('products')->whereIn('cate_id', $array)->get();
		$sql = 'SELECT * FROM products ORDER BY RAND() LIMIT 5';
		$bestPro = DB::select($sql);
		$sql = 'SELECT * FROM products ORDER BY id DESC LIMIT 5';
		$newPro = DB::select($sql);
	    return view('products.cates', ['catalog'=>$catalog, 'product'=>$products, 'bestPro'=>$bestPro, 'newPro'=>$newPro]);
	}

	public function showSubCatalog($alias)
	{
		$catalog = DB::table('cates')->get();
		$ca_id = 0;
		foreach ($catalog as $ca) {
			if($ca->alias === $alias)
			{
				$ca_id = $ca->id;
			}
		}
		$products = DB::table('products')->where('cate_id', $ca_id)->get();
		$sql = 'SELECT * FROM products ORDER BY RAND() LIMIT 5';
		$bestPro = DB::select($sql);
		$sql = 'SELECT * FROM products ORDER BY id DESC LIMIT 5';
		$newPro = DB::select($sql);
		return view('products.cates', ['catalog'=>$catalog, 'product'=>$products, 'bestPro'=>$bestPro, 'newPro'=>$newPro]);
	}

	public function showProNew()
	{
		$sql="SELECT * FROM products ORDER BY id DESC LIMIT 20";
		$products = DB::select($sql);
		$catalog = DB::table('cates')->get();
		$sql = 'SELECT * FROM products ORDER BY RAND() LIMIT 5';
		$bestPro = DB::select($sql);
		$sql = 'SELECT * FROM products ORDER BY id DESC LIMIT 5';
		$newPro = DB::select($sql);
		return view('products.cates', ['catalog'=>$catalog, 'product'=>$products, 'bestPro'=>$bestPro, 'newPro'=>$newPro]);
	}

	public function search(Request $data)
	{
		$query = $data['query'];
		$sql="SELECT * FROM products WHERE  name LIKE '%" . $query . "%' OR content LIKE '%" . $query  ."%'";
		$products = DB::select($sql);
		$catalog = DB::table('cates')->get();
		$sql = 'SELECT * FROM products ORDER BY RAND() LIMIT 5';
		$bestPro = DB::select($sql);
		$sql = 'SELECT * FROM products ORDER BY id DESC LIMIT 5';
		$newPro = DB::select($sql);
		return view('products.cates', ['catalog'=>$catalog, 'product'=>$products, 'bestPro'=>$bestPro, 'newPro'=>$newPro]);
	}

	public function info()
	{
		$catalog = DB::table('cates')->get();
		$post = DB::table('posts')->where('id', 9)->first();
		$myTagsId = explode(",", $post->tags);
		$myTags = DB::table('tags')->whereIn('id', $myTagsId)->get();
		return view('info', ['catalog'=>$catalog, 'post'=>$post, 'myTags'=>$myTags]);
	}

	public function phongThe()
	{
		$catalog = DB::table('cates')->get();
		return view('phongThe', ['catalog'=>$catalog]);
	}

	public function gtsp()
	{
		$catalog = DB::table('cates')->get();
		$post = DB::table('posts')->where('id', 10)->first();
		$myTagsId = explode(",", $post->tags);
		$myTags = DB::table('tags')->whereIn('id', $myTagsId)->get();
		return view('gioiThieuSanPham', ['catalog'=>$catalog, 'post'=>$post, 'myTags'=>$myTags]);
	}

	public function post()
	{
		$catalog = DB::table('cates')->get();
		$posts = DB::table('posts')->where('cate_id', 1)->get();
		return view('posts.allPost', ['catalog'=>$catalog, 'posts'=>$posts]);
	}

	public function postItem($alias, $id)
	{
		$catalog = DB::table('cates')->get();
		$post = DB::table('posts')->where('id', $id)->first();
		$myTagsId = explode(",", $post->tags);
		$myTags = DB::table('tags')->whereIn('id', $myTagsId)->get();
		return view('posts.item', ['catalog'=>$catalog, 'post'=>$post, 'myTags'=>$myTags]);
	}

	public function showItemPro($slug, $id)
	{
		$catalog = DB::table('cates')->get();
		$product = DB::table('products')->where('id', $id)->first();
		return view('products.item', ['catalog'=>$catalog, 'product'=>$product]);
	}

}
