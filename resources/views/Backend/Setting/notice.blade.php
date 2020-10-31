@extends('Backend.master')

@section('bodypart')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Update Notices</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Update Notices</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>






        <div class="col-8 offset-2">
              <!-- general form elements -->
              <div class="card card-info">
                  <div class="card-header text-center">
                      <h3 class="text-center"> <b> Update Notices </b></h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->

                  <div class="row ">
                      <div class="col-9">
                          <input type="hidden">
                      </div>




                     <div class="col-2 mt-3">
                          @if($links->status==0)
                              <a href="{{route('activenotice',['id'=>$links->id])}}" class="btn btn-success"> Active </a>
                          @endif
                          @if($links->status==1)
                              <a href="{{route('deactivenotice',['id'=>$links->id])}}" class="btn btn-danger"> Deactive </a>
                          @endif
                      </div>

                  </div>


                  <form action="{{route('notice.update',['id'=>$links->id])}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body ">
                          <div class="row">

                              <div class="form-group col-10 offset-1">
                                  <br>
                                  <label class="text-center">Notices  English</label>


                                  <textarea rows="3" class="form-control @error('notice') is-invalid @enderror" name="notice" >{{$links->notice}} </textarea>

                                  <br>
                                  <label class="text-center">Notices  Bangla </label>

                                  <textarea rows="3" class="form-control @error('notice_bn') is-invalid @enderror" name="notice_bn" >{{$links->notice_bn}} </textarea>


                                  @error('notice_bn')
                                  <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror


                                  @if($links->status==0)
                                      <h4 class="text-danger"> Your Notice is not Active</h4>
                                  @endif

                                  @if($links->status==1)
                                      <h4 class="text-success"> Your Notice is  Active</h4>
                                  @endif

                              </div>
                          </div>

                          <div class="card-footer col-10 offset-1">
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </div>

                      </div>



                  </form>
              </div>
              <!-- /.card -->



          </div>












    </div>

@endsection




