@extends('layouts.examples.dashboard')
@include('side-bar')
@section('choose-table')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">The choose {{ $choose -> title }}</h4>
                        <p class="card-category"> Here you can view anything of the choose {{ $choose -> title }} !!!</p>
                        <a style="float: right; margin:inherit" class="btn btn-primary button-create" href="{{ route('choose.index') }}"><i class="i-create fas fa-backward"></i>Back</a>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <p> {{ $choose -> title }} </p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <img id="blah" src="{{ $choose->image ? asset($choose -> image) : 'http://placehold.it/50x50' }}" height="50px" width="50px" alt="your image" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <p> {{ $choose -> content }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@include('footer')
