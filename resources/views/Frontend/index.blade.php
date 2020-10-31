@extends('Frontend.master')


@section('body')

    <section class="news-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="row">
                        <div class="col-md-1 col-sm-1 col-lg-1"></div>
                        <div class="col-md-10 col-sm-10">
                            <div class="lead-news">

                                @php

                                $slug = preg_replace('/\s+/u','-',trim($firstsectionbig->title_bn)) ;

                                @endphp

                                <div class="service-img"><a href="{{route("view-post",['id'=>$firstsectionbig->id ,'slug'=>$firstsectionbig->title_bn])}}"><img src="{{ $firstsectionbig->image }}" alt="Notebook"></a></div>



                                <div class="content">
                                    <h4 class="lead-heading-01"><a href="#">

                                            @if(session()->get('language')=='bangla')
                                            {{$firstsectionbig->title_en}}  </li>
                                            @else

                                            {{$firstsectionbig->title_bn}}  </li>

                                            @endif


                                        </a> </h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        @foreach($firstsectionsmall as $firstsec)
                            <div class="col-md-3 col-sm-3">
                                <div class="top-news p-3">
                                    <a href="#"><img src="{{$firstsec->image}}"  alt="Notebook"></a>
                                    <h4 class="heading-02" style="height: 80px;">
                                        <a href="">
                                            @if(session()->get('language') == 'bangla')
                                                {{ $firstsec->title_en }}
                                            @else
                                                {{ $firstsec->title_bn }}
                                            @endif
                                        </a> </h4>
                                </div>
                            </div>
                        @endforeach


                    </div>

                    <!-- add-start -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="add"><img src="{{asset('/public/Frontend')}}/assets/img/top-ad.jpg" alt="" /></div>
                        </div>
                    </div><!-- /.add-close -->

                    @php


                        $firstcat = DB::table('categories')->first() ;
                        $firstcatpost = DB::table('posts')->where('cat_id',$firstcat->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first() ;
                        $firstcatpostsmall = DB::table('posts')->where('cat_id',$firstcat->id)->where('big_thumbnail',null)
                                         ->limit(3)->orderBy('id','DESC')->get() ;



                    @endphp



                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="bg-one">
                                <div class="cetagory-title">

                                    @if(session()->get('language') == 'bangla')
                                        {{$firstcat->category_en}}
                                    @else
                                        {{$firstcat->category_bn}}
                                    @endif



                                    <a href="#">   <span>

                                                 @if(session()->get('language') == 'bangla')
                                                More
                                            @else
                                                আরও
                                            @endif




                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="top-news">
                                            <a href="#"><img src="{{asset($firstcatpost->image)}}" alt="Notebook"></a>
                                            <h4 class="heading-02"><a href="#">
                                                    @if(session()->get('language') == 'bangla')
                                                        {{$firstcatpost->title_en}}
                                                    @else
                                                        {{$firstcatpost->title_bn}}
                                                    @endif  </a> </h4>
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-sm-6">
                                        @foreach($firstcatpostsmall as $firstcatpostsm)
                                            <div class="image-title">
                                                <a href="#"><img src="{{asset($firstcatpostsm->image)}}"  alt="Notebook"></a>
                                                <h4 class="heading-03"><a href="#">
                                                        @if(session()->get('language') == 'bangla')
                                                            {{$firstcatpostsm->title_en}}
                                                        @else
                                                            {{$firstcatpostsm->title_bn}}
                                                        @endif    </a> </h4>
                                            </div>

                                        @endforeach

                                    </div>


                                </div>
                            </div>
                        </div>


                        @php
                            $secondcat = DB::table('categories')->skip(1)->first() ;
                            $secondcatpost = DB::table('posts')->where('cat_id',$secondcat->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first() ;
                            $secondcatpostsmall = DB::table('posts')->where('cat_id',$secondcat->id)->where('big_thumbnail',null)
                                             ->limit(3)->orderBy('id','DESC')->get() ;

                        @endphp


                        <div class="col-md-6 col-sm-6">
                            <div class="bg-one">
                                <div class="cetagory-title">

                                    @if(session()->get('language') == 'bangla')
                                        {{$secondcat->category_en}}
                                    @else
                                        {{$secondcat->category_bn}}
                                    @endif


                                    <a href="#">  <span>
                                                 @if(session()->get('language') == 'bangla')
                                                More
                                            @else
                                                আরও
                                            @endif <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="top-news">
                                            <a href="#"><img src="{{asset($secondcatpost->image)}}" alt="Notebook"></a>
                                            <h4 class="heading-02"><a href="#">

                                                    @if(session()->get('language') == 'bangla')
                                                        {{$secondcatpost->title_en}}
                                                    @else
                                                        {{$secondcatpost->title_bn}}
                                                    @endif


                                                </a> </h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        @foreach($secondcatpostsmall as $firstcatpostsm)
                                            <div class="image-title">
                                                <a href="#"><img src="{{asset($firstcatpostsm->image)}}"  alt="Notebook"></a>
                                                <h4 class="heading-03"><a href="#">
                                                        @if(session()->get('language') == 'bangla')
                                                            {{$firstcatpostsm->title_en}}
                                                        @else
                                                            {{$firstcatpostsm->title_bn}}
                                                        @endif    </a> </h4>
                                            </div>

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <!-- add-start -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="sidebar-add"><img src="{{asset('/public/Frontend')}}/assets/img/add_01.jpg" alt="" /></div>
                        </div>
                    </div><!-- /.add-close -->

                    <!-- youtube-live-start -->
                    <div class="cetagory-title-03">

                        @if(session()->get('language')=='bangla')

                            Live Tv
                        @else

                            লাইভ টিভি

                        @endif


                    </div>
                    <div class="photo">

                        <div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                            @if($livetv->status == 1)
                                {!! $livetv->embed_code !!}
                            @endif
                        </div>
                    </div><!-- /.youtube-live-close -->

                    <!-- facebook-page-start -->
                    <div class="cetagory-title-03">ফেসবুকে আমরা</div>
                    <div class="fb-root">
                        facebook page here
                    </div><!-- /.facebook-page-close -->

                    <!-- add-start -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="sidebar-add">
                                <img src="{{asset('/public/Frontend')}}/assets/img/add_01.jpg" alt="" />
                            </div>
                        </div>
                    </div><!-- /.add-close -->

                    <div class="cetagory-title-03">
                        @if(session()->get('lang')== 'english')
                            Prayer times
                        @else
                            নামাজের সময়সূচি
                        @endif
                    </div>

                    <table class="table">
                        <tr>
                            <th>
                                @if(session()->get('language')== 'bangla')
                                    Fajr
                                @else
                                    ফজর
                                @endif
                            </th>
                            <th>{{ $prayers->fojor }}</th>
                        </tr>
                        <tr>
                            <th>
                                @if(session()->get('language')== 'bangla')
                                    Johr
                                @else
                                    যোহর
                                @endif
                            </th>
                            <th>{{ $prayers->johor }}</th>
                        </tr>
                        <tr>
                            <th>
                                @if(session()->get('language')== 'bangla')
                                    Asor
                                @else
                                    আছর
                                @endif
                            </th>
                            <th>{{ $prayers->asor }}</th>
                        </tr>
                        <tr>
                            <th>
                                @if(session()->get('language')== 'bangla')
                                    Magrib
                                @else
                                    মাগরিব
                                @endif
                            </th>
                            <th>{{ $prayers->magrib }}</th>
                        </tr>
                        <tr>
                            <th>
                                @if(session()->get('language')== 'bangla')
                                    Esha
                                @else
                                    এশা
                                @endif
                            </th>
                            <th>{{ $prayers->esha }}</th>
                        </tr>
                        <tr>
                            <th>
                                @if(session()->get('language')== 'bangla')
                                    Jummah
                                @else
                                    জুম্মা
                                @endif
                            </th>
                            <th>{{ $prayers->jumma }}</th>
                        </tr>
                    </table>
                </div>


            </div>
        </div>

    </section><!-- /.1st-news-section-close -->

    ========================================================================================================================================================================

    <div class="row">

        @php
            $thirdcat = DB::table('categories')->skip(2)->first() ;
            $thirdcatpost = DB::table('posts')->where('cat_id',$thirdcat->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first() ;
            $thirdcatpostsmall = DB::table('posts')->where('cat_id',$thirdcat->id)->where('big_thumbnail',null)
                             ->limit(3)->orderBy('id','DESC')->get() ;

        @endphp
        <section class="news-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="bg-one">
                            <div class="cetagory-title-02">

                                @if(session()->get('language') == 'bangla')
                                    {{$thirdcat->category_en}}
                                @else
                                    {{$thirdcat->category_bn}}
                                @endif




                                <a href="#">  <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>  @if(session()->get('language') == 'bangla')
                                            More
                                        @else
                                            আরও
                                        @endif </span></a></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="top-news">
                                        <a href="#"><img src="{{asset($thirdcatpost->image)}}" alt="Notebook"></a>
                                        <h4 class="heading-02"><a href="#">

                                                @if(session()->get('language') == 'bangla')
                                                    {{$thirdcatpost->title_en}}
                                                @else
                                                    {{$thirdcatpost->title_bn}}
                                                @endif</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">


                                    @foreach($thirdcatpostsmall as $firstcatpostsm)
                                        <div class="image-title">
                                            <a href="#"><img src="{{asset($firstcatpostsm->image)}}"  alt="Notebook"></a>
                                            <h4 class="heading-03"><a href="#">
                                                    @if(session()->get('language') == 'bangla')
                                                        {{$firstcatpostsm->title_en}}
                                                    @else
                                                        {{$firstcatpostsm->title_bn}}
                                                    @endif    </a> </h4>
                                        </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>


                    @php
                        $fourdcat = DB::table('categories')->skip(3)->first() ;
                        $fourcatpost = DB::table('posts')->where('cat_id',$fourdcat->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first() ;
                        $fourcatpostsmall = DB::table('posts')->where('cat_id',$fourdcat->id)->where('big_thumbnail',null)
                                         ->limit(3)->orderBy('id','DESC')->get() ;

                    @endphp
                    <div class="col-md-6 col-sm-6">
                        <div class="bg-one">
                            <div class="cetagory-title-02">

                                @if(session()->get('language') == 'bangla')
                                    {{$fourdcat->category_en}}
                                @else
                                    {{$fourdcat->category_bn}}
                                @endif




                                <a href="#">  <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>  @if(session()->get('language') == 'bangla')
                                            More
                                        @else
                                            আরও
                                        @endif </span></a></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="top-news">
                                        <a href="#"><img src="{{asset($fourcatpost->image)}}" alt="Notebook"></a>
                                        <h4 class="heading-02"><a href="#">

                                                @if(session()->get('language') == 'bangla')
                                                    {{$fourcatpost->title_en}}
                                                @else
                                                    {{$fourcatpost->title_bn}}
                                                @endif</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">


                                    @foreach($fourcatpostsmall as $firstcatpostsm)
                                        <div class="image-title">
                                            <a href="#"><img src="{{asset($firstcatpostsm->image)}}"  alt="Notebook"></a>
                                            <h4 class="heading-03"><a href="#">
                                                    @if(session()->get('language') == 'bangla')
                                                        {{$firstcatpostsm->title_en}}
                                                    @else
                                                        {{$firstcatpostsm->title_bn}}
                                                    @endif    </a> </h4>
                                        </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </section>












    </div>
    <div class="row">

        @php
            $fivethcat = DB::table('categories')->skip(4)->first() ;
            $fivethcatpost = DB::table('posts')->where('cat_id',$fivethcat->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first() ;
            $fivethcatpostsmall = DB::table('posts')->where('cat_id',$fivethcat->id)->where('big_thumbnail',null)
                             ->limit(3)->orderBy('id','DESC')->get() ;

        @endphp
        <section class="news-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="bg-one">
                            <div class="cetagory-title-02">

                                @if(session()->get('language') == 'bangla')
                                    {{$fivethcat->category_en}}
                                @else
                                    {{$fivethcat->category_bn}}
                                @endif




                                <a href="#">  <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>  @if(session()->get('language') == 'bangla')
                                            More
                                        @else
                                            আরও
                                        @endif </span></a></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="top-news">
                                        <a href="#"><img src="{{asset($fivethcatpost->image)}}" alt="Notebook"></a>
                                        <h4 class="heading-02"><a href="#">

                                                @if(session()->get('language') == 'bangla')
                                                    {{$fivethcatpost->title_en}}
                                                @else
                                                    {{$fivethcatpost->title_bn}}
                                                @endif</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">


                                    @foreach($fivethcatpostsmall as $firstcatpostsm)
                                        <div class="image-title">
                                            <a href="#"><img src="{{asset($firstcatpostsm->image)}}"  alt="Notebook"></a>
                                            <h4 class="heading-03"><a href="#">
                                                    @if(session()->get('language') == 'bangla')
                                                        {{$firstcatpostsm->title_en}}
                                                    @else
                                                        {{$firstcatpostsm->title_bn}}
                                                    @endif    </a> </h4>
                                        </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>


                    @php
                        $fourdcat = DB::table('categories')->skip(5)->first() ;
                        $fourcatpost = DB::table('posts')->where('cat_id',$fourdcat->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first() ;
                        $fourcatpostsmall = DB::table('posts')->where('cat_id',$fourdcat->id)->where('big_thumbnail',null)
                                         ->limit(3)->orderBy('id','DESC')->get() ;

                    @endphp
                    <div class="col-md-6 col-sm-6">
                        <div class="bg-one">
                            <div class="cetagory-title-02">

                                @if(session()->get('language') == 'bangla')
                                    {{$fourdcat->category_en}}
                                @else
                                    {{$fourdcat->category_bn}}
                                @endif




                                <a href="#">  <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>  @if(session()->get('language') == 'bangla')
                                            More
                                        @else
                                            আরও
                                        @endif </span></a></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="top-news">
                                        <a href="#"><img src="{{asset($fourcatpost->image)}}" alt="Notebook"></a>
                                        <h4 class="heading-02"><a href="#">

                                                @if(session()->get('language') == 'bangla')
                                                    {{$fourcatpost->title_en}}
                                                @else
                                                    {{$fourcatpost->title_bn}}
                                                @endif</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">


                                    @foreach($fourcatpostsmall as $firstcatpostsm)
                                        <div class="image-title">
                                            <a href="#"><img src="{{asset($firstcatpostsm->image)}}"  alt="Notebook"></a>
                                            <h4 class="heading-03"><a href="#">
                                                    @if(session()->get('language') == 'bangla')
                                                        {{$firstcatpostsm->title_en}}
                                                    @else
                                                        {{$firstcatpostsm->title_bn}}
                                                    @endif    </a> </h4>
                                        </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </section>












    </div>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="top-add"><img src="{{asset('/public/Frontend')}}/assets/img/top-ad.jpg" alt="" /></div>
                </div>
            </div>
        </div>
    </section>

    @php
        $binodon = DB::table('categories')->skip(6)->first() ;
        $binodonpost = DB::table('posts')->where('cat_id',$binodon->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first() ;

    @endphp

    <section class="news-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="cetagory-title-02"><a href="#">

                            @if(session()->get('language') == 'bangla')
                                {{$binodon->category_en}}
                            @else
                                {{$binodon->category_bn}}
                            @endif

                            <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a></div>

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="top-news">
                                <a href="#"><img src="{{asset($binodonpost->image)}}" alt="Notebook"></a>
                                <h4 class="heading-02"><a href="#">

                                        @if(session()->get('language') == 'bangla')
                                            {{$binodonpost->title_en}}
                                        @else
                                            {{$binodonpost->title_bn}}
                                        @endif


                                    </a> </h4>
                            </div>
                        </div>

                        @php
                            $binodon = DB::table('categories')->skip(6)->first() ;
                            $binodonpostbig = DB::table('posts')->where('cat_id',$binodon->id)->skip(1)->limit(3)->where('big_thumbnail',1)->orderBy('id','DESC')->get() ;

                            $binodonpostbig2 = DB::table('posts')->where('cat_id',$binodon->id)->skip(4)->limit(3)->where('big_thumbnail',1)->orderBy('id','DESC')->get() ;

                        @endphp

                        <div class="col-md-4 col-sm-4">
                            @foreach($binodonpostbig as $firstcatpostsm)
                                <div class="image-title">
                                    <a href="#"><img src="{{asset($firstcatpostsm->image)}}"  alt="Notebook"></a>
                                    <h4 class="heading-03"><a href="#">
                                            @if(session()->get('language') == 'bangla')
                                                {{$firstcatpostsm->title_en}}
                                            @else
                                                {{$firstcatpostsm->title_bn}}
                                            @endif    </a> </h4>
                                </div>
                            @endforeach
                        </div>


                        <div class="col-md-4 col-sm-4">
                            @foreach($binodonpostbig2 as $firstcatpostsm)
                                <div class="image-title">
                                    <a href="#"><img src="{{asset($firstcatpostsm->image)}}"  alt="Notebook"></a>
                                    <h4 class="heading-03"><a href="#">
                                            @if(session()->get('language') == 'bangla')
                                                {{$firstcatpostsm->title_en}}
                                            @else
                                                {{$firstcatpostsm->title_bn}}
                                            @endif    </a> </h4>
                                </div>
                            @endforeach
                        </div>



                    </div>
                    <!-- ******* -->
                    <br />
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="cetagory-title-02"><a href="#">সারাদেশে  <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a></div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="bg-gray">
                                <div class="top-news">
                                    <a href="#"><img src="{{asset('/public/Frontend')}}/assets/img/news.jpg" alt="Notebook"></a>
                                    <h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="news-title">
                                <a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
                            </div>
                            <div class="news-title">
                                <a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
                            </div>
                            <div class="news-title">
                                <a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="news-title">
                                <a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
                            </div>
                            <div class="news-title">
                                <a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
                            </div>
                            <div class="news-title">
                                <a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="sidebar-add">
                                <img src="assets/img/top-ad.jpg" alt="" />
                            </div>
                        </div>
                    </div><!-- /.add-close -->


                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="tab-header">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">সর্বশেষ</a></li>
                            <li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">জনপ্রিয়</a></li>
                            <li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">জনপ্রিয়1</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content ">
                            <div role="tabpanel" class="tab-pane in active" id="tab21">
                                <div class="news-titletab">
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab22">
                                <div class="news-titletab">
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab23">
                                <div class="news-titletab">
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                    <div class="news-title-02">
                                        <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="cetagory-title-03">পুরানো সংবাদ  </div>
                    <form action="" method="post">
                        <div class="old-news-date">
                            <input type="text" name="from" placeholder="From Date" required="">
                            <input type="text" name="" placeholder="To Date">
                        </div>
                        <div class="old-date-button">
                            <input type="submit" value="খুজুন ">
                        </div>
                    </form>
                    <!-- news -->
                    <br><br><br><br><br>
                    <div class="cetagory-title-04"> @if(session()->get('language') == 'bangla')
                            Important Website
                        @else
                            গুরুত্বপূর্ণ ওয়েবসাইট
                        @endif </div>
                    <div class="">
                        <div class="news-title-02">


                            @foreach($websites as $row)

                                <div class="news-title-02">
                                    <h4 class="heading-03"><a href="" target="_blank"><i class="fa fa-check" aria-hidden="true"></i>
                                            @if(session()->get('language') == 'bangla')
                                                {{ $row->website_name_en }}
                                            @else
                                                {{ $row->website_name }}
                                            @endif  </a>
                                    </h4>
                                </div>
                                @endforeach


                                </a> </h4>
                        </div>




                    </div>

                </div>
            </div>
        </div>
    </section>

    ========================================================================================================================================================================

    <section class="news-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <div class="gallery_cetagory-title"> @if(session()->get('language') == 'bangla')
                            photo Gallery
                        @else
                            ফটো গ্যালারী

                        @endif </div>


                    @php

                        $photos = DB::table('photos')->where('type',1)->orderBy('id','DESC')->first() ;
                        $allphotos = DB::table('photos')->where('type',0)->orderBy('id','DESC')->skip(1)->limit(5)->get()


                    @endphp

                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="photo_screen">
                                <div class="myPhotos" style="width:100%">
                                    <img src="{{asset($photos->photo)}}"  alt="Avatar">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="photo_list_bg">

                                @foreach($allphotos as $photo)

                                    <div class="photo_img photo_border active">
                                        <img src="{{asset($photo->photo)}}" alt="image" onclick="currentDiv(1)">
                                        <div class="heading-03">
                                            {{$photo->title}}
                                        </div>
                                    </div>

                                @endforeach



                            </div>
                        </div>
                    </div>

                    <!--=======================================
                    Video Gallery clickable jquary  start
                ========================================-->

                    <script>
                        var slideIndex = 1;
                        showDivs(slideIndex);

                        function plusDivs(n) {
                            showDivs(slideIndex += n);
                        }

                        function currentDiv(n) {
                            showDivs(slideIndex = n);
                        }

                        function showDivs(n) {
                            var i;
                            var x = document.getElementsByClassName("myPhotos");
                            var dots = document.getElementsByClassName("demo");
                            if (n > x.length) {slideIndex = 1}
                            if (n < 1) {slideIndex = x.length}
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                            }
                            x[slideIndex-1].style.display = "block";
                            dots[slideIndex-1].className += " w3-opacity-off";
                        }
                    </script>

                    <!--=======================================
                        Video Gallery clickable  jquary  close
                    =========================================-->

                </div>
                <div class="col-md-4 col-sm-5">
                    <div class="gallery_cetagory-title">

                        @if(session()->get('language') == 'bangla')
                            Video Gallery
                        @else
                            ভিডিও গ্যালারী

                        @endif


                    </div>


                    @php

                        $video = DB::table('videos')->where('type',1)->orderBy('id','DESC')->first() ;
                        $allvideos = DB::table('videos')->where('type',0)->orderBy('id','DESC')->skip(1)->limit(5)->get()


                    @endphp

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="video_screen">
                                <div class="myVideos" style="width:100%">
                                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">  {{-- {!! $livetv->embed_code !!}--}}
                                        <iframe width="220" height="150" {!! $video->embed_code !!} frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <script>
                        var slideIndex = 1;
                        showDivss(slideIndex);

                        function plusDivs(n) {
                            showDivss(slideIndex += n);
                        }

                        function currentDivs(n) {
                            showDivss(slideIndex = n);
                        }

                        function showDivss(n) {
                            var i;
                            var x = document.getElementsByClassName("myVideos");
                            var dots = document.getElementsByClassName("demo");
                            if (n > x.length) {slideIndex = 1}
                            if (n < 1) {slideIndex = x.length}
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                            }
                            x[slideIndex-1].style.display = "block";
                            dots[slideIndex-1].className += " w3-opacity-off";
                        }
                    </script>

                </div>
            </div>
        </div>
    </section>

@endsection
