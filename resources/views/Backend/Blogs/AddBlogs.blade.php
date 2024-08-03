@extends('Backend.Layouts.Main')
@section('content')
    <style>
        .cke_notifications_area {
            display: none;
        }
    </style>

    <div class="container-xxl flex-grow-1 container-p-y">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert" style="color: #131111">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert" style="color: #131111">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="app-ecommerce">
            @if ($value)
                <form method="post" action="{{ url('posts') . '/' . $value->id ?? '' }}" enctype='multipart/form-data'>
                @else
                    <form method="post" action="{{ url('posts') }}" enctype='multipart/form-data'>
            @endif
            @csrf
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3">Add a new Post</h4>

                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <a href="{{ url('dashboard') }}" class="btn btn-label-secondary">Discard</a>
                    @if ($value)
                        <button type="submit" class="btn btn-primary" type="submit"> Update Post</button>
                    @else
                        <button type="submit" class="btn btn-primary" type="submit"> Publish Post</button>
                    @endif
                </div>
            </div>

            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- Product Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Post information</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-product-name">Tittle</label>
                                <input type="text" class="form-control" id="ecommerce-product-name"
                                    placeholder="Post Title" name="title" aria-label="Product Name"
                                    value="{{ $value->title ?? '' }}">
                                @error('title')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="w-100">
                                <label class="form-label">content <span class="text-muted">(Optional)</span></label>
                                <div class="form-control p-0 pt-1">

                                    <textarea type="text" class="ckeditor form-control input" id="myEditor" cols="35" rows="20" name="content"
                                        placeholder="Enter Post content">{{ $value->content ?? '' }}</textarea>
                                    @error('content')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

            </div>
            </form>
        </div>
    </div>
@endsection
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
