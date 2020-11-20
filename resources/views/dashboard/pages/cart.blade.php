@extends('layouts.userApp')



@section('content')

	 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Cart</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Cart</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0 table-nowrap">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Product Desc</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th colspan="2">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                	@if(Session::has('cart'))
	                                                	@foreach($products as $product)
	                                                    <tr>
	                                                        <td>
	                                                            <img src="/storage/product_images/{{$product['product_image']}}" alt="product-img"
	                                                            title="product-img" class="avatar-md" />
	                                                        </td>
	                                                        <td>
	                                                            <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">{{$product['product_name']}}</a></h5>
	                                                            <p class="mb-0">Color : <span class="font-weight-medium"></span></p>
	                                                        </td>
	                                                        <td>
                          
	                                                            <span>&#8358;</span> {{$product['product_price']}}
	                                                        </td>
	                                                     
		                                                        <td>
		                                                        	<form method="POST" action="/updateqty">

	                                                        			@csrf
			                                                            <div style="width: 120px;" class="mt-5">
			                                                            	<input type="text" value="{{$product['qty']}}" name="demo_vertical">

			                                                                <input type="hidden" value="{{$product['product_id']}}" name="id">
			                                                            </div>

			                                                            <button class="btn btn-sm btn-primary mt-2" type="submit">Update Oty</button>
			                                                        </form>
		                                                        </td>
		                                                   
	                                                        <td>
	                                                             <span>&#8358;</span> {{$product['product_price'] * $product['qty']}}
	                                                        </td>
	                                                        <td>
	                                                            <a href="/removeitem/{{$product['product_id']}}" class="action-icon text-danger"> <i class="mdi mdi-trash-can font-size-18"></i></a>
	                                                        </td>
	                                                    </tr>
	                                                    @endforeach
                                                   	@endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-sm-6">
                                                <a href="ecommerce-products.html" class="btn btn-secondary">
                                                    <i class="mdi mdi-arrow-left mr-1"></i> Continue Shopping </a>
                                            </div> <!-- end col -->
                                            <div class="col-sm-6">
                                                <div class="text-sm-right mt-2 mt-sm-0">
                                                    <a href="/book" class="btn btn-success">
                                                        <i class="mdi mdi-cart-arrow-right mr-1"></i> Book</a>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">NOTE</h5>
                                        
                                        <div class="card bg-primary text-white visa-card mb-0">
                                            <div class="card-body">
                                                <p>Please  Proceed to make bookings for the selected items in your Cart.</p>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
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
                                                        <td>Discount : </td>
                                                        <td><span>&#8358;</span>1000</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th>Amount Payable :</th>
                                                        <th><span>&#8358;</span> 90000</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->





@endsection