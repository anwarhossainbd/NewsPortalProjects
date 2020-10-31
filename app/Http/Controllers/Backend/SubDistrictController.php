<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB ;

class SubDistrictController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public  function index(){


       $district = DB::table('subdistricts')
           ->join('districts', 'subdistricts.district_id', '=', 'districts.id')
           ->select('subdistricts.*', 'districts.district_en' )
           ->get() ;

       $dis = DB::table('districts')->get() ;
       return view('Backend.District.subdistricts',[
           'district'=>$district ,
           'dis' =>$dis
       ]) ;
   }




    public function store(Request $request){

        $validatedData = $request->validate([
            'subdistrict_bn' => 'required|max:255',
            'subdistrict_en' => 'required|max:255',
            'district_id' => 'required',
        ]);

        $data=array() ;
        $data['subdistrict_bn'] = $request->subdistrict_bn ;
        $data['subdistrict_en'] = $request->subdistrict_en ;
        $data['district_id'] = $request->district_id ;


        DB::table('subdistricts')->insert($data) ;

        $notification = array(
            'message' => 'Data Save successfully!',
            'alert-type' => 'success'
        );
        return redirect('/districts/Subdistrict')->with($notification) ;
    }


    public function delete($id){

        DB::table('subdistricts')->where('id',$id)->delete() ;

        $notification = array(
            'message' => 'Data delete successfully!',
            'alert-type' => 'success'
        );
        return redirect('/districts/Subdistrict')->with($notification) ;


    }


    public function edit($id){

        $data = DB::table('subdistricts')->where('id',$id)->first() ;
        $districts = DB::table('districts')->get() ;

        return view('Backend.District.editdistrict',[
            'data'=>$data ,
            'districts'=>$districts ,
        ]) ;

    }

    public function update(Request $request,$id){

        $validatedData = $request->validate([
            'subdistrict_bn' => 'required|max:255',
            'subdistrict_en' => 'required|max:255',
            'district_id' => 'required',
        ]);

        $data=array() ;
        $data['subdistrict_bn'] = $request->subdistrict_bn ;
        $data['subdistrict_en'] = $request->subdistrict_en ;
        $data['district_id'] = $request->district_id ;



        DB::table('subdistricts')->where('id',$id)->update($data) ;


        $notification = array(
            'message' => 'Data update successfully!',
            'alert-type' => 'success'
        );
        return redirect('/districts/Subdistrict')->with($notification) ;
    }




}
