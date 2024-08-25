@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Contact Us</h4>
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                                <div class="row mb-3">
                                    <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                                    <div class="col-sm-10">
                                        <input name="subject" class="form-control" type="text" id="subject">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="message" class="col-sm-2 col-form-label">Message</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="message">
                                          
                                        </textarea>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-info  waves-effect waves-light" value="Send Feeback">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
