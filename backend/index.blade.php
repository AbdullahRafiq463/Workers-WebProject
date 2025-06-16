@extends('layouts.adminmain')

@section('title', 'Home')

@section('adminmain-container')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Visible on mobile) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- Site Name and Logo -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                    <div class="sidebar-brand-icon">
                        <img src="{{ url('frontend/assets/img/logo/logo.svg') }}" alt="Site Logo">
                    </div>
                </a>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>

                <!-- Dashboard Description -->
                <div class="alert alert-info" role="alert">
                    Welcome to the Skill Gro Dashboard! Manage and monitor your tasks easily and efficiently.
                </div>

                <!-- Dashboard Summary -->
                <div class="mb-4">
                    <p>
                        This dashboard gives you an overview of key metrics and tasks to keep you on track. You can quickly
                        access and manage users, tasks, and monitor system activity. Keep an eye on these important figures
                        to ensure everything is running smoothly.
                    </p>
                </div>

                <!-- Main Data Section -->
                <div class="row">
                    <!-- Total Users Card -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card shadow border-left-primary py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Users
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">2,345</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- New Sign-Ups Today Card -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card shadow border-left-success py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            New Sign-Ups Today
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">45</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Active Sessions Card -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card shadow border-left-warning py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Active Sessions
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">320</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-laptop fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Tasks Card -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card shadow border-left-danger py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                            Pending Tasks
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-tasks fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Page Content -->
        </div>
        <!-- End of Main Content -->
    </div>

@endsection
