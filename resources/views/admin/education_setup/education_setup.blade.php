@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Education Setup</h4>
                            <form action="{{ route('education.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                                <div class="row mb-3">
                                    <label for="course" class="col-sm-2 col-form-label">Course</label>
                                    <div class="col-sm-10">
                                        <input name="course" class="form-control" type="text" id="course">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="institution" class="col-sm-2 col-form-label">Institution</label>
                                    <div class="col-sm-10">
                                        <input name="institution" class="form-control" type="text" id="institution">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="start_date" class="col-sm-2 col-form-label">Start Date</label>
                                    <div class="col-sm-10">
                                        <input name="start_date" class="form-control" placeholder="dd-mm-yyyy"
                                            type="date" id="start_date">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="end_date" class="col-sm-2 col-form-label">End Date</label>
                                    <div class="col-sm-10">
                                        <input name="end_date" class="form-control" placeholder="dd-mm-yyyy" type="date"
                                            id="end_date">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="is_finished" class="col-sm-2 col-form-label">Finished</label>
                                    <div class="col-sm-10">
                                        <input name="is_finished" class="form-check-input" type="checkbox" id="is_finished">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="course_highlight" class="col-sm-2 col-form-label">Course highlight</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="course_highlight">
                                          
                                        </textarea>
                                    </div>
                                </div>


                                <input type="submit" class="btn btn-info  waves-effect waves-light" value="Save Data">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
