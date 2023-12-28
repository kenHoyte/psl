<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active">Customers</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Datatable</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Customers</h4>
                                    <p class="text-muted mb-3">Customer Details
                                    </p>
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                        </tr>
                                        </thead>
    
                                        @foreach ($users as $user )
                                        <tbody>
                                            <tr>
                                                <td>{{$user->firstname}}</td>
                                                <td>{{$user->lastname}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->contact}}</td>
                                                
                                            </tr>
                                            
                                            </tbody>
                                        @endforeach
                                        
                                    </table>
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
        </div>
    </div>
</div>