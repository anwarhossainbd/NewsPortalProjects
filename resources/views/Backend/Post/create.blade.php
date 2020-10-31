@extends('Backend.master')

@section('bodypart')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Post Insert Panal</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Post Insert Panal</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>







        <div class="col-10 offset-1">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Post Insert Panal</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('store.post')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body ">
                        <div class="row">
                        <div class="form-group col-6">
                            <label >Title Bangla</label>
                            <input type="text" class="form-control @error('title_bn') is-invalid @enderror" name="title_bn"  placeholder="Enter title">

                            @error('title_bn')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group col-6">
                            <label >Title English </label>
                            <input type="text" class="form-control @error('title_en') is-invalid @enderror" name="title_en"  placeholder="Enter title">
                            @error('title_en')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        </div>




                        <div class="form-group row">

                            <div class="form-group col-6">
                                <label >District</label>
                                <select class="form-control" name="dist_id" required>
                                    <option>---Select District---</option>
                                    @foreach($district as $dist)
                                        <option value="{{$dist->id}}" > {{$dist->district_en}}|{{$dist->district_bn}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group col-6">
                                <label >Sub District</label>
                                <select class="form-control" name="subdist_id" id="subdist_id" required>
                                    <option>---Select Sub District---</option>

                                </select>



                            </div>




                        </div>


                        <div class="form-group row">

                            <div class="form-group col-6">
                                <label >Category</label>
                                <select class="form-control" name="cat_id" required>
                                    <option>---Select Category---</option>
                                    @foreach($category as $cat)
                                        <option value="{{$cat->id}}" > {{$cat->category_en}}|{{$cat->category_bn}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group col-6">
                                <label >Sub Category</label>
                                <select class="form-control" name="subcat_id"  id="subcat_id" required>
                                    <option >---choose one---</option>

                                </select>





                            </div>

                        </div>


                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    {{--<img id="showImage"  height="100px" width="120px">--}}

                                    <input type="file" id="image"  class="custom-file-input" name="image" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-6">
                                <label >Tags Bangla</label>
                                <input type="text" class="form-control @error('tags_bn') is-invalid @enderror" name="tags_bn"  placeholder="Enter title">

                                @error('tags_bn')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-6">
                                <label >Tags English </label>
                                <input type="text" class="form-control @error('tags_en') is-invalid @enderror" name="tags_en"  placeholder="Enter title">
                                @error('tags_en')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>







                        <div class="form-group col-12">
                            <label >Details English</label>
                                            <div class="mb-3">
                                                <textarea class="textarea" name="details_en" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"></textarea>
                                            </div>
                            @error('details_en')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="form-group col-12">
                            <label >Details Bangla</label>
                            <div class="mb-3">
                                <textarea class="textarea" name="details_bn" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"></textarea>
                            </div>
                            @error('details_bn')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group text-center">
                            <label ><h2> Extra option</h2></label>

                            <div class="row">

                            <div class="col-3">
                                <div class="form-check">
                                    <input type="checkbox" name="headline" value="1" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Headline</label>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-check">
                                    <input type="checkbox" name="big_thumbnail" value="1" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Big Thumbnail</label>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-check">
                                    <input type="checkbox" name="first_section" value="1" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">First Section</label>
                                </div>
                            </div>

                                <div class="col-3">
                                    <div class="form-check">
                                        <input type="checkbox" name="first_section_thumbnail" value="1" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">First Section Thumbnail</label>
                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer col-6 offset-3">
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->



        </div>












    </div>














    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="cat_id"]').on('change', function(){
                var cat_id = $(this).val();
                if(cat_id) {
                    $.ajax({
                        url: "{{  url('/get/subcat/') }}/"+cat_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            $("#subcat_id").empty();
                            $.each(data,function(key,value){
                                $("#subcat_id").append('<option value="'+value.id+'">'+value.subcategory_en+'</option>');
                            });

                        },

                    });
                } else {
                    alert('danger');
                }

            });
        });

    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="dist_id"]').on('change', function(){
                var dist_id = $(this).val();
                if(dist_id) {
                    $.ajax({
                        url: "{{  url('/get/subdist/') }}/"+dist_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            $("#subdist_id").empty();
                            $.each(data,function(key,value){
                                $("#subdist_id").append('<option value="'+value.id+'">'+value.subdistrict_en+'</option>');
                            });

                        },

                    });
                } else {
                    alert('danger');
                }

            });
        });

    </script>


@endsection


