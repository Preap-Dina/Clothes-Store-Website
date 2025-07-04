@extends('backend.master')
@section('content')
<div class="content-wrapper">
    @section('site-title')
      Admin | List Product
    @endsection
    @section('page-main-title')
      List Product
    @endsection

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Qty</th>   
                  <th>Regular Price</th>
                  <th>Sale Price</th>
                  <th>Color</th>
                  <th>Size</th>
                  <th>Views</th>
                  <th>Category</th>
                  <th>Admin</th>
                  <th>Image</th>
                  <th>Actions</th>
              </tr>
              </thead>
              <tbody class="tab1b-border-bottom-8">
                @foreach ($products as $product)
                <tr>
                    <td> <strong>{{ $product->id }}</strong></td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->regular_price }}</td>
                    <td>{{ $product->sale_price }}</td>
                    <td>{{ $product->color }}</td>
                    <td>{{ $product->size }}</td>
                    <td>{{ $product->view }}</td>
                    <td>{{ $product->category }}</td>
                    <td>
                        <img width="40" src="{{ $product->profile }}" alt="Avatar" class="rounded-circle">
                    </td>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <img width="40" src="{{ $product->image }}" alt="Avatar" class="rounded-circle">
                        </ul>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('editProduct', $product->id) }}" ><i class="bx bx-edit-alt me-2"></i> Edit</a>
                                <a class="dropdown-item remove-post-key" data-value="{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal" href="javascript:void(0)"><i class="bx bx-trash me-2"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
          </div>
        </div>
        <div class="mt-3 d-flex justify-content-end">
          {{ $products->links() }}
        </div>

        <div class="mt-3">
          <form action="{{ route('deleteProduct') }}" method="post">
            @csrf
            <div class="modal fade" id="deleteModal" tabindex="-1" style="display: none;" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Are you sure to remove this post?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" id="remove-val" name="remove_id">
                    <button type="submit" class="btn btn-danger">Confirm</button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </div>
          </form>
        </div>
        
      <hr class="my-5" />
    </div>
    <!-- / Content -->
  </div>
</div>

@endsection
