@extends('Backend.master')

@section('bodypart')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit SubCategories</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">SubCategories</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>





        <div class="container">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('update.subcategory',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">SubCategory Name English</label>
                                <input type="text" value="{{$data->subcategory_en}}" class="form-control @error('subcategory_en') is-invalid @enderror" required="" name="subcategory_en" id="english" >

                                @error('subcategory_en')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">SubCategory Name Bangla</label>
                                <input type="text"  value="{{$data->subcategory_bn}}"  class="form-control @error('subcategory_bn') is-invalid @enderror" required="" name="subcategory_bn" id="bangla">

                                @error('subcategory_bn')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">

                                <select class="form-control" name="category_id" required>
                                    <option>---Select Category---</option>
                                    @foreach($catagories as $cat)
                                        <option value="{{$cat->id}}" @if ($cat->id==$data->category_id) {{'selected'}} @endif >{{$cat->category_en}}|{{$cat->category_bn}}</option>
                                    @endforeach
                                </select>

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


