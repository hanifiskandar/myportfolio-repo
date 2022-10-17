@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

        <h4 class="card-title">About Setup</h4>
        <form action="{{ route('store.about') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{ $aboutsetup->id }}">


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" class="form-control" type="text" value=" {{ $aboutsetup->title }}"
                        id="example-text-input">
                        
                </div>
            </div>
            <!-- end row -->

    

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Job</label>
                <div class="col-sm-10">
                    <input name="job" class="form-control" type="text" value=" {{ $aboutsetup->job }}"
                        id="example-text-input">
                        
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Short Intro</label>
                <div class="col-sm-10">
                    <input name="short_intro" class="form-control" type="text" value=" {{ $aboutsetup->short_intro }}"
                        id="example-text-input">
                        
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Birthday</label>
                <div class="col-sm-10">
                    <input name="birthday" class="form-control" type="text" value=" {{ $aboutsetup->birthday }}"
                        id="example-text-input">
                        
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Website</label>
                <div class="col-sm-10">
                    <input name="website" class="form-control" type="text" value=" {{ $aboutsetup->website }}"
                        id="example-text-input">
                        
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input name="phone" class="form-control" type="text" value=" {{ $aboutsetup->phone }}"
                        id="example-text-input">
                        
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
                    <input name="city" class="form-control" type="text" value=" {{ $aboutsetup->city }}"
                        id="example-text-input">
                        
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                    <input name="age" class="form-control" type="text" value=" {{ $aboutsetup->age }}"
                        id="example-text-input">
                        
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Degree</label>
                <div class="col-sm-10">
                    <input name="degree" class="form-control" type="text" value=" {{ $aboutsetup->degree }}"
                        id="example-text-input">
                        
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" class="form-control" type="email" value=" {{ $aboutsetup->email }}"
                        id="example-text-input">
                        
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Freelance</label>
                <div class="col-sm-10">
                    <input name="freelance" class="form-control" type="text" value=" {{ $aboutsetup->freelance }}"
                        id="example-text-input">
                        
                </div>
            </div>
            <!-- end row -->





            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Long Description</label>
                <div class="col-sm-10">
                    <textarea id="elm1" name="long_intro">
                        {{ $aboutsetup->long_intro }}
                    </textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">About Image</label>
                <div class="col-sm-10">
                    <input name="about_image" class="form-control" type="file" 
                        id="image" >
                </div>
            </div>

            
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"></label>

                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-xl" src="{{ (!empty($aboutsetup->about_image))?url($aboutsetup->about_image):url('upload/no_image.jpg') }}"


                    alt="Card image cap">
                </div>
            </div>
            <!-- end row -->

                            <input type="submit" class="btn btn-info  waves-effect waves-light" value="Update About">
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