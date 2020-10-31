<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('auth.login');
});

/*Route::get('/', function () {
    return view('Frontend.index');
});*/

Route::get('/',[
    'uses'=> 'Frontend\FrontendController@index' ,

]) ;



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Categories

Route::prefix('Category')->group(function () {

    Route::get('/categories/category',[
        'uses'=> 'Backend\CategoryController@index' ,
        'as'=>'categories' ,
    ]) ;

    Route::post('/categories/store_category',[
        'uses'=> 'Backend\CategoryController@store' ,
        'as'=>'store.category' ,
    ]) ;

    Route::get('/categories/delete_category/{id}',[
        'uses'=> 'Backend\CategoryController@delete' ,
        'as'=>'delete.category' ,
    ]) ;

    Route::get('/categories/edit_category/{id}',[
        'uses'=> 'Backend\CategoryController@edit' ,
        'as'=>'edit.category' ,
    ]) ;

    Route::post('/categories/update_category/{id}',[
        'uses'=> 'Backend\CategoryController@update' ,
        'as'=>'update.category' ,
    ]) ;


    Route::get('/categories/Subcategory',[
        'uses'=> 'Backend\SubcategoryController@index' ,
        'as'=>'Subcategories' ,
    ]) ;


    Route::post('/categories/store_subcategory',[
        'uses'=> 'Backend\SubcategoryController@store' ,
        'as'=>'store.subcategory' ,
    ]) ;

    Route::get('/categories/delete_subcategory/{id}',[
        'uses'=> 'Backend\SubcategoryController@delete' ,
        'as'=>'delete.subcategory' ,
    ]) ;


    Route::get('/categories/edit_subcategory/{id}',[
        'uses'=> 'Backend\SubcategoryController@edit' ,
        'as'=>'edit.subcategory' ,
    ]) ;

    Route::post('/categories/update.subcategory/{id}',[
        'uses'=> 'Backend\SubcategoryController@update' ,
        'as'=>'update.subcategory' ,
    ]) ;


});




Route::prefix('Dirstrict')->group(function () {

    Route::get('/districts/district',[
        'uses'=> 'Backend\DistrictController@index' ,
        'as'=>'district' ,
    ]) ;

    Route::post('/districts/store.district',[
        'uses'=> 'Backend\DistrictController@store' ,
        'as'=>'store.district' ,
    ]) ;


    Route::get('/districts/delete.district/{id}',[
        'uses'=> 'Backend\DistrictController@delete' ,
        'as'=>'delete.district' ,
    ]) ;

    Route::get('/districts/edit.district/{id}',[
        'uses'=> 'Backend\DistrictController@edit' ,
        'as'=>'edit.district' ,
    ]) ;

    Route::post('/districts/update.district/{id}',[
        'uses'=> 'Backend\DistrictController@update' ,
        'as'=>'update.district' ,
    ]) ;

//Subdistricts


    Route::get('/districts/Subdistrict',[
        'uses'=> 'Backend\SubDistrictController@index' ,
        'as'=>'Subdistrict' ,
    ]) ;

    Route::post('/districts/store.subdistrict',[
        'uses'=> 'Backend\SubDistrictController@store' ,
        'as'=>'store.subdistrict' ,
    ]) ;


    Route::get('/districts/delete.subdistrict/{id}',[
        'uses'=> 'Backend\SubDistrictController@delete' ,
        'as'=>'delete.subdistrict' ,
    ]) ;


    Route::get('/districts/edit.subdistricts/{id}',[
        'uses'=> 'Backend\SubDistrictController@edit' ,
        'as'=>'edit.subdistricts' ,
    ]) ;

    Route::post('/districts/update.subdistrict/{id}',[
        'uses'=> 'Backend\SubDistrictController@update' ,
        'as'=>'update.subdistrict' ,
    ]) ;


});

Route::prefix('Posts')->group(function () {

    Route::get('/Posts/add_posts',[
        'uses'=> 'Backend\PostController@create' ,
        'as'=>'addposts' ,
    ]) ;

    /*Route::get('/get/subcat/{cat_id}',[
        'uses'=> 'Backend\PostController@Getsubcate' ,

    ]) ;*/

    Route::get('get/subcat/{cat_id}','Backend\PostController@GetSubcat');

    Route::get('/get/subdist/{dist_id}','Backend\PostController@GetSubdist');

    Route::post('/Posts/add_posts',[
        'uses'=> 'Backend\PostController@store' ,
        'as'=>'store.post' ,
    ]) ;



    Route::get('posts/allposts/',[
        'uses'=> 'Backend\PostController@Allposts' ,
        'as'=>'allposts' ,
    ]) ;

    Route::get('posts/delete.subposts/{id}',[
        'uses'=> 'Backend\PostController@Deleteposts' ,
        'as'=>'delete.subposts' ,
    ]) ;


    Route::get('posts/edit.subposts/{id}',[
        'uses'=> 'Backend\PostController@editposts' ,
        'as'=>'edit.subposts' ,
    ]) ;

    Route::post('posts/store.update/{id}',[
        'uses'=> 'Backend\PostController@update' ,
        'as'=>'store.update' ,
    ]) ;

});





//Setting change


//Social Setting
Route::get('Setting/social.setting',[
    'uses'=> 'Backend\SettingController@socialsetting' ,
    'as'=>'social.setting' ,
]) ;

Route::post('posts/social.update/{id}',[
    'uses'=> 'Backend\SettingController@update' ,
    'as'=>'social.update' ,
]) ;

//Seo Setting

Route::get('posts/seo.setting',[
    'uses'=> 'Backend\SettingController@seo' ,
    'as'=>'seo.setting' ,
]) ;

Route::post('posts/seo.update/{id}',[
    'uses'=> 'Backend\SettingController@updateseo' ,
    'as'=>'seo.update' ,
]) ;


//Namaj Setting

Route::get('posts/Setting/namajtiming',[
    'uses'=> 'Backend\SettingController@namaj' ,
    'as'=>'namaj.timing' ,
]) ;

Route::post('posts/prayer.update/{id}',[
    'uses'=> 'Backend\SettingController@updatprayer' ,
    'as'=>'prayer.update' ,
]) ;


//Live Tv

Route::get('posts/Setting/livetv.setting',[
    'uses'=> 'Backend\SettingController@livetv' ,
    'as'=>'livetv.setting' ,
]) ;


Route::post('posts/livetv.update/{id}',[
    'uses'=> 'Backend\SettingController@livetvupdate' ,
    'as'=>'livetv.update' ,
]) ;

Route::get('posts/Setting/changeactivestatus/{id}',[
    'uses'=> 'Backend\SettingController@active' ,
    'as'=>'changeactivestatus' ,
]) ;

Route::get('posts/Setting/changeactivestatus2/{id}',[
    'uses'=> 'Backend\SettingController@deactive' ,
    'as'=>'changeactivestatus2' ,
]) ;

//Notice Setting

Route::get('Setting/notice.setting',[
    'uses'=> 'Backend\SettingController@noticesetting' ,
    'as'=>'notice.setting' ,
]) ;


Route::get('posts/Setting/activenotice/{id}',[
    'uses'=> 'Backend\SettingController@activenotice' ,
    'as'=>'activenotice' ,
]) ;

Route::get('posts/Setting/deactivenotice/{id}',[
    'uses'=> 'Backend\SettingController@deactivenotice' ,
    'as'=>'deactivenotice' ,

]) ;

Route::post('posts/notice.update/{id}',[
    'uses'=> 'Backend\SettingController@noticeupdate' ,
    'as'=>'notice.update' ,
]) ;

//importent website

Route::get('Setting/Importent/importent.website',[
    'uses'=> 'Backend\SettingController@importentwebsite' ,
    'as'=>'importent.website' ,

]) ;

Route::post('setting/store.importent',[
    'uses'=> 'Backend\SettingController@storeimportent' ,
    'as'=>'store.importent' ,
]) ;



Route::get('Setting/Importent/edit.importent/{id}',[
    'uses'=> 'Backend\SettingController@importentedit' ,
    'as'=>'edit.importent' ,

]) ;


Route::get('/categories/delete.importent/{id}',[
    'uses'=> 'Backend\SettingController@delete' ,
    'as'=>'delete.importent' ,
]) ;



Route::post('setting/update.website/{id}',[
    'uses'=> 'Backend\SettingController@updateweb' ,
    'as'=>'update.website' ,
]) ;

//Photoes


Route::get('/categories/photo.gallery',[
    'uses'=> 'Backend\GallaryController@index' ,
    'as'=>'photo.gallery' ,
]) ;

Route::post('photoes /store.photos',[
    'uses'=> 'Backend\GallaryController@store' ,
    'as'=>'store.photos' ,
]) ;

Route::get('/photoes/delete.photos/{id}',[
    'uses'=> 'Backend\GallaryController@delete' ,
    'as'=>'delete.photos' ,
]) ;

Route::get('/photoes/edit.photos/{id}',[
    'uses'=> 'Backend\GallaryController@edit' ,
    'as'=>'edit.photos' ,
]) ;




Route::post('/photoes/update.photos/{id}',[
    'uses'=> 'Backend\GallaryController@update' ,
    'as'=>'update.photos' ,
]) ;

Route::get('/photoes/video.gallery',[
    'uses'=> 'Backend\GallaryController@videoindex' ,
    'as'=>'video.gallery' ,
]) ;

Route::post('/photoes/store.videos',[
    'uses'=> 'Backend\GallaryController@videoStore' ,
    'as'=>'store.videos' ,
]) ;


//frontend Controller


Route::get('/frontend/changelanguage',[
    'uses'=> 'Frontend\FrontendController@Bangla' ,
    'as'=>'lang.bangla' ,
]) ;


Route::get('/frontend/changelanguag',[
    'uses'=> 'Frontend\FrontendController@English' ,
    'as'=>'lang.english' ,
]) ;


Route::get('/frontend/bangla',[
    'uses'=> 'Frontend\FrontendController@Bangla' ,
    'as'=>'bangla' ,
]) ;


Route::get('/frontend/english',[
    'uses'=> 'Frontend\FrontendController@English' ,
    'as'=>'english' ,
]) ;


//single post

Route::get('/frontend/view-post/{id}/{slug}',[
    'uses'=> 'Frontend\FrontendController@viewpost' ,
    'as'=>'view-post' ,
]) ;






