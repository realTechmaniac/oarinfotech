@extends('layouts.dashboardApp')

            <!-- ============================================================== -->
            <!-- ADD PRODUCT PAGE CONTENT HERE -->
            <!-- ============================================================== -->

        @section('content')
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Registered Customer List </h4>
                                        @if(Session::has('success'))
                                            <div class="alert alert-success">

                                                {{Session::get('success')}}
                                                
                                            </div>
                                        @endif
                                        <p class="card-title-desc">The details of all customers registered are below.
                                        </p>
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Customer Name</th>
                                                <th>Customer Email</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>

                                            @foreach($clients as $key => $client)
                                            <tr>
                                             
                                             
                                                <td>{{$key+1}}</td>
                                                <td>{{$client->fullname}}</td>
                                                <td>{{$client->email}}</td>
                                          
                                                <td>
                                                    <div class="row">
                                                        

                                                            <!-- <div class="col-md-2 mr-2">

                                                                <a href="/clients/{{$client->id}}/edit" class="btn btn-primary waves-effect waves-light mr-2">Edit</a>

                                                            </div>
 -->
                                                        
                                                        
                                                        <form method="POST" action="/clients/{{$client->id}}">

                                                                @method('DELETE')

                                                                @csrf

                                                                <input type="" name="" hidden="" value="{{$client->id}}">
       
                                                               <div class="col-md-2 ml-2">
                                                                    <button type="submit" class="btn btn-danger waves-effect waves-light ml-2" type="submit" >Delete</button>
                                                                </div> 
                                                        </form>
                                                

                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-xl-3">
                                              
        
                                                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0">Center modal</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                                    Cras justo odio, dapibus ac facilisis in,
                                                                    egestas eget quam. Morbi leo risus, porta ac
                                                                    consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                    Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                                    ullamcorper nulla non metus auctor
                                                                    fringilla.</p>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                 

                <div class="col-sm-6 col-md-4 col-xl-3">
                                                
                                                <!-- sample modal content -->
                                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myModalLabel">Edit Product Info</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                           <form method="POST" action="">

                                                            @csrf
                                                                
                                                            <div class="form-group row">
                                                                <label for="example-text-input" class="col-md-2 col-form-label">Product Name</label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="text" value= "" id="example-text-input">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="example-search-input" class="col-md-2 col-form-label">Product Price</label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="number" value="" id="example-search-input">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <label for="example-month-input" class="col-md-2 col-form-label">Product Description</label>
                                                                <div class="col-md-10">
                                                                    <input class="form-control" type="text" value="" id="example-month-input">
                                                                </div>
                                                            </div>

                                                             <div class="form-group row">
                                                                <label for="example-date-input" class="col-md-2 col-form-label">Product Image</label>
                                                                <div class="col-md-10">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="customFile" value="">
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-md-2 col-form-label">Product Categories</label>
                                                                <div class="col-md-10">
                                                                    <select class="form-control">
                                                                        <option></option>
                                                                        <option>Laptop</option>
                                                                        <option>Phone</option>
                                                                        <option>Laptop Accessories</option>
                                                                        <option>Phone Accessories</option>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                            
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>

                <!-- Modal -->

                <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
    @endsection
            <!-- end main content-->

       