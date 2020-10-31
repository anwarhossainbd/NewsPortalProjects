@extends('Backend.master')

@section('bodypart')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit SubDistrict</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">SubDistrict</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>





       <div class="container">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('update.subdistrict',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">SubDistrict Name English</label>
                                <input type="text" value="{{$data->subdistrict_en}}" class="form-control @error('subdistrict_en') is-invalid @enderror" required="" name="subdistrict_en" id="english" >

                                @error('subdistrict_en')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">SubDistrict Name Bangla</label>
                                <input type="text"  value="{{$data->subdistrict_bn}}"  class="form-control @error('subdistrict_bn') is-invalid @enderror" required="" name="subdistrict_bn" id="bangla">

                                @error('subdistrict_bn')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">

                                <select class="form-control" name="district_id" required>
                                    <option>---Select District---</option>
                                  @foreach($districts as $distri)
                                      <option value="{{$distri->id}}" @if($distri->id==$data->district_id) {{'selected'}}  @endif>{{$distri->district_en}}|{{$distri->district_bn}}</option>
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


