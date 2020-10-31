<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB ;
use Image ;

class GallaryController extends Controller
{
    public function index(){

        $data =  DB::table('photos')->get();
        return view('Backend/Gallery/Photos',[
            'data'=>$data
        ]) ;
    }

    public function store(Request $request) {


        $validatedData = $request->validate([
            'title' => 'required',
            'photo' => 'required',
            'type' => 'required',


        ]);

        $data = array();

        $data['title'] = $request->title;

        $data['type'] = $request->type;




        $image = $request->photo;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();    //123123.jpg
            Image::make($image)->resize(500, 310)->save('public/Photos/' . $image_one);    //   public/postimages/123123.jpg
            $data['photo'] = 'public/Photos/' . $image_one;   //   public/postimages/123123.jpg
            DB::table('photos')->insert($data);



           /* if ($image) {
                $image_one = uniqid() . '.' . $image->getClientOriginalExtension();    //123123.jpg
                Image::make($image)->resize(500, 310)->save('public/postimages/' . $image_one);    //   public/postimages/123123.jpg
                $data['image'] = 'public/postimages/' . $image_one;   //   public/postimages/123123.jpg
                DB::table('posts')->insert($data);*/





            $notification = array(
                'message' => 'Data Save successfully!',
                'alert-type' => 'success'
            );
            return redirect('/categories/photo.gallery')->with($notification);


        } else {
            return Redirect()->back();
        }
    }


    public function delete($id){

        $post = DB::table('photos')->where('id', $id)->first();
        unlink($post->photo);

        DB::table('photos')->where('id', $id)->delete();

        $notification = array(
            'message' => 'Data delete successfully!',
            'alert-type' => 'success'
        );
        return redirect('/posts/allposts')->with($notification);

    }


    public function edit($id){

        $data = DB::table('photos')->where('id', $id)->first();
        return view('Backend.Gallery.edit',[
            'data'=>$data
        ]) ;
    }

    public function update(Request  $request ,$id){

        $data = array();

        $data['title'] = $request->title;

        $data['type'] = $request->type;


        $oldimage = $request->oldimage;

        $image = $request->photo;

        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();    //123123.jpg
            Image::make($image)->resize(500, 310)->save('public/Photos/' . $image_one);    //   public/postimages/123123.jpg
            $data['photo'] = 'public/Photos/' . $image_one;   //   public/postimages/123123.jpg
            DB::table('photos')->where('id', $id)->update($data);
            unlink($oldimage);

            $notification = array(
                'message' => 'Data Save successfully!',
                'alert-type' => 'success'
            );
            return redirect('/categories/photo.gallery')->with($notification);

        } else {
            $data['photo'] = $oldimage;  //   public/postimages/123123.jpg
            DB::table('photos')->where('id', $id)->update($data);


            $notification = array(
                'message' => 'Data Save successfully!',
                'alert-type' => 'success'
            );
            return redirect('/categories/photo.gallery')->with($notification);
        }
    }


    public function videoindex(){

        $video = DB::table('videos')->get();
        return view('Backend.Gallery.video',[
            'video'=>$video ,
        ]) ;
    }

    public function videoStore(Request $request){

        $data=array();
        $data['title']=$request->title;
        $data['embed_code']=$request->embed_code;
        $data['type']=$request->type;
        DB::table('videos') ->insert($data);
        $notification=array(
            'messege'=>'Successfully Video Inserted ',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

}
