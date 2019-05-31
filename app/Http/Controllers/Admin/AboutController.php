<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    //
    public function show(){
    	//return 'HEllo';
    	if(view()->exists('default.about')){

            //$articles = DB::select('SELECT * FROM `articles` WHERE id=:id',['id'=>1]);
            //DB::insert('INSERT INTO `articles` (`name`,`text`,`img`) VALUES(?,?,?)',['test1','text','img.jpg']);
            //$result = DB::update('UPDATE `articles` SET `name` = ? WHERE id=?',['TEST IIIV',4]);
            //$result = DB::delete('DELETE FROM `articles` WHERE id=:id',['id'=>5]);
            // DB::insert('INSERT INTO `articles` (`name`,`text`,`img`) VALUES(:name,:text,:img)',

            //     [

            //         'name'=>'TEST XII',
            //         'text'=>'<-TEXT->',
            //         'img'=>'pictire_tree.jpg'
            //     ]
            // );
            //$result = DB::connection()->getPdo()->lastInsertId();
            //DB::statement('DROP table `articles`');
             $articles = DB::select('select * from articles');
            //$article = DB::select('SELECT * FROM `articles` WHERE id=?',[1]);
            //dump($result);
             // foreach($articles as $article){
             //     dump($article->name);
             // }
           return view('default.about',['articles'=>$articles,'title'=>'About']);

    		//return $view = view('default.about',['article'=>$article,'title'=>'About']);

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
    		//return response()->myRes('hello world!');

    	}
    	abort(404);
    	
    }
}
