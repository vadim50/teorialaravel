<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    //

    public function show(){

    	$array = array(

    		'title'=>'Laravel Project-->',
    		'data'=>[

    			'one'=>'List 1',
    			'two'=>'List 2',
    			'three'=>'List 3',
    			'four'=>'List 4',
    			'five'=>'List 5'

    		],
    		'dataI'=>['List 1','List 2','List 3','List 4','List 5'],
    		//'bvar'=>true,
    		'script'=>"<script>alert('hello')</script>"

    	);

    	// $data = ['title'=>'Hello LAraII'];
    	// return view('default.template',$data);

    	//return view('default.template')->with('title','HEllo Laravel III!');
    	 if(view()->exists('default.index')){

    	 // he pabotaet 	View::name('default.template', 'myview');
	    	// return view()->of('myview')->withTitle('Hello All!');


    	// 	$path = config('view.paths');
    	// 	return view()->file($path[0].'/default/template.blade.php')->withTitle('Hello LaravelIII!');
    		//return view('default.template')->withTitle('Hello LaravelIII!');
    		// $view = view('default.template',['title'=>'Hello World!']);
    		// return ($view->render());
    		//dd(view('default.template',['title'=>'HEllo Laravel !!!'])->getName());
    		return view('default.index',$array);
    	}

    	abort(404);
    	

    	// $data = [

    	// 	'title'=>'HEllo World LAravel',
    	// 	'titleI'=>'HEllo World LaravelII',
    	// 	'titleII'=>'HEllo Laravel III'

    	// ];

    	// return view('default.template',$data);

    	// $view = view('default.template');

    	// $view->with('title','HEllo');
    	// $view->with('titleI','HEllo I');
    	// $view->with('titleII','HEllo II');

    	// return $view;

    }
}
