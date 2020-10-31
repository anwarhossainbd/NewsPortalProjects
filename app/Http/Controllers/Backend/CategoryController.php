<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB ;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $categories = DB::table('categories')->get();
        return view('Backend.category.index',[
            'categories'=>$categories ,
        ]) ;
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'category_en' => 'required|max:255',
            'category_bn' => 'required|max:255',
        ]);



        $data=array() ;
        $data['category_en'] =$request->category_en ;
        $data['category_bn'] =$request->category_bn ;

        DB::table('categories')->insert($data) ;


           $notification = array(
               'message' => 'Data Save successfully!',
               'alert-type' => 'success'
           );
           return redirect('/categories/category')->with($notification) ;
    }



    public function delete($id){

        DB::table('categories')->where('id',$id)->delete();

        $notification = array(
            'message' => 'Data delete successfully!',
            'alert-type' => 'success'
        );
        return redirect('/categories/category')->with($notification) ;


    }

    public function edit($id){

        $data = DB::table('categories')->where('id',$id)->first() ;

        return view('Backend.Category.edit',[
            'data'=>$data ,
        ]) ;

    }

    public function update(Request $request,$id){

        $validatedData = $request->validate([
            'category_en' => 'required|max:255',
            'category_bn' => 'required|max:255',
        ]);



        $data=array() ;
        $data['category_en'] =$request->category_en ;
        $data['category_bn'] =$request->category_bn ;

        DB::table('categories')->where('id',$id)->update($data) ;


        $notification = array(
            'message' => 'Data update successfully!',
            'alert-type' => 'success'
        );
        return redirect('/categories/category')->with($notification) ;
    }

}
