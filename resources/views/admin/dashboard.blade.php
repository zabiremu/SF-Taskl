@extends('Layouts.Admin.app')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="mb-3 d-flex align-items-center">
                        <div class="input-group input-group-sm">
                            <input type="text" class="border-0 form-control" id="dash-daterange">
                            <span class="text-white input-group-text bg-blue border-blue">
                                <i class="mdi mdi-calendar-range"></i>
                            </span>
                        </div>


                    </form>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    {{-- <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="border shadow avatar-lg rounded-circle bg-primary border-primary">
                                <i class="pt-3 text-center text-white material-symbols-outlined font-22 avatar-title">category</i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="mt-1 text-dark"><span data-plugin="counterup">{{$activeCategories}}</span>
                                </h3>
                                <p class="mb-1 text-muted text-truncate">Active Catgories</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="border shadow avatar-lg rounded-circle bg-success border-success">
                                <i class="pt-3 text-center text-white material-symbols-outlined font-22 avatar-title">airplanemode_inactive</i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="mt-1 text-dark"><span data-plugin="counterup">{{$inActiveCategories}}</span>
                                </h3>
                                <p class="mb-1 text-muted text-truncate">In Active Catgories</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="border shadow avatar-lg rounded-circle bg-info border-info">
                                <i class="pt-3 text-center text-white material-symbols-outlined font-22 avatar-title">post_add</i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="mt-1 text-dark"><span data-plugin="counterup">{{$activePost}}</span>
                                </h3>
                                <p class="mb-1 text-muted text-truncate">Active Post</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="border shadow avatar-lg rounded-circle bg-warning border-warning">
                                <i class="pt-3 text-center text-white material-symbols-outlined font-22 avatar-title">airplanemode_inactive</i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="mt-1 text-dark"><span data-plugin="counterup">{{$inActivePost}}</span>
                                </h3>
                                <p class="mb-1 text-muted text-truncate">In Active Post</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->
    </div> --}}
    <!-- end row-->
@endsection
