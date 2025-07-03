@extends('backend.master')
@section('content')

    @section('site-title')
        Admin | Change Logo
    @endsection
    @section('page-main-title')
        Change Logo
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="/admin/change-logo-submit" method="post" enctype="multipart/form-data">
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
                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label text-danger">Recommend image size ..x.. pixels.</label>
                                    <input class="form-control" type="file" name="logo" />
                                </div>
                            </div>  
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Change Logo">
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
    
    
        
    </script>
@endsection
