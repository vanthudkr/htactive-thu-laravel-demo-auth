@extends('layouts.examples.dashboard')
@include('side-bar')
@section('service-table')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Service Table</h4>
                        <p class="card-category"> Here you can do anything !!!</p>
                        <a href="{{ route('service-create') }}">
                            <button class="button-create btn btn-primary"><i class="i-create fas fa-plus-square"></i>Create New Service</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Content</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($services as $service)
                                    <tr>
                                        <td>{{ $service -> id }}</td>
                                        <td>{{ $service -> title }}</td>
                                        <td> <img src="{{ asset($service -> image) }}" width="50" height="50" alt=""> </td>
                                        <td>{{ $service->catService ? $service->catService->title : 'Uncategorized' }}</td>
                                        <td>{{ $service -> content }}</td>
                                        <td>
                                            <a href=" #"><i class="fas fa-eye"></i></a>
                                            <a href="#"><i class="fas fa-edit"></i></a>
                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div style="padding-left: 40%">{{$services->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('footer')
