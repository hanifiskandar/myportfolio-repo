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

                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title *</label>
                                <div class="col-sm-10">
                                    <input name="title" class="form-control" type="text"
                                        id="example-text-input" value="{{ $personal_detail->title ?? ''}}">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input name="image" class="form-control" type="file" 
                                        id="image" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-xl" src="{{ (!empty($personal_detail->image))?url($personal_detail->image):url('upload/no_image.jpg') }}"alt="Card image cap">
                                </div>
                            </div>
                
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Personal Summary *</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="summary">
                                        {{ $personal_detail->summary ?? '' }}
                                    </textarea>
                                    @error('summary')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Job *</label>
                                <div class="col-sm-10">
                                    <input name="job" class="form-control" type="text"
                                        id="example-text-input" value="{{ $personal_detail->job ?? ''}}">
                                    @error('job')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="age" class="col-sm-2 col-form-label">Age *</label>
                                <div class="col-sm-4">
                                    <input name="age" class="form-control" type="text" value="{{ $personal_detail->age ?? '' }}" id="age">
                                    @error('age')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <label for="birthday" class="col-sm-2 col-form-label">Birthday</label>
                                <div class="col-sm-4">
                                    <input name="birthday" class="form-control"  placeholder="dd-mm-yyyy" type="date" value="{{ $personal_detail->birthday ?? '' }}" id="birthday">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone" class="col-sm-2 col-form-label">Phone *</label>
                                <div class="col-sm-4">
                                    <input name="phone" class="form-control" type="text" value="{{ $personal_detail->phone ?? '' }}" id="phone">
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Address *</label>
                                <div class="col-sm-10">
                                    <input name="address" class="form-control" type="text"
                                        id="example-text-input" value="{{ $personal_detail->address ?? ''}}">
                                    @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="freelance" class="col-sm-2 col-form-label">Freelance</label>
                                <div class="col-sm-4">
                                    <select name="freelance" class="form-control" id="freelance">
                                        <option value="No" {{ !empty($personal_detail) && $personal_detail->freelance === 'No' ? 'selected' : '' }}>
                                            No
                                        </option>
                                        <option value="Yes" {{ !empty($personal_detail) && $personal_detail->freelance === 'Yes' ? 'selected' : '' }}>
                                            Yes
                                        </option>
                                    </select>                              
                                </div>

                                <label for="website" class="col-sm-2 col-form-label">Website</label>
                                <div class="col-sm-4">
                                    <input name="website" class="form-control" type="text" value="{{ $personal_detail->website ?? '' }}" id="website">
                                </div>

                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Expected Salary</label>
                                <div class="col-sm-10">
                                    <input name="expected_salary" class="form-control" type="text"
                                        id="example-text-input" value="{{ $personal_detail->expected_salary ?? ''}}">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="availability" class="col-sm-2 col-form-label">Availability</label>
                                <div class="col-sm-10">
                                    <select name="availability" class="form-control" id="availability">
                                        <option value="" disabled {{ empty($personal_detail) || !$personal_detail->availability ? 'selected' : '' }}>
                                            Select your availability
                                        </option>
                                        <option value="Now" {{ !empty($personal_detail) && $personal_detail->availability == 'Now' ? 'selected' : '' }}>
                                            Now
                                        </option>
                                        <option value="2 weeks" {{ !empty($personal_detail) && $personal_detail->availability == '2 weeks' ? 'selected' : '' }}>
                                            2 weeks
                                        </option>
                                        <option value="1 month" {{ !empty($personal_detail) && $personal_detail->availability == '1 month' ? 'selected' : '' }}>
                                            1 month
                                        </option>
                                        <option value="2 months" {{ !empty($personal_detail) && $personal_detail->availability == '2 months' ? 'selected' : '' }}>
                                            2 months
                                        </option>
                                        <option value="More than 2 months" {{ !empty($personal_detail) && $personal_detail->availability == 'More than 2 months' ? 'selected' : '' }}>
                                            More than 2 months
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="employment_type" class="col-sm-2 col-form-label">Employment Type</label>
                                <div class="col-sm-10">
                                    <select name="employment_type" class="form-control" id="employment_type">
                                        <option value="" disabled {{ empty($personal_detail) || !$personal_detail->employment_type ? 'selected' : '' }}>
                                            Preferred employement type
                                        </option>
                                        <option value="Full Time" {{ !empty($personal_detail) && $personal_detail->employment_type == 'Now' ? 'selected' : '' }}>
                                            Full Time
                                        </option>
                                        <option value="Part Time" {{ !empty($personal_detail) && $personal_detail->employment_type == '2 weeks' ? 'selected' : '' }}>
                                            Part Time
                                        </option>
                                        <option value="Contract" {{ !empty($personal_detail) && $personal_detail->employment_type == '1 month' ? 'selected' : '' }}>
                                            Contract
                                        </option>
                                    </select>
                                </div>
                            </div>
                            
                            
                            <!-- end row -->

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Save Data">
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