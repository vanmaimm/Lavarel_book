<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    function index(){
        $books = DB::table('book')->get();
       return view("index",["books" => $books]);
    }
    function store(Request $request){
         $name = $request->input('name');
         $category = $request->input('category');
         $author = $request->input('author');
         $description = $request->input('description');
         $price = $request->input('price');
         DB::table('book')->insert(
             ['bookName' => $name, 'category'=>$category,'author'=>$author ,'description' => $description, 'price'=>$price]
         );
    }
   function create(){
        return view("create");
   }
   function destroy($bid){
    DB::table('book')->where('id', '=', $bid)->delete();
   }
}
