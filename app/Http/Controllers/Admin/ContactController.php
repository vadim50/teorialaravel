<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
 //    protected $request;

	// public function __construct(Request $request){
	// 	$this->request = $request;
	// }

    public function show(Request $request,$id=false){
    	//print_r($request->all());
    	//print_r($request->only('name','site'));
    	//print_r($request->except('name','site'));
    	//print_r($request->except('_token'));


    	// if($request->has('name')){
    	// 	echo '<h1 style="margin-top:100px">'.$request->input('name','default').'</h1>';
    	// }
    	//echo '<h1 style="margin-top:100px">'.$request->name.'</h1>';
    	//echo '<h1 style="margin-top:100px">'.$request->path().'</h1>';
    	//echo '<h1 style="margin-top:100px">'.$request->name.'</h1>';
    	// if($request->is('contact/*')){
    	// 	echo 'AAAAAAAAAAAAAAAAAAAAa';
    	// 	echo '<h1 style="margin-top:100px">'.$request->path().'</h1>';
    	// }
    	//echo '<h1 style="margin-top:100px">'.$request->url().'</h1>';
    	//echo '<h1 style="margin-top:100px">'.$request->fullUrl().'</h1>';

    	//echo '<h1 style="margin-top:100px">'.$request->method().'</h1>';
    	//echo '<h1 style="margin-top:100px">'.$request->root().'</h1>';
    	//echo '<h1 style="margin-top:100px">'.$request->query('option').'</h1>';
    	// print_r($request->header());
    	// print_r($request->server());
    	print_r($request->segments());
    	if($request->isMethod('post')){

    		//$request->flash();
    		//$request->flashExcept('name','site');
    		//return redirect()->route('contact');

    		//echo '<h1 style="margin-top:100px">'.$request->method().'</h1>';
    		//return redirect()->route('contact')->withInput();
    	}
    	return view('default.contact',['title'=>'Contacts']);
    }


}
