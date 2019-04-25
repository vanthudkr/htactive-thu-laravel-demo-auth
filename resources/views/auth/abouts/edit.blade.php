@extends('layouts.examples.dashboard')
@include('side-bar')
@section('about-table')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <p class="card-title font-weight-bold text-center "> You are editing with <span style="color: gold">{{$about -> title}}</span> title</p>
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
                    </div>
                    <div class="card-body">
                        <form action="{{ route('about.update', $about->id) }}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="name" name="title" class="form-control" id="title" placeholder="Title" value="{{ $about -> title }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Icon</label>
                                <div class="col-sm-10">
                                    <input type="icon" name="icon" class="form-control" id="icon" placeholder="fas fa-laptop" value="{{ $about -> icon }}"><a href="https://fontawesome.com/icons?d=gallery">You can fllow me !</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content" class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea name="content" class="form-control" id="content" rows="3" placeholder="Content">{{ $about -> content }}</textarea>
                                </div>
                            </div>
                            <a class="btn btn-primary" href="{{ route('about.index') }}">Cancel</a>
                            <button style="float: right" type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('footer')
