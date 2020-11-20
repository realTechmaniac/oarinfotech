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
        
                                        <form method="POST" action="{{route('user.update')}}"> 

                                            @csrf

                                            @method('PATCH')

                                        	<div class="row">
		                                        <div class="col-md-12">
		                                        	<div class="form-group row">
					                                     <label for="example-text-input" class="col-md-2 col-form-label">Full Name</label>
			                                            <div class="col-md-10">
			                                                <input class="form-control" type="text" value="{{old('name', $user->name)}}" id="example-text-input" name="name">
			                                            </div>
		                                       		 </div>
                                        		</div>

                                        	</div>

                                        	<div class="row">
		                                        <div class="col-md-12">
		                                        	<div class="form-group row">
					                                     <label for="example-text-input" class="col-md-2 col-form-label">Email</label>
			                                            <div class="col-md-10">
			                                                <input class="form-control" type="Email" value="{{old('name', $user->email)}}" id="example-text-input" name="email">
			                                            </div>
		                                       		 </div>
                                        		</div>

                                        	</div>

                                        	<div class="row">
		                                        <div class="col-md-12">
		                                        	<div class="form-group row">
					                                     <label for="example-text-input" class="col-md-2 col-form-label">Phone Number</label>
			                                            <div class="col-md-10">
			                                                <input class="form-control" type="Number" value="{{old('name', $user->phone_number)}}" id="example-text-input">
			                                            </div>
		                                       		 </div>
                                        		</div>

                                        	</div>


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                         <label for="example-text-input" class="col-md-2 col-form-label">Password</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="Email" value="" id="example-text-input">
                                                        </div>
                                                     </div>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                         <label for="example-text-input" class="col-md-2 col-form-label">Confirm Password</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="Email" value="" id="example-text-input">
                                                        </div>
                                                     </div>
                                                </div>

                                            </div>

                                            <div class="text-center">
                                                
                                                <button class="btn btn-primary" type="submit">UPDATE PROFILE</button>
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