@extends('Backend.master')

@section('bodypart')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Districts</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Districts</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>





        <div class="container">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('update.district',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">District Name English</label>
                                <input type="text" value="{{$data->district_en}}" class="form-control @error('district_en') is-invalid @enderror" required="" name="district_en" id="english" >

                                @error('district_en')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">District Name Bangla</label>
                                <input type="text"  value="{{$data->district_bn}}"  class="form-control @error('district_bn') is-invalid @enderror" required="" name="district_bn" id="bangla">

                                @error('district_bn')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>

                            <button type="submit" class="btn btn-primary"  >Update</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>











    </div>





    </div>



@endsection


