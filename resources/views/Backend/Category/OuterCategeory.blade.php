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
                <!-- Product Information -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-tile mb-0">Add OuterCategory</h5>
                    </div>
                    @if($value)
                    <form method="post" action="{{ url('add-outer-catgeory').'/'.$value->id ?? '' }}">
                      @else
                      <form method="post" action="{{ url('add-outer-catgeory') }}">
                        @endif
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-product-name">Name</label>
                                <input type="text" class="form-control" id="ecommerce-product-name"
                                    placeholder="Write Outer Category Name" name="outercategory"
                                    aria-label="Outer Category" value="{{$value->name ?? ''}}">
                                    @error('name')
                                  <span style="color: red">{{ $message }}</span>
                                  @enderror
                            </div>
                            <div class="d-flex align-content-center flex-wrap gap-3">
                                <button type="submit" class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- DataTable with Buttons -->
        <div class="card">
            <h5 class="card-header">Outer Category List</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Sr .No</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($data as $key=> $item)
                        <tr>
                            {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular
                                    Project</span></td> --}}
                            <td>{{$key+1 ?? ''}}</td>
                            <td>
                               {{$item->name ?? ''}}
                            </td>
                            <td>
                              @if($item->status == '1')
                              <a href="{{url('deactive-outer').'/'.$item->id ?? ''}}"><span class="badge bg-label-primary me-1">Active</span></a>
                            @else
                            <a href="{{url('active-outer').'/'.$item->id ?? ''}}"><span class="badge bg-label-danger me-1">Inactive</span></a>
                            @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{url('add-outer-catgeory').'/'.$item->id ?? ''}}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item delete-confirm" href="{{url('delete-outer-category').'/'.$item->id ?? ''}}"><i class="bx bx-trash me-1"></i>
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
