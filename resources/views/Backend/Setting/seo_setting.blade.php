@extends('Backend.master')

@section('bodypart')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Update Social Links</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Update Social Links</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>






        <div class="col-8 offset-2">
            <!-- general form elements -->
            <div class="card card-info">
                <div class="card-header text-center">
                    <h3 class="text-center"> <b> Social Update </b></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('seo.update',['id'=>$links->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body ">
                        <div class="row">
                            <div class="form-group col-6 offset-3">
                                <label class="text-center">Auther </label>
                                <input type="text"  value="{{$links->meta_author}}"  class="form-control @error('meta_author') is-invalid @enderror" name="meta_author"  >

                                @error('meta_author')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label >Title </label>
                                <input type="text"  value="{{$links->meta_title}}"  class="form-control @error('meta_title') is-invalid @enderror" name="meta_title"  >

                                @error('meta_title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-6">
                                <label >Keyword </label>
                                <input type="text" value="{{$links->meta_keyword}}"  class="form-control @error('meta_keyword') is-invalid @enderror" name="meta_keyword" >

                                @error('meta_keyword')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label >Description </label>
                                <input type="text" value="{{$links->meta_description}}" class="form-control @error('meta_description') is-invalid @enderror" name="meta_description" >

                                @error('meta_description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-6">
                                <label >Google Analytics </label>
                                <input type="text" value="{{$links->google_analytics}}" class="form-control @error('google_analytics') is-invalid @enderror" name="google_analytics" >

                                @error('google_analytics')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label >Google Verification </label>
                                <input type="text" value="{{$links->google_verification}}" class="form-control @error('google_verification') is-invalid @enderror" name="google_verification" >

                                @error('google_verification')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-6">
                                <label >Alexa Analytics </label>
                                <input type="text" value="{{$links->alexa_analytics}}" class="form-control @error('alexa_analytics') is-invalid @enderror" name="alexa_analytics" >

                                @error('alexa_analytics')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>








                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer col-4 offset-4">
                        <button type="submit" class="btn btn-success btn-block">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->



        </div>












    </div>

@endsection

