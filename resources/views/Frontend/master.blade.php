@php

    $seo=DB::table('seos')->first();

@endphp







    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="{{ $seo->meta_author }}">
    <meta name="keyword" content="{{ $seo->meta_keyword }}">
    <meta name="description" content="{{ $seo->meta_description }}">
    <meta name="google-verification" content="{{ $seo->google_verification }}">


    <title>{{ $seo->meta_title }}</title>


    <link href="{{asset('/public/Frontend')}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/public/Frontend')}}/assets/css/menu.css" rel="stylesheet">
    <link href="{{asset('/public/Frontend')}}/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/public/Frontend')}}/assets/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('/public/Frontend')}}/assets/css/responsive.css" rel="stylesheet">
    <link href="{{asset('/public/Frontend')}}/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('/public/Frontend')}}/style.css" rel="stylesheet">




</head>
<body>

@php
    function bn_date($str)
        {
         $en = array(1,2,3,4,5,6,7,8,9,0);
        $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
        $str = str_replace($en, $bn, $str);
        $en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
        $en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
        $bn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
        $str = str_replace( $en, $bn, $str );
        $str = str_replace( $en_short, $bn, $str );
        $en = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
         $en_short = array('Sat','Sun','Mon','Tue','Wed','Thu','Fri');
         $bn_short = array('শনি', 'রবি','সোম','মঙ্গল','বুধ','বৃহঃ','শুক্র');
         $bn = array('শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
         $str = str_replace( $en, $bn, $str );
         $str = str_replace( $en_short, $bn_short, $str );
         $en = array( 'am', 'pm' );
        $bn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );
        $str = str_replace( $en, $bn, $str );
         $str = str_replace( $en_short, $bn_short, $str );
         $en = array( '১২', '২৪' );
        $bn = array( '৬', '১২' );
        $str = str_replace( $en, $bn, $str );
         return $str;
        }
@endphp

<!-- header-start -->
<section class="hdr_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-md-2 col-sm-4">
                <div class="header_logo">
                    <a href=""><img src="{{asset('/public/Frontend')}}/assets/img/demo_logo.png"></a>
                </div>
            </div>
            <div class="col-xs-6 col-md-8 col-sm-8">
                <div id="menu-area" class="menu_area">
                    <div class="menu_bottom">
                        <nav role="navigation" class="navbar navbar-default mainmenu">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collection of nav links and other content for toggling -->
                            <div id="navbarCollapse" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">


                                    @foreach($categories as $category)
                                        <li class="dropdown">

                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                {{-- @if(session()->get('lang')=='english')
                                                 {{$category->category_en}}
                                                 @else
                                                     {{$category->category_bn}}
                                                 @endif--}}

                                                @if(session()->get('language')=='bangla')

                                                    {{$category->category_en}}

                                                @else

                                                    {{$category->category_bn}}
                                                @endif

                                                <b class="caret"></b></a>


                                            <ul class="dropdown-menu">

                                                @foreach($Sub_categories as $subcat)

                                                    @if($subcat->category_id == $category->id)
                                                        {{-- @if(session()->get('lang')=='english')
                                                             <li><a href="#">{{$subcat->subcategory_en}}</a></li>
                                                         @else
                                                             <li><a href="#">{{$subcat->subcategory_bn}}</a></li>
                                                         @endif--}}

                                                        @if(session()->get('language')=='bangla')
                                                            <li><a href="#">{{$subcat->subcategory_en}}</a></li>
                                                        @else
                                                            <li><a href="#">{{$subcat->subcategory_bn}}</a></li>
                                                        @endif
                                                    @endif

                                                @endforeach

                                            </ul>
                                        </li>

                                    @endforeach
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-2 col-sm-12">
                <div class="header-icon">
                    <ul>

                        {{-- @if(session()->get('lang')=='english')
                              <li class="version"><a href="{{route('lang.bangla')}}">Bangla</a></li>
                         @else
                             <li class="version"><a href="{{route('lang.english')}}">English</a></li>

                         @endif--}}


                        @if(session()->get('language')=='english')
                            <li class="version"><a href="{{route('bangla')}}">English</a></li>
                        @else
                            <li class="version"><a href="{{route('english')}}">বাংলা</a></li>
                    @endif




                    <!-- search-start -->
                        <li><div class="search-large-divice">
                                <div class="search-icon-holder"> <a href="#" class="search-icon" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <div class="modal fade bd-example-modal-lg" {{--action="<?php echo home_url( '/' ); ?>"--}} tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i class="fa fa-times-circle" aria-hidden="true"></i> </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="custom-search-input">
                                                                <form>
                                                                    <div class="input-group">
                                                                        <input class="search form-control input-lg" placeholder="search" value="Type Here.." type="text">
                                                                        <span class="input-group-btn">
																		<button class="btn btn-lg" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
																	</span> </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div></li>
                        <!-- social-start -->
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn-02"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                                <div class="dropdown-content">
                                    <a href="{{$socials->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                                    <a href="{{$socials->google}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Google</a>
                                    <a href="{{$socials->youtube}}" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a>
                                    <a href="{{$socials->twitter}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Twitter</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.header-close -->

<!-- top-add-start -->
<!-- /.top-add-close -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                <div class="top-add"><img src="{{asset('/public/Frontend')}}/assets/img/top-ad.jpg" alt="" /></div>
            </div>
        </div>
    </div>
</section>
<!-- date-start -->




<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="date">
                    <ul>
                        {{--  <script type="text/javascript" src="http://bangladate.appspot.com/index2.php"></script>--}}

                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>

                            @if(session()->get('language')=='bangla')
                                {{ "Dhaka" }}</li>
                        @else

                        {{ "ঢাকা" }}

                        </li>

                        @endif


                        </li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>

                            @if(session()->get('language')=='bangla')
                                {{ (date('d M Y, l, h:i:s a'))}} </li>
                        @else



                        {{ bn_date(date('d M Y, l, h:i:s a'))}} </li>

                        @endif



                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> আপডেট ৫ মিনিট আগে</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section><!-- /.date-close -->

<!-- notice-start -->

<section>
    <div class="container-fluid">
        <div class="row scroll">
            <div class="col-md-2 col-sm-3 scroll_01 ">

                @if(session()->get('language')=='bangla')
                    Headline :  </li>
                @else

                    শিরোনাম :   </li>

                @endif


            </div>
            <div class="col-md-10 col-sm-9 scroll_02">
                <marquee>  @foreach($posts as $post)  &nbsp;  &nbsp; **

                    @if(session()->get('language')=='bangla')
                    {{$post->title_en}}  </li>
                    @else

                    {{$post->title_bn}}  </li>

                    @endif

                    @endforeach</marquee>

            </div>
        </div>
    </div>

    @if($notices->status==1)
        <div class="container-fluid " >
            <div class=" ">
                <div class="col-md-2 col-sm-3  scroll_01 " style="background: #00ACEE" >

                    @if(session()->get('language')=='bangla')
                        Notice :  </li>
                    @else

                        নোটিশ :   </li>

                    @endif


                </div>
                <div class="col-md-10 col-sm-9 scroll_02" style="background: #4c0ab8">
                    <marquee>    &nbsp;  &nbsp; **

                        @if(session()->get('language')=='bangla')
                        {{$notices->notice}}  </li>
                        @else

                        {{$notices->notice_bn}}  </li>

                        @endif

                    </marquee>

                </div>
            </div>
        </div>
    @endif
</section>




@yield('body')







<!-- top-footer-start -->
<section>
    <div class="container-fluid">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="foot-logo">
                        <img src="{{asset('/public/Frontend')}}/assets/img/demo_logo.png" style="height: 50px;" />
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <div class="social">
                        <ul>
                            <li><a href="" target="_blank" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                            <li><a href="" target="_blank" class="twitter"> <i class="fa fa-twitter"></i></a></li>
                            <li><a href="" target="_blank" class="instagram"> <i class="fa fa-instagram"></i></a></li>
                            <li><a href="" target="_blank" class="android"> <i class="fa fa-android"></i></a></li>
                            <li><a href="" target="_blank" class="linkedin"> <i class="fa fa-linkedin"></i></a></li>
                            <li><a href="" target="_blank" class="youtube"> <i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="apps-img">
                        <ul>
                            <li><a href="#"><img src="{{asset('/public/Frontend')}}/assets/img/apps-01.png" alt="" /></a></li>
                            <li><a href="#"><img src="{{asset('/public/Frontend')}}/assets/img/apps-02.png" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.top-footer-close -->

<!-- middle-footer-start -->
<section class="middle-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="editor-one">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="editor-two">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="editor-three">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is
                </div>
            </div>
        </div>
    </div>
</section><!-- /.middle-footer-close -->

<!-- bottom-footer-start -->
<section class="bottom-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="copyright">
                    All rights reserved © 2020 LearnHunter
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="btm-foot-menu">
                    <ul>
                        <li><a href="#">About US</a></li>
                        <li><a href="#">Contact US</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>






<script src="{{asset('/public/Frontend')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('/public/Frontend')}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset('/public/Frontend')}}/assets/js/main.js"></script>
<script src="{{asset('/public/Frontend')}}/assets/js/owl.carousel.min.js"></script>
</body>
</html>

