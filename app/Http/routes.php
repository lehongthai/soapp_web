	<?php

	Route::get('/', 'viewController@index');

	Route::get('/product', 'cartController@showAll');

	Route::get('/phan-loai/{slug}', 'viewController@showCatalog');

	Route::get('/loai/{alias}', 'viewController@showSubCatalog');

	Route::get('/sam-pham-do-choi-tinh-duc-moi', 'viewController@showProNew');

	Route::get('/san-pham/{slug}id{id}', 'viewController@showItemPro');

	Route::get('/gioi-thieu', 'viewController@info');

	Route::get('/bi-kip-phong-the', 'viewController@phongThe');

	Route::get('/gioi-thieu-san-pham', 'viewController@gtsp');

	Route::get('/bai-viet', 'viewController@post');

	Route::get('/tag={tag}', 'viewController@tag');

	Route::get('/get-mail={mail}', 'viewController@getMail');

	Route::get('/bai-viet/{alias}id{id}', 'viewController@postItem');

	Route::post('/search', 'viewController@search');

	Route::get('/php', function (){
			phpinfo();
	});
	Route::get('/admin', function (){
			return redirect('admin/post/add');
	});


	//cart

	Route::get('add-to-cartid{id}&soluong={soluong}',[
		'as' => 'addToCart',
		'uses' => 'cartController@addToCart'
	]);

	Route::get('cart', [
		'as' => 'Cart',
		'uses' => 'cartController@cart'
	]);

	Route::get('data-cart', [
		'as'  => 'dataCart',
		'uses'=> 'cartController@dataCart'
	]);

	Route::get('destroy-cart', [
		'as'  => 'dataCart',
		'uses'=> 'cartController@destroyCart'
	]);

	Route::get('removeCartid{id}', 'cartController@removeCart');

	Route::get('updateCart&soluong={sl}&rowid={rowid}', 'cartController@updateCart');

	Route::get('thanh-toan', 'cartController@checkout');

	Route::get('so-huuid{id}&soluong={soluong}&color={color}', 'cartController@soHuu');

	Route::post('create-order', 'cartController@createOrder');
	Route::get('xac-nhan/{id?}',['as' => 'getConfirmShoppingCart', 'uses' => 'cartController@getConfirmShoppingCart']);

	Route::get('mail', 'cartController@mail');

	Route::get('home', function(){
		return view('admin.manager');
	});

	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);
	/*get list post*/
	Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
		Route::group(['prefix' => 'post'], function () {
			Route::get('list', ['as' => 'admin.post.list', 'uses' => 'PostController@getList']);
			Route::get('add', ['as' => 'admin.post.getAdd', 'uses' => 'PostController@getAdd']);
			Route::post('add', ['as' => 'admin.post.postAdd', 'uses' => 'PostController@postAdd']);
			Route::get('delete/{id?}', ['as' => 'admin.post.getDelete', 'uses' => 'PostController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.post.getEdit', 'uses' => 'PostController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.post.postEdit', 'uses' => 'PostController@postEdit']);
		});

		Route::group(['prefix' => 'product'], function () {
			Route::get('list', ['as' => 'admin.product.list', 'uses' => 'ProductController@getList']);
			Route::get('add', ['as' => 'admin.product.getAdd', 'uses' => 'ProductController@getAdd']);
			Route::post('add', ['as' => 'admin.product.postAdd', 'uses' => 'ProductController@postAdd']);
			Route::get('delete/{id?}', ['as' => 'admin.product.getDelete', 'uses' => 'ProductController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.product.getEdit', 'uses' => 'ProductController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.product.postEdit', 'uses' => 'ProductController@postEdit']);
			Route::get('delimg/{id?}', ['as' => 'admin.product.delImg', 'uses' => 'ProductController@getDelImg']);
		});
		Route::group(['prefix' => 'cate'], function () {
			Route::get('list', ['as' => 'admin.cate.list', 'uses' => 'CateController@getList']);
			Route::get('add', ['as' => 'admin.cate.getAdd', 'uses' => 'CateController@getAdd']);
			Route::post('add', ['as' => 'admin.cate.postAdd', 'uses' => 'CateController@postAdd']);
			Route::get('delete/{id?}', ['as' => 'admin.cate.getDelete', 'uses' => 'CateController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.cate.getEdit', 'uses' => 'CateController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.cate.postEdit', 'uses' => 'CateController@postEdit']);
		});

		Route::group(['prefix' => 'about'], function () {
			Route::get('list', ['as' => 'admin.about.getList', 'uses' => 'AboutController@getList']);
			Route::get('add', ['as' => 'admin.about.getAdd', 'uses' => 'AboutController@getAdd']);
			Route::post('add', ['as' => 'admin.about.postAdd', 'uses' => 'AboutController@postAdd']);
			Route::get('delete/{id?}', ['as' => 'admin.about.getDelete', 'uses' => 'AboutController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.about.getEdit', 'uses' => 'AboutController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.about.postEdit', 'uses' => 'AboutController@postEdit']);
			Route::get('listshop', ['as' => 'admin.about.getListShop', 'uses' => 'AboutController@getListShop']);
			Route::get('editshop/{id?}', ['as' => 'admin.about.getEditShop', 'uses' => 'AboutController@getEditShop']);
			Route::post('editshop/{id?}', ['as' => 'admin.about.postEditShop', 'uses' => 'AboutController@postEditShop']);
		});

		Route::group(['prefix' => 'tags'], function () {
			Route::get('list', ['as' => 'admin.tags.list', 'uses' => 'TagsController@getList']);
			Route::post('add', ['as' => 'admin.tags.getAdd', 'uses' => 'TagsController@getAdd']);
			Route::post('action', ['as' => 'admin.tags.action', 'uses' => 'TagsController@postAction']);
			Route::get('delete/{id?}', ['as' => 'admin.tags.getDelete', 'uses' => 'TagsController@getDelete']);
		});

		Route::group(['prefix' => 'manufacturer'], function () {
			Route::get('list', ['as' => 'admin.manufacturer.list', 'uses' => 'ManufacturerController@getList']);
			Route::post('add', ['as' => 'admin.manufacturer.getAdd', 'uses' => 'ManufacturerController@getAdd']);
			Route::post('action', ['as' => 'admin.manufacturer.action', 'uses' => 'ManufacturerController@postAction']);
			Route::get('delete/{id?}', ['as' => 'admin.manufacturer.getDelete', 'uses' => 'ManufacturerController@getDelete']);
		});

		Route::group(['prefix' => 'catepost'], function () {
			Route::get('list', ['as' => 'admin.catepost.list', 'uses' => 'CatePostController@getList']);
			Route::get('add', ['as' => 'admin.catepost.getAdd', 'uses' => 'CatePostController@getAdd']);
			Route::post('add', ['as' => 'admin.catepost.postAdd', 'uses' => 'CatePostController@postAdd']);
			Route::get('delete/{id?}', ['as' => 'admin.catepost.getDelete', 'uses' => 'CatePostController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.catepost.getEdit', 'uses' => 'CatePostController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.catepost.postEdit', 'uses' => 'CatePostController@postEdit']);
		});

		/*banner, icon, logo*/
		Route::group(['prefix' => 'image'], function () {
			Route::get('above', ['as' => 'admin.image.getBannerAbove', 'uses' => 'ImageController@getBannerAbove']);
			Route::get('below', ['as' => 'admin.image.getBannerBelow', 'uses' => 'ImageController@getBannerBelow']);
			Route::get('icon', ['as' => 'admin.image.getIcon', 'uses' => 'ImageController@getIcon']);
			Route::get('logo', ['as' => 'admin.image.getLogo', 'uses' => 'ImageController@getLogo']);
			Route::get('phone', ['as' => 'admin.image.getPhone', 'uses' => 'ImageController@getPhone']);
			Route::get('bannertop', ['as' => 'admin.image.getBannerTop', 'uses' => 'ImageController@getBannerTop']);
			Route::get('edit/{id?}', ['as' => 'admin.image.getEdit', 'uses' => 'ImageController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.image.postEdit', 'uses' => 'ImageController@postEdit']);
		});

		Route::group(['prefix' => 'customer'], function () {
			Route::get('list', ['as' => 'admin.customer.list', 'uses' => 'customerController@getList']);
			Route::get('delete/{id?}', ['as' => 'admin.customer.getDelete', 'uses' => 'customerController@getDelete']);
			Route::get('active/{id?}', ['as' => 'admin.customer.getActive', 'uses' => 'customerController@getActive']);
			Route::get('view/{id?}', ['as' => 'admin.customer.getView', 'uses' => 'customerController@getView']);
			Route::get('getEmail', ['as' => 'admin.customer.getEmail', 'uses' => 'customerController@getListEmail']);
			Route::get('deleteEmail/{id?}', ['as' => 'admin.customer.getDeleteEmail', 'uses' => 'customerController@getDeleteEmail']);
		});
	});
});
Route::post('auth/login', ['as' => 'admin.postLogin', 'uses' => 'Auth\AuthController@postLogin']);
Route::post('users/register', ['as' => 'admin.register', 'uses' => 'UserController@postAdd']);
Route::get('active-user/{id?}',['as' => 'getConfirmUser', 'uses' => 'UserController@getConfirmUser']);

Route::auth();

Route::get('/home', 'HomeController@index');
