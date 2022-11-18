<?php
/*namespace App\Http\Controllers; use App\Http\Controllers\Controller; 
class TestController extends Controller { 
		public function show($param) { 
 
            return $param * $param;
// выводим параметр в браузер 
		}	 
}
*/

/*namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class TestController extends Controller 
{ 
		public function show() { 
				return '!!!'; 	
			// на экран выведется '!!!' 
} 
}
*/

/*namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class TestController extends Controller 
{ 
		public function show() { 
								return view('test'); 
							} 
}
*/
/*
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class TestController extends Controller 
{ 
public function show() 
{ 
return view('test.show', ['var1' => '1', 'var2' => '2']); 
} }


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
	public function show()
	{
		return view('test.show', ['arr' => [1, 2, 3]]);
	}
	public function pizza()
	{
		return view('pizza.menu', []);
	}
	public function news()
	{
		return view('pizza.news', []);
	}
}
*/
namespace App\Http\Controllers;
	
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
	public function form(Request $request)
	{
		if ($request->isMethod('get')) {
			return view('test.form'); // представление с формой
		}
		if ($request->isMethod('post')) {
			$text = $request->input('num1');
			$text2 = $request->input('num2');
			$sum=$text+$text2;
			return view('test.result', ['num1'=>$sum]); 

		}
	}
}
?>
