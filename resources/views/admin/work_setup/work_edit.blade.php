@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

        <h4 class="card-title">Update Work</h4>
        <form action="{{ route('update.work') }}" method="POST" enctype="multipart/form-data">
            @csrf

        
            <input type="hidden" name="id" value="{{ $work->id }}">

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" class="form-control" type="text" value="{{ $work->title }}"
                        id="example-text-input">
                        
                </div>
            </div>
            <!-- end row -->

    

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Intro</label>
                <div class="col-sm-10">
                    <input name="intro" class="form-control" type="text" value="{{ $work->intro }}"
                        id="example-text-input">
                        
                </div>
            </div>
            <!-- end row -->

          

        

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea id="elm1" name="description">
                        {{ $work->description }}
                    </textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Work Image</label>
                <div class="col-sm-10">
                    <input name="image" class="form-control" type="file" 
                        id="image" >
                </div>
            </div>

            
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"></label>

                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-xl" src="{{ asset($work->image) }}"


                    alt="Card image cap">
                </div>
            </div>
            <!-- end row -->

                            <input type="submit" class="btn btn-info  waves-effect waves-light" value="Update Work">
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>


{{-- show image pakai jquery --}}
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })
</script>
@endsection