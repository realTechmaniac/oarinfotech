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
                                        @if($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $error)

                                                        <li>{{ $error }}</li>

                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
        
                                        <h4 class="card-title">EDIT PRODUCT</h4>
                                        <p class="card-title-desc">Edit  the product information below</p>
                                        
                                        <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">

                                            @csrf

                                            @method('PATCH')
                                                
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Product Name</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="{{$product->product_name}}" id="example-text-input" name="product_name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Product Price</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="number" value="{{$product->product_price}}" id="example-search-input" name="product_price">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Product Discount</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="{{$product->product_discount}}" id="example-search-input" name="product_discount">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Product Colour</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="{{$product->product_colour}}" id="example-search-input" name="product_colour">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="example-month-input" class="col-md-2 col-form-label">Product Description</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="{{$product->product_description}}" id="example-month-input" name="product_description">
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                                <label for="example-date-input" class="col-md-2 col-form-label">Product Image</label>
                                                <div class="col-md-10">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" name="product_image" value="">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Product Categories</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="product_category">
                                                    <option value="laptop">Laptop</option>
                                                    <option value="phone">Phone</option>
                                                    <option value="laptop accessories">Laptop Accessories</option>
                                                    <option value="phone accessories">Phone Accessories</option>    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-primary" type="submit">Update Product</button>
                                            </div>
                                             
                                        </form>                                                                   
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

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

       