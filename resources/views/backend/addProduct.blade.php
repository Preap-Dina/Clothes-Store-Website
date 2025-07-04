@extends('backend.master')
@section('content')

    @section('site-title')
        Admin | Add Product
    @endsection
    @section('page-main-title')
        Add Product
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="/admin/add-product-submit" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        @if (Session::has('message'))
                            <p class="text-danger text-center">{{ Session::get('message') }}</p>
                        @endif
                        <div class="card-body">
                            @if ($getCate ?? '')
                                <input type="hidden" name="hidden_id" id="hidden_id" value="{{ old('hidden_id', $getCate->id) }}">
                            @endif
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Name</label>
                                    <input class="form-control" type="text" name="product_name" value="{{ old('product_name', $getCate->product_name ?? '') }}" />
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Quantity</label>
                                    <input class="form-control" type="number" min="1" name="qty" value="{{ old('qty', $getCate->qty ?? '') }}"/>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Regular Price</label>
                                    <input class="form-control" type="number" name="regular_price" value="{{ old('regular_price', $getCate->regular_price ?? '') }}"/>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Sale Price</label>
                                    <input class="form-control" type="number" name="sale_price" value="{{ old('sale_price', $getCate->sale_price ?? '') }}" />
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Available Size</label>
                                    <select name="size[]" class="form-control size-color" multiple="multiple">
                                        @if ($getCate ?? '')
                                            @foreach ($size as $item )
                                                <option value="S" @if ($item=='S') selected @endif>S</option>
                                                <option value="M"  @if ($item=='M') selected @endif>M</option>
                                                <option value="L"  @if ($item=='L') selected @endif>L</option>
                                                <option value="XL" @if ($item=='XL') selected @endif>XL</option>
                                            @endforeach    
                                        @else 
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>                                 
                                        @endif
                                    </select>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Available Color</label>
                                    <select name="color[]" class="form-control size-color" multiple="multiple">
                                        @if ($getCate ?? '')
                                            @foreach ($color as $item )
                                                <option value="Red" @if ($item=='Red') selected @endif>Red</option>
                                                <option value="Blue" @if ($item=='Blue') selected @endif>Blue</option>
                                                <option value="Grey" @if ($item=='Grey') selected @endif>Grey</option>
                                                <option value="Black" @if ($item=='Black') selected @endif>Black</option>
                                            @endforeach
                                        @else
                                            <option value="Red">Red</option>
                                            <option value="Blue">Blue</option>
                                            <option value="Grey">Grey</option>
                                            <option value="Black">Black</option>
                                        @endif                                       
                                    </select>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Category</label>
                                    <select name="cate_id" class="form-control"  class="text-danger">
                                        @foreach ($category as $item )
                                            <option value="{{ $item->id }}" @if (isset($getCate) && ($getCate->cate_id == $item->id)) selected @endif> {{ $item->category_name }}</option> 
                                        @endforeach
                                        
                                    </select>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label text-danger">Recommend image size ..x.. pixels.</label>
                                    <input class="form-control" type="file" name="image" />
                                    @if ($getCate ?? '')
                                        <input type="hidden" id="old_image" name="old_image" value="{{ old('old_image', $getCate->image) }}">                                       
                                    @endif
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-danger">Description</label>
                                    <textarea name="description" class="form-control" cols="30" rows="10">{{ old('description', $getCate->description ?? '')  }}</textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" id="btnAdd"  name="btn" class="btn btn-primary" value="Add Product">
                                <input type="submit" id="btnEdit" name="btn" class="btn btn-primary" value="Edit Product">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            const url = window.location.href;
            if(url!='http://127.0.0.1:8000/admin/add-product'){
                $('#title').html('Edit Product');
                $('#btnAdd').hide();
                $('#btnEdit').show();   
            }else{
                $('#title').html('Add Product');
                $('#btnAdd').show();
                $('#btnEdit').hide();
            }
        })

    </script>

@endsection
