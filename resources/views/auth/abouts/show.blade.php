@extends('layouts.examples.dashboard')
@include('side-bar')
@section('about-table')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">The about {{ $about -> title }}</h4>
                        <p class="card-category"> Here you can view anything of the about {{ $about -> title }} !!!</p>
                        <a style="float: right; margin:inherit" class="btn btn-primary button-create" href="{{ route('about.index') }}"><i class="i-create fas fa-backward"></i>Back</a>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <p> {{ $about -> title }} </p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Icon</label>
                            <div class="col-sm-10">
                                <i class="{{ $about -> icon }}"> {{ $about -> icon }}</i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <p> {{ $about -> content }} </p>
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
