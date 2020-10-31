<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB ;

class SettingController extends Controller
{
    public function socialsetting(){

        $links =DB::table('socials')->first() ;
        return view('Backend.Setting.Social_setting',[
            'links'=>$links
        ]) ;
    }

    public function update(Request $request ,$id){

        $validatedData = $request->validate([
            'facebook' => 'required',
            'youtube' => 'required',
            'google' => 'required',
            'twitter' => 'required',
        ]);


        $data = array() ;
        $data['facebook']= $request->facebook ;
        $data['youtube']= $request->youtube ;
        $data['google']= $request->google ;
        $data['twitter']= $request->twitter ;

        DB::table('socials')->where('id',$id)->update($data) ;

        $notification = array(
            'message' => 'Data update successfully!',
            'alert-type' => 'success'
        );
        return redirect('/Setting/social.setting')->with($notification) ;
    }


    public function seo(){

        $links =DB::table('seos')->first() ;
        return view('Backend.Setting.seo_setting',[
            'links'=>$links
        ]) ;

    }


    public function updateseo(Request $request ,$id){

        $validatedData = $request->validate([
            'meta_author' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
            'google_analytics' => 'required',
            'google_verification' => 'required',
            'alexa_analytics' => 'required',
        ]);


        $data = array() ;
        $data['meta_author']= $request->meta_author ;
        $data['meta_title']= $request->meta_title ;
        $data['meta_keyword']= $request->meta_keyword ;
        $data['meta_description']= $request->meta_description ;
        $data['google_analytics']= $request->google_analytics ;
        $data['google_verification']= $request->google_verification ;
        $data['alexa_analytics']= $request->alexa_analytics ;

        DB::table('seos')->where('id',$id)->update($data) ;

        $notification = array(
            'message' => 'Data update successfully!',
            'alert-type' => 'success'
        );
        return redirect('/posts/seo.setting')->with($notification) ;
    }


    public function namaj(){

      /*  return view('Backend.Setting.namajtime') ;*/

        $links =DB::table('prayers')->first() ;

        return view('Backend.Setting.namajtime',[
            'links'=>$links
        ]) ;
    }


    public function updatprayer(Request  $request ,$id){




        $validatedData = $request->validate([
            'johor' => 'required',
            'asor' => 'required',
            'magrib' => 'required',
            'esha' => 'required',
            'jumma' => 'required',
            'fojor' => 'required',

        ]);


        $data = array() ;
        $data['johor']= $request->johor ;
        $data['asor']= $request->asor ;
        $data['magrib']= $request->magrib ;
        $data['esha']= $request->esha ;
        $data['jumma']= $request->jumma ;
        $data['fojor']= $request->fojor ;


        DB::table('prayers')->where('id',$id)->update($data) ;

        $notification = array(
            'message' => 'Data update successfully!',
            'alert-type' => 'success'
        );
        return redirect('/posts/Setting/namajtiming')->with($notification) ;

    }


    public function livetv(){

        $links =DB::table('livetv')->first() ;

        return view('Backend.Setting.livetv',[
            'links'=>$links
        ]) ;
    }

    public function livetvupdate(Request  $request ,$id){


        $validatedData = $request->validate([
            'embed_code' => 'required',

        ]);


        $data = array() ;
        $data['embed_code']= $request->embed_code ;



        DB::table('livetv')->where('id',$id)->update($data) ;

        $notification = array(
            'message' => 'Data update successfully!',
            'alert-type' => 'success'
        );
        return redirect('/posts/Setting/livetv.setting')->with($notification) ;

    }

    public function active($id){

        $data = array() ;
        $data['status']= 1 ;

        DB::table('livetv')->where('id',$id)->update($data) ;

        $notification = array(
            'message' => 'Live tv is active !',
            'alert-type' => 'success'
        );
        return redirect('/posts/Setting/livetv.setting')->with($notification) ;
    }

    public function deactive(Request $request ,$id){

        $data = array() ;
        $data['status']= 0 ;

        DB::table('livetv')->where('id',$id)->update($data) ;

        $notification = array(
            'message' => 'Live tv is deactive !',
            'alert-type' => 'success'
        );
        return redirect('/posts/Setting/livetv.setting')->with($notification) ;
    }

    public function noticesetting(){

        $links =DB::table('notices')->first() ;

        return view('Backend.Setting.notice',[
            'links'=>$links
        ]) ;
    }




    public function activenotice($id){

        $data = array() ;
        $data['status']= 1 ;

        DB::table('notices')->where('id',$id)->update($data) ;

        $notification = array(
            'message' => 'Notice is active !',
            'alert-type' => 'success'
        );
        return redirect('/Setting/notice.setting')->with($notification) ;
    }

    public function deactivenotice(Request $request ,$id){

        $data = array() ;
        $data['status']= 0 ;

        DB::table('notices')->where('id',$id)->update($data) ;

        $notification = array(
            'message' => 'Notice is deactive !',
            'alert-type' => 'success'
        );
        return redirect('/Setting/notice.setting')->with($notification) ;
    }



    public function noticeupdate(Request  $request ,$id){


        $validatedData = $request->validate([
            'notice' => 'required',
            'notice_bn' => 'required',

        ]);


        $data = array() ;
        $data['notice']= $request->notice ;
        $data['notice_bn']= $request->notice_bn ;



        DB::table('notices')->where('id',$id)->update($data) ;

        $notification = array(
            'message' => 'Notice update successfully!',
            'alert-type' => 'success'
        );
        return redirect('/Setting/notice.setting')->with($notification) ;

    }


    public function importentwebsite(){

        $links =DB::table('websites')->get() ;

        return view('Backend.Setting.importent',[
            'links'=>$links
        ]) ;

    }


    public function storeimportent(Request  $request){

        $validatedData = $request->validate([
            'website_name' => 'required',
            'website_name_en'=> 'required' ,
            'website_link' => 'required',

        ]);


        $data = array() ;
        $data['website_name']= $request->website_name ;
        $data['website_name_en']= $request->website_name_en ;
        $data['website_link']= $request->website_link ;



        DB::table('websites')->insert($data) ;

        $notification = array(
            'message' => 'Data Save successfully!',
            'alert-type' => 'success'
        );
        return redirect('/Setting/Importent/importent.website')->with($notification) ;

    }


    public function importentedit($id){

        $links =DB::table('websites')->where('id',$id)->first() ;
        return view('Backend.Setting.edit',[
            'links'=>$links
        ]) ;


    }

    public function delete($id){

        DB::table('websites')->where('id',$id)->delete();

        $notification = array(
            'message' => 'Data delete successfully!',
            'alert-type' => 'success'
        );
        return redirect('/Setting/Importent/importent.website')->with($notification) ;

    }

    public function updateweb(Request  $request ,$id){

        $validatedData = $request->validate([
            'website_name' => 'required',
            'website_name_en'=> 'required' ,
            'website_link' => 'required',

        ]);


        $data = array() ;
        $data['website_name']= $request->website_name ;
        $data['website_name_en']= $request->website_name_en ;
        $data['website_link']= $request->website_link ;



        DB::table('websites')->where('id',$id)->update($data) ;



        $notification = array(
            'message' => 'Data Save successfully!',
            'alert-type' => 'success'
        );
        return redirect('/Setting/Importent/importent.website')->with($notification) ;

    }



}
