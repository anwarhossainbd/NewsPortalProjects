@extends('Backend.master')

@section('bodypart')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">All Posts</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">All Posts</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> All Post DataTable </h3>
{{--
                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg" style="float: right"> Add New</button>
--}}
            </div>

           {{-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                Launch Large Modal
            </button>--}}

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Category</th>
                        <th>SubCategory </th>
                        <th>Title </th>
                        <th>Thumbnil</th>
                        <th>Date</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>

                 @foreach($allpost as $posts)

                        <tr>
                            <td>{{$posts->category_en}}</td>
                            <td>{{$posts->subcategory_en}}</td>
                            <td>{{$posts->title_en}}</td>
                            <td class="text-center"><img src="{{URL::to($posts->image)}}" height="100px" width="120px"></td>
                            <td>{{$posts->post_date}}</td>
                            <td>

                                <a href="{{route('edit.subposts',['id'=>$posts->id])}}"  class="btn btn-info"><i class="fas fa-edit"></i> </a>
                                <a href="{{route('delete.subposts',['id'=>$posts->id])}}" id="delete"  class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
                            </td>


                        </tr>

                    @endforeach



                    </tbody>

                </table>
            </div>

        </div>

    </div>



    //Curriculam of Modal









    </div>



@endsection


