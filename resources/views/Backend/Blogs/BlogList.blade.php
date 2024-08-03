@extends('Backend.Layouts.Main')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
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
        </h4>
        <div class="card">
            <div class="col-12">
                <div class="row">
                    <div
                        class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                        <h5 class="card-title mb-sm-0 me-2">Posts List</h5>
                        <div class="action-btns">
                            <a href="{{ url('dashboard') }}" class="btn btn-label-primary me-3">
                                <span class="align-middle"> Back</span>
                            </a>
                            <a href="{{ url('create-posts') }}" class="btn btn-primary">
                                Add New Post
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Post Title</th>
                            <th>Content</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($posts as $key => $item)
                            <tr>
                                <td>
                                    {{ ucfirst($item->title ?? '') }}

                                </td>
                                <td>
                                    {!! $item->content !!}
                                </td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ url('create-posts') . '/' . $item->id ?? '' }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item delete-confirm"
                                                href="{{ url('/posts-delete') . '/' . $item->id ?? '' }}"><i
                                                    class="delete-confirm bx bx-trash me-1"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
