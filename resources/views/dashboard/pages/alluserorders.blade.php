@extends('layouts.dashboardApp')

      <!-- ============================================================== -->
            <!-- PAGE CONTENT HERE -->
            <!-- ============================================================== -->

        @section('content')
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">ADMIN DASHBOARD</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">All User Orders</h4>

                                       
                                        @if(session()->has('success_message'))

                                            <div class="alert alert-success">
                                                
                                                {{ session()->get('success_message')}}

                                            </div>

                                        @endif

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                    <tr>

                                                        <th>Date of Order</th>
                                                        <th>Expiration Date</th>
                                                        <th>Name of User</th>
                                                        <th>Total Amount</th>
                                                        <th>Amount to pay</th>
                                                        <th>Balance</th>
                                                        <th>Order Status</th>
                                                        <th>Action</th>
                                                        <th>View Details</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                @foreach($orders as $key => $order)

                                                <tr>
                                            
                                                        <td>
                                                            {{$order->changeDateFormat($order->created_at)}}
                                                        </td>
                                                        <td>
                                                            {{$order->showExpiration($order->created_at)}}
                                                        </td>
                                                        <td>
                                                            {{$order->name}}
                                                        </td>
                                                        <td>
                                                            <i class=" mr-1"></i>{{$order->removeFloat($order->total_amount)}}
                                                        </td>
                                                        <td>{{$order->addThousand($order->amount_to_pay)}}</td>
                                                        <td>{{$order->getOrderBalance($order->total_amount, $order->amount_to_pay)}}</td>
                                                        <td>

                                                            @if($order->is_approved === 1)
                                                             <span class="badge badge-primary">completed</span>
                                                            @else

                                                             <span class="badge badge-danger">pending</span>

                                                            @endif

                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col">
                                                                    @if($order->is_approved === 1)
                                                                    <form method="POST" action="/dissapproveorder/{{$order->id}}">

                                                                        @csrf

                                                                        @method('PATCH')

                                                                        <button class="btn btn-danger btn-sm btn-rounded" type="submit">Dissaprove</button>

                                                                    </form> 
                                                                    @else

                                                                    <form method="POST" action="/approveorder/{{$order->id}}">

                                                                        @csrf

                                                                        @method('PATCH')

                                                                        <button class="btn btn-primary btn-sm btn-rounded" type="submit">Approve</button>

                                                                    </form> 


                                                                    @endif
                                                                </div>
                                                                <div class="col">
                                                                    <form method="POST" action="/deleteorder/{{$order->id}}">
                                                                        @csrf

                                                                        @method('DELETE')
                                                                        
                                                                        <button class="btn btn-warning btn-sm btn-rounded">Delete</button>
                                                                    </form> 
                                                                </div>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-toggle="modal" data-target=".example">
                                                                View Details
                                                            </button>
                                                             <!-- Modal -->
                <div class="modal fade example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                          <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                                <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead>
                                            <tr>

                                                <th scope="col">Product</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="assets/images/product/img-7.png" alt="" class="avatar-sm">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                                        <p class="text-muted mb-0">$ 225 x 1</p>
                                                    </div>
                                                </td>
                                                <td>$ 255</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="assets/images/product/img-4.png" alt="" class="avatar-sm">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                                        <p class="text-muted mb-0">$ 145 x 1</p>
                                                    </div>
                                                </td>
                                                <td>$ 145</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                                </td>
                                                <td>
                                                    $ 400
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Shipping:</h6>
                                                </td>
                                                <td>
                                                    Free
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Total:</h6>
                                                </td>
                                                <td>
                                                    $ 400
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->
                                                        </td>
                                                                                                                    
                                                    </tr>
                                                    @endforeach
    
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

               
       
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © OarInfotech.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
   		 @endsection
            <!-- end main content-->

       


