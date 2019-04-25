@extends('layouts.examples.dashboard')
@include('side-bar')
@section('choose-table')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">choose Table</h4>
                        <p class="card-category"> Here you can do anything !!!</p>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                        @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{ \Session::get('success') }}</p>
                        </div><br />
                        @endif
                        <a href="{{ route('choose.create') }}">
                            <button class="button-create btn btn-primary button-create"><i class="i-create fas fa-plus-square"></i>Create New choose</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Content</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($chooses as $choose)
                                    <tr>
                                        <td>{{ $choose -> id }}</td>
                                        <td>{{ $choose -> title }}</td>
                                        <td> <img src="{{$choose->image ? asset($choose -> image) : 'http://placehold.it/50x50'}}" width="50" height="50" alt=""> </td>
                                        <td>{{ str_limit($choose -> content, 100) }}</td>
                                        <td>
                                            <a href="{{ route('choose.show', $choose['id']) }}"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('choose.edit', $choose['id']) }}"><i class="fas fa-edit"></i></a>
                                            <form style="margin-left: 36px; margin-top: -26px" action="{{ route('choose.destroy', $choose['id'])}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button onclick="return confirm('Are you sure?')" style="border:0px; background-color: #ffffff; color: #9c27b0; cursor: pointer" type="submit"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="paginate">{{$chooses->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('footer')
