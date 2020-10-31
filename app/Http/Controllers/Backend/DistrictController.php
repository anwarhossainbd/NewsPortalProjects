<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB ;

class DistrictController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


   public function index(){

       $district = DB::table('districts')->get();
       return view('Backend.District.district',[
           'district'=>$district ,
       ]) ;
   }



    public function store(Request $request){

        $validatedData = $request->validate([
            'district_bn' => 'required|max:255',
            'district_en' => 'required|max:255',
        ]);



        $data=array() ;
        $data['district_bn'] =$request->district_bn ;
        $data['district_en'] =$request->district_en ;

        DB::table('districts')->insert($data) ;


        $notification = array(
            'message' => 'Data Save successfully!',
            'alert-type' => 'success'
        );
        return redirect('/districts/district')->with($notification) ;
    }



    public function delete($id){

        DB::table('districts')->where('id',$id)->delete();

        $notification = array(
            'message' => 'Data delete successfully!',
            'alert-type' => 'success'
        );
        return redirect('/districts/district')->with($notification) ;


    }


    public function edit($id){

        $data = DB::table('districts')->where('id',$id)->first() ;

        return view('Backend.District.edit',[
            'data'=>$data ,
        ]) ;

    }

    public function update(Request $request,$id){

        $validatedData = $request->validate([
            'district_bn' => 'required|max:255',
            'district_en' => 'required|max:255',
        ]);



        $data=array() ;
        $data['district_bn'] =$request->district_bn ;
        $data['district_en'] =$request->district_en ;

        DB::table('districts')->where('id',$id)->update($data) ;


        $notification = array(
            'message' => 'Data update successfully!',
            'alert-type' => 'success'
        );
        return redirect('/districts/district')->with($notification) ;
    }



}
