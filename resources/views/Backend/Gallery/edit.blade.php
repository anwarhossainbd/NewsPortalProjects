@extends('Backend.master')

@section('bodypart')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Update Photos</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Photos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>






       <div class="col-6 offset-3 ">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Photo Update</h3>
                </div>

                <div class="container mt-3">
                    <form action="{{route('update.photos',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" value="{{$data->title}}" class="form-control @error('title') is-invalid @enderror" required="" name="title" id="english" >

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Old Image</label>

                            <img src="{{URL::to($data->photo)}}" height="100px" width="120px">
                            <input type="hidden" value="{{$data->photo}}"  name="oldimage">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" class="form-control"    name="photo">
                        </div>




                        <div class="form-group">
                            <label for="exampleInputPassword1">Type</label>

                            <select class="form-control" name="type">

                                <option>---Select Image type---  </option>
                                <option value="0" @if($data->type==0) {{'selected'}} @endif> Small Image </option>
                                <option value="1" @if($data->type==1) {{'selected'}} @endif>Big Image </option>

                            </select>

                            @error('photo')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <button type="submit" class="btn btn-primary"  >Submit</button>
                    </form>

                </div>
            </div>
       </div>
    </div>



@endsection




