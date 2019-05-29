<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as'=>'home','uses'=>'Admin\IndexController@show']);
// Route::get('/article/{id}',['as'=>'article',function($id){
// 	echo $id;
// }]);


//Route::get('/page/{cat}/{id}',function($cat = null, $id = null){
	//return view('page');
	//echo 'HEllo';
	//echo '<pre>';
	// print_r(env('DB_CONNECTION'));
	// print_r(env('APP_URL'));
	// print_r(env('REDIS_PORT'));
	// Config::set('app.locale','ru');
	// echo config('app.locale').'<br>';
	// echo Config::get('app.timezone');
	// echo env('APP_ENV');
	// echo '</pre>';
	// $data = ['id'=>$id,'cat'=>$cat];
	
	// return view('form',$data);
 // });
	//->where(['id'=>'[0-9]+','cat'=>'[A-z]+']);

// Route::post('/comments',function(){
// 	print_r($_POST);
// })->name('comments');

// Route::match(['get','post'],'/comments',function(){
// 	print_r($_POST);
// })->name('comments');

// Route::any('/comments',function(){
// 	print_r($_POST['name']);
// })->name('comments');

// Route::match(['post','put'],'/comments',function(){
// 	print_r($_POST['name']);
// })->name('comments');

// Route::group(['prefix'=>'admin/'],function(){
// 	Route::get('page/create/{id?}',function(){
// 		echo 'page/create<hr>';
// 		$route = Route::current();
// 		echo $route->getName();
// 		//echo $route->getParameterName('id',25);

// 		//return redirect()->route('article',['id'=>25]);
// 	})->name('createpage');
// 	Route::get('page/edit',function(){
// 		echo 'page/edit';
// 	});
// });

//================ CONTROLLERS ===============

Route::get('/about/',['uses'=>'Admin\AboutController@show','as'=>'about']);
//Route::get('/pages',['uses'=>'FirstController@getPages','as'=>'pages']);
Route::get('/articles',['uses'=>'Admin\Core@getArticles','as'=>'articles']);
Route::get('article/{id}',['uses'=>'Admin\Core@getArticle','as'=>'article'])
		->middleware(['mymiddleware:home'])
		;
Route::match(['get','post'],'/contact/{name?}',['uses'=>'Admin\ContactController@show','as'=>'contact']);

// Route::get('/pages/add','Admin\CoreResource@add');
// Route::resource('/pages','Admin\CoreResource')->except(['index','show']);

// Route::get('/pages','PagesController@getIndex');
// Route::get('/pages/create','PagesController@getCreate');