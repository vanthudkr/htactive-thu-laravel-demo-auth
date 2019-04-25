@extends('layouts.examples.dashboard')
@include('side-bar')
@section('content')
<div class="content">
    <div class="container-fluid">
        @if(Session::has('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <p>{{ Session::get('success') }}</p>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">About Table</h4>
                        <p class="card-category"> Here you can do anything !!!</p>
                        <a href="{{ route('about.create') }}">
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
                                        <td> <i class="{{ $about -> icon }}"> </i> </td>
                                        <td>{{ str_limit($about -> content, 100) }}</td>
                                        <td>
                                            <a href="{{ route('about.show', $about['id']) }}"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('about.edit' ,$about['id']) }}"><i class="fas fa-edit"></i></a>
                                            <form style="margin-left: 36px; margin-top: -26px" action="{{ route('about.destroy', $about['id'])}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button onclick="return confirm('Are you sure?')" style="border:0px; background-color: #ffffff; color: #9c27b0; cursor: pointer" type="submit"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div style="padding-left: 40%">{{$abouts->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('footer')
