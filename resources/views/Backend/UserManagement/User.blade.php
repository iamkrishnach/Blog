@extends('Backend.Layouts.Main')
@section('content')
<style>
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}
    </style>
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
                        <h5 class="card-tile mb-0">Add User</h5>
                    </div>
                    @if($value)
                    <form method="post" action="{{ url('update-user').'/'.$value->id ?? '' }}">
                      @else
                      <form method="post" action="{{ url('add-user') }}" id="myform">
                        @endif
                        @csrf
                        <div class="card-body">
                            
                              <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-tile mb-0">User information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="ecommerce-product-name">Name</label>
                                        <input type="text" class="form-control" id="ecommerce-product-name"
                                            placeholder="Write User Name" name="name" aria-label="Product Name" value="{{$value->name ?? ''}}">
                                            @error('name')
                                            <span style="color: red">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col"><label class="form-label" for="ecommerce-product-sku">Email</label>
                                            <input type="email" class="form-control" id="ecommerce-product-sku" placeholder="Email"
                                                name="email" aria-label="Product Email" value="{{$value->email ?? ''}}">
                                                @error('email')
                                                <span style="color: red; float: left;">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="col"><label class="form-label"
                                                for="ecommerce-product-barcode">Type</label>
                                                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="type" required>
                                                    <option selected>Select Type</option>
                                                    @foreach($roles as $role)
                                                    <option value="{{$role->name ?? ''}}" @if($value && $value->type == $role->name) selected @endif>{{ucfirst($role->name ?? '')}}</option>
                                                    @endforeach
                                                  </select>
                                                  @error('type')
                                                  <span style="color: red">{{ $message }}</span>
                                                  @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col"><label class="form-label" for="ecommerce-product-sku">Phone</label>
                                            <input type="tel" class="form-control" id="ecommerce-product-sku" placeholder="Phone"
                                                name="phone" aria-label="Phone" pattern="[1-9]{1}[0-9]{9}" maxlength="10" value="{{$value->phone ?? ''}}" required> 
                                                @error('phone')
                                                <span style="color: red; float: left;">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        @if(!$value)
                                        <div class="col"><label class="form-label"
                                                for="ecommerce-product-Weight">Password</label>
                                                <input id="row_password" type="password" class="form-control" name="password" placeholder="Generate Password" value="" required>
                                                @error('password')
                                                <span style="color: red; float: left;">{{ $message }}</span>
                                                @enderror
                                                <span toggle="#row_password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                <input type="button" class="button" value="Generate" onClick="randomPassword(10);" tabindex="2">                                          
                                        </div>
                                        @endif
                                    </div>        
                                </div>
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
            <h5 class="card-header">user List</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Sr .No</th>
                            
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($user as $key=> $item)
                        <tr>
                            {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular
                                    Project</span></td> --}}
                            <td>{{$key+1 ?? ''}}</td>
                            
                            <td>
                               {{ucfirst($item->name ?? '')}}
                            </td>
                            <td>
                                {{$item->email ?? ''}}
                             </td>
                            <td>
                              {{$item->phone ?? ''}}
                            </td>
                            <td>
                                {{$item->type ?? ''}}
                              </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{url('add-user').'/'.$item->id ?? ''}}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item delete-confirm" href="{{url('user-delete').'/'.$item->id ?? ''}}"><i class="bx bx-trash me-1"></i>
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
    
    <script>
        function randomPassword(length) {
            var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
            var pass = "";
            for (var x = 0; x < length; x++) {
                var i = Math.floor(Math.random() * chars.length);
                pass += chars.charAt(i);
            }
            myform.row_password.value = pass;
        }
        </script>
        
@endsection
<script src="{{ asset('Cms/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script>
    $(document).ready(function() {
        $(".toggle-password").click(function() {
            console.log('hello');
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
        input.attr("type", "text");
        
        } else {
        input.attr("type", "password");
        }
        });
       });
</script>