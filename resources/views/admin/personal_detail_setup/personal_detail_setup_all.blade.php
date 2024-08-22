@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Personal Detail Setup</h4>
                        <form action="{{ route('personal-detail.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input name="title" class="form-control" type="text"
                                        id="example-text-input" value="{{ $personal_detail->title}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">About Image</label>
                                <div class="col-sm-10">
                                    <input name="about_image" class="form-control" type="file" 
                                        id="image" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-xl" src="{{ (!empty($personal_detail->about_image))?url($personal_detail->about_image):url('upload/no_image.jpg') }}"alt="Card image cap">
                                </div>
                            </div>
                
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Personal Summary</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="summary">
                                        {{ $personal_detail->summary }}
                                    </textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Website</label>
                                <div class="col-sm-10">
                                    <input name="website" class="form-control" type="text"
                                        id="example-text-input" value="{{ $personal_detail->website}}">
                                </div>
                            </div>

                            <!-- Row for Job and Phone Number side by side -->
                            <div class="row mb-3">
                                <label for="age" class="col-sm-2 col-form-label">Age</label>
                                <div class="col-sm-4">
                                    <input name="age" class="form-control" type="text" value="{{ $personal_detail->age }}" id="age">
                                </div>

                                <label for="birthday" class="col-sm-2 col-form-label">Birthday</label>
                                <div class="col-sm-4">
                                    <input name="birthday" class="form-control" type="text" value="{{ $personal_detail->birthday }}" id="birthday">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-4">
                                    <input name="phone" class="form-control" type="text" value="{{ $personal_detail->phone }}" id="phone">
                                </div>

                                {{-- <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-4">
                                    <input name="email" class="form-control" type="email" value="" id="email">
                                </div> --}}
                            </div>

                            <div class="row mb-3">
                                <label for="city" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-4">
                                    <input name="city" class="form-control" type="text" value="{{ $personal_detail->city }}" id="city">
                                </div>

                                <label for="freelance" class="col-sm-2 col-form-label">Freelance</label>
                                <div class="col-sm-4">
                                    <input name="freelance" class="form-control" type="text" value="{{ $personal_detail->freelance }}" id="freelance">
                                </div>
                            </div>

                            <!-- end row -->

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Home Area">
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