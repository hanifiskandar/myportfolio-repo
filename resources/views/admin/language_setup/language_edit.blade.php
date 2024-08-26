@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Language Setup Edit</h4>
                            <form action="{{ route('language.update', ['id' => $language->id]) }}" method="POST">
                                @csrf
                                @method('put')

                                <input type="hidden" name="id" value="{{ $language->id }}">

                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <input name="language" class="form-control" type="text"
                                            value="{{ $language->name }}" id="name">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="level" class="col-sm-2 col-form-label">Level</label>
                                    <div class="col-sm-10">
                                        <input name="level" class="form-control" type="number"
                                            value="{{ $language->level }}" min="1" max="100"
                                            id="level">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-info  waves-effect waves-light" value="Update language">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
