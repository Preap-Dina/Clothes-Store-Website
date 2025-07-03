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
                                  1,247
                              </div>
                              <div class="text-xs text-success mt-1">
                                  <i class="fas fa-arrow-up"></i> +12% from last month
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
                                  856
                              </div>
                              <div class="text-xs text-success mt-1">
                                  <i class="fas fa-arrow-up"></i> +8% from last month
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
                                  24
                              </div>
                              <div class="text-xs text-info mt-1">
                                  <i class="fas fa-plus"></i> +2 new this month
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
                      <button class="nav-link active" id="users-tab" data-bs-toggle="tab" data-bs-target="#users" type="button" role="tab">
                          <i class="fas fa-users me-2"></i>Users Management
                      </button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" type="button" role="tab">
                          <i class="fas fa-box me-2"></i>Products Management
                      </button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" id="categories-tab" data-bs-toggle="tab" data-bs-target="#categories" type="button" role="tab">
                          <i class="fas fa-folder me-2"></i>Categories Management
                      </button>
                  </li>
              </ul>
  
              <!-- Tab content -->
              <div class="tab-content" id="dashboardTabsContent">
                  <!-- Users Tab -->
                  <div class="tab-pane fade show active" id="users" role="tabpanel">
                      <div class="card shadow mt-3">
                          <div class="card-header py-3 d-flex justify-content-between align-items-center">
                              <h6 class="m-0 font-weight-bold text-primary">Users Management</h6>
                              <div class="d-flex gap-2">
                                  <div class="input-group" style="width: 250px;">
                                      <input type="text" class="form-control" placeholder="Search users..." id="userSearch">
                                      <button class="btn btn-outline-secondary" type="button">
                                          <i class="fas fa-search"></i>
                                      </button>
                                  </div>
                                  <button class="btn btn-primary">
                                      <i class="fas fa-plus me-1"></i>Add User
                                  </button>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-bordered" width="100%" cellspacing="0">
                                      <thead>
                                          <tr>
                                              <th>User</th>
                                              <th>Email</th>
                                              <th>Role</th>
                                              <th>Status</th>
                                              <th>Join Date</th>
                                              <th>Last Login</th>
                                              <th>Orders</th>
                                              <th>Actions</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="avatar me-3">
                                                          <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white" 
                                                               style="width: 40px; height: 40px;">
                                                              JD
                                                          </div>
                                                      </div>
                                                      <div>
                                                          <div class="font-weight-bold">John Doe</div>
                                                          <small class="text-muted">ID: #001</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>john@example.com</td>
                                              <td><span class="badge bg-danger">Admin</span></td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>Jan 15, 2024</td>
                                              <td>
                                                  <small class="text-success">
                                                      <i class="fas fa-circle me-1" style="font-size: 8px;"></i>
                                                      2 hours ago
                                                  </small>
                                              </td>
                                              <td><span class="badge bg-info">45 orders</span></td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Profile</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-shopping-cart me-2"></i>View Orders</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit User</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-ban me-2"></i>Suspend User</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete User</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="avatar me-3">
                                                          <div class="bg-success rounded-circle d-flex align-items-center justify-content-center text-white" 
                                                               style="width: 40px; height: 40px;">
                                                              JS
                                                          </div>
                                                      </div>
                                                      <div>
                                                          <div class="font-weight-bold">Jane Smith</div>
                                                          <small class="text-muted">ID: #002</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>jane@example.com</td>
                                              <td><span class="badge bg-secondary">User</span></td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>Feb 20, 2024</td>
                                              <td>
                                                  <small class="text-success">
                                                      <i class="fas fa-circle me-1" style="font-size: 8px;"></i>
                                                      Online now
                                                  </small>
                                              </td>
                                              <td><span class="badge bg-info">23 orders</span></td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Profile</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-shopping-cart me-2"></i>View Orders</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit User</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-ban me-2"></i>Suspend User</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete User</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="avatar me-3">
                                                          <div class="bg-info rounded-circle d-flex align-items-center justify-content-center text-white" 
                                                               style="width: 40px; height: 40px;">
                                                              MJ
                                                          </div>
                                                      </div>
                                                      <div>
                                                          <div class="font-weight-bold">Mike Johnson</div>
                                                          <small class="text-muted">ID: #003</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>mike@example.com</td>
                                              <td><span class="badge bg-secondary">User</span></td>
                                              <td><span class="badge bg-secondary">Inactive</span></td>
                                              <td>Jan 08, 2024</td>
                                              <td>
                                                  <small class="text-muted">
                                                      <i class="fas fa-circle me-1" style="font-size: 8px;"></i>
                                                      3 days ago
                                                  </small>
                                              </td>
                                              <td><span class="badge bg-info">12 orders</span></td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Profile</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-shopping-cart me-2"></i>View Orders</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit User</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-check me-2"></i>Activate User</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete User</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="avatar me-3">
                                                          <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center text-white" 
                                                               style="width: 40px; height: 40px;">
                                                              SW
                                                          </div>
                                                      </div>
                                                      <div>
                                                          <div class="font-weight-bold">Sarah Wilson</div>
                                                          <small class="text-muted">ID: #004</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>sarah@example.com</td>
                                              <td><span class="badge bg-warning">Moderator</span></td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>Mar 10, 2024</td>
                                              <td>
                                                  <small class="text-success">
                                                      <i class="fas fa-circle me-1" style="font-size: 8px;"></i>
                                                      1 hour ago
                                                  </small>
                                              </td>
                                              <td><span class="badge bg-info">8 orders</span></td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Profile</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-shopping-cart me-2"></i>View Orders</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit User</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-ban me-2"></i>Suspend User</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete User</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="avatar me-3">
                                                          <div class="bg-dark rounded-circle d-flex align-items-center justify-content-center text-white" 
                                                               style="width: 40px; height: 40px;">
                                                              DB
                                                          </div>
                                                      </div>
                                                      <div>
                                                          <div class="font-weight-bold">David Brown</div>
                                                          <small class="text-muted">ID: #005</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>david@example.com</td>
                                              <td><span class="badge bg-secondary">User</span></td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>Feb 28, 2024</td>
                                              <td>
                                                  <small class="text-muted">
                                                      <i class="fas fa-circle me-1" style="font-size: 8px;"></i>
                                                      1 day ago
                                                  </small>
                                              </td>
                                              <td><span class="badge bg-info">31 orders</span></td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Profile</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-shopping-cart me-2"></i>View Orders</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit User</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-ban me-2"></i>Suspend User</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete User</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              
                              <!-- Pagination -->
                              <nav aria-label="Page navigation">
                                  <ul class="pagination justify-content-center">
                                      <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                                      </li>
                                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item">
                                          <a class="page-link" href="#">Next</a>
                                      </li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                  </div>
  
                  <!-- Products Tab -->
                  <div class="tab-pane fade" id="products" role="tabpanel">
                      <div class="card shadow mt-3">
                          <div class="card-header py-3 d-flex justify-content-between align-items-center">
                              <h6 class="m-0 font-weight-bold text-primary">Products Management</h6>
                              <div class="d-flex gap-2">
                                  <div class="input-group" style="width: 250px;">
                                      <input type="text" class="form-control" placeholder="Search products..." id="productSearch">
                                      <button class="btn btn-outline-secondary" type="button">
                                          <i class="fas fa-search"></i>
                                      </button>
                                  </div>
                                  <button class="btn btn-success">
                                      <i class="fas fa-download me-1"></i>Export
                                  </button>
                                  <button class="btn btn-primary">
                                      <i class="fas fa-plus me-1"></i>Add Product
                                  </button>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-bordered" width="100%" cellspacing="0">
                                      <thead>
                                          <tr>
                                              <th>Product</th>
                                              <th>Category</th>
                                              <th>Price</th>
                                              <th>Stock</th>
                                              <th>Status</th>
                                              <th>Sales</th>
                                              <th>Created Date</th>
                                              <th>Actions</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <img src="https://via.placeholder.com/50x50" alt="Product" class="rounded me-3" width="50" height="50">
                                                      <div>
                                                          <div class="font-weight-bold">iPhone 15 Pro</div>
                                                          <small class="text-muted">SKU: IPH15PRO001</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="badge bg-primary">Electronics</span></td>
                                              <td class="font-weight-bold">$999.00</td>
                                              <td>
                                                  <span class="badge bg-success">In Stock</span>
                                                  <small class="d-block text-muted">45 units</small>
                                              </td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>
                                                  <div class="font-weight-bold">234 sold</div>
                                                  <small class="text-success">+15% this month</small>
                                              </td>
                                              <td>Dec 15, 2023</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Product</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-chart-line me-2"></i>View Analytics</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit Product</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Duplicate</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete Product</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <img src="https://via.placeholder.com/50x50" alt="Product" class="rounded me-3" width="50" height="50">
                                                      <div>
                                                          <div class="font-weight-bold">Nike Air Max 270</div>
                                                          <small class="text-muted">SKU: NIKE270001</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="badge bg-info">Clothing</span></td>
                                              <td class="font-weight-bold">$150.00</td>
                                              <td>
                                                  <span class="badge bg-warning">Low Stock</span>
                                                  <small class="d-block text-muted">8 units</small>
                                              </td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>
                                                  <div class="font-weight-bold">89 sold</div>
                                                  <small class="text-success">+8% this month</small>
                                              </td>
                                              <td>Nov 22, 2023</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Product</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-chart-line me-2"></i>View Analytics</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit Product</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Duplicate</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete Product</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <img src="https://via.placeholder.com/50x50" alt="Product" class="rounded me-3" width="50" height="50">
                                                      <div>
                                                          <div class="font-weight-bold">Samsung 4K Smart TV</div>
                                                          <small class="text-muted">SKU: SAM4KTV001</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="badge bg-primary">Electronics</span></td>
                                              <td class="font-weight-bold">$799.00</td>
                                              <td>
                                                  <span class="badge bg-success">In Stock</span>
                                                  <small class="d-block text-muted">23 units</small>
                                              </td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>
                                                  <div class="font-weight-bold">156 sold</div>
                                                  <small class="text-success">+22% this month</small>
                                              </td>
                                              <td>Oct 10, 2023</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Product</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-chart-line me-2"></i>View Analytics</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit Product</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Duplicate</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete Product</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <img src="https://via.placeholder.com/50x50" alt="Product" class="rounded me-3" width="50" height="50">
                                                      <div>
                                                          <div class="font-weight-bold">Garden Tool Set</div>
                                                          <small class="text-muted">SKU: GARDEN001</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="badge bg-success">Home & Garden</span></td>
                                              <td class="font-weight-bold">$89.99</td>
                                              <td>
                                                  <span class="badge bg-danger">Out of Stock</span>
                                                  <small class="d-block text-muted">0 units</small>
                                              </td>
                                              <td><span class="badge bg-secondary">Inactive</span></td>
                                              <td>
                                                  <div class="font-weight-bold">67 sold</div>
                                                  <small class="text-danger">-5% this month</small>
                                              </td>
                                              <td>Sep 05, 2023</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Product</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-chart-line me-2"></i>View Analytics</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit Product</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-plus me-2"></i>Restock</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete Product</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <img src="https://via.placeholder.com/50x50" alt="Product" class="rounded me-3" width="50" height="50">
                                                      <div>
                                                          <div class="font-weight-bold">Basketball</div>
                                                          <small class="text-muted">SKU: BBALL001</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td><span class="badge bg-warning">Sports</span></td>
                                              <td class="font-weight-bold">$29.99</td>
                                              <td>
                                                  <span class="badge bg-success">In Stock</span>
                                                  <small class="d-block text-muted">156 units</small>
                                              </td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>
                                                  <div class="font-weight-bold">312 sold</div>
                                                  <small class="text-success">+35% this month</small>
                                              </td>
                                              <td>Aug 18, 2023</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Product</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-chart-line me-2"></i>View Analytics</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit Product</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Duplicate</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete Product</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              
                              <!-- Pagination -->
                              <nav aria-label="Page navigation">
                                  <ul class="pagination justify-content-center">
                                      <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                                      </li>
                                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item">
                                          <a class="page-link" href="#">Next</a>
                                      </li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                  </div>
  
                  <!-- Categories Tab -->
                  <div class="tab-pane fade" id="categories" role="tabpanel">
                      <div class="card shadow mt-3">
                          <div class="card-header py-3 d-flex justify-content-between align-items-center">
                              <h6 class="m-0 font-weight-bold text-primary">Categories Management</h6>
                              <div class="d-flex gap-2">
                                  <div class="input-group" style="width: 250px;">
                                      <input type="text" class="form-control" placeholder="Search categories..." id="categorySearch">
                                      <button class="btn btn-outline-secondary" type="button">
                                          <i class="fas fa-search"></i>
                                      </button>
                                  </div>
                                  <button class="btn btn-primary">
                                      <i class="fas fa-plus me-1"></i>Add Category
                                  </button>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-bordered" width="100%" cellspacing="0">
                                      <thead>
                                          <tr>
                                              <th>Category</th>
                                              <th>Description</th>
                                              <th>Products</th>
                                              <th>Status</th>
                                              <th>Revenue</th>
                                              <th>Created Date</th>
                                              <th>Actions</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="bg-primary rounded me-3 d-flex align-items-center justify-content-center text-white" 
                                                           style="width: 40px; height: 40px;">
                                                          <i class="fas fa-laptop"></i>
                                                      </div>
                                                      <div>
                                                          <div class="font-weight-bold">Electronics</div>
                                                          <small class="text-muted">ID: #CAT001</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div style="max-width: 200px;" class="text-truncate">
                                                      Electronic devices and gadgets including smartphones, laptops, and accessories
                                                  </div>
                                              </td>
                                              <td>
                                                  <span class="badge bg-info">156 products</span>
                                                  <small class="d-block text-success">+12 this month</small>
                                              </td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>
                                                  <div class="font-weight-bold text-success">$234,567</div>
                                                  <small class="text-success">+18% this month</small>
                                              </td>
                                              <td>Jan 10, 2024</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Products</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-chart-bar me-2"></i>View Analytics</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit Category</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-plus me-2"></i>Add Subcategory</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete Category</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="bg-info rounded me-3 d-flex align-items-center justify-content-center text-white" 
                                                           style="width: 40px; height: 40px;">
                                                          <i class="fas fa-tshirt"></i>
                                                      </div>
                                                      <div>
                                                          <div class="font-weight-bold">Clothing</div>
                                                          <small class="text-muted">ID: #CAT002</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div style="max-width: 200px;" class="text-truncate">
                                                      Fashion and apparel items for men, women, and children
                                                  </div>
                                              </td>
                                              <td>
                                                  <span class="badge bg-info">243 products</span>
                                                  <small class="d-block text-success">+8 this month</small>
                                              </td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>
                                                  <div class="font-weight-bold text-success">$189,432</div>
                                                  <small class="text-success">+25% this month</small>
                                              </td>
                                              <td>Jan 12, 2024</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Products</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-chart-bar me-2"></i>View Analytics</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit Category</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-plus me-2"></i>Add Subcategory</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete Category</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="bg-success rounded me-3 d-flex align-items-center justify-content-center text-white" 
                                                           style="width: 40px; height: 40px;">
                                                          <i class="fas fa-home"></i>
                                                      </div>
                                                      <div>
                                                          <div class="font-weight-bold">Home & Garden</div>
                                                          <small class="text-muted">ID: #CAT003</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div style="max-width: 200px;" class="text-truncate">
                                                      Home improvement and garden supplies for indoor and outdoor use
                                                  </div>
                                              </td>
                                              <td>
                                                  <span class="badge bg-info">89 products</span>
                                                  <small class="d-block text-success">+5 this month</small>
                                              </td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>
                                                  <div class="font-weight-bold text-success">$67,890</div>
                                                  <small class="text-success">+12% this month</small>
                                              </td>
                                              <td>Jan 15, 2024</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Products</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-chart-bar me-2"></i>View Analytics</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit Category</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-plus me-2"></i>Add Subcategory</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete Category</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="bg-warning rounded me-3 d-flex align-items-center justify-content-center text-white" 
                                                           style="width: 40px; height: 40px;">
                                                          <i class="fas fa-football-ball"></i>
                                                      </div>
                                                      <div>
                                                          <div class="font-weight-bold">Sports</div>
                                                          <small class="text-muted">ID: #CAT004</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div style="max-width: 200px;" class="text-truncate">
                                                      Sports equipment and accessories for various activities
                                                  </div>
                                              </td>
                                              <td>
                                                  <span class="badge bg-info">67 products</span>
                                                  <small class="d-block text-success">+3 this month</small>
                                              </td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>
                                                  <div class="font-weight-bold text-success">$45,123</div>
                                                  <small class="text-success">+8% this month</small>
                                              </td>
                                              <td>Jan 18, 2024</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Products</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-chart-bar me-2"></i>View Analytics</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit Category</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-plus me-2"></i>Add Subcategory</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete Category</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="bg-dark rounded me-3 d-flex align-items-center justify-content-center text-white" 
                                                           style="width: 40px; height: 40px;">
                                                          <i class="fas fa-book"></i>
                                                      </div>
                                                      <div>
                                                          <div class="font-weight-bold">Books</div>
                                                          <small class="text-muted">ID: #CAT005</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div style="max-width: 200px;" class="text-truncate">
                                                      Books and educational materials for all ages
                                                  </div>
                                              </td>
                                              <td>
                                                  <span class="badge bg-info">134 products</span>
                                                  <small class="d-block text-danger">-2 this month</small>
                                              </td>
                                              <td><span class="badge bg-secondary">Inactive</span></td>
                                              <td>
                                                  <div class="font-weight-bold text-muted">$23,456</div>
                                                  <small class="text-danger">-15% this month</small>
                                              </td>
                                              <td>Jan 20, 2024</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Products</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-chart-bar me-2"></i>View Analytics</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit Category</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-check me-2"></i>Activate Category</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete Category</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <div class="d-flex align-items-center">
                                                      <div class="bg-danger rounded me-3 d-flex align-items-center justify-content-center text-white" 
                                                           style="width: 40px; height: 40px;">
                                                          <i class="fas fa-gamepad"></i>
                                                      </div>
                                                      <div>
                                                          <div class="font-weight-bold">Toys</div>
                                                          <small class="text-muted">ID: #CAT006</small>
                                                      </div>
                                                  </div>
                                              </td>
                                              <td>
                                                  <div style="max-width: 200px;" class="text-truncate">
                                                      Children's toys and games for entertainment and education
                                                  </div>
                                              </td>
                                              <td>
                                                  <span class="badge bg-info">78 products</span>
                                                  <small class="d-block text-success">+15 this month</small>
                                              </td>
                                              <td><span class="badge bg-success">Active</span></td>
                                              <td>
                                                  <div class="font-weight-bold text-success">$56,789</div>
                                                  <small class="text-success">+28% this month</small>
                                              </td>
                                              <td>Jan 25, 2024</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" 
                                                              type="button" data-bs-toggle="dropdown">
                                                          <i class="fas fa-ellipsis-v"></i>
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Products</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-chart-bar me-2"></i>View Analytics</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit Category</a></li>
                                                          <li><a class="dropdown-item" href="#"><i class="fas fa-plus me-2"></i>Add Subcategory</a></li>
                                                          <li><hr class="dropdown-divider"></li>
                                                          <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Delete Category</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              
                              <!-- Pagination -->
                              <nav aria-label="Page navigation">
                                  <ul class="pagination justify-content-center">
                                      <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                                      </li>
                                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item">
                                          <a class="page-link" href="#">Next</a>
                                      </li>
                                  </ul>
                              </nav>
                          </div>
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
