<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class FrontendController extends Controller
{

    public function index(){

        $categories = DB::table('categories')->get() ;
        $Sub_categories = DB::table('subcategories')->get() ;
        $socials = DB::table('socials')->first() ;
        $livetv =DB::table('livetv')->first() ;
        $prayers =DB::table('prayers')->first() ;
        $websites = DB::table('websites')->get() ;
        $notices =DB::table('notices')->first() ;
        $posts = DB::table('posts')
            ->limit(5)
            ->where('headline',1)
            ->orderBy('id','DESC')
            ->get() ;
        $firstsectionbig =DB::table('posts')
            ->where('first_section_thumbnail',1)
            ->orderBy('id','DESC')
            ->first() ;

        $firstsectionsmall = DB::table('posts')
            ->where('first_section',1)
            ->limit(8)
            ->orderBy('id','DESC')
            ->get() ;

        return view('Frontend.index',[
            'categories'=>$categories ,
            'Sub_categories'=>$Sub_categories,
            'socials'=>$socials ,
            'livetv'=>$livetv,
            'prayers'=>$prayers ,
            'websites'=>$websites ,
            'posts'=>$posts ,
            'notices'=>$notices,
            'firstsectionbig'=>$firstsectionbig ,
            'firstsectionsmall'=>$firstsectionsmall ,
        ]) ;
    }

    /*public function English(){

        Session::get('lang') ;
        session()->forget('lang');
        session()->put('lang','english') ;
        return redirect() ->back() ;
    }

    public function Bangla(){

        Session::get('lang') ;
        session()->forget('lang');
        session()->put('lang','bangla') ;
        return redirect() ->back() ;
    }*/



    public function Bangla(){

        Session::get('language') ;
        session()->forget('language');
        session()->put('language','bangla');
        return redirect() ->back() ;
    }

    public function English(){

        Session::get('language') ;
        session()->forget('language');
        session()->put('language','english');
        return redirect() ->back() ;
    }


    public function viewpost($id,$slug){


        $categories = DB::table('categories')->get() ;
        $Sub_categories = DB::table('subcategories')->get() ;
        $socials = DB::table('socials')->first() ;


        $websites = DB::table('websites')->get() ;
        $notices =DB::table('notices')->first() ;
        $posts = DB::table('posts')
            ->limit(5)
            ->where('headline',1)
            ->orderBy('id','DESC')
            ->get() ;



        $post = DB::table('posts')

            ->join('categories', 'posts.cat_id', '=', 'categories.id')
            ->join('subcategories', 'posts.subcat_id', '=', 'subcategories.id')
            ->select('posts.*', 'categories.category_bn', 'categories.category_en' ,'subcategories.subcategory_bn','subcategories.subcategory_en')
            ->where('posts.id',$id)
            ->first() ;

       /* $users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();*/




        return view('Frontend.singlepage',[

            'categories'=>$categories ,
            'Sub_categories'=>$Sub_categories,
            'socials'=>$socials ,


            'websites'=>$websites ,
            'posts'=>$posts ,
            'notices'=>$notices,
            'post'=>$post

        ]) ;

    }


}
