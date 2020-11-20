@extends('layouts.userApp')


@section('content')
	
	 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">USER PROFILE</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Advanced</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row align-items-center">
                            <div class=" offset-lg-2  col-lg-8  offset-lg-2">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title"></h4>
                                        <p class="card-title-desc">User Profile Details</p>
        
                                        <form> 

                                        	<div class="row">
		                                        <div class="col-md-12">
		                                        	<div class="form-group row">
					                                     <label for="example-text-input" class="col-md-2 col-form-label">Full Name</label>
			                                            <div class="col-md-10">
			                                                <input class="form-control" type="text" value="Ayomide Adebayo" id="example-text-input">
			                                            </div>
		                                       		 </div>
                                        		</div>

                                        	</div>

                                        	<div class="row">
		                                        <div class="col-md-12">
		                                        	<div class="form-group row">
					                                     <label for="example-text-input" class="col-md-2 col-form-label">Email</label>
			                                            <div class="col-md-10">
			                                                <input class="form-control" type="Email" value="ayomide.adebayo19@gmail.com" id="example-text-input">
			                                            </div>
		                                       		 </div>
                                        		</div>

                                        	</div>

                                        	<div class="row">
		                                        <div class="col-md-12">
		                                        	<div class="form-group row">
					                                     <label for="example-text-input" class="col-md-2 col-form-label">Phone Number</label>
			                                            <div class="col-md-10">
			                                                <input class="form-control" type="Number" value="08066490082" id="example-text-input">
			                                            </div>
		                                       		 </div>
                                        		</div>

                                        	</div>


                                        	<div class="row">
		                                        <div class="col-md-12">
		                                        	<div class="form-group row">
					                                     <label for="example-text-input" class="col-md-2 col-form-label">Password</label>
			                                            <div class="col-md-10">
			                                                <button type="button" class="btn btn-primary waves-effect waves-light">
				                                                <i class="bx bx-lock-alt  font-size-16 align-middle mr-2"></i> Reset Password
				                                            </button>
			                                            </div>
		                                       		 </div>
                                        		</div>

                                        	</div>
                                      
                                        </form>
        
                                    </div>
                                </div>
                                <!-- end select2 -->
                            </div>


                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->




@endsection