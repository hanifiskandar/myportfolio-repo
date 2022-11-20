@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

        <h4 class="card-title">Home Page Setup</h4>
        <form action="{{ route('store.home') }}" method="POST">
            @csrf

            <input type="hidden" name="id" value="{{ $homesetup->id }}">
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">title tutut</label>
                <div class="col-sm-10">
                    <input name="title" class="form-control" type="text" value="{{ $homesetup->title }}"
                        id="example-text-input">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                <div class="col-sm-10">
                    <input name="short_description" class="form-control" type="text" value="{{ $homesetup->short_description }}"
                        id="example-text-input">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <input name="phone_number" class="form-control" type="text" value="{{ $homesetup->phone_number }}"
                        id="example-text-input">
                </div>
            </div>
            <!-- end row -->


                          
                            <input type="submit" class="btn btn-info  waves-effect waves-light" value="Update Home Area">
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