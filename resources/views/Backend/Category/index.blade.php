@extends('Backend.master')

@section('bodypart')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Categories</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Categories DataTable </h3>
                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg" style="float: right"> Add New</button>
            </div>

            {{--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                Launch Large Modal
            </button>--}}

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Category Name Bangla</th>
                        <th>Category Name English</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($categories as $category)

                    <tr>
                        <td>{{$category->category_bn}}</td>
                        <td>{{$category->category_en}}</td>
                        <td>

                            <a href="{{route('edit.category',['id'=>$category->id])}}"  class="btn btn-info"><i class="fas fa-edit"></i> </a>
                            <a href="{{route('delete.category',['id'=>$category->id])}}" id="delete"  class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
                        </td>

                    </tr>

                    @endforeach



                    </tbody>

                </table>
            </div>

        </div>

    </div>



{{-- //Curriculam of Modal--}}




    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Categories</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('store.category')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name English</label>
                            <input type="text" class="form-control @error('category_en') is-invalid @enderror" required="" name="category_en" id="english" >

                            @error('category_en')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category Name Bangla</label>
                            <input type="text" class="form-control @error('category_bn') is-invalid @enderror" required="" name="category_bn" id="bangla">

                            @error('category_bn')
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



@endsection
