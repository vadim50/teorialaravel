<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class FirstController extends Controller
{
	public function show(){
		echo __METHOD__;
		echo '<hr>';
		//echo $id;
	}
	public function getPages(){
		echo __METHOD__;
		return view('page');
	}
}

 ?>