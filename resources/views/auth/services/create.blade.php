@extends('layouts.examples.dashboard')
@include('side-bar')
@section('service-create')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <p class="card-title font-weight-bold text-center "> You are standing at create service page </p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route(service.store) }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('footer')
