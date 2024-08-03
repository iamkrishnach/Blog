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
                        <h5 class="card-tile mb-0">Add Sub Category</h5>
                    </div>
                    @if($value)
                    <form method="post" action="{{ url('add-sub-category').'/'.$value->id ?? '' }}">
                      @else
                      <form method="post" action="{{ url('add-sub-category') }}">
                        @endif
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Outer Category</label>
                                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="outercategory" required>
                                  <option selected>Select OuterCategory</option>
                                  @foreach($outer as $outCat)
                                  <option value="{{$outCat->id ?? ''}}" @if($value && $value->outer_cat_id == $outCat->id ?? '') selected @endif>{{ucfirst($outCat->name ?? '')}}</option>
                                  @endforeach
                                </select>
                                @error('outercategory')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label"> Category</label>
                                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="category" required>
                                  <option selected>Category</option>
                                  @foreach($category as $Cat)
                                  <option value="{{$Cat->id ?? ''}}" @if($value && $value->category_id == $Cat->id ?? '') selected @endif>{{ucfirst($Cat->name ?? '')}}</option>
                                  @endforeach
                                </select>
                                @error('category')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                              </div>
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-product-name">Sub Category Name</label>
                                <input type="text" class="form-control" id="ecommerce-product-name"
                                    placeholder="Write Category Name" name="subcategory"
                                    aria-label="subCategory" value="{{$value->name ?? ''}}" required>
                                    @error('subcategory')
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
            <h5 class="card-header">Sub Category List</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Sr .No</th>
                            <th>OuterCategory</th>
                            <th>Category</th>
                            <th>Sub Category Name</th>
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
                                {{ucfirst($item->outercatgeory->name ?? '')}}
                             </td>
                             <td>
                                {{ucfirst($item->catgeory->name ?? '')}}
                             </td>
                            <td>
                               {{ucfirst($item->name ?? '')}}
                            </td>
                            <td>
                              @if($item->status == '1')
                              <a href="{{url('deactive-sub-category').'/'.$item->id ?? ''}}"><span class="badge bg-label-primary me-1">Active</span></a>
                            @else
                            <a href="{{url('active-sub-category').'/'.$item->id ?? ''}}"><span class="badge bg-label-danger me-1">Inactive</span></a>
                            @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{url('add-sub-category').'/'.$item->id ?? ''}}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item delete-confirm" href="{{url('delete-sub-category').'/'.$item->id ?? ''}}"><i class="bx bx-trash me-1"></i>
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
