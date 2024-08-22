@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Skill Page Setup</h4>
                            <form action="{{ route('skill.store') }}" method="POST">
                                @csrf


                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Programming
                                        language</label>
                                    <div class="col-sm-10">
                                        <input name="language" class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Level</label>
                                    <div class="col-sm-10">
                                        <input name="level" class="form-control" type="number" value="1"
                                            min="1" max="100" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->



                                <input type="submit" class="btn btn-info  waves-effect waves-light" value="Insert Skill">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>

    {{-- show image pakai jquery --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
    </script>
@endsection
