@extends('layouts.examples.dashboard')
@include('side-bar')
@section('service-create')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <p class="card-title font-weight-bold text-center "> You are editing with <span style="color: gold">{{$service -> title}}</span> title</p>
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
                        <form action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="name" name="title" class="form-control" id="title" placeholder="Title" value="{{ $service -> title }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="category">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="category" name="catService_id">
                                        @foreach($catService as $catService)
                                        <option value="{{ $catService->id }}" @if($service->catService->title == $catService->title) selected='selected' @endif> {{ $catService->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">
                                    <span class="choose-file">Choose files</span>
                                    <input name="image" type="file" onchange="readURL(this);">
                                </label>
                                <div class="col-sm-10">
                                    <img id="blah" src="{{ $service->image ? asset($service -> image) : 'http://placehold.it/50x50' }}" height="50px" width="50px" alt="your image" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content" class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea name="content" class="form-control" id="content" rows="3" placeholder="Content">{{ $service -> content }}</textarea>
                                </div>
                            </div>
                            <a class="btn btn-primary" href="{{ route('service.index') }}">Cancel</a>
                            <button style="float: right" type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(50)
                    .height(50);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
@include('footer')
