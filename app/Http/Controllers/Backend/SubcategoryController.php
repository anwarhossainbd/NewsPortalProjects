<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB ;

class SubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $subcategories =  DB::table('subcategories')
            ->join('categories', 'subcategories.category_id', '=', 'categories.id')
            ->select('subcategories.*', 'categories.category_en' )
            ->get();
        $catagories = DB::table('categories')->get() ;
        return view('Backend.Subcategory.index',[
            'subcategories'=>$subcategories ,
            'catagories'=>$catagories ,

        ]) ;
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'subcategory_bn' => 'required|max:255',
            'subcategory_en' => 'required|max:255',
            'category_id' => 'required',
        ]);

        $data=array() ;
        $data['subcategory_bn'] = $request->subcategory_bn ;
        $data['subcategory_en'] = $request->subcategory_en ;
        $data['category_id'] = $request->category_id ;



        DB::table('subcategories')->insert($data) ;

        $notification = array(
            'message' => 'Data Save successfully!',
            'alert-type' => 'success'
        );
        return redirect('/categories/Subcategory')->with($notification) ;
    }


    public function delete($id){

        DB::table('subcategories')->where('id',$id)->delete() ;

        $notification = array(
            'message' => 'Data Delete successfully!',
            'alert-type' => 'success'
        );
        return redirect('/categories/Subcategory')->with($notification) ;


    }


    public function edit($id){

        $data = DB::table('subcategories')->where('id',$id)->first() ;
        $catagories = DB::table('categories')->get() ;

        return view('Backend.Subcategory.edit',[
            'data'=>$data ,
            'catagories'=>$catagories ,
        ]) ;

    }


    public function update(Request $request,$id){

        $validatedData = $request->validate([
            'subcategory_bn' => 'required|max:255',
            'subcategory_en' => 'required|max:255',
            'category_id' => 'required',
        ]);



        $data=array() ;
        $data['subcategory_bn'] = $request->subcategory_bn ;
        $data['subcategory_en'] = $request->subcategory_en ;
        $data['category_id'] = $request->category_id ;


        DB::table('subcategories')->where('id',$id)->update($data) ;


        $notification = array(
            'message' => 'Data update successfully!',
            'alert-type' => 'success'
        );
        return redirect('/categories/Subcategory')->with($notification) ;
    }

}
