<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
    public function show(){
    	//return 'HEllo';
    	if(view()->exists('default.about')){

    		$view = view('default.about')->withTitle('About About')->render();

    		// return (new Response($view,200))

    		// 	->header('Content-Type','newTypeI')
    		// 	->header('Content-Type','newTypeII')
    		// 	;
    		//return response($view,200)->header('Content-Type','newTypeIII');

    		//return view('default.about')->withTitle('About About');
    		//return response()->json(['name'=>'HEllo','nameI'=>'hello']);
    		//return response()->view('default.about',['title'=>'About']);
    		//return response()->download('robots.txt','mytext.txt');
    		// return response($view)->withHeaders([

    		// 	'headerI'=>'hello',
    		// 	'headerII'=>'hello11',
    		// ]);

    		//return redirect('/');
    		//return new RedirectResponse('/');
    		//return RedirectResponse::create('/');
    		// return redirect('/')->withInput();
    		// return redirect()->route('home');
    		//return redirect()->action('Admin\ContactController@show');
    		//return redirect('/')->with('param1','Hello');
    		return response()->myRes('hello world!');

    	}
    	abort(404);
    	
    }
}
