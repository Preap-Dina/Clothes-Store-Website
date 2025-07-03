@extends('backend.master')
@section('content')

    @section('site-title')
        Admin | Dashboard
    @endsection
    @section('page-main-title')
        Dashboard
    @endsection

    <!-- Content wrapper -->
    <div class="container-fluid px-4 py-5">  
      <!-- Statistics Cards -->
      <div class="row mb-4">
          <!-- Total Users Card -->
          <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                  Total Users
                              </div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                                  {{ $userCount }}
                              </div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-users fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
          <!-- Total Products Card -->
          <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                  Total Products
                              </div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                                  {{ $productCount }}
                              </div>                              
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-box fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
          <!-- Total Categories Card -->
          <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                  Total Categories
                              </div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                                  {{ $cateCount }}
                              </div>                              
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-folder-open fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  
      <!-- Main Content Tabs -->
      <div class="row">
          <div class="col-12">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" id="dashboardTabs" role="tablist">
                  <li class="nav-item" role="presentation">
                      <button class="nav-link active rounded-start" id="users-tab" data-bs-toggle="tab" data-bs-target="#users" type="button" role="tab">
                          <i class="fas fa-users me-2"></i>Users Management
                      </button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" type="button" role="tab">
                          <i class="fas fa-box me-2"></i>Products Management
                      </button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="nav-link rounded-end" id="categories-tab" data-bs-toggle="tab" data-bs-target="#categories" type="button" role="tab">
                          <i class="fas fa-folder me-2"></i>Categories Management
                      </button>
                  </li>
              </ul>
  
              <!-- Tab content -->
              <div class="tab-content p-0 m-0" id="dashboardTabsContent">
                  <!-- Users Tab -->
                  <div class="tab-pane fade show active" id="users" role="tabpanel">
                      <div class="card shadow mt-3 table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>   
                                <th>Role</th>
                                <th>Member since</th>
                                <th>Profile</th>
                              </tr>
                            </thead>
                            <tbody class="tab1b-border-bottom-8">
                              @foreach ($users as $user)
                              <tr>
                                  <td><strong>{{ $user->id }}</strong></td>
                                  <td>{{ $user->name }}</td>
                                  <td>{{ $user->email }}</td>
                                  <td>
                                    @if ($user->is_admin == 1)
                                      <span class="badge bg-primary">Admin</span>
                                    @else
                                        <span class="badge bg-warning">User</span>
                                    @endif
                                  </td>
                                  <td>{{ $user->created_at }}</td>
                                  <td>
                                      <img width="40" src="{{ $user->profile }}" alt="Avatar" class="rounded-circle">
                                  </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                      </div>
                      <div class="mt-3 d-flex justify-content-end">
                            {{ $users->links() }}
                      </div>
                  </div>
  
                  <!-- Products Tab -->
                  <div class="tab-pane fade" id="products" role="tabpanel">
                      <div class="card shadow mt-3 table-responsive text-nowrap">
                        <table class="table ">
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
                            </tr>
                            </thead>
                            <tbody class="tab1b-border-bottom-8">
                              @foreach ($products as $product)
                              <tr>
                                  <td><strong>{{ $product->id }}</strong></td>
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
                              </tr>
                              @endforeach
                          </tbody>
                          </table>
                      </div>
                      <div class="mt-3 d-flex justify-content-end">
                        {{ $products->links() }}
                      </div>
                  </div>
  
                  <!-- Categories Tab -->
                  <div class="tab-pane fade" id="categories" role="tabpanel">
                      <div class="card shadow mt-3">
                        <table class="table">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Number of Product</th>
                              </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                              @foreach ($cates as $cate) 
                                <tr>
                                  <td><strong>{{ $cate['id'] }}</strong></td>
                                  <td>{{ $cate['category_name'] }}</td>
                                  <td>{{ $cate->products_count }}</td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                      </div>
                      <div class="mt-3 d-flex justify-content-end">
                            {{ $cates->links() }}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  @push('styles')
  <style>
      .border-left-primary {
          border-left: 0.25rem solid #4e73df !important;
      }
      .border-left-success {
          border-left: 0.25rem solid #1cc88a !important;
      }
      .border-left-info {
          border-left: 0.25rem solid #36b9cc !important;
      }
      .text-gray-800 {
          color: #5a5c69 !important;
      }
      .text-gray-300 {
          color: #dddfeb !important;
      }
      .avatar img, .avatar div {
          object-fit: cover;
      }
      .gap-2 {
          gap: 0.5rem;
      }
      /* Hide vertical scrollbar for entire page */
    
  </style>
  @endpush
  
  @push('scripts')
  <script>
  document.addEventListener('DOMContentLoaded', function() {
      // User search functionality
      const userSearch = document.getElementById('userSearch');
      if (userSearch) {
          userSearch.addEventListener('input', function() {
              console.log('Searching users:', this.value);
          });
      }
  
      // Product search functionality
      const productSearch = document.getElementById('productSearch');
      if (productSearch) {
          productSearch.addEventListener('input', function() {
              console.log('Searching products:', this.value);
          });
      }
  
      // Category search functionality
      const categorySearch = document.getElementById('categorySearch');
      if (categorySearch) {
          categorySearch.addEventListener('input', function() {
              console.log('Searching categories:', this.value);
          });
      }
  });
  </script>
  @endpush

@endsection
