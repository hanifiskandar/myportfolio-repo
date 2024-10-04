@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Reference Setup</h4>
                            <form action="{{ route('reference.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name *</label>
                                    <div class="col-sm-10">
                                        <input name="name" class="form-control" type="text" id="name">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="position" class="col-sm-2 col-form-label">Position *</label>
                                    <div class="col-sm-10">
                                        <input name="position" class="form-control" type="text" id="position">
                                        @error('position')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email *</label>
                                    <div class="col-sm-10">
                                        <input name="email" class="form-control" type="email" id="email">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="phone" class="col-sm-2 col-form-label">Phone *</label>
                                    <div class="col-sm-10">
                                        <input name="phone" class="form-control" type="text" id="phone">
                                        @error('position')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
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
