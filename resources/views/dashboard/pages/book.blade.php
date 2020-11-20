@extends('layouts.userApp')



@section('content')

	 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Bookings</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Book</a></li>
                                            <li class="breadcrumb-item active">Cart</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                        	
                        	 <div class="row">
	                            <div class="col-lg-12">
	                                <div class="card">
	                                    <div class="card-body">
	        
	                                        <h4 class="card-title"></h4>
	                                        <p class="card-title-desc"></p>
	        
	                                        <div class="">
	                                            <div class="alert alert-primary" role="alert">
	                                                <strong>CUSTOMER GUIDE </strong> 
	                                                <ul>
	                                                	<li>
	                                                		 All Bookings are for the duration of <strong>2 weeks</strong> after which the system will automatically cancel the order booked. Ensure payment has been been fully completed before the expiration of the time.
	                                                	</li>
	                                                	<li>
	                                                		Ensure you click the book button after uploading proof of payment.
	                                                	</li>
	                                                	<li>Your Order will be automatically recorded and validated after booking.</li>
	                                                	<li>Do well to save your  proof of payment (POF) as evidence of payment on arrival to our office. </li>
	                                                	<li>You can type amount to pay in the amount to pay space provided.</li>
	                                                </ul>
	                                                
	                                            </div>
	                                            
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
                            <!-- end col --> 
                        	</div>
                        <!-- end row -->

                        	 <div class="row">
	                            <div class="col-lg-6">
	                                <div class="card">
	                                    <div class="card-body">
	                                        <h4 class="card-title mb-3">Order Summary</h4>

	                                        <div class="table-responsive">
	                                            <table class="table mb-0">
	                                                <tbody>
	                                                    <tr>
	                                                        <td>Grand Total :</td>
	                                                        <td><span>&#8358;</span> 10000</td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td>Amount to Pay : </td>
	                                                        <td><span>&#8358;</span>1000</td>
	                                                    </tr>
	                                                    
	                                                    <tr>
	                                                        <th>Amount Payable :</th>
	                                                        <th><span>&#8358;</span> 90000</th>
	                                                    </tr>

	                                                     <tr>
	                                                        <th>Proof of Paymemt :</th>
	                                                        <th><input type="file" name=""></th>
	                                                    </tr>

	                                                    <tr>
	                                                        <th><button class="btn btn-primary">Book Order</button></th>
	                                                    </tr>
	                                                </tbody>
	                                            </table>
	                                        </div>
	                                        <!-- end table-responsive -->
	                                    </div>
                               		</div>
	                            </div>

	                            <div class="col-lg-6">
	                                 <div class="card">
	                                    <div class="card-body">
	                                        <h4 class="card-title mb-3">Company Account Details</h4>

	                                        <div class="table-responsive">
	                                            <table class="table mb-0">
	                                                <tbody>
	                                                    <tr>
	                                                        <td>Account Name :</td>
	                                                        <td>Olaore Abiodun</td>
	                                                    </tr>
	                                                    <tr>
	                                                        <td>Bank Name : </td>
	                                                        <td>United Bank of Africa</td>
	                                                    </tr>
	                                                    
	                                                    <tr>
	                                                        <th>Account No:</th>
	                                                        <th>2090557032</th>
	                                                    </tr>
	                                                     <tr>
	                                                        <th>Account Type:</th>
	                                                        <th>Savings</th>
	                                                    </tr>
	                                                </tbody>
	                                            </table>
	                                        </div>
	                                        <!-- end table-responsive -->
	                                    </div>
                               		</div>
	                            </div>
                            <!-- end col --> 
                        	</div>
                        </div> 
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->





@endsection