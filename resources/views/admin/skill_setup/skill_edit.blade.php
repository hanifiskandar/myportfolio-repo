@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

        <h4 class="card-title">Skill Setup Edit</h4>
        <form action="{{ route('skill.update',['id' => $skill->id]) }}" method="POST">
            @csrf
            @method('put')

        
            <!-- end row -->
            <input type="hidden" name="id" value="{{ $skill->id }}">

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Programming language</label>
                <div class="col-sm-10">
                    <input name="language" class="form-control" type="text" value="{{ $skill->language }}"
                        id="example-text-input">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-10">
                    <input name="level" class="form-control" type="number" value="{{ $skill->level }}" min="1" max="100" 
                        id="example-text-input">
                </div>
            </div>
            <!-- end row -->


                          
                            <input type="submit" class="btn btn-info  waves-effect waves-light" value="Update Skill">
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