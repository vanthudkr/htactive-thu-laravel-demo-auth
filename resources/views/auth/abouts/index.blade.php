@extends('layouts.examples.dashboard')
@include('side-bar')
@section('about-table')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">About Table</h4>
                        <p class="card-category"> Here you can do anything !!!</p>
                        <a href="">
                            <button class="button-create btn btn-primary"><i class="i-create fas fa-plus-square"></i>Create New About</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Icon</th>
                                    <th>Content</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($abouts as $about)
                                    <tr>
                                        <td>{{ $about -> id }}</td>
                                        <td>{{ $about -> title }}</td>
                                        <td> <i class="{{ $about -> icon }}"></i> </td>
                                        <td>{{ $about -> content }}</td>
                                        <td>
                                            <a href=" #"><i class="fas fa-eye"></i></a>
                                            <a href="#"><i class="fas fa-edit"></i></a>
                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('footer')