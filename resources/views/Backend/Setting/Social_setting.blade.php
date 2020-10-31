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
            <div class="card card-warning">
                <div class="card-header text-center">
                    <h3 class="text-center"> <b> Social Update </b></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('social.update',['id'=>$links->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body ">
                        <div class="row">
                            <div class="form-group col-10 offset-1">
                                <label >Facebook Links </label>
                                <input type="text" value="{{$links->facebook}}"  class="form-control @error('facebook') is-invalid @enderror" name="facebook"  >

                                @error('facebook')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-10 offset-1">
                                <label >Youtube Links </label>
                                <input type="text" value="{{$links->youtube}}"  class="form-control @error('youtube') is-invalid @enderror" name="youtube"  >

                                @error('youtube')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-10 offset-1">
                                <label >Google Links </label>
                                <input type="text"  value="{{$links->google}}" class="form-control @error('google') is-invalid @enderror" name="google" >

                                @error('google')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-10 offset-1">
                                <label >Twitter Links </label>
                                <input type="text"  value="{{$links->twitter}}" class="form-control @error('twitter') is-invalid @enderror" name="twitter" >

                                @error('twitter')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>








                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer col-10 offset-1">
                        <button type="submit" class="btn btn-success btn-block">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->



        </div>












    </div>

@endsection
