@extends('Backend.master')

@section('bodypart')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">SubCategories</h1>
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


        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> SubCategories DataTable </h3>
                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg" style="float: right"> Add New</button>
            </div>



            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>SubCategory Name Bangla</th>
                        <th>SubCategory Name English</th>
                        <th>Category </th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>

                  @foreach($subcategories as $category)

                        <tr>
                            <td>{{$category->subcategory_bn}}</td>
                            <td>{{$category->subcategory_en}}</td>
                            <td>{{$category->category_en}}</td>
                            <td>

                                <a href="{{route('edit.subcategory',['id'=>$category->id])}}"  class="btn btn-info"><i class="fas fa-edit"></i> </a>
                                <a href="{{route('delete.subcategory',['id'=>$category->id])}}" id="delete"  class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
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
                    <h4 class="modal-title">Add SubCategories</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('store.subcategory')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">SubCategory Name English</label>
                            <input type="text" class="form-control @error('subcategory_en') is-invalid @enderror" required="" name="subcategory_en" id="english" >

                            @error('subcategory_en')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">SubCategory Name Bangla</label>
                            <input type="text" class="form-control @error('subcategory_bn') is-invalid @enderror" required="" name="subcategory_bn" id="bangla">

                            @error('subcategory_bn')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group">

                            <select class="form-control" name="category_id" required>
                                <option>---Select Category</option>
                                @foreach($catagories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->category_en}}|{{$cat->category_bn}}</option>
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

