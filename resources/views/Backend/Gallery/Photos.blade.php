@extends('Backend.master')

@section('bodypart')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Photo Gallary</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Photo Gallary</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Photo Gallary </h3>
                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg" style="float: right"> Add New</button>
            </div>

            {{--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                Launch Large Modal
            </button>--}}

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Type</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($data as $datam)

                        <tr>
                            <td>{{$datam->title}}</td>
                            <td class="text-center"><img src="{{URL::to($datam->photo)}}" height="80px" width="100px"> </td>
                            <td>
                                @if($datam->type ==1)

                                    <span class="badge badge-success"> Big Image</span>
                                    @else

                                    <span class="badge badge-warning"> Small Image</span>

                                @endif
                               </td>
                            <td>

                                <a href="{{route('edit.photos',['id'=>$datam->id])}}"  class="btn btn-info"><i class="fas fa-edit"></i> </a>
                                <a href="{{route('delete.photos',['id'=>$datam->id])}}" id="delete"  class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
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
                    <form action="{{route('store.photos')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" required="" name="title" id="english" >

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Image</label>
                            <input type="file" class="form-control @error('photo') is-invalid @enderror" required="" name="photo">

                            @error('photo')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1">Type</label>

                            <select class="form-control" name="type">

                            <option>---Select Image type---  </option>
                                <option value="0"> Small Image </option>
                                <option value="1">Big Image </option>

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




    </div>



@endsection

