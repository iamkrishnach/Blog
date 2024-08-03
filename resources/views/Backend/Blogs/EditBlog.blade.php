@extends('Backend.Layouts.Main')
@section('content')
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
            <form method="post" action="{{url('update-product')}}" enctype='multipart/form-data'>
                @csrf
            <!-- Add Product -->
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">

                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1 mt-3">Edit Your Product</h4>
                    <p class="text-muted">Orders placed across your store</p>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-3">
                    <a href="{{url('dashboard')}}" class="btn btn-label-secondary">Discard</a>
                    <button type="submit" class="btn btn-primary" type="submit"> Publish product</button>
                </div>
            </div>

            <div class="row">
                
                <div class="col-12 col-lg-8">
                    <!-- Product Information -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Product information</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-product-name">Name</label>
                                <input type="hidden" name="product_id" value="{{$product->id ?? ''}}">
                                <input type="text" class="form-control" id="ecommerce-product-name"
                                    placeholder="Product Name" name="productname" aria-label="Product Name" value="{{$product->name ?? ''}}">
                                    @error('productname')
                                    <span style="color: red">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label class="form-label" for="ecommerce-product-sku">SKU</label>
                                    <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="SKU"
                                        name="productSku" aria-label="Product SKU" value="{{$product->sku ?? ''}}">
                                </div>
                                <div class="col"><label class="form-label"
                                        for="ecommerce-product-barcode">Barcode</label>
                                    <input type="text" class="form-control" id="ecommerce-product-barcode"
                                        placeholder="0123-4567" name="productBarcode" aria-label="Product barcode" value="{{$product->barcode ?? ''}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col"><label class="form-label" for="ecommerce-product-sku">Quantity</label>
                                    <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="Quantity"
                                        name="productQuantity" aria-label="Product Quantity" value="{{$product->product_quantity ?? ''}}" required>
                                </div>
                                <div class="col"><label class="form-label"
                                        for="ecommerce-product-Weight">Weight</label>
                                    <input type="number" class="form-control" id="ecommerce-product-Weight"
                                        placeholder="0.0" name="productWeight" aria-label="Product Weight" value="{{$product->product_weight ?? ''}}">
                                </div>
                            </div>
                            <!-- Description -->
                            <div class="w-100">
                                <label class="form-label">Description <span class="text-muted">(Optional)</span></label>
                                <div class="form-control p-0 pt-1">
                                
                                    <textarea type="text" class="ckeditor form-control input" id="myEditor" cols="35" rows="20" name="productdescription" placeholder="Enter Product description">{!! $product->description !!}</textarea>
                                    @error('productdescription')
                                    <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                   
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 card-title">Media</h5>
                            <a href="javascript:void(0);" class="fw-medium">Add media</a>
                        </div>
                        <div class="card-body">
                            
                                <div class="dz-message needsclick my-5">
                                    <p class="fs-4 note needsclick my-2">Uploads your image here</p>
                                   <input name="Productimage[]" type="file" class="note needsclick btn btn-outline-primary bg-label-primary d-inline" accept="image/png, image/jpeg,image/webp" multiple>
                                </div>
                        </div>
                    </div>
                    @if($product['AllImg'])
                    <div class="d-flex flex-wrap" id="icons-container">
                        @foreach($product['AllImg'] as $img)
                        <div class="card icon-card cursor-pointer text-center  mb-4 mx-2 ">
                            <a href="{{url('delete-product-image').'/'.$img->id ?? ''}}"><i class="fa fa-trash text-danger mb-2 pull-up"></i></a>
                          <div class="card-body"> 
                            <img src="{{asset('Cms/ProductImage').'/'.$img->image ?? ''}}" alt="Avatar" class="" width="50px;">
                          </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
               
                <div class="col-12 col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Pricing</h5>
                        </div>
                        <div class="card-body">
                           
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-product-price">Base Price</label>
                                <input type="number" class="form-control" id="ecommerce-product-price"
                                    placeholder="Price" name="productPrice" aria-label="Product price" value="{{$product->product_price ?? ''}}" required >
                                    @error('productPrice')
                                    <span style="color: red">{{ $message }}</span>
                                    @enderror
                            </div>
                            <!-- Discounted Price -->
                            <div class="mb-3">
                                <label class="form-label" for="ecommerce-product-discount-price">Discounted Price</label>
                                <input type="number" class="form-control" id="ecommerce-product-discount-price"
                                    placeholder="Discounted Price" name="productDiscountedPrice"
                                    aria-label="Product discounted price" value="{{$product->product_discount_price ?? ''}}" required>
                                    @error('productDiscountedPrice')
                                    <span style="color: red">{{ $message }}</span>
                                    @enderror
                            </div>
                           
                        </div>
                    </div>
                   
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Organize Category</h5>
                        </div>
                        <div class="card-body">
                            <!-- Vendor -->
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1" for="vendor">
                                    Outer Category
                                </label>
                                <select id="vendor" class="select2 form-select" data-placeholder="Select Outer Category" name="outercategory" required>
                                    <option value="">Select Outer Category</option>
                                    @foreach ($outerCategory as $outCat)
                                    <option value="{{$outCat->slug ?? ''}}" @if($product->outercategory == $outCat->slug) selected @endif>{{$outCat->name ?? ''}}</option>
                                    @endforeach
                                </select>
                                @error('outercategory')
                                    <span style="color: red">{{ $message }}</span>
                                    @enderror
                            </div>
                            <!-- Category -->
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1 d-flex justify-content-between align-items-center"
                                    for="category-org">
                                    <span>Category</span><a href="javascript:void(0);" class="fw-medium">Add
                                        category</a>
                                </label>
                                <select id="category-org" class="select2 form-select" data-placeholder="Select Category" name="category" required>
                                    <option value="">Select Category</option>
                                    @foreach($category as $cat)
                                    <option value="{{$cat->slug ?? ''}}" @if($product->catgeory == $cat->slug) selected @endif>{{$cat->name ?? ''}}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Collection -->
                            <div class="mb-3 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1" for="collection">Collection
                                </label>
                                <select id="collection" class="select2 form-select" data-placeholder="Collection" name="subcategory" required>
                                    <option value="">Collection</option>
                                    @foreach($subCategory as $subcat)
                                    <option value="{{$subcat->slug ?? ''}}"  @if($product->subcategory == $subcat->slug) selected @endif>{{$subcat->name ?? ''}}</option>
                                    @endforeach
                                </select>
                                @error('subcategory')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
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