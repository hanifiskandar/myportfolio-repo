@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Resume All</h4>

                 

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Resume All Data</h4>
                      
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Action</th>
                                
                            </tr>
                            </thead>


                            <tbody>
                                @php($i=1)
                                @foreach ($resume as $item )
                                        
                               
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->location }}</td>

                                
                                <td>

                                    <a href="{{ route('resume.edit',$item->id) }}" class="btn btn-info sm" title="Edit Data">                                   
                                    <i class="fas fa-edit"></i>   
                                    </a>
                                    <a href="{{ route('resume.delete',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">                                   
                                        <i class="fas fa-trash"></i>   
                                        </a>
                                </td>
                               
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

@endsection