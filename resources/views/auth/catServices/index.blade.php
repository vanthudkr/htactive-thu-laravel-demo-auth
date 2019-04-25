@extends('layouts.examples.dashboard')
@include('side-bar')
@section('catService-table')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <p>{{ Session::get('success') }}</p>
                </div>
                @endif
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">The category table of service</h4>
                        <p class="card-category"> Here you can do anything !!!</p>
                        <a href="{{ route('catService.create') }}">
                            <button class="button-create btn btn-primary"><i class="i-create fas fa-plus-square"></i>Create New Category Service</button>
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
                                    @foreach($catServices as $catService)
                                    <tr>
                                        <td>{{ $catService -> id }}</td>
                                        <td>{{ $catService -> title }}</td>
                                        <td> <i class="{{ $catService -> icon }}"> </i> </td>
                                        <td>{{ str_limit($catService -> content, 100) }}</td>
                                        <td>
                                            <a href="{{ route('catService.show', $catService['id']) }}"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('catService.edit' ,$catService['id']) }}"><i class="fas fa-edit"></i></a>
                                            <form style="margin-left: 36px; margin-top: -26px" action="{{ route('catService.destroy', $catService['id'])}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button onclick="return confirm('Are you sure?')" style="border:0px; background-color: #ffffff; color: #9c27b0; cursor: pointer" type="submit"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="paginate">{{$catServices->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('footer')
