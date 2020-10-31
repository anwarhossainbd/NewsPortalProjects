@extends('Backend.master')

@section('bodypart')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Update Prayering Time</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Update Prayering Time</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>






        <div class="col-8 offset-2">
            <!-- general form elements -->
            <div class="card card-warning">
                <div class="card-header text-center">
                    <h3 class="text-center"> <b> Update Prayering Time </b></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('prayer.update',['id'=>$links->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body ">
                        <div class="row">
                            <div class="form-group col-6">
                                <label >Fajor </label>
                                <input type="text" value="{{$links->fojor}}"  class="form-control @error('fojor') is-invalid @enderror" name="fojor"  >

                                @error('fojor')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-6">
                                <label >Johor </label>
                                <input type="text" value="{{$links->johor}}"  class="form-control @error('johor') is-invalid @enderror" name="johor"  >

                                @error('johor')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-6">
                                <label >Asor </label>
                                <input type="text"  value="{{$links->asor}}" class="form-control @error('asor') is-invalid @enderror" name="asor" >

                                @error('asor')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-6">
                                <label >Magrib </label>
                                <input type="text"  value="{{$links->magrib}}" class="form-control @error('magrib') is-invalid @enderror" name="magrib" >

                                @error('magrib')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label >Esha </label>
                                <input type="text"  value="{{$links->esha}}" class="form-control @error('esha') is-invalid @enderror" name="esha" >

                                @error('esha')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-6">
                                <label >Jumma </label>
                                <input type="text"  value="{{$links->jumma}}" class="form-control @error('jumma') is-invalid @enderror" name="jumma" >

                                @error('jumma')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>








                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer col-12">
                        <button type="submit" class="btn btn-success btn-block">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->



        </div>












    </div>

@endsection

