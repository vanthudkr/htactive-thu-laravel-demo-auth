@extends('layouts.examples.dashboard')
@include('side-bar')
@section('about-table')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                <div class="card">
                    <div class="card-header card-header-primary">
                        <p class="card-title font-weight-bold text-center "> You are standing at create about page </p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="name" name="title" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                                <div class="col-sm-10">
                                    <input type="icon" name="icon" class="form-control" id="icon" placeholder="fas fa-laptop" value="{{ old('icon') }}"><a href="https://fontawesome.com/icons?d=gallery">You can fllow me !</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content" class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea name="content" class="form-control" id="content" rows="3" placeholder="Content">{{ old('content') }}</textarea>
                                </div>
                            </div>
                            <a class="btn btn-primary" href="{{ route('about.index') }}">Cancel</a>
                            <button style="float: right" type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('footer')
