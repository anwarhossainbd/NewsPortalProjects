
@php
    $prefix =Request::route()->getPrefix() ;
      $route= Route::current()->getName() ;
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('public/AdminPanal')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Times Of Bangladesh</span>
    </a>



    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('public/AdminPanal')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">  {{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                   {{-- <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>--}}

                </li>

                <li class="nav-item has-treeview {{$prefix=='/Category'?'menu-open':''}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Categories
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('categories')}}" class="nav-link  {{$route =='categories'?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Subcategories')}}" class="nav-link  {{$route =='Subcategories'?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Category</p>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item has-treeview {{$prefix=='/Dirstrict'?'menu-open':''}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Districts
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('district')}}" class="nav-link {{$route =='district'?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>District</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Subdistrict')}}" class="nav-link {{$route =='Subdistrict'?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub District</p>
                            </a>
                        </li>


                    </ul>
                </li>


                <li class="nav-item has-treeview {{$prefix=='/Posts'?'menu-open':''}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Posts
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{route('addposts')}}" class="nav-link {{$route =='addposts'?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Posts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('allposts')}}" class="nav-link {{$route =='allposts'?'active':''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Posts</p>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Setting
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('social.setting')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Social Setting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('seo.setting')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SEO Setting</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('namaj.timing')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Namaj Time</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('livetv.setting')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Live Tv </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('notice.setting')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Notice Setting </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('importent.website')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Importent Website </p>
                            </a>
                        </li>


                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Gallery
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('photo.gallery')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Photo Gallery</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('video.gallery')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Video Gallary</p>
                            </a>
                        </li>


                    </ul>
                </li>



                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
