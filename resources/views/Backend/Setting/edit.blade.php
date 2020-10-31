@extends('Backend.master')

@section('bodypart')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Importent Website</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Importent Website</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="card col-10 offset-1">
            <div class="card-header bg-fuchsia">
                <h2 class="card-title text-center" > Importent Website </h2>
            </div>


            <div class="container">
                <div class="col-8 offset-2">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('update.website',['id'=>$links->id])}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Website Name bangla</label>
                                    <input type="text" value="{{$links->website_name}}" class="form-control @error('website_name') is-invalid @enderror" required="" name="website_name" id="english" >

                                    @error('website_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Website Name English</label>
                                    <input type="text" value="{{$links->website_name_en}}" class="form-control @error('website_name_en') is-invalid @enderror" required="" name="website_name_en" id="english" >

                                    @error('website_name_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>







                                <div class="form-group">
                                    <label for="exampleInputPassword1">Website Link</label>
                                    <input type="text"  value="{{$links->website_link}}"  class="form-control @error('website_link') is-invalid @enderror" required="" name="website_link" id="bangla">

                                    @error('website_link')
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


        </div>

    </div>













    </div>



@endsection

