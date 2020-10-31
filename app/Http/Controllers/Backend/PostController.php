<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB ;
use Image ;
use Auth ;
use mysql_xdevapi\Table;

class PostController extends Controller
{
    public function create()
    {

        $category = DB::table('categories')->get();
        $district = DB::table('districts')->get();

        return view('Backend.Post.create', [

            'category' => $category,
            'district' => $district,

        ]);
    }

    public function GetSubcat($cat_id)
    {

        $sub = DB::table('subcategories')->where('category_id', $cat_id)->get();
        return response()->json($sub);

    }

    public function GetSubdist($dist_id)
    {

        $dist = DB::table('subdistricts')->where('district_id', $dist_id)->get();
        return response()->json($dist);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title_bn' => 'required',
            'title_en' => 'required',
            
            'subdist_id' => 'required',
            'cat_id' => 'required',
            'subcat_id' => 'required',
            'image' => 'required',
            'tags_bn' => 'required',
            'tags_en' => 'required',
            'details_en' => 'required',
            'details_bn' => 'required',


        ]);

        $data = array();

        $data['title_bn'] = $request->title_bn;
        $data['title_en'] = $request->title_en;
        $data['dist_id'] = $request->dist_id;
        $data['subdist_id'] = $request->subdist_id;
        $data['user_id'] = Auth::user()->id;
        $data['cat_id'] = $request->cat_id;
        $data['subcat_id'] = $request->subcat_id;
        $data['subdist_id'] = $request->subdist_id;
        /* $data['image']= $request->image ;*/
        $data['tags_bn'] = $request->tags_bn;
        $data['tags_en'] = $request->tags_en;
        $data['details_en'] = $request->details_en;
        $data['details_bn'] = $request->details_bn;
        $data['headline'] = $request->headline;
        $data['big_thumbnail'] = $request->big_thumbnail;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['post_date'] = date('d-m-Y');
        $data['post_month'] = date('F');

        $image = $request->image;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();    //123123.jpg
            Image::make($image)->resize(500, 310)->save('public/postimages/' . $image_one);    //   public/postimages/123123.jpg
            $data['image'] = 'public/postimages/' . $image_one;   //   public/postimages/123123.jpg
            DB::table('posts')->insert($data);

            $notification = array(
                'message' => 'Data Save successfully!',
                'alert-type' => 'success'
            );
            return redirect('/Posts/add_posts')->with($notification);


        } else {
            return Redirect()->back();
        }

    }


    public function Allposts()
    {

        //  $category = DB::table('categories')->get() ;
        /*  $users = DB::table('users')
              ->join('contacts', 'users.id', '=', 'contacts.user_id')
              ->join('orders', 'users.id', '=', 'orders.user_id')
              ->select('users.*', 'contacts.phone', 'orders.price')
              ->get();*/

        $allpost = DB::table('posts')
            ->join('categories', 'posts.cat_id', '=', 'categories.id')
            ->join('subcategories', 'subcategories.id', '=', 'posts.subcat_id')
            ->select('posts.*', 'categories.category_en', 'subcategories.subcategory_en')
            ->get();

        return view('Backend.Post.index', [
            'allpost' => $allpost,
        ]);
    }


    public function Deleteposts($id)
    {


        $post = DB::table('posts')->where('id', $id)->first();
        unlink($post->image);

        DB::table('posts')->where('id', $id)->delete();

        $notification = array(
            'message' => 'Data delete successfully!',
            'alert-type' => 'success'
        );
        return redirect('/posts/allposts')->with($notification);

    }

    public function editposts($id)
    {

        $post = DB::table('posts')->where('id', $id)->first();
        $category = DB::table('categories')->get();
        $district = DB::table('districts')->get();

        return view('Backend.Post.edit', [
            'post' => $post,
            'category' => $category,
            'district' => $district,
        ]);
    }

    public function update(Request $request, $id)
    {

        $data = array();

        $data['title_bn'] = $request->title_bn;
        $data['title_en'] = $request->title_en;
        $data['dist_id'] = $request->dist_id;
        $data['subdist_id'] = $request->subdist_id;

        $data['cat_id'] = $request->cat_id;
        $data['subcat_id'] = $request->subcat_id;
        $data['subdist_id'] = $request->subdist_id;
        /* $data['image']= $request->image ;*/
        $data['tags_bn'] = $request->tags_bn;
        $data['tags_en'] = $request->tags_en;
        $data['details_en'] = $request->details_en;
        $data['details_bn'] = $request->details_bn;
        $data['headline'] = $request->headline;
        $data['big_thumbnail'] = $request->big_thumbnail;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;


        $oldimage = $request->oldimage;

        $image = $request->image;

        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();    //123123.jpg
            Image::make($image)->resize(500, 310)->save('public/postimages/' . $image_one);    //   public/postimages/123123.jpg
            $data['image'] = 'public/postimages/' . $image_one;   //   public/postimages/123123.jpg
            DB::table('posts')->where('id', $id)->update($data);
            unlink($oldimage);

            $notification = array(
                'message' => 'Data Save successfully!',
                'alert-type' => 'success'
            );
            return redirect('/posts/allposts')->with($notification);

        } else {
            $data['image'] = $oldimage;  //   public/postimages/123123.jpg
            DB::table('posts')->where('id', $id)->update($data);


            $notification = array(
                'message' => 'Data Save successfully!',
                'alert-type' => 'success'
            );
            return redirect('/posts/allposts')->with($notification);
        }
    }







}
