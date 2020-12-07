@extends('layouts.dashboardApp')




        @section('content')
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">All Users</h4>
                                       
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Sign Up date</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                @foreach($users as $key=> $user)
                                                    <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->phonenumber}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>{{$user->changeDateFormat($user->created_at)}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                    </div>
                </div>
            </div>
        @endsection