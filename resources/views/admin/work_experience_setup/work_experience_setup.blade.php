@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Work Experience Setup</h4>
                            <form action="{{ route('work-experience.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                                <div class="row mb-3">
                                    <label for="position" class="col-sm-2 col-form-label">Position</label>
                                    <div class="col-sm-10">
                                        <input name="position" class="form-control" type="text" id="position">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="company_name" class="col-sm-2 col-form-label">Company</label>
                                    <div class="col-sm-10">
                                        <input name="company_name" class="form-control" type="text" id="company_name">
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
                                    <label for="is_role" class="col-sm-2 col-form-label">Still in role</label>
                                    <div class="col-sm-10">
                                        <input name="is_role" class="form-check-input" type="checkbox" id="is_role">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="description">
                                          
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
