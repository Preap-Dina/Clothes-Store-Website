@extends('backend.master')
@section('content')

    @section('site-title')
        Admin | Add Category
    @endsection
    @section('page-main-title')
        Add Category
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="/admin/add-category-submit" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        @if(session('message'))
                            <div class="alert alert-success text-dark alert-dismissible fade show custom-alert" role="alert" id="autobismissAlert">
                                {{ session('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif  
                        @if(session('error')) 
                            <div class="alert alert-danger text-dark alert-dismissible fade show custom-alert" role="alert" id="autobismissAlert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="row">
                                @if (isset($select))
                                    <input type="hidden" name="id" value="{{ $select->id }}">
                                @endif
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">Name</label>
                                    <input class="form-control" type="text" name="category_name" value="{{ old('category_name', $select->category_name ?? '') }}"/>
                                </div>
                            </div>  
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Add Category" name="btn" id="btnAdd">
                                <input type="submit" class="btn btn-success" value="Edit Category" name="btn" id="btnEdit">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        // Hide info/success alert after 5 seconds
        setTimeout(function() {
            let alert = document.getElementById('autoDismissAlert');
            if (alert) {
                let bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
                bsAlert.close();
            }
    
            let errorAlert = document.getElementById('autoDismissError');
            if (errorAlert) {
                let bsErrorAlert = bootstrap.Alert.getOrCreateInstance(errorAlert);
                bsErrorAlert.close();
            }
        }, 5000); // 5000 milliseconds = 5 seconds
    
    
        $(document).ready(function(){
            const url = window.location.href;
            if(url!='http://127.0.0.1:8000/admin/add-category'){
                $('#title').html('Edit Category');
                $('#btnAdd').hide();
                $('#btnEdit').show();
            }else{
                $('#title').html('Add Category');
                $('#btnAdd').show();
                $('#btnEdit').hide();
            }
        })
    </script>
@endsection
