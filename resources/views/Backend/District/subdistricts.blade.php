@extends('Backend.master')

@section('bodypart')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">SubDistrict</h1>
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


        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> SubDistricts DataTable </h3>
                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg" style="float: right"> Add New</button>
            </div>

            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                Launch Large Modal
            </button>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>SubDistrict Name Bangla</th>
                        <th>SubDistrict Name English</th>
                        <th>District </th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>

                  @foreach($district as $districts)

                        <tr>
                            <td>{{$districts->subdistrict_bn}}</td>
                            <td>{{$districts->subdistrict_en}}</td>
                            <td>{{$districts->district_en}}</td>
                           <td>


                                <a href="{{route('edit.subdistricts',['id'=>$districts->id])}}"  class="btn btn-info"><i class="fas fa-edit"></i> </a>

                                <a href="{{route('delete.subdistrict',['id'=>$districts->id])}}" id="delete"  class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
                            </td>

                        </tr>

                    @endforeach



                    </tbody>

                </table>
            </div>

        </div>

    </div>



    //Curriculam of Modal




    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add SubDistricts</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('store.subdistrict')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">SubDistricts Name English</label>
                            <input type="text" class="form-control @error('subdistrict_en') is-invalid @enderror" required="" name="subdistrict_en" id="english" >

                            @error('subdistrict_en')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">SubDistricts Name Bangla</label>
                            <input type="text" class="form-control @error('subdistrict_bn') is-invalid @enderror" required="" name="subdistrict_bn" id="bangla">

                            @error('subdistrict_bn')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group">

                            <select class="form-control" name="district_id" required>
                                <option>---Select Districts---</option>
                                @foreach($dis as $districts)
                                    <option value="{{$districts->id}}"> {{$districts->district_en}}| {{$districts->district_bn}}</option>
                                @endforeach
                            </select>

                        </div>




                        <button type="submit" class="btn btn-primary"  >Submit</button>
                    </form>
                </div>

            </div>

        </div>

    </div>




    </div>



@endsection


